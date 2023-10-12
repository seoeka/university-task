<?php
    $nama = "Ekasari Amalia";
    $nim = 21106050023;
    $teman = array("Resthy","Inka","Liza");

    echo "Halo perkenalkan nama saya ".$nama.". ";
    echo "Nim saya ".$nim.". ";
    echo "Saya satu kelas dengan ".implode(', ', $teman).".";
?>