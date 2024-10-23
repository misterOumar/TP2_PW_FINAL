<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div class="wrapper">
        <h1>Oups 404 😢!</h1>
        <h2>Page Non trouvée</h2>
        <p>
            Vous avez tenté d'accéder à une page qui n'existe . Vous pouvez retourner à la page précédente en cliquant sur le bouton ci-dessous. 😊
        </p>
        <button onclick="goBack()" class="button">Retour</button>
        <script>

            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>

</html>