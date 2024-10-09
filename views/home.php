<!-- views/home.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <title>Liste des contacts</title>
</head>

<body>
    <div class="wrapper">


        <h1>Liste des contacts 👍</h1>

        <!-- Affichage des messages d'erreur ou de succès -->
        <?php if (isset($_SESSION['flash_message'])): ?>
            <div class="flash-message <?= $_SESSION['flash_message']['type'] ?>"><?= $_SESSION['flash_message']['message'] ?></div>
            <?php unset($_SESSION['flash_message']); ?>
        <?php endif ?>

        <div class="flex">


            <div class="input-field">
                <input type="text" name="search" id="searchInput" placeholder="Rechercher un contact..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                <i class='bx bx-search-alt-2'></i>
            </div>


            <a href="index.php?page=add" class="button">Ajouter un contact</a>
        </div>


        <p>Nombre de contacts : <?= count($contacts) ?> </p>

        <table class="contactsTable"">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="contactTableBody">
            <?php if (count($contacts) > 0): ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= htmlspecialchars($contact->getNom()) ?></td>
                        <td><?= htmlspecialchars($contact->getPrenom()) ?></td>
                        <td><?= htmlspecialchars($contact->getEmail()) ?></td>
                        <td><?= htmlspecialchars($contact->getTelephone()) ?></td>
                        <td class="action">
                            <a href="index.php?page=view&id=<?= $contact->getId() ?>"><i class='bx bx-show'></i></a>
                            <a href="index.php?page=edit&id=<?= $contact->getId() ?>"><i class='bx bx-pencil'></i></a>
                            <a href="index.php?page=delete&id=<?= $contact->getId() ?>"><i class='bx bx-trash-alt'></i></a>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/JS/app.js">
     
    </script>

</body>

</html>