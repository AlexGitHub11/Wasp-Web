<?php
if (isset($_GET['decrypt']) && $_GET['decrypt'] === 'true') {
    $encryptedImagePath = 'images/cert.enc';
    $key = 'thisisnotasecurekey'; 
    $encryptedDataWithIv = base64_decode(file_get_contents($encryptedImagePath));

    $ivLength = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($encryptedDataWithIv, 0, $ivLength);

    // Combine iv and encrypted data
    $encryptedData = substr($encryptedDataWithIv, $ivLength);

    // Decrypt image
    $decryptedData = openssl_decrypt($encryptedData, 'aes-256-cbc', $key, 0, $iv);

    // set browser to interpret an image
    header('Content-Type: image/png');
    echo $decryptedData;
    exit;
}
?>
