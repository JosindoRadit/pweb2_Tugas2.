
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
    public function tblnilai_perbaikan($table)
    {
        $data = parent::__construct()->query("select * from nilai_perbaikan");

?>
<table class="table table-bordered table-striped " >
 <tr>
    
    <td><b><center>Keterangan</center></b></td>
    <td><b><center>Id_Mahasiswa</center></b></td>
    
 </tr>
 
<?php
 foreach ($data as $a){
?>
    <tr>
        <td><?= $a['keterangan']?> </td>
        <td><?= $a['id_mahasiswa']?> </td>

    </tr>
    <?php }?>
    </table>
<?php    
    


    }

}
class admin extends dataconnect {
    public function tblnilai_perbaikan($table)
    {
        $data = parent::__construct()->query("select * from nilai_perbaikan");
?>
<table class="table table-bordered table-striped">
<tr>
    <td><b><center>tgl_perbaikan</center></b></td>
    <td><b><center>Keterangan</center></b></td>
    <td><b><center>Id_Mahasiswa</center></b></td>
</tr>
<?php
foreach ($data as $a){
?>
    <tr>
    <td><?= $a['tgl_perbaikan']?> </td>
    <td><?= $a['keterangan']?> </td>
    <td><?= $a['id_mahasiswa']?></td>
    
    </tr>
    
<?php
}
echo "</table>";
    }
}
?>
