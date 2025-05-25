<?php
require_once 'vendor/autoload.php'; // Twilio PHP kütüphanesi

use Twilio\Rest\Client;

$account_sid = 'ACa7c05b3027183ca67dfd2c889446871e';
$auth_token = 'bc33b265c21e77ac80865674a4ed1254';
$twilio_number = '+18383683513';

$client = new Client($account_sid, $auth_token);

$repair_id = $_POST['repair_id'];
$phone = $_POST['phone'];

$message = $client->messages->create(
  $phone,
  [
    'from' => $twilio_number,
    'body' => "Tesatv Servisi: $repair_id numaralı tamir işleminiz tamamlanmıştır."
  ]
);

echo json_encode(['success' => true]);
?>