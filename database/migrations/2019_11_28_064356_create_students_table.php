<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    // akan dijalankan ketika melakukan migration
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama'); //parameter nya ada dua, nama tabel, ukuran.yang wajib satu yaitu nama tabel saja
            $table->char('nrp',9)->unique(); // tidak boleh kurang / lebih dari 9
            $table->string('email')->unique();
            $table->string('jurusan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    // akan dijalankan ketika melakukan rollback
    {
        Schema::dropIfExists('students');
    }
}
