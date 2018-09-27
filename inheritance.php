<?php

    /**
     * --------------------- Inheritance --------------------------
     *      - Inheritance adalah kemampuan untuk mengurangi duplikasi
     *        kode program.
     *      - secara bahasa dikenal juga dengan 'pewarisan'.
     *      - untuk membuat inheritance, atau class yang menurun dari
     *        class lainnya, kita menggunakan keyword 'extends'
     * 
     */

     // pola inheritance seperti dibawah ini ...
    class Induk {

        //kode lainnya
    }

    class Anak extends Induk {

        //Kode lainnya
    }

    //------------------------- Membuat Turunan Class ----------------------------------

    // Parent Class
    class Mobil {

        private $merk;

        public function setMerk($merk)
        {
            $this->merk = $merk;
        }

        public function getMerk()
        {
            return $this->merk;
        }

        public function halo()
        {
            return 'Tin...tin... Halo saya adalah ' . $this->merk;
        }
    }

    // Child Class
    class MobilSport extends Mobil {}
    
    // Instance MobilSport
    $ferrari = new MobilSport();
    $ferrari->setMerk('Ferrari');
    echo $ferrari->halo();

    /**
     * ----------------- Menambah Property & Method di Child Class -----------
     * 
     */

    // Parent Class
    class Motor {

        private $merk;

        public function setMerk($merk)
        {
            $this->merk = $merk;
        }

        public function getMerk()
        {
            return $this->merk;
        }

        public function halo()
        {
            return 'Tin...tin... Halo saya adalah ' .$this->merk;
        }
    }

    // Child Class
    class MotorSport extends Motor {

        private $nos = 'Nitrous Oxide Systems';

        public function ngebut()
        {
            return 'Mengendarai ' . $this->getMerk() . ' dengan ' . $this->nos;
        }
    }

    // Inheritance MotorSport
    $r1m = new MotorSport();
    $r1m->setMerk('R1M');
    echo $r1m->ngebut();

    /**
     * --------- Protected Access Modifier ----------------------
     * 
     */

     // Parent Class
     class Kapal {

        protected $merk;

        public function setMerk($merk)
        {
            $this->merk = $merk;
        }
     }

     // Child Class
     class KapalPesiar extends Kapal {

        public function halo()
        {
            return 'Halo saya ' . $this->merk;
        }
     }

     // Instance KapalPesiar
     $dreamCruise = new KapalPesiar();
     $dreamCruise->setMerk('Dream Cruise');
     echo $dreamCruise->halo();

     