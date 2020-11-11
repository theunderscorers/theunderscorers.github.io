<?php 
session_start(); 
if(isset($_GET["fbp"])) 
 $_SESSION["fbp"] = $_GET["fbp"];?>
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>
        Danke! für Ihre Bestellung!
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=320" />
    <meta name="MobileOptimized" content="width=320" />
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link media="all" rel="stylesheet" type="text/css" href="./confirm/order-style.css">
    <!--<script type="text/javascript" src="https://cdn.leadbit.com/js/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.leadbit.com/js/leadbit_success.js"></script>-->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?=$_SESSION["fbp"]?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=810813902823020&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>

    <div id="wrapper">
        <div class="container">
            <span class="decoration">
            </span>
            <div class="order-block">
                <div class="text-holder">
                    <h2><span>Danke!</span> für Ihre Bestellung!</h2>
                    <p>Unser Operator wird sich mit Ihnen für die Bestätigung der Bestellung verbinden. Bitte
                        deaktivieren Sie den Anrufbeantworter, damit unser Mitarbeitet Sie erreichen kann.
                        Die Zustellung verwirklicht sich per Kurier oder per Post. Die Bezahlung - beim Erhalten! </p>
                </div>
                <div class="text-box">
                    <h2>
                        Nehmen Sie an <span>der Aktion teil.</span>
                    </h2>
                    <p>
                        Um an der Aktion teilzunehmen und den Status Ihrer Bestellung zu verfolgen, geben Sie Ihre
                        Email-Adresse ein und drücken Sie auf „Speichern“!
                    </p>
                    <form class="order-form" id="email_form" action="#">
                        <fieldset>
                            <div class="text">
                                <input type="email" id="email" placeholder="Geben Sie Ihre Email-Adresse ein..." name="email">
                            </div>
                            <input data-error="Geben Sie Ihre Email-Adresse ein..." data-success="  Danke! für Ihre Bestellung!"
                                class="btn-save" type="submit" value="Speichern">
                        </fieldset>

                    </form>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>

</body>

</html>