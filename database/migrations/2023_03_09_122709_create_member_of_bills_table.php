<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member_of_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Bill::class);
            $table->foreignIdFor(\App\Models\User::class);
            $table->double('amount');
            $table->integer('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_of_bills');
    }
};
