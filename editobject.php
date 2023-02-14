<?php
// NR DYSPOZYTORSKI STANOWISKA
    $nrDysp = "";
    if(file_exists("/Komster/KONFIG/parametry_stanowiska/nr_dysp") == ""){
        fopen("/Komster/KONFIG/parametry_stanowiska/nr_dysp", "w");
    };
    $nrDysp = file_get_contents("/Komster/KONFIG/parametry_stanowiska/nr_dysp");

// NR FIZYCZNY STANOWISKA
    $nrFiz = "";
    if(file_exists("/Komster/KONFIG/parametry_stanowiska/nr_sys") == ""){
        fopen("/Komster/KONFIG/parametry_stanowiska/nr_sys", "w");
    };
    $nrFiz = file_get_contents("/Komster/KONFIG/parametry_stanowiska/nr_sys");

// NR FIZYCZNY STANOWISKA
    $newNazwa = "";
    if(file_exists("/Komster/KONFIG/parametry_stanowiska/nazwa") == ""){
        fopen("/Komster/KONFIG/parametry_stanowiska/nazwa", "w");
    };
    $newNazwa = file_get_contents("/Komster/KONFIG/parametry_stanowiska/nazwa");
?>