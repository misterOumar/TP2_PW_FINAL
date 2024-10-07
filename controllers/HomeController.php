<?php
require_once 'models/ContactDAO.php';

class HomeController
{
    public function index()
    {
        $dao = new ContactDAO();
        $contacts = $dao->getAllContacts();
        require_once 'views/home.php';
    }
}
