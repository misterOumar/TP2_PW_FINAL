<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/AddContactController.php';
require_once 'controllers/EditContactController.php';
require_once 'controllers/DeleteContactController.php';

$action = $_GET['action'] ?? 'home';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'add':
        $controller = new AddContactController();
        $controller->index();
        break;
    case 'edit':
        if ($id) {
            $controller = new EditContactController();
            $controller->index($id);
        }
        break;
    case 'delete':
        if ($id) {
            $controller = new DeleteContactController();
            $controller->index($id);
        }
        break;
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
