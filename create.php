<?php

$data = json_encode([
    'external_id' => 'invoice-0293402',
    'amount' => 100000,
    'payer_email' => 'customer@domain.com',
    'description' => 'Invoice Demo #123'
]);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.xendit.co/v2/invoices',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Basic eG5kX2RldmVsb3BtZW50X1A0cURmT3NzME9DcGw4UnRLclJPSGphUVlOQ2s5ZE41bFNmaytSMWw5V2JlK3JTaUN3WjNqdz09Og=='
    ),
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'Error: ' . curl_error($curl);
} else {
    echo 'Response: ' . $response;
}

curl_close($curl);
