<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un contact</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper">

        <h1>Modifier un contact</h1>
        <form action="index.php?page=edit&id=<?= $contact->id ?>" method="POST">
            <label for="nom">Nom:</label>
            <div class="input-field">
                <input type="text" name="nom" id="nom" value="<?= $contact->nom ?>" required><br>
                <i class="bx bx-user"></i>
            </div>

            <label for="prenom">Prénom:</label>
            <div class="input-field">
                <input type="text" name="prenom" id="prenom" value="<?= $contact->prenom ?>" required><br>
                <i class="bx bx-user"></i>
            </div>


            <label for="email">Email:</label>
            <div class="input-field">
                <input type="email" name="email" id="email" value="<?= $contact->email ?>"><br>
                <i class='bx bx-envelope'></i>
            </div>

            <label for="telephone">Téléphone:</label>
            <div class="input-field">
                <input type="text" name="telephone" id="telephone" value="<?= $contact->telephone ?>" required><br>
                <i class='bx bx-phone'></i>
            </div>

            <button type="submit" value="Modifier" class="button">
                <i class='bx bx-save'></i> Modifier
            </button>
        </form>
    </div>
</body>

</html>