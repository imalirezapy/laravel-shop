<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navitems', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->unique();
            $table->text('link');
            $table->boolean('dropdown-menu')->default(false);
            $table->boolean('dropdown-item')->default(true);
            $table->boolean('sm')->default(false);
            $table->boolean('lg')->default(true);
            $table->integer('order')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
