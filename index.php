<?php

// Inclure la configuration
require_once 'config.php';

// Gérer le routage
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : null; // Récupérer l'ID si présent

// Associer les pages aux contrôleurs
$controllers = [
'home' => 'HomeController',
'add' => 'AddContactController',
'view' => 'ViewContactController',
'edit' => 'EditContactController',
'delete' => 'DeleteContactController'
];

// Vérifier si le contrôleur existe
if (array_key_exists($page, $controllers)) {
$controllerName = $controllers[$page];
$controllerFile = __DIR__ . '/controllers/' . $controllerName . '.php';

if (file_exists($controllerFile)) {
require_once $controllerFile;

$controller = new $controllerName(); // Instancier le contrôleur

// Appeler la méthode index avec l'ID (si applicable)
if ($id) {
$controller->index($id);
} else {
$controller->index();
}
} else {
echo "Le contrôleur $controllerName n'a pas pu être trouvé.";
}
} else {
echo "Page non trouvée.";
}