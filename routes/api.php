<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {return view('ReadAholic');});

Route::group(["middleware" => "guest"] , function(){       // This middleware is only for guests
    Route::post('signup', "UserController@signUp");
    Route::post('login', "UserController@logIn");
    Route::get('checktoken', "UserController@checkToken");
    Route::post('forgotpassword', "UserController@forgotPassword");
    Route::post('resetpassword', "UserController@resetPassword");
});

Route::group(["middleware" => "authorized"], function(){     // This middleware is only for users

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //                                   Sofyan sectoin (please don't remove them)                                      //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::post('changepassword', "UserController@changePassword");                 //auth
    Route::get('changename', "UserController@changeName");                          //auth
    Route::post('delete', "UserController@delete");                                 //auth
    Route::delete('logout', "UserController@logOut");                               //auth
    Route::get('showsetting', "UserController@showSetting");                        //auth
    Route::get('changecountry', "UserController@changeCountry");                    //auth
    Route::get('changecity', "UserController@changeCity");                          //auth
    Route::get('changebirthday', "UserController@changeBirthday");                  //auth
    Route::get('whocanseemybirthday', "UserController@whoCanSeeMyBirthday");        //auth
    Route::get('whocanseemycountry', "UserController@whoCanSeeMyCountry");          //auth
    Route::get('whocanseemycity', "UserController@whoCanSeeMyCity");                //auth
    Route::post('changeimage', "UserController@changeImage");                       //auth
    Route::get('verify', "UserController@verify");
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //                                        Ahmed Waleed Section                                     //
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::post('reviwes/create','ReviewController@createReview');                              //auth
    Route::delete('reviwes/delete', 'ReviewController@destroy');                                //auth
    Route::post('makeComment','ActivitiesController@makeComment');                              //auth
    Route::delete('deleteComment','ActivitiesController@deleteComment');                        //auth
    Route::post('LikeOrUnLike','ActivitiesController@makeLikeOrUnlike');                        //auth
    Route::get('listComments','ActivitiesController@listComments');                             //auth
    Route::get('listLikes','ActivitiesController@listLikes');                             //auth
    Route::get('showShelf','ShelfController@showShelf');                                        //auth
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////                               Mohamed Mokhtar section                                                                          ////////                                                                                                             ////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::post('follow','FollowingController@followUser');                                     //auth
    Route::delete('unfollow','FollowingController@unfollowUser');                               //auth
    Route::get('followers','FollowingController@userFollowers');                                //auth
    Route::get('following','FollowingController@userFollowing');                                //auth
    Route::post('shelf/add_book', 'ShelfController@addBook');                        // auth
    Route::delete('shelf/remove_book', 'ShelfController@removeBook');                // auth
    Route::get('user_reviews', 'ReviewController@listUserReviews');
    Route::get('shelf','ShelfController@getBooksOnShelf');                           // auth
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////                               Nour section                                                              ////////                                                                                                             ////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('updates','ActivitiesController@followingUpdates');                    //auth
    Route::get('notification','ActivitiesController@notifications');                  //auth
    Route::post('mark_notification','ActivitiesController@markNotification');        //auth
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////                               Ahmed Hamdy section                                                              ////////                                                                                                             ////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get( 'reviwes/books', 'ReviewController@getReviewsByTitle');
    Route::get('showReviewOfBook','ReviewController@showReviewOfBook');
    Route::get('showReviewsForABook','ReviewController@showReviewsForBook');
    Route::get('books/genre', 'BookController@showByGenre');
    Route::get('Books/book_title','BookController@getBookByTitle');
    Route::get('Books/book_ISBN','BookController@getBookByIsbn');
    Route::get('Books/book_Authorname','BookController@getBookByAuthorName');
    Route::get( 'books/show', 'BookController@show');
    Route::get('shelf/getbook', 'ShelfController@getBooksOnShelf');                         // auth
    Route::get('showReviewForBookForUser','ReviewController@showReviewForBookForUser');     // Non auth
    Route::get( 'reviwes/books', 'ReviewController@getReviewsByTitle');                     // Non auth
});
Route::get('checktokenverify', "UserController@checkTokenVerify");
Route::get('books/genre', 'BookController@showByGenre');                         // Non auth
Route::get('Books/book_title','BookController@getBookByTitle');                  // Non auth
Route::get('Books/book_ISBN','BookController@getBookByIsbn');                    // Non auth
Route::get('Books/book_Authorname','BookController@getBookByAuthorName');        // Non auth
Route::get( 'books/show', 'BookController@show');

Route::get( 'test', 'UserController@test');                                // Non auth

Route::get('showProfile', "UserController@showProfile");                                    

Route::get('search_by_name', 'UserController@searchByName');
Route::get('search_by_username', 'UserController@searchByUsername');
Route::get('search_by_name_username', 'UserController@searchByNameOrUsername');



////////////////////////////////////////////////////////////////////////////////
///////////////      Deprecated       /////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
/*
    //Book Section
    //Route::get('books','BookController@index');
    // Shelf Section
    //Route::get('shlef/list', 'ShelfController@index');                               // auth
    //Route::get('shelf/shelfname', 'ShelfController@show');                           // auth
    //Route::get('shelf/shelfid','ShelfController@userShelves');                       // auth
    //Route::get( 'reviwes/users/books', 'ReviewController@getReviewsForListOfBooks');        // Non auth
    //Route::get('listReviewOfUser','ReviewController@listReviewOfUser');
      Route::get('reviwes','ReviewController@recentReviews');
      Route::get('listReviewOfUser','ReviewController@listReviewOfUser');
      Route::get( 'books/show', 'BookController@show');
      Route::get('showReviewsForABook','ReviewController@showReviewsForBook');

    //Route::get('reviwes','ReviewController@recentReviews');
    //Route::get( 'reviwes/users/books', 'ReviewController@getReviewsForListOfBooks');

*/






