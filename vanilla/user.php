<?php 



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://app.iformbuilder.com/exzact/api/v60/profiles/469902/users");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

$userAccessToken = "07ed2b69140d63ca41a4672f627b5a74c3b90bfe";

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Bearer $userAccessToken"
));

$response = curl_exec($ch);
curl_close($ch);
var_dump($response);

?>