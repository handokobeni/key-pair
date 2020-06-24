<?php

include('readpkcs.php');

echo ("\n==========================================================\n");

// Sign message use private key
$message = "halo php";
openssl_sign($message, $signature, $cert_info['pkey']);

// Signature verification use public key
if (openssl_verify($message, $signature, $cert_info['cert'])) {
    echo ("Verification success, signature and public key match");
} else {
    echo ("Verification failed, signature and public key not match");
}
