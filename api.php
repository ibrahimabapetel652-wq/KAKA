<?php
// Clés CinetPay (remplace par tes vraies clés)
$site_id = "105906080";
$api_key = "208085892368b942b402b2c8.79882922";

// URL callback et retour
$notify_url = "https://tonsite.com/callback";
$return_url = "https://tonsite.com/retour";

// Récupération des données envoyées par money.php
$customer_name   = $_POST['customer_name'] ?? 'Client';
$customer_email  = $_POST['customer_email'] ?? 'test@example.com';
$customer_phone  = $_POST['customer_phone'] ?? '670000000';
$amount          = $_POST['amount'] ?? 1000;

// Préparation des données de la transaction
$data = [
    "transaction_id" => uniqid(),   // ID unique
    "amount" => (int) $amount,
    "currency" => "XAF",
    "description" => "Paiement KAKA ENERGIE",
    "site_id" => $site_id,
    "apikey" => $api_key,   // ✅ ajouté ici
    "notify_url" => $notify_url,
    "return_url" => $return_url,
    "customer_name" => $customer_name,
    "customer_surname" => "",
    "customer_email" => $customer_email,
    "customer_phone_number" => $customer_phone,
    "customer_address" => "Douala",
    "customer_city" => "Douala",
    "customer_country" => "CM",
];

// Envoi à CinetPay
$payload = json_encode($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api-checkout.cinetpay.com/v2/payment");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// ⚠️ Décommenter ces lignes seulement si problème SSL en localhost
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec($ch);
curl_close($ch);

// Décodage de la réponse
$result = json_decode($response, true);

// Vérification et redirection
if (isset($result['data']['payment_url'])) {
    $payment_url = $result['data']['payment_url'];
    header("Location: " . $payment_url);
    exit;
} else {
    echo "Erreur lors de la génération du paiement :<br>";
    echo "<pre>" . print_r($result, true) . "</pre>";
}
?>
