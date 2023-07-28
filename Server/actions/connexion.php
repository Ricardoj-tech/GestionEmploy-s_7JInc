<?php
// Récupérer les valeurs du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password_db = "";
$dbname = "bdemployees";

$conn = new mysqli($servername, $username, $password_db, $dbname);
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Requête pour vérifier si l'email existe dans la base de données
$sql = "SELECT idUser FROM connexion WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    // Email trouvé, vérifier le mot de passe
    $stmt->bind_result($userId);
    $stmt->fetch();
    // Rediriger vers la page souhaitée
    header("Location:../../admin.php"); 
} else {
    // Email non trouvé dans la base de données
    echo "Adresse e-mail non enregistrée.";
}

// Fermer la connexion à la base de données
$stmt->close();
$conn->close();
?>







