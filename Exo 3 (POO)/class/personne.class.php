<?php

abstract class Personne {
    protected $_prenom;
    protected $_age;

    public function __construct($_prenom, $_age) {
        $this->_prenom = $_prenom;
        $this->_age = $_age;
    }

}
?>