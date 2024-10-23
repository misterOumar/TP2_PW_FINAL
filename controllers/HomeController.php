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

        // Si la requête est faite via AJAX, retourner seulement le contenu du tableau
        if (isset($_GET['search'])) {
            if (count($contacts) > 0) {

                foreach ($contacts as $contact) {
                    echo "<tr>
                    <td>{$contact->getNom()}</td>
                    <td>{$contact->getPrenom()}</td>
                    <td>{$contact->getEmail()}</td>
                    <td>{$contact->getTelephone()}</td>
                    <td class='action'>
                    <a href='index.php?page=view&id={$contact->getId()}'><i class='bx bx-show'></i></a>
                    <a href='index.php?page=edit&id={$contact->getId()}'><i class='bx bx-pencil'></i></a>
                    <a href='index.php?page=delete&id={$contact->getId()}'><i class='bx bx-trash-alt'></i></a>
                    </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucun contact trouvé.</td></tr>";
            }
            exit; // Arrêter l'exécution pour ne pas inclure le reste de la page
        }

        require_once 'views/home.php';
    }
}
