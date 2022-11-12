<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new CreateNewUser())->create([
            'name' => 'Test User',
            'email' => 'user@technique.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    }
}
