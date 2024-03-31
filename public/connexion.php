<?php
// Vérification si la requête est une requête POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données (à remplacer avec vos propres informations de connexion)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jsbdd";

    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Récupération des valeurs du formulaire
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    // Requête SQL pour vérifier les informations de connexion dans la table utilisateurs
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND motdepasse = '$motdepasse'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur est connecté avec succès
        echo "Bienvenue! Vous êtes connecté.";
    } else {
        // Les informations de connexion sont incorrectes, afficher un message d'erreur
        echo "Erreur : Adresse e-mail ou mot de passe incorrect.";
    }

    // Fermeture de la connexion
    $conn->close();
}
?>
