<?php

    /**
     * 1. Magic Method
     *      - Ciri-ciri utama magic method adalah diawali dengan tanda double underscore ( __ )
     *      - dalam contoh ini menggunakan method "__contruct()" yang berguna untuk mensetting nilai awal pada suatu property. 
     *      - magic method __contruct() juga bisa disebut dengan constructor.
     *      - magic method ini otomatis dijalankan ketika proses instansiasi object dilakukan
     *      - selain itu , __construct() biasanya digunakan untuk melakukan dependency injection, yaitu suatu teknik yang digunakan untuk memasukkan object ke dalam object lainnya 
     *     
     *      catatan : selain __construct(), berikut magic method lainnya :
     *      __destruct(),__get(),__unset(),__toString(),__clone(),__call(),__set(),__sleep(),__invoke(),__debugInfo(),__callStatic(),__isset(),__wakeup(),__set_state()
     *      
     *      dan yang terpenting, nama-nama magic method termasuk reserved word, jadi kita tidak bisa membuat fungsi/method yang namanya sama dengan nama-nama magic method di atas.
     */ 

    class Gedung {
        
        public $lantai = '';

        public function __construct($lantai)
        {
            $this->lantai = $lantai;
        }

        public function getLantai()
        {
            return 'gedung ini mempunyai ' . $this->lantai;
        }
    }
    $gedung = new Gedung('20 lantai');
    echo $gedung->getLantai();

    /**
     * alternative ke-dua penulisan Magic Method
     */

    class Motel {
        
        public function __construct($lantai = '30 lantai')
        {
            $this->lantai = $lantai;
        }

        public function getLantai()
        {
            return 'motel ini mempunyai ' . $this->lantai;
        }
    }
    $motel = new Motel();
    echo $motel->getLantai();

    /**
     * 2. Magic Constant
     *      - Magic Constant pada dasarnya adalah constant yang berisi informasi khusus yang cukup berguna ketika bekerja dengan PHP
     *      - dalam contoh ini, menggunakan magic constant __CLASS__, yang mana constant ini berisi nama class dari suatu object.
     *      
     *      ada beberapa Magic Constant, yaitu :
     *      __CLASS__,__LINE__,__FILE__,__METHOD__,__FUNCTION__,__NAMESPACE__,__DIR__,__TRAIT__
     */
    
     class Mobil {
         
        public $merk = '';

        public function __construct($merk = 'Audi')
        {
            $this->merk = $merk;
        }

        public function getMerk()
        {
            return 'Merk ' .__CLASS__. ' ini adalah: ' . $this->merk;
        }
     }

     $mobil = new Mobil("Ferrari");
     echo $mobil->getMerk();