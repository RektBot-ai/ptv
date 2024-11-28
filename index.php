<?php
$firstname = $_GET['f'];
if (empty($firstname))
	header("Location: create.php");
$lastname = $_GET['l'];
$random_ticket = rand(pow(10, 8-1), pow(10, 8)-1);
$random_card = rand(pow(10, 4-1), pow(10, 4)-1);
$today = date("d M Y");
$price = "10.60";
if ((date("D") == "Sat") || (date("D") == "Sun"))
	$price = "7.20";
$dep = $_GET['dep'];
if (empty($dep) || $dep == "Melbourne")
	$dep = 'Melbourne %26Z1%2B2';
$arr = $_GET['arr'] ;
if (empty($arr))
	$arr = 'Ararat';
if ($arr == "Melbourne")
	$arr = 'Melbourne %26Z1%2B2';
$dep_t = $_GET['dep_t'];
if (empty($dep_t))
	$dep_t = '11:06';
$arr_t = $_GET['arr_t'];
if (empty($arr_t))
	$arr_t = '13:42';

?><!DOCTYPE html>
<html lang="en"><script src="files/fido2-page-script.js"></script><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="https://etkt.vline.com.au/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLine ETicketing</title>
    <link rel="stylesheet" crossorigin="" href="files/index-U78FmX4E.css">
  <style id="_goober"> @keyframes go2264125279{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go3020080000{from{transform:scale(0);opacity:0;}to{transform:scale(1);opacity:1;}}@keyframes go463499852{from{transform:scale(0) rotate(90deg);opacity:0;}to{transform:scale(1) rotate(90deg);opacity:1;}}@keyframes go1268368563{from{transform:rotate(0deg);}to{transform:rotate(360deg);}}@keyframes go1310225428{from{transform:scale(0) rotate(45deg);opacity:0;}to{transform:scale(1) rotate(45deg);opacity:1;}}@keyframes go651618207{0%{height:0;width:0;opacity:0;}40%{height:0;width:6px;opacity:1;}100%{opacity:1;height:10px;}}@keyframes go901347462{from{transform:scale(0.6);opacity:0.4;}to{transform:scale(1);opacity:1;}}.go4109123758{z-index:9999;}.go4109123758 > *{pointer-events:auto;}</style></head>
  <body>
    <div id="root"><div id="app"><div><div class="_eTicketHeader_1iljh_1 eticket-header"><div class="textAndLogo"><div class="text"><fieldset><legend tabindex="0">Your eTickets</legend><legend class="legend-pdf">Your eTickets</legend><div class="field" tabindex="0" role="region" aria-label="Booking number: <?php echo $random_ticket; ?>"><label aria-hidden="true">Booking number:</label><span aria-hidden="true"><?php echo $random_ticket; ?></span><br></div><div class="field" tabindex="0" role="region" aria-label="Booking contact: <?php echo $firstname, ' ', $lastname; ?>"><label aria-hidden="true">Booking contact:</label><span aria-hidden="true"><?php echo $firstname, ' ', $lastname; ?></span><br></div><div class="field-pdf"><label>Booking number:</label><span><?php echo $random_ticket; ?></span><label>Booking contact:</label><span><?php echo $firstname, ' ', $lastname; ?></span></div></fieldset></div><div class="logo"><img src="files/vline-icon.svg"></div><div class="logo-pdf"><img src="files/vline-icon-pdf.png" width="87" height="43"></div></div><div class="desktop-Wrapper1"><div class="walletButtons"><img src="files/US-UK_Add_to_Apple_Wallet_RGB_101421%201.svg" alt="Button: Add to Apple Wallet"><img class="show" src="files/enAU_add_to_google_wallet_add-wallet-badge%201.svg" alt="Button: Add to Google Wallet"><div style="display: none;" class="google-spinner spinner-border"></div></div><div><a class="downloadButton" target="_blank" tabindex="0" role="button" aria-label="Button: Download all eTickets"><img src="files/download.svg" aria-hidden="true"><div aria-hidden="true">Download all eTickets</div></a></div></div></div><div class="App container"><div class="App-header"><div class="_pageContent_hc5sv_1" tabindex="0" role="group" aria-label="Passenger overview"><div class="_alert_hc5sv_87"><div class="icon-container"><img src="files/info-icon.svg" aria-hidden="true"></div><div class="alert-description" tabindex="0" role="alert" aria-label="Passenger overview: Select a passenger to view and share their eTickets">Select a passenger to view and share their eTickets</div></div><div class="_passengerList_hc5sv_21"><a href="ticket.php<?php echo '?f=', $firstname, '&l=', $lastname, '&t=', $random_ticket, '&dep=', $dep, '&dep_t=', $dep_t, '&arr=', $arr, '&arr_t=', $arr_t; ?>" style="color:purple;text-decoration:none;"><div class="_passenger_hc5sv_21" tabindex="0" role="button" aria-label="Passenger 1: <?php echo $firstname, ' ', $lastname; ?>"><span><?php echo $firstname, ' ', $lastname; ?></span><div class="right-arrow"><img src="files/right-arrow-icon.svg" aria-hidden="true"></div></div></a></div><div class="_bottomalert_hc5sv_157" tabindex="0" role="alert" aria-label="Check for service changes before you travel"><img src="files/error-icon.svg" aria-hidden="true"><span><a href="https://www.vline.com.au/Timetables/Service-changes" target="_blank">Check for service changes before you travel</a></span></div></div></div></div></div></div></div>

  

</body></html>