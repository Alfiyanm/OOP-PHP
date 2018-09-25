<?php

    /**
     * author : muchlas12@gmail.com 
     * description : kode ini ditulis dalam rangka pembelajaran OOP PHP
     */

    /**
     * 1. membuat sebuah class
     *
     */
    class Mobil {

        
    }

    /**
     * 2. menambah property kedalam class 
     * 
     * catatan : property juga bisa disebut dengan variable
     * 
     */

    class Robot {

        public $nama;
        public $negara = 'Jepang'; /** jepang dalam hal ini adalah value */
    }

    /**
     * 3. membuat objek dari sebuah class
     * 
     * dalam hal ini class-nya adalah superhero
     */
    class SuperHero {

        public $nama = 'spiderman';
        public $karya = 'marvel';
    }

    $superHero = new SuperHero();
    var_dump($superHero);

    /**
     * 4. Mengakses Property
     */

     class Penjahat {

        public $kelas = 'teri';
        public $hukuman = '2 tahun';
     }

     $penjahat = new Penjahat();

     echo "Penjahat kelas $penjahat->kelas dihukum $penjahat->hukuman \n";

     /**
      * 5. Mengatur nilai property
      */

      class Makanan {

        public $nama = 'Bakso';
        public $harga = 5000;
        public $rasa = 'Enak';
      }

      $makanan = new Makanan();

      $makanan->nama = 'Mie Ayam';
      $makanan->harga = 6000;
      $makanan->rasa = 'Uenaak bangeet';

      echo "Aku makan $makanan->nama harganya $makanan->harga $makanan->rasa \n";

      /**
       * 6. Menambah method dan menjalankannya
       *  - menambah method di sini yang dimaksud adalah method dalam sebuah class
       */

       class Belajar {

            public $pelajaran = 'pemrogramman';
       
            public function penjelasan()
            {
                echo 'sangat menyenangkan ...';
            }
        }

        $belajar = new Belajar();
        echo $belajar->penjelasan(); 
    
    /**
     * 7. Membuat beberapa objek dari suatu class
     */

     class Komputer {
         public $merk = '';
         public $harga = '';
         public $fungsi = '';
     }

     $komputer1 = new Komputer();
     $komputer1->merk = 'Toshiba';
     $komputer1->harga = 10000000;
     $komputer1->fungsi = 'hacking';

     echo "Aku punya " . $komputer1->merk . " harganya " . $komputer1->harga . " ku gunakan untuk " . $komputer1->fungsi;

     $komputer2 = new Komputer();
     $komputer2->merk = 'Lenovo';
     $komputer2->harga = 50000000;
     $komputer2->fungsi = 'gaming';
     echo "Teman ku punya " . $komputer2->merk . " harganya " . $komputer2->harga . " dia gunakan untuk " . $komputer2->fungsi;
     