<?php

    /**
     * program ini tanpa method chaining 
     * buka (jarak2.php) untuk penerapan method chaining
     * 
     * 
     */
    class Mobil {

        public $tangki = 0 ;

        public function isiBensin($liter)
        {
            $this->tangki += $liter;
        }

        public function kendarai($jarak)
        {
            $terpakai = $jarak / 20;
            $this->tangki -= $terpakai;
        }
    }
        $mobil = new Mobil();
        $mobil->isiBensin(2);
        $mobil->kendarai(20);
        $sisaBensin = $mobil->tangki;
        echo "Sisa Bensin = " . $sisaBensin . " liter.";

        /** 
         * ini adalah penerapan method chaining pada sebuah objek
         * 
         * 
         */
        class Truk {

            public $tangki = 0 ;

            public function isiBensin($liter)
            {
                $this->tangki += $liter;
                return $this;
            }

            public function kendarai($jarak)
            {
                $terpakai = $jarak / 20;
                $this->tangki -= $terpakai;
                return $this;
            }
        }

        $truk = new Truk();
        $sisaBensin = $truk->isiBensin(2)->kendarai(20)->tangki;
        echo "Sisa bensin = " . $sisaBensin . " liter.";