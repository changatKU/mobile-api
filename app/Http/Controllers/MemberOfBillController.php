<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\MemberOfBill;
use App\Models\User;
use Illuminate\Http\Request;

class MemberOfBillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MemberOfBill::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bill = new Bill();
        $bill->owner_id = User::where('phone', $request->get('phone'))->get('id')->first()->id;
        $bill->topic = $request->get('topic');
        $bill->amount = (double)$request->get('amount');
        $bill->bank_account = $request->get('bank_account');
        $bill->bank_account_number = $request->get('bank_account_number');
        $bill->save();

        foreach($request->get('members') as $member){
            $member_bill = new MemberOfBill();
            $member_bill->bill_id = $bill->id;
            $member_bill->user_id = User::where('phone', $member['phone'])->get('id')->first()->id;
            $member_bill->amount = $member['amount'];
            $member_bill->save();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return MemberOfBill::where('user_id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
