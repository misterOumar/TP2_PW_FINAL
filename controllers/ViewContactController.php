<?php
require_once 'models/ContactDAO.php';

class ViewContactController
{
    public function index($id)
    {
        $dao = new ContactDAO();
        $contact = $dao->getContactById($id);


        require_once 'views/view_contact.php';
    }
}
