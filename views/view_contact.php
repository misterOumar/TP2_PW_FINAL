<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détail contact</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper">

        <h1>Détail d'un contact</h1>
        <label for="nom">Nom:</label>
        <div class="input-field">
            <input type="text" name="nom" id="nom" value="<?= $contact->nom ?>" disabled><br>
            <i class="bx bx-user"></i>
        </div>

        <label for="prenom">Prénom:</label>
        <div class="input-field">
            <input type="text" name="prenom" id="prenom" value="<?= $contact->prenom ?>" disabled><br>
            <i class="bx bx-user"></i>
        </div>


        <label for="email">Email:</label>
        <div class="input-field">
            <input type="email" name="email" id="email" value="<?= $contact->email ?>" disabled><br>
            <i class='bx bx-envelope'></i>
        </div>

        <label for="telephone">Téléphone:</label>
        <div class="input-field">
            <input type="text" name="telephone" id="telephone" value="<?= $contact->telephone ?>" disabled><br>
            <i class='bx bx-phone'></i>
        </div>

    </div>
</body>

</html>