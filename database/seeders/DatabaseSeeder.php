<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::updateOrCreate([
                "id" => 1
            ]
            ,
            [
                "name" => "admin",
                "email" => "admin@admin.con",
                "email_verified_at" => Carbon::now(),
                "password" => Hash::make("123456789"),
            ]
        );
    }
}
