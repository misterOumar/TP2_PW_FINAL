<?php
require_once 'models/ContactDAO.php';

class AddContactController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];

            $dao = new ContactDAO();
            $dao->addContact($nom, $prenom, $email, $telephone);

            header('Location: index.php');
        } else {
            require_once 'views/add_contact.php';
        }
    }
}
