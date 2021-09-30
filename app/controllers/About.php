<?php

class About {
    public function index($nama = 'daffa akhdan fadhillah', $pekerjaan = 'mahasiswa', $umur = 20) {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan . saya berumur $umur tahun";
    }
    public function page() {
        echo 'About/page';
    }
}