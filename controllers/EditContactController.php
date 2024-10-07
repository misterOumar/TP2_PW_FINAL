<?php
require_once 'models/ContactDAO.php';

class EditContactController
{
    public function index($id)
    {
        $dao = new ContactDAO();
        $contact = $dao->getContactById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];

            $dao->updateContact($id, $nom, $prenom, $email, $telephone);

            header('Location: index.php');
        } else {
            require_once 'views/edit_contact.php';
        }
    }
}
