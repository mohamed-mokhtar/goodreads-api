<?php

use Illuminate\Database\Seeder;
use App\Following;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        //factory(App\Following::class,10)-> create();
        $i = 1;
        while ($i <= 100) {
            factory(App\Following::class)->create(
                [
                    'user_id' => 1,
                    'follower_id' => $i,
                ]
            );
            $i++;
        }
    }
}
/**
    * $i = 2;
    *
    *    while ($i <= 250) {
    *        factory(App\Following::class)->create(
    *            [
    *                'user_id' => $i,
    *                'follower_id' => 1,
    *            ]
    *        );
    *        $i++;
    *    }
*/
