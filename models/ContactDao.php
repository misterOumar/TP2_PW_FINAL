<?php
require_once 'config/config.php';
require_once 'ContactModel.php';

class ContactDAO
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllContacts()
    {
        $query = "SELECT * FROM contacts";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $contacts = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $contact = new ContactModel($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['telephone']);
            array_push($contacts, $contact);
        }
        return $contacts;
    }

    public function getContactById($id)
    {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new ContactModel($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['telephone']);
        }
        return null;
    }

    public function addContact($nom, $prenom, $email, $telephone)
    {
        $query = "INSERT INTO contacts (nom, prenom, email, telephone) VALUES (:nom, :prenom, :email, :telephone)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        return $stmt->execute();
    }

    public function updateContact($id, $nom, $prenom, $email, $telephone)
    {
        $query = "UPDATE contacts SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        return $stmt->execute();
    }

    public function deleteContact($id)
    {
        $query = "DELETE FROM contacts WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
