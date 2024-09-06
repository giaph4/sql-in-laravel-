<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TacGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tac_gias')->delete();

        DB::table('tac_gias')->truncate();

        DB::table('tac_gias')->insert([
            ['id' => 1, 'ten_tac_gia' => 'Nguyễn Nhật Ánh', 'lien_lac' => 'nguyennhatanh@example.com'],
            ['id' => 2, 'ten_tac_gia' => 'J.K. Rowling', 'lien_lac' => 'jkrowling@example.com'],
            ['id' => 3, 'ten_tac_gia' => 'Haruki Murakami', 'lien_lac' => 'harukimurakami@example.com'],
            ['id' => 4, 'ten_tac_gia' => 'Paulo Coelho', 'lien_lac' => 'paulocoelho@example.com'],
            ['id' => 5, 'ten_tac_gia' => 'George Orwell', 'lien_lac' => 'georgeorwell@example.com'],
            ['id' => 6, 'ten_tac_gia' => 'Stephen King', 'lien_lac' => 'stephenking@example.com'],
            ['id' => 7, 'ten_tac_gia' => 'Dan Brown', 'lien_lac' => 'danbrown@example.com'],
            ['id' => 8, 'ten_tac_gia' => 'Margaret Atwood', 'lien_lac' => 'margaretatwood@example.com'],
            ['id' => 9, 'ten_tac_gia' => 'Gabriel García Márquez', 'lien_lac' => 'gabrielgarcia@example.com'],
            ['id' => 10, 'ten_tac_gia' => 'Jane Austen', 'lien_lac' => 'janeausten@example.com'],
            ['id' => 11, 'ten_tac_gia' => 'Ernest Hemingway', 'lien_lac' => 'ernesthemingway@example.com'],
            ['id' => 12, 'ten_tac_gia' => 'F. Scott Fitzgerald', 'lien_lac' => 'fscottfitzgerald@example.com'],
            ['id' => 13, 'ten_tac_gia' => 'Agatha Christie', 'lien_lac' => 'agathachristie@example.com'],
            ['id' => 14, 'ten_tac_gia' => 'Isaac Asimov', 'lien_lac' => 'isaacasimov@example.com'],
            ['id' => 15, 'ten_tac_gia' => 'Ray Bradbury', 'lien_lac' => 'raybradbury@example.com'],
            ['id' => 16, 'ten_tac_gia' => 'J.R.R. Tolkien', 'lien_lac' => 'jrrtolkien@example.com'],
            ['id' => 17, 'ten_tac_gia' => 'Homer', 'lien_lac' => 'homer@example.com'],
            ['id' => 18, 'ten_tac_gia' => 'Leo Tolstoy', 'lien_lac' => 'leotolstoy@example.com'],
            ['id' => 19, 'ten_tac_gia' => 'Virginia Woolf', 'lien_lac' => 'virginiawoolf@example.com'],
            ['id' => 20, 'ten_tac_gia' => 'Mark Twain', 'lien_lac' => 'marktwain@example.com'],
        ]);
    }
}
