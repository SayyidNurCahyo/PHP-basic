-) Buat contoh sederhana sebuah Class, Function dan cara memanggilnya dalam bahasa PHP untuk menghitung luas lingkaran dan volume bola
<?php
class Circle {
    // properti dari lingkaran
    private $radius;
    // fungsi konstruktor sebagai inisiator properti
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // mendapatkan nilai properti radius
    public function getRadius() {
        return $this->radius;
    }
    // fungsi untuk mendapatkan luas lingkaran
    public function area() {
        return pi()*pow($this->radius, 2);
    }
}

<?php
class Ball {
    // properti radius dari bola
    private $radius;
    // fungsi konstruktor 
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // fungsi untuk mendapatkan nilai dari properti bola
    public function getRadius() {
        return $this->radius;
    }
    // fungsi untuk menghitung volume dari bole
    public function volume() {
        return (4/3)*pi()*pow($this->radius, 3);
    }
}

<?php
// Digunakan untuk import package di PHP
include "Circle.php";
include "Ball.php";

// Membuat instance dari class Circle dengan radius 3
$circle = new Circle(3);
// Mndapatkan luas dan radius dari lingkaran
$circleRadius = $circle->getRadius();
$circleArea = $circle->area();
// Menampilkan luas lingkaran beserta radiusnya
echo "Luas lingkaran dengan radius $circleRadius adalah $circleArea\n";
// output == Luas lingkaran dengan radius 3 adalah 28.274333882308

// Membuat instance dari class Ball dengan radius 3
$ball = new Ball(3);
// Mendapatkan volume dan radius dari bola
$ballRadius = $ball->getRadius();
$ballVolume = $ball->volume();
// Menampilkan volume bola dan radiusnya
echo "Volume bola dengan radius $ballRadius adalah $ballVolume\n";
// output == Volume bola dengan radius 3 adalah 113.09733552923

-) Jelaskan fungsi CURL dalam php
Fungsi CURL di PHP adalah library yang berguna untuk mentransfer data antar server web dan user. Library ini membantu programmer dalam menangani request/response HTTP, mentransfer data/properti, dan berkomunikasi dengan layanan web hingga API.

-) Jelaskan konsep tentang web service dan fungsi yang digunakan untuk memanggil web service client
Web service merupakan layanan berbasis web yang dapat menerima request dari user melalui tampilan interface website yang diuraikan menjadi pesan xml, dikirimkan melalui API yang akan diproses melalui controller, service, dan repository entity yang nantinya akan mendapat respon dari database. Response dari database ini akan dibawa dalam xml dan ditampilkan sebagai web response dan diubah dalam tampilan front end pada user.Untuk memanggil web service di PHP, dapat digunakan dengan library  CURL. Konsep CURL dalam menggunakan web service antara lain 
•	Mendefinisikan metode HTTP protocol (seperti GET, POST, DELETE, PUT)
•	Mendefinisikan request HTTP yang dikirim, dapat berupa JSON dll
•	Kirim request melalui link URL web service dan akan didapatkan respon dari web service
•	Respon dapat diolah untuk ditampilkan dalam aplikasi

-) Apa bedanya antara mysql_fetch_array(), mysql_fetch_row(), dan mysql_fetch_assoc()
Perbedaan antara ketiga fungsi tersebut antara lain :
•	mysql_fetch_array() digunakan untuk mengambil hasil query dari database mysql yang secara default mereturn array asosiatif dan array numerik.
•	mysql_fetch_row() digunakan untuk mengambil hasil query dari database mysql yang secara default mereturn array numerik yang digunakan untuk mengakses data berdasarkan indeks kolomnya.
•	mysql_fetch_assoc() digunakan untuk mengambil hasil query dari database mysql yang secara default mereturn array asosiatif yang digunakan untuk mengakses data berdasarkan nama kolomnya.


-) Buat SQL statement dengan table sesuai requirement
SELECT m.nama_mahasiswa, mk.nama_matakuliah, n.nilai, CASE WHEN n.nilai > 70 THEN ‘Lulus’ ELSE ‘Tidak Lulus’ END AS ket_lulus FROM nilai AS n JOIN matakuliah AS mk ON n.id_matakuliah = mk.id_matakuliah JOIN mahasiswa AS m ON n.id_mahasiswa = m.id_mahasiswa.

-) Buatlah kode PHP sehingga menghasilkan rangkaian dibawah ini
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

