<?php
class ContactModel
{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $telephone;

    public function __construct($id, $nom, $prenom, $email, $telephone)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
    }
}
