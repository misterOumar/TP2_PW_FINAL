<?php

class HomeController
{
    private $contactDAO;

    public function __construct()
    {
        $this->contactDAO = new DAO\ContactDAO(getPDO());
    }

    public function index()
    {
        // Vérifier si un terme de recherche est présent dans l'URL
        $search = isset($_GET['search']) ? $_GET['search'] : '';

        // Si une recherche est effectuée, appeler la méthode de recherche dans le DAO
        if (!empty($search)) {
            $contacts = $this->contactDAO->searchContacts($search);
        } else {
            // Sinon, récupérer tous les contacts
            $contacts = $this->contactDAO->getAllContacts();
        }

        // Inclure la vue avec les contacts
        require_once 'views/home.php';
    }
}
