<?php

$conn = mysqli_connect('localhost', 'root', '', 'cookiecrumb');

if (!$conn) {
    die("koneksi Gagal : " . mysqli_connect_error());
}


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    }
    return $rows;
}



// Function Format Number 

function formatNumber($number)
{
    return number_format($number, 0, ',', '.');
}
// Function Format Number End



