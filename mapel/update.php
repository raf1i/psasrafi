<?php
if (isset($_POST['update'])){
    include_once('config.php');
    $id = $_POST['id'];
    $mapel = $_POST['mapel'];
    $jam = $_POST['jam'];

    $sql = "UPDATE subjects SET mapel = '$mapel', jam = '$jam' WHERE id = '$id'"; // Mengubah 'mapel' menjadi 'subjects' sesuai dengan nama tabel yang benar
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ('location: index.php?m=mapel&s=view');
    } else {
        include "index.php?m=mapel&s=view";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Diupdate.")';
        echo '</script>';    
    }
}
?>
