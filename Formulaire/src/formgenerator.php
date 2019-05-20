<?php

class FormGenerator {

    private $method;

    public function __construct($Method) {
      $this->method = $Method;
    }

    public function getMethod() {
      return $this->method;
    }

    public function setInput($name, $type) {
      echo '<label for="' . $name . '">' . $name . '</label>';
      echo  '<input id="' . $name . '" name="' . $name . '" type="' . $type . '" />';
    }

    public function setInput($value, $type) {
      echo  '<input type="' . $type . '" value="' . $value . '" />';
    }

    public function setSubmit($name, $prenom, $age, $sexe) {
      echo  '<submit id="' . $name . '" name="' . $name . '" prenom="' . $prenom . '" age="' . $age . '" sexe="' . $sexe . '" />';
    }
}

?>
