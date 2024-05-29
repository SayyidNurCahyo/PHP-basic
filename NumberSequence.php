<?php
// definisikan fungsi untuk menghasilkan rangkaian angka
function numberSequence($input) {
    // validasi jika input kurang dari 0
    if (!is_int($input) || $input <= 0) return "Input harus berupa angka dan lebih dari 0";
    
    // perulangan untuk indeks baris 
    for ($i = 1; $i <= $input ; $i++) {
        // perulangan untuk indeks kolom
        for ($j = $i; $j <= $input; $j++) {
            // print bilangan untuk tiap kolom, yang akan diulangi sebanyak indeks baris
            echo "$j ";
        }
        // tambahkan enter setiap indeks baris
        echo "\n";
    }
}

// menampilkan hasil
numberSequence(9);
// output == 
// 1 2 3 4 5 6 7 8 9 
// 2 3 4 5 6 7 8 9
// 3 4 5 6 7 8 9
// 4 5 6 7 8 9
// 5 6 7 8 9
// 6 7 8 9
// 7 8 9
// 8 9
// 9