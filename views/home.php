<!-- views/home.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des contacts</title>
</head>

<body>
    <h1>Liste des contacts</h1>

    <!-- Formulaire de recherche -->
    <form action="index.php" method="GET">
        <input type="hidden" name="page" value="home"> <!-- Maintenir la page actuelle -->
        <input type="text" name="search" placeholder="Rechercher un contact..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit">Rechercher</button>
    </form>

    <a href="index.php?page=add">Ajouter un  contact</a>


    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($contacts) > 0): ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= htmlspecialchars($contact->getNom()) ?></td>
                        <td><?= htmlspecialchars($contact->getPrenom()) ?></td>
                        <td><?= htmlspecialchars($contact->getEmail()) ?></td>
                        <td><?= htmlspecialchars($contact->getTelephone()) ?></td>
                        <td>
                            <a href="index.php?page=view&id=<?= $contact->getId() ?>">Voir</a>
                            <a href="index.php?page=edit&id=<?= $contact->getId() ?>">Modifier</a>
                            <a href="index.php?page=delete&id=<?= $contact->getId() ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Aucun contact trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>