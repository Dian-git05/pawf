<?php

namespace App\Models;

// INI YANG BENAR: Kita harus memanggil core model milik CodeIgniter
use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // Pastikan author masuk jika kamu menggunakannya di database
    protected $allowedFields    = ['title', 'content', 'status', 'author', 'slug'];

    // Jika kamu ingin menggunakan fitur otomatis created_at & updated_at
    protected $useTimestamps    = false; 
}