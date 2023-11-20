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
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('nama Admin');
            $table->string('shift');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); // Created_at and updated_at columns
        });

        Schema::create('career', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            // $table->string('id_career');
            $table->string('karir');
            $table->string('tahap');
            $table->rememberToken();
            $table->timestamps(); // Created_at and updated_at columns
        });

        Schema::create('course', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->integer('rating');
            $table->integer('durasi');
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
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};