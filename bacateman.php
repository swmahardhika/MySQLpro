<?php

    //deklarasi alamat server
    $server = "localhost";

    //deklarasi username
    $user = "root";

    //deklarasi nama database
    $namadb = "tiumy";

    //deklarasi password
    $password = "";

    //membuat koneksi kedalam database
    $conn = mysql_connect($server, $user, $password, $namadb) or die ("Koneksi gagal");

    //membuat yang berisi query untuk menampilkan data
    $result = mysql_query($conn, "select * from teman");

    //membuat variabel json yang berjenis data array
    $json = array();

    //membaca isi data dari database
    while ($row = mysql_fetch_assoc($result)) (
        $json[] = $row;
    )

    echo json_encode($json);
    mysqli_close($conn);

?>

