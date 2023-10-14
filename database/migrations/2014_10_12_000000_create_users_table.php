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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('lastname');
            $table->string('email', 150)->unique();
            $table->enum('type',['Admin','Cliente','Anunciante']);
            $table->string('photo')->nullable();
            $table->date('lastLogin')->nullable();
            $table->enum('recive',['Y','N'])->default('Y');

            //relaciones
            $table->foreignId('region_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
