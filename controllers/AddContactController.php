<?php
require_once 'models/ContactDAO.php';

class AddContactController
{
    private $dao;

    public function __construct()
    {
        // Instanciation de ContactDAO
        $this->dao = new DAO\ContactDAO(getPDO());
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];

            // Création d'un nouveau contact
            $contact = new models\ContactModel($nom, $prenom, $telephone, $email, null );

           

            // Appel du DAO pour sauvegarder le contact
            $this->dao->addContact($contact);

            // Redirection vers la page d'accueil
            header('Location: index.php');
        } else {
            require_once 'views/add_contact.php';
        }
    }
}
