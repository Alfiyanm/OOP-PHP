<?php
    
    /**
     * ********************** Property dan Method Overriding ***************
     * 
     */
    // Parent Class

    class Mobil {

        public $merk = 'Toyota';

        public function klakson()
        {
            return ' TIn... tin...';
        }
    }

    // Child Class
    Class MobilSport extends Mobil {

        public $merk = 'Ferrari';

        public function klakson()
        {
            return ' Tet...tot...';
        }
    }

    // Instance MobilSport
    $ferrari = new MobilSport();
    echo $ferrari->merk;
    echo $ferrari->klakson();

    /**
     * ************ Mencegah Method Overriding ********************
     * 
     */

     // Parent Class

     class Motor {

        final public function mesin()
        {
            return 'Mesin Bensin';
        }
     }

     // Child Class
     class MotorListrik extends Motor {

        public function mesin()
        {
            return 'Motor Elektrik';
        }
     }

     // Instance Tesla
     $tesla = new MotorListrik();
     echo $tesla->mesin();

     /**
      *********************** Mencegah Inheritance ****************
      *
      */

      // Parent Class

      final class Truk {

        public function mesin()
        {
            return 'Bensin';
        }
      }

      // Child Class
      class TrukListrik extends Truk {

        public function mesin()
        {
            return 'Motor Elektrik';
        }
      }

      // Instance TrukListrik
      $hino = new TrukListrik();
      echo $hino->mesin();