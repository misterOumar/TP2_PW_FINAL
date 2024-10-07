<?php
require_once 'models/ContactDAO.php';

class DeleteContactController
{
    public function index($id)
    {
        $dao = new ContactDAO();
        $contact = $dao->getContactById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dao->deleteContact($id);
            header('Location: index.php');
        } else {
            require_once 'views/delete_contact.php';
        }
    }
}
