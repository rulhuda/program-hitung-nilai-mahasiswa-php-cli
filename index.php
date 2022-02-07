<?php
/*
 * ========= Aturan Main ============
    Total absen 18
    Bobot Nilai absensi 10%
    Bobot Nilai tugas 20%
    Bobot Nilai UTS 30%
    Bobot Nilai UAS 40%
*/


// Pertanyaan
/**
 * Nama : Apip
 * Absensi : 16
 * Nilai Tugas : 70
 * Nilai UTS : 80
 * Nilai UAS : 70
 */

//  Penyelesaian
/**
 * Absensi : (value/18 x 100) x 0.1
 * Nilai Tugas : (value/100 x 100) x 0.2
 * Nilai UTS : (value/100 x 100)x 0.3
 * Nilai UAS : (value/100 x 100)x 0.4
 * Total Nilai : Absen + Tugas + UTS + UAS
 */
function start(){

    echo PHP_EOL . "=== PROGRAM HITUNG BOBOT NILAI MAHASISWA (PHP CLI) ===" . PHP_EOL;

    $nama = nama();
    $absensi = absensi();
    $nilaiTugas = nilaiTugas();
    $nilaiUTS = nilaiUTS();
    $nilaiUAS = nilaiUAS();
    $nilaiAkhir = $absensi + $nilaiTugas + $nilaiUTS + $nilaiUAS;

    echo "======================= HASIL ========================" . PHP_EOL;
    echo "Nama : ${nama}" . PHP_EOL;
    echo "Nilai Absensi : ${absensi}" . PHP_EOL;
    echo "Nilai Tugas : ${nilaiTugas}" . PHP_EOL;
    echo "Nilai UTS : ${nilaiUTS}" . PHP_EOL;
    echo "Nilai UAS : ${nilaiUAS}" . PHP_EOL . PHP_EOL;
    echo "=================== NILAI AKHIR ======================" . PHP_EOL;
    echo "Nilai Akhir : ${nilaiAkhir}" . PHP_EOL;

    if($nilaiAkhir >= 85){
        echo "Grade Nilai : A" . PHP_EOL;
    }else if($nilaiAkhir >= 80){
        echo "Grade Nilai : A-" . PHP_EOL;
    }else if($nilaiAkhir >= 75){
        echo "Grade Nilai : B+" . PHP_EOL;
    }else if($nilaiAkhir >= 70){
        echo "Grade Nilai : B" . PHP_EOL;
    }else if($nilaiAkhir >= 65){
        echo "Grade Nilai : B-" . PHP_EOL;
    }else if($nilaiAkhir >= 60){
        echo "Grade Nilai : C+" . PHP_EOL;
    }else if($nilaiAkhir >= 55){
        echo "Grade Nilai : C" . PHP_EOL;
    }else if($nilaiAkhir >= 50){
        echo "Grade Nilai : C-" . PHP_EOL;
    }else if($nilaiAkhir >= 40){
        echo "Grade Nilai : D" . PHP_EOL;
    }else if($nilaiAkhir < 40){
        echo "Grade Nilai : E" . PHP_EOL;
    }else{
        echo "Grade Nilai : Tidak Valid" . PHP_EOL;
    }
    echo "======================================================" . PHP_EOL . PHP_EOL;
}
function nama(){
    $nama = input("Nama");
    return $nama;
}
function absensi(){
    $absensi = input("Absensi");
    $absensi = ($absensi/18 * 100) * 0.1;
    return round($absensi,2);
}
function nilaiTugas(){
    $nilaiTugas = input("Nilai Tugas");
    $nilaiTugas = ($nilaiTugas/100 * 100) * 0.2;
    return round($nilaiTugas, 2);
}
function nilaiUTS(){
    $nilaiUTS = input("Nilai UTS");
    $nilaiUTS = ($nilaiUTS/100 * 100) * 0.3;
    return round($nilaiUTS,2);
}
function nilaiUAS(){
    $nilaiUAS = input("Nilai UAS");
    $nilaiUAS = ($nilaiUAS/100 * 100) * 0.4;
    return round($nilaiUAS,2);
}

function input(string $nama){
    echo "$nama : ";
    $value = fgets(STDIN);
    return trim($value);
}

function main(){
    while(true){
        start();
        echo "============= Konfirmasi Menghitung Lagi =============".PHP_EOL;
        $opsi = input("Ingin Menghitung lagi (y/n)?");
        echo "============= Konfirmasi Menghitung Lagi =============".PHP_EOL . PHP_EOL;
        echo PHP_EOL;
        if($opsi == "Y" || $opsi == "y"){
            continue;
        }else if($opsi == "N" || $opsi == "n"){
            break;
        }else{
            echo "=================================================" . PHP_EOL;
            echo "Pilih y atau n. y untuk yes dan n untuk no." .PHP_EOL;
            echo "=================================================" . PHP_EOL;
            continue;
        }
    }
    
}

main();
