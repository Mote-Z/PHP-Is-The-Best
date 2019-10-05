<?php 
    class TestObject {
        public function __destruct() {
            echo 'Destruct called';
        }
    }

    $filename = 'phar://phar.phar/a_random_string';
    file_exists($filename);
    //......
 ?>
