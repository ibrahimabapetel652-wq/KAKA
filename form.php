<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>INSCRIPTION CLIENT</title>

<?php
$server="localhost";
$utilisateur="root";
$code="";
$bd="bd_ke";
$connect=mysqli_connect($server,$utilisateur,$code,$bd);
if(!$connect){
  die("server non connecter");
}

   if(isset($_POST['valider'])){

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['telephone'];
    $sexe=$_POST['sexe'];
    $quartier=$_POST['quartier'];
    $ampoule=$_POST['ampoules'];
    $prix=$_POST['prix'];
    $date=$_POST['date'];
    $pass=$_POST['pass'];
  
$select="INSERT INTO client(NOM,PRENOM,NUMERO,SEXE,QUARTIER,NOMBRE_EMPOULE,PRIX_EMPOULE,DA_TE,PASS_WORD) values ('$nom','$prenom', 
         '$tel','$sexe','$quartier','$ampoule','$prix','$date','$pass')" ;  
      if(mysqli_query($connect,$select)){
         header("location:api.php");
      }  
       

 
  }

  function genererMotDePasse($longueur = 8){
    $caracteres='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPKRSTUVWXYZ0123456789';
    $max= strlen($caracteres) - 1;
    $mot='';
    for( $i=0; $i< $longueur; $i++){
      $mot=$caracteres[random_int(0, $max)];
    }
    return $mot;
  }
  $password_auto=genererMotDePasse(10);
  ?>


  <style>
    /* Style global */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Carte du formulaire */
    .form-container {
      background: #ffffff;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
      width: 400px;
      animation: fadeIn 1s ease-in-out;
      margin-top: 30%
    }

    /* Titre */
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Lab-els et champs */
    label {
      font-weight: bold;
      color: #444;
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    input[type="text"],
    input[type="tel"],
    input[type="number"],
    input[type="radio"] + label,
    input[readonly] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="number"]:focus {
      border-color: #4facfe;
      box-shadow: 0 0 8px rgba(79, 172, 254, 0.4);
      outline: none;
    }

    /* Radios */
    .radio-group {
      margin-bottom: 15px;
    }
    .radio-group label {
      margin-right: 15px;
      font-weight: normal;
    }

    /* Boutons */
    .button-group {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }

    button {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-valider {
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      color: white;
    }

    .btn-valider:hover {
      background: linear-gradient(135deg, #00f2fe, #4facfe);
      transform: translateY(-2px);
    }

    .btn-annuler {
      background: #f44336;
      color: white;
    }

    .btn-annuler:hover {
      background: #d32f2f;
      transform: translateY(-2px);
    }

    /* Animation d’apparition */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

  <script>
    function calculerPrix() {
      let prixUnitaire = 4000; // prix d'une ampoule
      let nbAmpoules = document.getElementById("ampoules").value;
      let total = nbAmpoules * prixUnitaire;
      document.getElementById("prix").value = total + " FCFA";
    }
  </script>
</head>
<body>
  <div class="form-container">
    <h2>Inscription Client</h2>
    <form method="post" action="">
      <label for="Nom">Nom:</label>
      <input type="text" id="Nom" name="nom">

      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom">

      <label for="telephone">Numéro de téléphone:</label>
      <input type="tel" id="telephone" name="telephone">

      <label>Sexe:</label>
      <div class="radio-group">
       Masculin <input type="radio" id="sexe" name ="sexe"  value="masculin">
        
        <input type="radio" id="sexe" name ="sexe" value="feminin">
        Féminin
      </div>

      <label for="quartier">Quartier:</label>
      <input type="text" id="quartier" name="quartier">

      <label for="ampoules">Nombre d’ampoules:</label>
      <input type="number" id="ampoules" name="ampoules" min="1" oninput="calculerPrix()">

      <label for="prix">Prix convenu:</label>
      <input type="text" id="prix" name="prix" readonly>

      <label for="prix">Date:</label>
      <input type="date" id="date" name="date">

      <label for="prix">Mot de passe :</label>
      <input type="password" id="pass" name="pass" readonly require value="<?php echo htmlspecialchars($password_auto, ENT_QUOTES);?>">
      <button type="button" onclick="copierMotDePasse()">Copier </button>
    
      <div class="button-group">
        <br><br>
        <button type="submit" class="btn-valider" name="valider">Valider</button>
        <button type="reset" class="btn-annuler" name="annuler">Annuler</button>
      </div>
    </form>
  </div>

  <script>
    function copierMotDePasse(){
      const el = document.getElementById('pass');
      if(navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(el.value).then(()=>{alert('Mot de passe copie 👌'); } );

      }else {
        el.select();
        document.execCommand('copy');
        alert('Mot de passe copier ✅');
      }
    }
  </script>

</body>

</html>