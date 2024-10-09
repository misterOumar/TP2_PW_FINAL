<?php

namespace DAO;

use models\ContactModel;
use PDO;

class ContactDAO
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Méthode pour récupérer tous les contacts
    public function getAllContacts()
    {
        $stmt = $this->pdo->query('SELECT * FROM contacts');
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $contacts = [];
        foreach ($results as $row) {
            $contacts[] = new ContactModel($row['nom'], $row['prenom'], $row['email'], $row['telephone'], $row['id']);
        }

        return $contacts;
    }

    // Méthode pour rechercher des contacts
    public function searchContacts($search)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM contacts WHERE nom LIKE :search OR prenom LIKE :search OR email LIKE :search OR telephone LIKE :search");
        $searchTerm = '%' . $search . '%';
        $stmt->execute(['search' => $searchTerm]);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $contacts = [];
        foreach ($results as $row) {
            // Instancier manuellement les objets ContactModel
            $contacts[] = new ContactModel($row['nom'], $row['prenom'], $row['email'], $row['telephone'], $row['id']);
        }

        return $contacts;
    }

    public function getContactById($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM contacts WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetchObject(ContactModel::class);
    }



    public function addContact(ContactModel $contact)
    {
        $stmt = $this->pdo->prepare('INSERT INTO contacts (nom, prenom, email, telephone) VALUES (:nom, :prenom, :email, :telephone)');
        $stmt->execute([
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'email' => $contact->getEmail(),
            'telephone' => $contact->getTelephone()
        ]);
    }

    public function updateContact(ContactModel $contact)
    {
        $stmt = $this->pdo->prepare('UPDATE contacts SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id');
        $stmt->execute([
            'id' => $contact->getId(),
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'email' => $contact->getEmail(),
            'telephone' => $contact->getTelephone()
        ]);
    }

    public function deleteContact($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM contacts WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}
