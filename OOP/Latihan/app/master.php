<?php

class CalonPolisi
{
    public $nama = "";
    public $jenis_kelamin = "";
    public $tgl_lahir = 0;
    public $kota_asal = "";
    public $tinggi_badan = 0;
    public $berat_badan = 0;
    public $nilai_test_fisik = 0;
    public $nilai_test_teori = 0;

    // --constructor= fungsi ynag digunakan untuk membangun clas tersendiri
    // dipanggil saat membuat object 

    function __construct($NAMA, $JENIS_KELAMIN, $TGL_LAHIR, $KOTA_ASAL, $TINGGI_BADAN, $BERAT_BADAN, $NILAI_TEST_FISIK, $NILAI_TEST_TEORI)
    {
        $this->nama = $NAMA;
        $this->jenis_kelamin = $JENIS_KELAMIN;
        $this->tgl_lahir = $TGL_LAHIR;
        $this->kota_asal = $KOTA_ASAL;
        $this->tinggi_badan = $TINGGI_BADAN;
        $this->berat_badan = $BERAT_BADAN;
        $this->nilai_test_fisik = $NILAI_TEST_FISIK;
        $this->nilai_test_teori = $NILAI_TEST_TEORI;
    }

    function keterangan($N_fisik, $N_teori)
    {
        if ($this->nilai_test_fisik > $N_fisik && $this->nilai_test_teori > $N_teori) {
            echo "Anda Lulus" . PHP_EOL;
        } else {
            echo "Anda Gagal, Coba daftar dilain waktu" . PHP_EOL;
        }
    }

    function identitas()
    {
        echo "Nama " . $this->nama . PHP_EOL;
        echo "jenis Kelamin : " . $this->jenis_kelamin . PHP_EOL;
        echo "tanggal lahir " . $this->tgl_lahir . PHP_EOL;
        echo "Kota Asal : " . $this->kota_asal . PHP_EOL;
        echo "Tinggi Badan " . $this->tinggi_badan . PHP_EOL;
        echo "Berat Badan : " . $this->berat_badan . PHP_EOL;
        echo "Nilai Fisik " . $this->nilai_test_fisik . PHP_EOL;
        echo "Nilai Teori : " . $this->nilai_test_teori . PHP_EOL;
    }

    function __destruct()
    {
        echo "Test";
    }
}
