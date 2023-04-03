<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Bill;
use App\Models\MemberOfBill;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 1;$i <= 10;$i++){
            $user = new User();
            $user->name = fake()->name();
            $user->phone = sprintf('%010d', random_int(0,9999999999));
            $user->password = Str::random(6);
            $user->save();
        }

        for($i = 1;$i <= 5;$i++){
            $post = new Post();
            $post->topic = fake()->name();
            $post->location = fake()->name();
            $post->description = Str::random(50);
            $post->date = fake()->date();
            $post->time = fake()->time();
            $post->user_id = random_int(1,10);
            $post->save();
        }

        for($i = 1;$i <= 5;$i++){
            $bill = new Bill();
            $bill->owner_id = $i;
            $bill->topic = Str::random(10);
            $bill->amount = random_int(100,5000);
            $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
            $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
            $bill->save();
        }

        for($i = 1;$i <= 5;$i++){
            $bill = Bill::find($i);
            for($j = 1;$j <= 3;$j++){
                $member_of_bill = new MemberOfBill();
                $member_of_bill->bill_id = $bill->id;
                $member_of_bill->amount = $bill->amount / 4;
                $user_id = random_int(1,10);
                while($user_id == $bill->owner_id){
                    $user_id = random_int(1,10);
                }
                $member_of_bill->user_id = $user_id;
                $member_of_bill->save();
            }
        }

    }
}
