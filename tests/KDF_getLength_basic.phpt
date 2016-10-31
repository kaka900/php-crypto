--TEST--
Crypto\KDF::getLength basic usage.
--FILE--
<?php
// sub classing
class SubKDF extends Crypto\KDF {
    function __construct($length) {
	    parent::__construct($length);
	}
}
$subkdf = new SubKDF(32, 'salt');
var_dump($subkdf->getLength());
?>
--EXPECT--
int(32)
