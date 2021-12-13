<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "index"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/index.php');
        echo view('/templates/footer.php');
    }

    public function produk()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "produk"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/produk.php');
        echo view('/templates/footer.php');
    }

    public function about()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "about"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/about.php');
        echo view('/templates/footer.php');
    }

    public function contact()
    {
        $data = [
            "judul_halaman" => "haysyg",
            "halaman_aktif" => "contact"
        ];
        echo view('/templates/header.php', $data);
        echo view('/templates/contact.php');
        echo view('/templates/footer.php');
    }
}
