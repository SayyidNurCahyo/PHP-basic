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