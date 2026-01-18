<?php
// URL de test de l'API CinetPay
$url = "https://api-checkout.cinetpay.com/v2/payment";

// Initialisation de cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Pour tester uniquement la connexion (pas besoin de payload complet)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);

// Vérification des erreurs
if (curl_errno($ch)) {
    echo "❌ Erreur cURL : " . curl_error($ch);
} else {
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "✅ Connexion réussie, code HTTP : " . $http_code . "<br>";
    echo "Réponse brute : <pre>" . htmlspecialchars($response) . "</pre>";
}

curl_close($ch);
?>
