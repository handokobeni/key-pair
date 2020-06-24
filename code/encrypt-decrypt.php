<?php

include('readpkcs.php');

echo ("\n==============================================================\n\n");
// Encrypt use public key
$plaintext = "Heloo I'm John Doe";
openssl_public_encrypt($plaintext, $chiper, $cert_info['cert']);
$encrypted = base64_encode($chiper);
echo "Encrypt result : " . $encrypted;

// Decrypt use private key
openssl_private_decrypt(base64_decode($encrypted), $decrypted, $cert_info['pkey']);
echo "\n\nDecrypt result : " . $decrypted;
