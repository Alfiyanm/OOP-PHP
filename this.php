<?php
    
    /**
     * -------------------------- Keyword $this -------------------------- 
     *      berfungi untuk mengakses suatu property dari dalam class itu sendiri, bukan dari luar class.
     */


    /**
     * 1. Keyword $this untuk Property
     */
    class Spiderman {
        
        public $jaring = true;

        public function bergelantung()
        {
            return $this->jaring;
        }
    }

    $spiderman = new Spiderman();
    echo $spiderman->bergelantung();

    /**
     * 2. Keyword $this untuk method
     */

    class Ironman {

        public $pemeran = 'ROBERT DOWNEY JR';

        public function acting()
        {
            $pemeran = $this->pemeran;
            return $this->lowercase($pemeran);
        }

        public function lowercase($pemeran)
        {
            return strtolower($pemeran);
        }
    }
    $ironman = new Ironman();
    echo $ironman->acting();