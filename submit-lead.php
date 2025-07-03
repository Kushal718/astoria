<?php
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$stmt = $pdo->prepare("INSERT INTO leads (name, email, mobile) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $mobile]);

$postData = [
    "DataFrom" => "T",
    "ApiKey" => "a28cc43c-526d-4010-970e-0d0e92c18902",
    "EnquiryDate" => date('Y-m-d'),
    "FirstName" => $name,
    "MobileNo" => $mobile,
    "Email" => $email,
    "Source" => "Digitals",
    "SourceDetail" => "WebSite"
];

$ch = curl_init("https://nirman.maksoftbox.com/MDocBoxAPI/MdocAddEnquiryORTeleCalling");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);

$response = curl_exec($ch);
curl_close($ch);

echo "<script>
  alert('Form submitted successfully!');
  window.history.back(); 
</script>";
?>