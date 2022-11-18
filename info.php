<?php
    include "database.php";
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $query = "SELECT * FROM mhs (nim, nama, prodi)
    VALUES ('$nim', '$nama', '$prodi')";
    $result = mysqli_query($connection, $query)
?>