<?php

class Person {

    public $firstname;
    public $middlename;
    public $lastname;
    public $geboortedatum;

    public function __construct($firstname, $middlename, $lastname, $geboortedatum) {
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
        $this->geboortedatum = $geboortedatum;

    }

    public function getFullname() {
        return $this->firstname . ' ' . $this->lastname;
    }
}