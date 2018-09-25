<?php

    /**
     * ----------------------- ENCAPSULATION --------------------------
     *      - Salah satu prinsip penting OOP adalah PEMBATASAN AKSES DARI LUAR KEPADA SUATU PROPERTY DAN METHOD PADA SUATU CLASS/OBJECT.    
     *      - memakai analogi sebuah rumah, pada suatu rumah untuk mengakses rumah tersebut semestinya lewat "pintu", entah pintu depan atau pintu belakang.
     *        Yang pasti kedua pintu tersebut adalah jalan yang sah untuk mengakses rumah tersebut.
     *        Pada OOP yang berfungsi sebagai pintu adalah public interface yang biasanya diwujudkan dalam suatu public method.
     *      - Encapsulation akan memastikan bahwa Kode dari luar hanya boleh mengakses property dan method yang diperbolehkan saja pada suatu class.
     *      - Cara untuk menerapkan encapsulation adalah dengan memakai Access Modifier.
     *      - Dengan memakai Access Modifier Public, maka property atau method dapat diakses dari luar class.
     *      - Dengan memakai Access Modifier Private, maka property atau method hanya bisa diakses dari dalam class itu sendiri.
     */

     /**
      * 1. Public
      */

    class MobilJepang {

        public $merk;

        public function getMerk()
        {
            return $this->merk;
        }
    }

    $mobil = new MobilJepang();
    $mobil->merk = 'Toyota';
    echo 'Merk mobil adalah ' . $mobil->getMerk();

    /**
     * 2. Private
     *      - error dalam contoh ini karena menandakan bahwa Private Modifier bekerja pada property $merk.
     *        lantas untuk berinteraksi dengan Private Property, adalah dengan menggunakan setter dan getter.
     */

    class MobilBelanda {

        private $merk;

        public function getMerk()
        {
            return $this->merk;
        }
    }

    $mobil = new MobilBelanda();
    $mobil->merk = 'Toyota';
    echo 'Merk mobil adalah ' . $mobil->getMerk();