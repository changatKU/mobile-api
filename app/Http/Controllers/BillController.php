<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\MemberOfBill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bill::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Bill::where('id', $id)->get();
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
        $bill = Bill::find($id);
        $member_of_bills = MemberOfBill::where('bill_id', $bill->$id)->get();
        foreach($member_of_bills as $member){
            $member->delete();
        }
        $bill->delete();
    }
}
