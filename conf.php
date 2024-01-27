<?php 
    error_reporting(0);

// DBMS

    // KONEKSI KE DATABASE
    function confdb($host,$user,$pass,$ndb){
        global $conf;
        $conf = mysqli_connect($host,$user,$pass,$ndb);
    }
    
    // READ
    function readall($tabel){
        global $conf;
        global $read;
        $read = $conf->query("SELECT * FROM $tabel");
    }
    function read($tabel,$primary,$id){
        global $conf;
        global $read;
        $read = $conf->query("SELECT * FROM $tabel WHERE $primary = $id");
    }

    // DELETE
    function delete($tabel,$primary,$id){
        global $conf;
        $read = $conf->query("DELETE FROM $tabel WHERE $primary = $id");
    }




// TOOLS

    // NOMOR ACAK
    function no_acak($min=1,$max=999999){
        $no_acak = rand($min,$max);
    }

    // Tanggal
    function tanggal($format = "d/m/Y|H:i:s"){
        date_default_timezone_set("Asia/Jakarta");
        global $tanggal;
        $tanggal = date($format);
    }

    // Buat Folder
    function folder($exe="buat",$nama="default"){
        if($exe == "buat"){
            mkdir("$nama");
        }
        elseif($exe == "hapus"){
            rmdir("$nama");
        }
    }



// PERHITUNGAN

    // TAMBAH
    function tambah($a,$b){
        global $tambah;
        $tambah = $a + $b;
    }
    
    // KURANG
    function kurang($a,$b){
        global $kurang;
        $kurang = $a - $b;
    }
    
    // KURANG
    function kali($a,$b){
        global $kali;
        $kali = $a * $b;
    }
    
    // KURANG
    function bagi($a,$b){
        global $bagi;
        $bagi = $a / $b;
    }
?>