<?php
// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'contacts');
define('DB_USER', 'root');
define('DB_PASS', '');

// Connexion à la base de données
function getPDO()
{
    try {
        return new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}

// Fonction d'autoloading
function myAutoloader($className)
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $classFile = __DIR__ . '/classes/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once($classFile);
    }
}

// Enregistrez la fonction d'autoloading
spl_autoload_register('myAutoloader');
