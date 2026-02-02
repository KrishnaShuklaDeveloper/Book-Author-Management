<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Change published_year from YEAR type to INTEGER to support older dates
        DB::statement('ALTER TABLE books MODIFY published_year INT(4) UNSIGNED');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE books MODIFY published_year YEAR');
    }
};

