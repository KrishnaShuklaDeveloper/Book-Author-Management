<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'J.K. Rowling',
                'bio' => 'British author, best known for the Harry Potter series',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'George Orwell',
                'bio' => 'English novelist, essayist, critic and journalist',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Harper Lee',
                'bio' => 'American novelist widely known for To Kill a Mockingbird',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'F. Scott Fitzgerald',
                'bio' => 'American novelist, essayist, screenwriter and short-story writer',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'name' => 'Jane Austen',
                'bio' => 'English novelist known for romantic fiction',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

