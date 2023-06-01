<?php
$username = 'yusufjonov707';
$url = 'https://i.instagram.com/api/v1/users/web_profile_info/?username=' . $username;
$headers = array(
    'X-IG-App-ID: 936619743392459',
);
$options = array(
    CURLOPT_URL => $url,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true,
);
$curl = curl_init();
curl_setopt_array($curl, $options);
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
$user_id = $data['data']['user']['id'];
$user_image = $data['data']['user']['profile_pic_url_hd'];

echo '<img src="' . $imageUrl . '" alt="Instagram Image">';
?>
