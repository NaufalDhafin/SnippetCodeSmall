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
    function no_acak($min,$max){
        $no_acak = rand($min,$max);
        echo $no_acak;
    }

    // Tanggal
    function tanggal($format){
        date_default_timezone_set("Asia/Jakarta");
        global $tanggal;
        $tanggal = date("$format");
        echo $tanggal;
    }
?>