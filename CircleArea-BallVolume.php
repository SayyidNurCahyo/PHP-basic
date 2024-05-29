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
