<?php
if (isset($_GET['fnama'])) {
    $fnama = $_GET['fnama'];
    $lalamat = $_GET['lalamat'];
    $jkel = $_GET['jkel'];
    $prodi = $_GET['prodi'];


    echo "<span class='success'><b>Data Mahasiswa</b></span><br/>";
    echo "Nama : " . $fnama . "<br/>";
    echo "Alamat : " . $lalamat . "<br/>";
    echo "Jenis Kelamin : " . $jkel . "<br/>";
    echo "Program Studi : " . $prodi . "<br/>";

    echo "hobi:<br/> ";
    if (!empty($_GET['cekhobi'])) {
        foreach ($_GET['cekhobi'] as $selected) {
            echo $selected . "<br/>";
        }
    }
}