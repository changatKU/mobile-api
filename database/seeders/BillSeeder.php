<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\MemberOfBill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bill = new Bill();
        $bill->owner_id = 1;
        $bill->topic = "Suki Teenoi";
        $bill->amount = random_int(100,5000);
        $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
        $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
        $bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 2)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Suki Teenoi";
        $member_of_bill->amount = $bill->amount / 5;
        $member_of_bill->user_id = 2;
        $member_of_bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 3)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Suki Teenoi";
        $member_of_bill->amount = $bill->amount / 5;
        $member_of_bill->user_id = 3;
        $member_of_bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 4)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Suki Teenoi";
        $member_of_bill->amount = $bill->amount / 5;
        $member_of_bill->user_id = 4;
        $member_of_bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 5)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Suki Teenoi";
        $member_of_bill->amount = $bill->amount / 5;
        $member_of_bill->user_id = 5;
        $member_of_bill->save();

        $bill = new Bill();
        $bill->owner_id = 1;
        $bill->topic = "Kuma Shabu";
        $bill->amount = random_int(100,5000);
        $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
        $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
        $bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 2)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Kuma Shabu";
        $member_of_bill->amount = $bill->amount / 4;
        $member_of_bill->user_id = 2;
        $member_of_bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 3)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Kuma Shabu";
        $member_of_bill->amount = $bill->amount / 4;
        $member_of_bill->user_id = 3;
        $member_of_bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 4)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->topic = "Kuma Shabu";
        $member_of_bill->amount = $bill->amount / 4;
        $member_of_bill->user_id = 4;
        $member_of_bill->save();

        $bill = new Bill();
        $bill->owner_id = 2;
        $bill->topic = "Sushi";
        $bill->amount = random_int(100,5000);
        $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
        $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
        $bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 2)->get('name')->first()->name;
        $member_of_bill->topic = "Sushi";
        $member_of_bill->amount = $bill->amount / 2;
        $member_of_bill->user_id = 1;
        $member_of_bill->save();

        $bill = new Bill();
        $bill->owner_id = 3;
        $bill->topic = "Roll";
        $bill->amount = random_int(100,5000);
        $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
        $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
        $bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 3)->get('name')->first()->name;
        $member_of_bill->topic = "Roll";
        $member_of_bill->amount = $bill->amount / 2;
        $member_of_bill->user_id = 1;
        $member_of_bill->save();

        $bill = new Bill();
        $bill->owner_id = 4;
        $bill->topic = "KFC";
        $bill->amount = random_int(100,5000);
        $bill->bank_account = ['SCB', 'KTB', 'Prompay'][rand(0,2)];
        $bill->bank_account_number = sprintf('%010d', random_int(0,9999999999));
        $bill->save();

        $member_of_bill = new MemberOfBill();
        $member_of_bill->bill_id = $bill->id;
        $member_of_bill->user_name = User::where('id', 1)->get('name')->first()->name;
        $member_of_bill->owner_name = User::where('id', 4)->get('name')->first()->name;
        $member_of_bill->topic = "KFC";
        $member_of_bill->amount = $bill->amount / 2;
        $member_of_bill->user_id = 1;
        $member_of_bill->save();
    }
}
