<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_input', function (Blueprint $table) {
            $table->BigInteger('id');
            $table->datetime('ngaynhap');
            $table->string('mahoadon');
            $table->string('tensanpham');
            $table->integer('soluong');
            $table->integer('dongia');
            $table->integer('tongtien')->nullable();
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
        Schema::dropIfExists('invoice_input');
    }
}
