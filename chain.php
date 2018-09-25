<?php

    /**
     * 1. Tanpa Method Chaining 
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
         * 2. Dengan Method Chaining
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