<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Following;
use App\User;
use App\Author;
use App\Book;
use App\Review;
use App\Comment;
use App\Likes;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(FollowSeeder::class);
        factory(App\Shelf::class,4)->create();
        $this->call(reviewSeeder::class);
        //factory(App\Review::class,1)->create();
        /*factory(App\User::class, 50)->create();
        factory(App\Author::class, 20)->create();
        factory(App\Book::class, 50)->create();
        factory(App\Review::class,50)->create();
        factory(App\Genre::class, 20)->create();
        factory(App\Comment::class,30)->create();
        factory(App\Likes::class,30)->create();
        factory(App\Shelf::class,20)->create();
        factory(App\Following::class,15)->create();*/

    }
}

