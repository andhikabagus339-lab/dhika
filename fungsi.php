<?php

//API
$koneksi = mysqli_connect("localhost", "root", "", "khawewekly");
function tampildata($query)
{
    global $koneksi;
    $result  = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row =mysqli_fetch_assoc($result))
        {
            $rows[]= $row;
        }
    return $rows;
}

?>