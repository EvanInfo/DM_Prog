<?php

require_once 'connexion.php';

class Femme extends Personne implements Presentation {
    public function sePresenter() {
        echo "Je suis une Femme de $this->_age ans et je m'appelle $this->_prenom.\n";
    }
}

?>