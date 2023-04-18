<?php
  
// $curl = curl_init();

// curl_setopt($curl, CURLOPT_URL, 'http://192.168.194.214:2222/dadaUsuari');
//  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// //curl_setopt($curl, CURLOPT_HTTPGET, true);
// // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
// $response = curl_exec($curl);
// $data = json_decode($response, true);
// var_dump($data);
// // curl_close($curl);
 echo crypt("byebye",'$2b$10$LJWWncONeKuAwgVU3kQz1O');
$data = array('email' => "de flutter", 'password' => "hellohellobyebye");
$options = array(
  'http' => array(
    'header'  => "Content-type: application/json; charset=UTF-8\r\n",
    'method'  => 'POST',
    'content' => json_encode($data),
  ),
);
$context  = stream_context_create($options);
$result = file_get_contents('http://192.168.194.214:2222/validar', false, $context);
var_dump($result);
// Handle the response from the REST API
if ($result === 'success') {
  // Login successful, redirect the user to the dashboard
  echo "Valid user";
  exit;
} else {
  // Login failed, show an error message
  echo 'Invalid email or password.';
}
?>
