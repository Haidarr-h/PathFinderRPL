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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('nama Admin');
            $table->string('shift');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); 
        });

        

        Schema::create('kursus', function (Blueprint $table) {
            $table->integer('id_course');
            $table->unique('id_course');
            $table->string('course_name');
            $table->integer('rating');
            $table->string('durasi');
            $table->string('topik');
            $table->rememberToken();
            $table->timestamps(); // Created_at and updated_at columns
        });

        Schema::create('internship', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('perusahaan');
            $table->string('role');
            $table->integer('lamaWaktu');
            $table->rememberToken();
            $table->timestamps(); 
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('course');
        Schema::dropIfExists('internship');

    }
};
