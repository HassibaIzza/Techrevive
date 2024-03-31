<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - TechRevive</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Importez les Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #136fe0;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0b1af8;
        }

        .google-logo {
            width: 24px;
            height: auto;
            margin-right: 10px;
            vertical-align: middle;
        }

        .b2 {
            display: inline-block;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
        }

        .b2:hover {
            text-decoration: underline;
        }

        /* Media query pour les petits écrans */
        @media screen and (max-width: 480px) {
            .container {
                padding: 10px;
            }
        }
    
      .container {
          margin-top: 20px; 
        }

        h2 {
          margin-bottom: 20px; 
    </style>

</head>
<body>
  <div class="container">
    <h1>Bienvenue sur TechRevive</h1>
    
    <form action="connexion.php" method="POST">
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
        </div>
        <div class="form-group">
            <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="login-button">Se connecter</button>
    </form>
    <div class="b2">
        <img class="google-logo" src="/teckrevive/public/OIP.png" alt="Google Logo">
        <span onclick="window.location.href = 'https://accounts.google.com';">Se connecter avec Google</span>
    </div>
    <p>Pas encore de compte ? <a href="form">Inscrivez-vous ici</a>.</p>
</div>
</body>
</html>
