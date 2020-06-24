<?php

if (!$cert_store = file_get_contents("../openssl/bigakeypair.p12")) {
    echo "Error: Unable to read the cert file\n";
    exit;
}

if (openssl_pkcs12_read($cert_store, $cert_info, "")) {
    // private key
    // echo ("Private key : ");
    // echo ($cert_info['pkey']);

    // certificate
    // echo ($cert_info['cert']);
} else {
    echo "Error: Unable to read the cert store.\n";
    exit;
}
