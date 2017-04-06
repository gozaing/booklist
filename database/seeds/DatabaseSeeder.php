<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Booklist;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // EloquentのマスアサインメントをOFFにします
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('BooklistTableSeeder');

        // EloquentのマスアサインメントをONにします
        Model::reguard();
    }
}

class BooklistTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('booklists')->delete();

        $faker = Faker::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            Booklist::create([
                'user_id'    => 1,
//                'title'      => $faker->sentences(),
                'title'      => 'aaa',
                'created_at' => Carbon::today(),
            ]);
        }
    }
}
