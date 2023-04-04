<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Nattapong";
        $user->phone = "0844057805";
        $user->password = "1234";
        $user->save();

        $user = new User();
        $user->name = "Khemaporn";
        $user->phone = "0951982475";
        $user->password = "1234";
        $user->save();

        $user = new User();
        $user->name = "Maneesorn";
        $user->phone = "0845974561";
        $user->password = "1234";
        $user->save();

        $user = new User();
        $user->name = "Nathaporn";
        $user->phone = "0846795222";
        $user->password = "1234";
        $user->save();

        $user = new User();
        $user->name = "Ramita";
        $user->phone = "0975641111";
        $user->password = "1234";
        $user->save();
    }
}
