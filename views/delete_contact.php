<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer un contact</title>
</head>

<body>
    <h1>Supprimer un contact</h1>
    <p>Êtes-vous sûr de vouloir supprimer ce contact ?</p>
    <p>Nom: <?= $contact->nom ?></p>
    <p>Prénom: <?= $contact->prenom ?></p>
    <p>Email: <?= $contact->email ?></p>
    <p>Téléphone: <?= $contact->telephone ?></p>

    <form action="index.php?page=delete&id=<?= $contact->id ?>" method="POST">
        <input type="submit" value="Confirmer">
    </form>
</body>

</html>