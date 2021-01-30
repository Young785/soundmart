<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
            for ($i = 0; $i < 100; $i++){
                User::insert([
                'name' => $faker->name,
                'fullname' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'dob' => Carbon::now("Y", "m", "d"),
                'phone' => "08061163188",
                'password' => Hash::make("password"), // password
                'gender' => "1",
                "secrete_id" => rand($min = 0, $max = 10000000000),
                'status' => "0",
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
