<?php

class A{
	public $s='';
	public function __wakeup(){
		echo 'Dont\'s Call me'."\n";
	}
}

$z = 'compress.bzip2://phar://test.phar/test.txt';

file_get_contents($z);
