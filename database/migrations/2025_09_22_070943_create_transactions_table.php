<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('game_id')->constrained()->onDelete('cascade');
            $table->string('transaction_id')->unique();
            $table->integer('amount');
            $table->decimal('price', 12, 2);
            $table->enum('status', ['pending', 'success', 'failed', 'processing'])->default('pending');
            $table->string('player_id');
            $table->string('server_id')->nullable();
            $table->string('payment_method');
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index(['user_id', 'status']);
            $table->index('transaction_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};