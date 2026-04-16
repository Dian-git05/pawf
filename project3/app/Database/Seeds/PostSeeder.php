<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $posts_data = [
        [
            'title' => 'Mulai Nyobain Codeigniter',
            'slug' => 'codeigniter-starter',
            'content' => 'Langkah awal masuk ke dunia framework! Di artikel ini, aku berbagi pengalaman pertama kali menginstal CodeIgniter 4, memahami struktur foldernya yang rapi, dan kenapa framework ini jadi pilihan favorit buat pengembang PHP. Ternyata nggak seserem yang dibayangkan, lho.'
        ],
        [
            'title' => 'Cara Mudah Buat Hello World',
            'slug' => 'hello-world',
            'content' => 'Belajar bahasa pemrograman apa pun pasti mulainya dari sini. Aku bakal kasih panduan step-by-step buat nampilin teks sederhana "Hello World" di browser lewat controller dan view. Dasar yang penting banget sebelum kita lanjut ke logika yang lebih rumit!'
        ],
        [
            'title' => 'Meetup Komunitas Kelas Koding',
            'slug' => 'meetup-comunity',
            'content' => 'Serunya belajar bareng! Catatan singkat dari acara kumpul-kumpul bareng teman-teman pegiat koding. Di sini kami bahas banyak hal, mulai dari tips debugging yang cepat sampai tren teknologi terbaru. Belajar sendiri itu baik, tapi belajar bareng komunitas itu jauh lebih asyik!'
        ]
        ];
        foreach($posts_data as $data){
        // insert semua data ke tabel posts
        $this->db->table('posts')->insert($data);
        }

    }
}