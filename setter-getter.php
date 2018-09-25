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

    /**
     * ---------------------- Mengapa kita membutuhkan Access Modifier -----------
     *      - dalam Encapsulation, Class yang baik adalah yang sebisa mungkin tertutup dari luar.
     *      - contoh dibawah, menjelaskan bahwa hanya mobil jerman saja yang diperbolehkan sebagai nilai dari property $merk.
     */

     class MobilJerman {

        private $merk;

        public function setMerk($merk)
        {
            $merkJerman = ['Volkswagen', 'Audi', 'Mercedes Benz', 'Porsche'];
            if (in_array($merk, $merkJerman)) {
                $this->merk = $merk;
            }
        }

        public function getMerk()
        {
            return $this->merk;
        }
     }

     $mobil = new MobilJerman();
     $mobil->setMerk('Honda');
     echo 'Merk mobil adalah ' . $mobil->getMerk();

     /**
      * --------------- Contoh Private Method ----------------------
      *    Contoh di atas adalah Private Property. berikut ini adalah contoh dari private method.
      *    - Private Method biasanya digunakan untuk mengerjakan proses internal di dalam suatu class.
      *    - Private Methos biasanya akan dipanggil oleh method lainnya di dalam class.
      */

      class Motor {

        public function maju()
        {
            $maju = $this->pegangKopling();
            $maju .= $this->ubahPerseneling();
            $maju .= $this->tarikGas();
            $maju .= 'Bruuuummmm.......';
            echo $maju;
        }

        private function pegangKopling()
        {
            return "Pegang kopling \n";
        }

        private function ubahPerseneling()
        {
            return "Ubah Perseneling \n";
        }

        private function tarikGas()
        {
            return "Tarik Gas \n";
        }
      }

      $motor = new Motor();
      $motor->maju();