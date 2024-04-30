<?php
    class PersegiPanjang {
            //properties
            public $panjang;
            public $lebar;

            //method
            function luas() {
                $luas = $this->panjang * $this->lebar;
                return $luas;
            }
            function keliling() {
                $keliling = 2 * ($this->panjang + $this->lebar);
                return $keliling;
            }
    }
?>