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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->string('bill_code', 50)->comment('mã hóa đơn');
            $table->date('order_date')->comment('ngày đặt hàng');
            $table->integer('total_quantity')->comment('tổng số lượng');
            $table->integer('total_money')->comment('tổng tiền');
            $table->integer('status')->comment('trạng thái');
            $table->integer('payment_methods')->comment('phương thức thanh toán');
            $table->text('note');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Thêm khóa ngoại
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
