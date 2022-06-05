<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); //menambahkan kolom order_id
            $table->foreign('order_id')->references('id')->on('order'); //menambahkan foreign key di kolom order_id
            $table->unsignedBigInteger('user_id'); //menambahkan kolom user_id
            $table->foreign('user_id')->references('id')->on('users'); //menambahkan foreign key di kolom user_id
            $table->integer('pembayaran');
            $table->string('bukti_pembayaran', 50);
            $table->unsignedBigInteger('pengiriman_id'); //menambahkan kolom pengiriman_id
            $table->foreign('pengiriman_id')->references('id')->on('pengiriman'); //menambahkan foreign key di kolom pengiriman_id
            $table->timestamp('tanggal_pembayaran');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
