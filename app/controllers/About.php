<?php

class About {
    public function index($nama = 'daffa akhdan fadhillah', $pekerjaan = 'mahasiswa') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}