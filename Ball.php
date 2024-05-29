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