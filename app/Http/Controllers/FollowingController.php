<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Following;
use Illuminate\Http\Request;

/**
 * @group Following
 */
class FollowingController extends Controller
{

    /**
     * Follow User
     *
     * @authenticated
     *
     * [ Start following a user ]
     * @bodyParam user_id int required Goodreads user id of user to follow.
     * STATUS CODE : 201 // following created successfully [ 1st response ]
     * @response {
     *  "status" : 1
     * }
     * STATUS CODE : 404 // user_id not found [ 2nd response ]
     * @response {
     *  "status" : 0
     * }
     * STATUS CODE : 400 // something gone error [ 3rd response ]
     * @response {
     *  "status" : 0
     * }
     */
    public function followUser(Request $request)
    {
        /**
         * Checking user_id existance
         */
        $followerId = $this->ID;
        $userId = $request->user_id;
        User::findOrFail($userId);
        /**
         * Validation Segment to check if there is dublication error could happen
         * Creating Following Relation
         */
        if (Following::where('follower_id', $followerId)->where('user_id', $userId)->count() == 1) {
            $response = array('status' =>0);
            $responseCode = 400;
        } else {
            $following = new Following();
            $following->follower_id = $followerId;
            $following->user_id = $userId;
            $following->save();
            User::find($userId)->increment('followersCount');
            User::find($followerId)->increment('followingCount');
            $response = array('status' =>1) ;
            $responseCode = 201;
        }
        return response()->json($response, $responseCode);
    }
    /**
     * Unfollow User
     * Stop following a user
     * [ 1 : successfull request ,
     * 0 : unsuccessfull request ]
     *
     * @authenticated
     *
     * @bodyParam user_id int required Goodreads user id of user to stop following.
     * @response {
     *  "status" : 1
     * }
     */
    public function unfollowUser(Request $request)
    {
        $userId = $request->user_id;
        $followerId = $this->ID;
        $following = Following::where('user_id', $userId)->where('follower_id', $followerId);
        $status = $following->delete();
        if($status == 1)
        {
            User::find($userId)->decrement('followersCount');
            User::find($followerId)->decrement('followingCount');
        }
        return response()->json(array("status"=>$status));
    }

    /**
     * Followers List
     * gets the followers of a user.
     *
     * @authenticated
     *
     *
     * @bodyParam page int optional 1-N (default 1) returns 30 items per page .
     * @bodyParam user_id int optional to get the followers list of a specific user (default authenticated user)
     */
    public function userFollowers(Request $request)
    {
        /**
        * Checking is the optional paramater is sent or not
        * Case it is not sent : then we list the authenticated-user `s followers
        */
        $userId = $request->has(['user_id']) ? $request->user_id : $this->ID ;

        /**
         *  if the user doesn`t exist .
         */
        User::findOrFail($userId);

        /**
         * Viewing page index . its divided into pages each page contain 30 (max) items.
         */
        $page = $request->has(['page']) ? $request->page : 1;

        /**
         * Page paramater is used to get sub-list of the followers
         * eg: page = 1 it will retreive only 30 followers of the user per page
         */
        $listSize = 30;
        $skipCount = ($page - 1) * $listSize ;

        /**
         * Query
         */
        $data =
            DB::select( 'SELECT id , name , imageLink , smallImageUrl ,
                        email , link ,followersCount
                        FROM followings F,users U WHERE user_id = ?
                        AND F.follower_id = U.id limit ? offset ?', [$userId,$listSize,$skipCount]);

        /**
         * Response paramaters and return
         */
        $_start = sizeof($data) == 0 ? 0 : ($page - 1) * $listSize + 1 ;
        $_end = sizeof($data) == 0 ? 0: ( $page - 1) * $listSize + sizeof($data) ;
        return response()->json(['followers'=>$data,'_start'=>$_start,'_end'=>$_end,'_total'=>sizeof($data)],200);
    }

    /**
     * Following List
     * gets the following list of a user .
     *
     * @authenticated
     *
     * @bodyParam page int optional 1-N (default 1) returns 30 items per page .
     * @bodyParam user_id int optional to get the following list of a specific user (default authenticated user)
     */
    public function userFollowing(Request $request)
    {
        /**
        * Checking is the optional paramater is sent or not
        * Case it is not sent : then we list the authenticated-user `s followers
        */
        $userId = $request->has(['user_id']) ? $request->user_id : 3; //Auth::id();

        /**
         *  if the user doesn`t exist .
         */
        User::findOrFail($userId);

        /**
         * Viewing page index . its divided into pages each page contain 30 (max) items.
         */
        $page = $request->has(['page']) ? $request->page : 1 ;

        /**
         * Page paramater is used to get sub-list of the followers
         * eg: page = 1 it will retreive only 30 followers of the user per page
         */
        $listSize = 30;
        $skipCount = ($page - 1) * $listSize;

        /**
         * Eloquent query
         */
        $data =
            DB::select( 'SELECT id , name , imageLink , smallImageUrl ,
                        email , link ,followersCount
                        FROM followings F,users U WHERE follower_id = ?
                        AND F.user_id = U.id LIMIT ? OFFSET ?', [$userId,$listSize,$skipCount]);
        /**
         * Response paramaters and return
         */
        $_start = sizeof($data) == 0 ? 0 : ($page - 1) * $listSize + 1;
        $_end = sizeof($data) == 0 ? 0: ($page  - 1) * $listSize + sizeof($data) ;
        return response()->json(['following'=>$data,'_start'=>$_start,'_end'=>$_end,'_total'=>sizeof($data)],200);
    }
}