<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des contacts</title>
</head>

<body>
    <h1>Liste des contacts</h1>
    <a href="index.php?action=add">Ajouter un nouveau contact</a>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact->nom ?></td>
                <td><?= $contact->prenom ?></td>
                <td><?= $contact->email ?></td>
                <td><?= $contact->telephone ?></td>
                <td>
                    <a href="index.php?action=view&id=<?= $contact->id ?>">Voir</a>
                    <a href="index.php?action=edit&id=<?= $contact->id ?>">Modifier</a>
                    <a href="index.php?action=delete&id=<?= $contact->id ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>