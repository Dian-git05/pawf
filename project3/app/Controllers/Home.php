<?php

namespace App\Controllers;

// Tambahkan ini agar fungsi auth (seperti logged_in()) bisa dikenali
use Myth\Auth\Config\Auth as AuthConfig;

class Home extends BaseController
{
    // Halaman Utama
    public function index()
    {
        return view('home');
    }

    // Halaman About
    public function about()
    {
        return view('about');
    }

    // Halaman Contact
    public function contact()
    {
        return view('contact');
    }

    // Halaman FAQs
    public function faqs()
    {
        return view('faqs');
    }
}