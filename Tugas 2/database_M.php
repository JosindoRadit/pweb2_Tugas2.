
<?php
class dataconnect {
private $servername = "localhost";
private $username = "root"; 
private $password = ""; 
private $dbname = "pweb_tugas2";

public function __construct(){
    $db = new mysqli ($this->servername, $this->username, $this->password, $this->dbname);
    return $db;
}

}

class dosen extends dataconnect {
    public function tblmahasiswa($table)
    {
        $data = parent::__construct()->query("select * from mahasiswa");

?>

<table class="table table-bordered table-striped">
 <tr>
    <td><center><b>Nim</b></center></td>
    <td><center><b>Nama</b></center></td>
    <td><center><b>Email</b></center></td>
 </tr>
<?php
 foreach ($data as $a){
?>
    <tr>
        <td><?= $a['nim']?> </td>
        <td><?= $a['nama_mhs']?> </td>
        <td><?= $a['email']?> </td>

    </tr>
    <?php }?>
    </table>

<?php    
    


    }

}
class admin extends dataconnect {
    public function tblmahasiswa($table)
    {
        $data = parent::__construct()->query("select * from mahasiswa");
?>
<table class="table table-bordered table-striped">
<tr>
    <td><b><center>Nim</center></b></td>
    <td><b><center>Nama</center></b></td>
    <td><b><center>Alamat</center></b></td>
    <td><b><center>Email</center></b></td>
    <td><b><center>No_Telp</center></b></td>
</tr>
<?php
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
echo "</table>";
    }
}

