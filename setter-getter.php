<?php

    /**
     * --------------------------- Getter & Setter -----------------------
     *  a. Getter adalah public method untuk mendapatkan nilai private property.
     *  b. Setter adalah public method untuk memberikan/mengatur nilai private property.
     */
    class MobilJepang {

        private $merk;

        /**
         *      Method setMerk berfungsi sebagai setter yang berguna untuk mengatur nilai private property $merk. 
         */
        public function setMerk($merk)
        {
            $this->merk = $merk;
        }

        /**
         *      Method getMerk berfungsi sebagai getter untuk mendapatkan nilai private property $merk.
         */
        public function getMerk()
        {
            return $this->merk;
        }
    }

    $mobil = new MobilJepang();
    $mobil->setMerk('Toyota');
    echo 'Merk mobil adalah ' . $mobil->getMerk();