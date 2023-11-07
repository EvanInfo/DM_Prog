<?php

require_once 'connexion.php';

class Homme extends Personne implements Presentation {
    public function sePresenter() {
        echo "Je suis un Homme de $this->_age ans et je m'appelle $this->_prenom.\n";
    }
}

?>