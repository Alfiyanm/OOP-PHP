<?php

    namespace Dummy; // ini adalah mendefinisikan namespace

    use Dummy\Mobil\Mobil;  // mengimport namespace

    class Calculator {

        protected $mobil;

        public function __construct(Mobil $mobil)
        {
            $this->mobil = $mobil;
        }

        public function hitungJarak()
        {
            $bbm = $this->mobil->getBbm();
            $efisiensi = $this->mobil->getEfisiensi();
            $jarakMaks = $bbm * $efisiensi;
            return $jarakMaks;
        }
    }

    