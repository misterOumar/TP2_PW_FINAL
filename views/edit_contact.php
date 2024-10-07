<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un contact</title>
</head>

<body>
    <h1>Modifier un contact</h1>
    <form action="index.php?action=edit&id=<?= $contact->id ?>" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?= $contact->nom ?>" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" value="<?= $contact->prenom ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $contact->email ?>"><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" id="telephone" value="<?= $contact->telephone ?>" required><br>

        <input type="submit" value="Modifier">
    </form>
</body>

</html>