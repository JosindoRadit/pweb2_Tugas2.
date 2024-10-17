<?php
// Kelas dataconnect berfungsi untuk membuat koneksi ke database
class dataconnect {
    // Mendefinisikan properti untuk koneksi database
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

// Kelas dosen untuk menampilkan data mahasiswa dengan informasi yang terbatas
class dosen extends dataconnect {
    // Fungsi untuk menampilkan tabel mahasiswa
    public function tblmahasiswa($table) {
        // Mengambil data dari tabel mahasiswa menggunakan query SQL
        $data = parent::__construct()->query("SELECT * FROM mahasiswa");

        ?>
        <!-- Membuat tabel HTML untuk menampilkan data -->
        <table class="table table-bordered table-striped">
         <tr>
            <td><center><b>Nim</b></center></td>
            <td><center><b>Nama</b></center></td>
            <td><center><b>Email</b></center></td>
         </tr>
        <?php
        // Looping untuk menampilkan setiap baris data mahasiswa
         foreach ($data as $a){
        ?>
            <tr>
                <td><?= $a['nim']?> </td>
                <td><?= $a['nama_mhs']?> </td>
                <td><?= $a['email']?> </td>
            </tr>
        <?php 
        } 
        ?>
        </table>
        <?php    
    }
}

// Kelas admin untuk menampilkan data mahasiswa dengan informasi yang lebih lengkap
class admin extends dataconnect {
    // Fungsi untuk menampilkan tabel mahasiswa
    public function tblmahasiswa($table) {
        // Mengambil data dari tabel mahasiswa menggunakan query SQL
        $data = parent::__construct()->query("SELECT * FROM mahasiswa");
        ?>
        <!-- Membuat tabel HTML untuk menampilkan data dengan kolom tambahan -->
        <table class="table table-bordered table-striped">
        <tr>
            <td><b><center>Nim</center></b></td>
            <td><b><center>Nama</center></b></td>
            <td><b><center>Alamat</center></b></td>
            <td><b><center>Email</center></b></td>
            <td><b><center>No_Telp</center></b></td>
        </tr>
        <?php
        // Looping untuk menampilkan setiap baris data mahasiswa
        foreach ($data as $a){
        ?>
            <tr>
                <td><?= $a['nim']?> </td>
                <td><?= $a['nama_mhs']?> </td>
                <td><?= $a['alamat']?> </td>
                <td><?= $a['email']?> </td>
                <td><?= $a['no_telp']?> </td>
            </tr>
        <?php
        }
        // Menutup tag tabel
        echo "</table>";
    }
}
?>