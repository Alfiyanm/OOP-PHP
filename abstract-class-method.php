<?php

    /**
     * 
     * 
     */

    abstract class BangunDatar {

        abstract protected function hitungLuas();
    }

    class Persegi extends BangunDatar {

        protected $sisi = 4;

        public function hitungLuas()
        {
            return pow($this->sisi, 2);
        }
    }

    class Segitiga extends BangunDatar {

        protected $alas = 4;
        protected $tinggi = 3;

        public function hitungLuas()
        {
            return (0.5 * $this->alas * $this->tinggi);
        }
    }

    class Lingkaran extends BangunDatar {

        protected $jariJari = 7;

        public function hitungLuas()
        {
            return (3.14 * pow($this->jariJari, 2));
        }
    }

    $persegi = new Persegi();
    echo 'Luas Persegi = ' . $persegi->hitungLuas() . "\n";

    $segitiga = new Segitiga();
    echo 'Luas Segitiga = ' . $segitiga->hitungLuas() . "\n";

    $lingkaran = new Lingkaran();
    echo 'Luas Lingkaran = ' . $lingkaran->hitungLuas() . "\n";

    /**
     * 
     * 
     */

     abstract class Mobil {
         
        protected $volTangki;

        public function isiBensin($vol)
        {
            $this->volTangki = $vol;
        }

        abstract protected function jarakTempuhMaksimum();
     }

     class Toyota extends Mobil {

        protected $perLiter = 10;

        public function jarakTempuhMaksimum()
        {
            $jarakMaks = $this->perLiter * $this->volTangki;
            echo 'Jarak tempuh maks Toyota ' . $jarakMaks . " km \n";
        }
     }

     class Suzuki extends Mobil {

        protected $perLiter = 20;

        public function jarakTempuhMaksimum()
        {
            $jarakMaks = $this->perLiter * $this->volTangki;
            echo 'Jarak tempuh maks Suzuki ' . $jarakMaks . " km \n";
        }
     }

     $toyota = new Toyota();
     $toyota->isiBensin(10);
     $toyota->jarakTempuhMaksimum();

     $suzuki = new Suzuki();
     $suzuki->isiBensin(10);
     $suzuki->jarakTempuhMaksimum();