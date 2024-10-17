<?php
// Kelas dataconnect digunakan untuk menghubungkan ke database
class dataconnect {
    // Mendefinisikan properti yang diperlukan untuk koneksi ke database
    private $servername = "localhost";
    private $username = "root"; 
    private $password = ""; 
    private $dbname = "pweb_tugas2";

    // Konstruktor untuk menginisialisasi koneksi ke database
    public function __construct(){
        // Membuat objek mysqli untuk koneksi ke database
        $db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $db;  // Mengembalikan objek koneksi
    }
}

// Kelas dosen merupakan turunan dari dataconnect dan menampilkan tabel nilai_perbaikan dengan informasi terbatas
class dosen extends dataconnect {
    // Fungsi untuk menampilkan tabel nilai perbaikan
    public function tblnilai_perbaikan($table) {
        // Mengambil data dari tabel nilai_perbaikan dengan query SQL
        $data = parent::__construct()->query("SELECT * FROM nilai_perbaikan");

        ?>
        <!-- Membuat tabel HTML untuk menampilkan data nilai perbaikan dengan informasi terbatas -->
        <table class="table table-bordered table-striped">
         <tr>
            <td><b><center>Keterangan</center></b></td>
            <td><b><center>Id_Mahasiswa</center></b></td>
         </tr>
         
        <?php
         // Looping untuk menampilkan setiap baris data nilai perbaikan
         foreach ($data as $a) {
        ?>
            <tr>
                <td><?= $a['keterangan'] ?> </td>
                <td><?= $a['id_mahasiswa'] ?> </td>
            </tr>
        <?php 
        } 
        ?>
        </table>
        <?php    
    }
}

// Kelas admin merupakan turunan dari dataconnect dan menampilkan tabel nilai_perbaikan dengan informasi lebih lengkap
class admin extends dataconnect {
    // Fungsi untuk menampilkan tabel nilai perbaikan
    public function tblnilai_perbaikan($table) {
        // Mengambil data dari tabel nilai_perbaikan dengan query SQL
        $data = parent::__construct()->query("SELECT * FROM nilai_perbaikan");

        ?>
        <!-- Membuat tabel HTML untuk menampilkan data nilai perbaikan dengan informasi lebih lengkap -->
        <table class="table table-bordered table-striped">
        <tr>
            <td><b><center>Tanggal Perbaikan</center></b></td>
            <td><b><center>Keterangan</center></b></td>
            <td><b><center>Id_Mahasiswa</center></b></td>
        </tr>
        
        <?php
        // Looping untuk menampilkan setiap baris data nilai perbaikan
        foreach ($data as $a) {
        ?>
            <tr>
                <td><?= $a['tgl_perbaikan'] ?> </td>
                <td><?= $a['keterangan'] ?> </td>
                <td><?= $a['id_mahasiswa'] ?></td>
            </tr>
        <?php
        }
        // Menutup tabel
        echo "</table>";
    }
}
?>