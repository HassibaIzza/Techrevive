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

    // Récupération de l'email du formulaire
    $email = $_POST['email'];

    // Vérification si l'email existe déjà dans la base de données
    $sql_check_email = "SELECT * FROM utilisateurs WHERE email = '$email'";
    $result_check_email = $conn->query($sql_check_email);

    if ($result_check_email->num_rows > 0) {
        // L'email existe déjà, afficher un message d'erreur
        echo "Erreur : Cet email est déjà utilisé. Veuillez en choisir un autre.";
    } else {
        // L'email n'existe pas encore, procéder à l'insertion
        // Récupération des autres valeurs du formulaire
        $nom = $_POST['nom'];
        $motdepasse = $_POST['motdepasse'];
        $confirmer_motdepasse = $_POST['confirmer_motdepasse']; 
        $date_naissance = $_POST['date_naissance'];
        $role = $_POST['role'];
        $numero_tel = isset($_POST['numero_tel']) ? $_POST['numero_tel'] : null; // Champ supplémentaire pour le réparateur
        $type_services = isset($_POST['type_services']) ? $_POST['type_services'] : null; // Champ supplémentaire pour le réparateur
        $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : null; // Champ supplémentaire pour le fabricant

        if ($motdepasse !== $confirmer_motdepasse) {
          // Afficher un message d'erreur si les mots de passe ne correspondent pas
          echo "Erreur : Les mots de passe ne correspondent pas.";
          exit; // Arrêter l'exécution du script
      }

        // Requête SQL pour insérer les données dans la table utilisateurs
        $sql = "INSERT INTO utilisateurs (nom, email, motdepasse, date_naissance, role";

        // Ajout des champs supplémentaires en fonction du rôle sélectionné
        if ($role === 'reparateur') {
            $sql .= ", numero_tel, type_services";
        } else if ($role === 'fabriquant') {
            $sql .= ", numero_tel, adresse";
        }

        $sql .= ") VALUES ('$nom', '$email', '$motdepasse', '$date_naissance', '$role'";

        // Ajout des valeurs des champs supplémentaires en fonction du rôle sélectionné
        if ($role === 'reparateur') {
            $sql .= ", '$numero_tel', '$type_services'";
        } else if ($role === 'fabriquant') {
            $sql .= ", $numero_tel,'$adresse'";
        }

        $sql .= ")";

        if ($conn->query($sql) === TRUE) {
            echo "Nouvel enregistrement créé avec succès";
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
    }

    // Fermeture de la connexion
    $conn->close();
}
?>

