<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $abd = User::factory()->create([
            'username' => 'abdulator',
            'email' => 'abd.alrhmn19992@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Admin::create([
            'first_name' => 'abdul rhman',
            'last_name' => 'souda',
            'user_id' => $abd->id,
        ]);

        Admin::factory(5)->create();
        Company::factory(5)->create();
        Employee::factory(5)->create();
        Post::factory(30)->create();

    }
}
