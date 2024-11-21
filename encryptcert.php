<?php
$imagePath = 'images/cert.png';
$encryptedImagePath = 'images/cert.enc';
$key = 'thisisnotasecurekey'; 
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

$imageData = file_get_contents($imagePath);
$encryptedData = openssl_encrypt($imageData, 'aes-256-cbc', $key, 0, $iv);

 // Combine iv and encrypted data
$encryptedDataWithIv = base64_encode($iv . $encryptedData);

// encrypt data to file path 
file_put_contents($encryptedImagePath, $encryptedDataWithIv);
echo 'Image encrypted successfully.';
?>
