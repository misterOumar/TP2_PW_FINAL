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
                    <td>
                    <a href='index.php?action=view&id={$contact->getId()}'>Voir</a>
                    <a href='index.php?action=edit&id={$contact->getId()}'>Modifier</a>
                    <a href='index.php?action=delete&id={$contact->getId()}'>Supprimer</a>
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
