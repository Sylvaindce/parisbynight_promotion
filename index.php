<!--
  AUTHOR: DECOMBE Sylvain
-->
<?php
if (file_exists('event.xml')) {
  $event_xml = simplexml_load_file('event.xml');
} else {
  exit('Echec lors de l\'ouverture du fichier xml.');
}
?>
<html>
<head>
 <meta charset="utf-8">
 <meta name="author" content="DECOMBE Sylvain">
 <title>ParisByNight - Shanghai Events</title>
 <link rel="stylesheet" href="css/style.css">
 <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
 <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
 <link rel="manifest" href="favicon/manifest.json">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
 <meta name="theme-color" content="#ffffff">
 <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
 <script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
 <div style="display: block; text-align: center;">
  <img src="img/parisbynight_logo.png" style="height: 35% !important; width: auto !important;"/>
</div>
<div style="background-color: #f4f7f8; padding: 5%; border-radius: 15px; color: #384047; margin-left: 5%; margin-right: 5%; margin-bottom: 5%;display: inline-block; width: 90%;text-align: center;">
 <h2 style="color: #37474f;">Try to win a drink</h2>
 <p>Just fulfil your WeChat ID to participate and try to win a drink for this event.</p>
 <div style="display: flex; margin-top: 20px;">
  <div class="container" id="formular">
    <p style="color: red;line-height: 20px;height: 20px;text-align: center;" id="error_api"></p>
    <form>
      <label style="margin-top: 30px;" for="wechatid">WeChat ID:</label>
      <input type="text" id="wechatid" name="wechatid">
      <p style="color: red;line-height: 20px;height: 20px;margin-bottom: 25px;" id="error_id"></p>
    </form>
    <button id="login_button" class="login" onclick="game()">Participate</button>
  </div>
  <div class="container" id="success">
    <h4 id="thk" style="color: #37474f;text-align: center;margin-top: 30px;margin-bottom: 30px;"></h4>
    <p>If you won, the promoter will contact you ;)</p>
  </div>
  <div class="container" style="text-align: center; background: none !important; border-left: 2px solid white; border-radius: 0px !important;margin: auto;">
    <h4>@<?php echo $event_xml->club[0]." // ".$event_xml->event[0]; ?></h4>
    <a href="<?php echo $event_xml->image[0]; ?>"><img class="cover" src="<?php echo $event_xml->image[0]; ?>" /></a>
    <div style="text-align: start; margin-top: 5px;">
      <p style="text-decoration-style: solid; text-decoration-color: black;text-decoration-line: underline;">Description:</p>
      <p><?php echo $event_xml->desc[0]; ?></p>
      <p style="text-align: center;margin-top: 15px;">Password: <?php echo $event_xml->password[0]; ?></p>
    </div>
  </div>
</div>
<div style="margin-top: 40px;">
  <h3>Contact WeChat</h3>
  <img style="border-radius: 25px;" src="img/qr_parisbynight.png" class="cover" />
</div>
</div>
</body>
</html>