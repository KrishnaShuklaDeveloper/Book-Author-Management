<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'isbn' => '978-0747532743',
                'published_year' => 1997,
                'description' => 'First book in the Harry Potter series about a young wizard\'s adventures at Hogwarts School of Witchcraft and Wizardry.',
                'author_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => '1984',
                'isbn' => '978-0451524935',
                'published_year' => 1949,
                'description' => 'Dystopian social science fiction novel about the totalitarian regime of Big Brother.',
                'author_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'isbn' => '978-0446310789',
                'published_year' => 1960,
                'description' => 'Novel about racial injustice in the American South, seen through the eyes of young Scout Finch.',
                'author_id' => 3,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => 'The Great Gatsby',
                'isbn' => '978-0743273565',
                'published_year' => 1925,
                'description' => 'Novel about the American Dream, wealth, and the Roaring Twenties.',
                'author_id' => 4,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'isbn' => '978-0141439518',
                'published_year' => 1813,
                'description' => 'Romantic novel of manners about the Bennet family and Mr. Darcy.',
                'author_id' => 5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'isbn' => '978-0747538486',
                'published_year' => 1998,
                'description' => 'Second book in the Harry Potter series where Harry returns to Hogwarts and faces the mystery of the Chamber of Secrets.',
                'author_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'title' => 'Animal Farm',
                'isbn' => '978-0451526342',
                'published_year' => 1945,
                'description' => 'Allegorical novella about farm animals who revolt against their human farmer.',
                'author_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}

