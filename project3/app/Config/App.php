<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class App extends BaseConfig
{
    // URL dasar aplikasi Anda
    public string $baseURL = 'http://localhost:8080/';

    // Hostname tambahan jika ada
    public array $allowedHostnames = [];

    // Dikosongkan agar URL lebih cantik tanpa index.php
    public string $indexPage = ''; 

    // Protokol URI standar
    public string $uriProtocol = 'REQUEST_URI';

    // Karakter yang diizinkan dalam URL
    public string $permittedURIChars = 'a-z 0-9~%.:_\-';

    // Bahasa standar
    public string $defaultLocale = 'en';

    // Negosiasi bahasa otomatis
    public bool $negotiateLocale = false;

    // Daftar bahasa yang didukung
    public array $supportedLocales = ['en'];

    // Timezone diatur ke Asia/Jakarta agar waktu blog sesuai
    public string $appTimezone = 'Asia/Jakarta';

    // Encoding standar
    public string $charset = 'UTF-8';

    // WAJIB ADA: Menentukan apakah harus menggunakan HTTPS
    public bool $forceGlobalSecureRequests = false; 

    // Pengaturan Proxy jika diperlukan
    public array $proxyIPs = [];

    // Pengaturan Content Security Policy
    public bool $CSPEnabled = false;
}