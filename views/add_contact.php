<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un contact</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="wrapper">

        <h1>Ajouter un contact</h1>
        <form action="index.php?page=add" method="POST">
            <label for="nom">Nom:</label>
            <div class="input-field">
                <input type="text" name="nom" id="nom" placeholder="Nom" required><br>
                <i class="bx bx-user"></i>
            </div>

            <label for="prenom">Prénom:</label>
            <div class="input-field">
                <input type="text" name="prenom" id="prenom" placeholder=" Prénom" required><br>

                <i class="bx bx-user"></i>
            </div>

            <label for="email">Email:</label>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="Email" required>

                <i class='bx bx-envelope'></i>
            </div>


            <label for="telephone">Téléphone:</label>
            <div class="input-field">
                <input type="text" name="telephone" id="telephone" placeholder="+33......" required><br>
                <i class='bx bx-phone'></i>
            </div>

            <button type="submit" value="Ajouter" class="button">
                <i class='bx bx-plus-circle'></i> Ajouter
            </button>
        </form>
    </div>
</body>

</html>