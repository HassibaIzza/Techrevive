<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - TechRevive</title>
    <link rel="stylesheet" href="styles.css">
  


    <style>
      .container {
          margin-top: 20px; 
        }

        h2 {
          margin-bottom: 20px; 
        }
        .form-group input[type="checkbox"] {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px; 
.form-group label {
  display: inline-block;
  svertical-align: middle;
}
      </style>
</head>
<body>

<div class="container">
    <h2>Créer un compte TechRevive</h2>
    <form action="traitement.php" method="POST">
    
        <div class="form-group">
        
            <input type="text" id="nom" name="nom" placeholder="Nom complet" required>
        </div>
        <div class="form-group">
        
            <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
        </div>
        <div class="form-group">
          
            <input type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
        
            <input type="password" id="confirmer_motdepasse" name="confirmer_motdepasse" placeholder="Confirmer le mot de passe" required>
        </div>
        <div class="form-group">
          
            <input type="date" id="date_naissance" name="date_naissance" required>
        </div>

        <div class="form-group">
          
            <select id="role" name="role" required>
                <option value="">Sélectionner un rôle</option>
                <option value="reparateur">Réparateur</option>
                <option value="client">Client</option>
                <option value="fabriquant">Fabriquant</option>
            </select>
        </div>

        <div id="champsSupplementaires" style="display: none;">
            <div class="form-group" id="champsReparateur">
              
                <input type="text" id="numero_tel" name="numero_tel" placeholder="Numéro de téléphone">
                
                <select id="type_services" name="type_services">

                  <option value="">Sélectionner un service</option>
                  <option value="Réparation de smartphones">Réparation de smartphones</option>
                  <option value="Réparation de tablettes">Réparation de tablettes</option>
                  <option value="Réparation d ordinateurs portables et de PC">Réparation d ordinateurs portables et de PC</option>
                  <option value="Réparation d appareils électroménagers">Réparation d appareils électroménagers</option>
              </select>
            </div>
            <div class="form-group" id="champsFabriquant">
              
                <input type="text" id="adresse" name="adresse" placeholder="adress">
                
                <input type="text" id="numero_tel" name="" placeholder="Numéro de téléphone">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" value="add_data" name="ok">S'inscrire</button>
        <div class="form-group">
          <input type="checkbox" id="robotCheckbox" name="robotCheckbox">
          <label for="robotCheckbox">
              Je ne suis pas un robot <i class="fas fa-robot"></i>
          </label>
      </div>
      <script>
        function validateForm() {
            
            if (!document.getElementById("robotCheckbox").checked) {
                alert("Veuillez cocher la case 'Je ne suis pas un robot'");
                return false; // Empêche l'envoi du formulaire si la case n'est pas cochée + apl a capatcha
            }
            return true; 
        }
    </script>

    </form>
    <p>Vous avez déjà un compte ? <a href="login">Connectez-vous ici</a>.</p>

</div>

<script>
document.getElementById('role').addEventListener('change', function() {
    var role = this.value;
    var champsSupplementaires = document.getElementById('champsSupplementaires');
    var champsReparateur = document.getElementById('champsReparateur');
    var champsFabriquant = document.getElementById('champsFabriquant');

    if (role === 'reparateur') {
        champsSupplementaires.style.display = 'block';
        champsReparateur.style.display = 'block';
        champsFabriquant.style.display = 'none';
    } else if (role === 'fabriquant') {
        champsSupplementaires.style.display = 'block';
        champsReparateur.style.display = 'none';
        champsFabriquant.style.display = 'block';
    } else {
        champsSupplementaires.style.display = 'none';
        champsReparateur.style.display = 'none';
        champsFabriquant.style.display = 'none';
    }
});
document.getElementById('role').addEventListener('change', function() {
    var role = this.value;
    var typeServicesSelect = document.getElementById('type_services');

  
    if (role === 'reparateur') {
        typeServicesSelect.setAttribute('required', 'required');
    } else {
        
        typeServicesSelect.removeAttribute('required');
    }
});


</script>

</body>
</html>
