<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Supprimer un contact</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper">

        <h1>Supprimer un contact</h1>
        <p>Êtes-vous sûr de vouloir supprimer ce contact ?</p>
        <p>Nom: <?= $contact->nom ?></p>
        <p>Prénom: <?= $contact->prenom ?></p>
        <p>Email: <?= $contact->email ?></p>
        <p>Téléphone: <?= $contact->telephone ?></p>

        <form action="index.php?page=delete&id=<?= $contact->id ?>" method="POST">
            <button type="submit" value="Confirmer" class="button delete">
                <i class="bx bx-trash"></i> Supprimer le contact
            </button>
        </form>
    </div>
</body>

</html>