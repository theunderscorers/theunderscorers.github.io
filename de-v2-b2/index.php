<?php
$url=$_SERVER['HTTP_REFERER'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1" id="viewport">
    <link rel="stylesheet" href="src/app.css">
    <link rel="stylesheet" href="src/common.css">
    <title>Reduslim </title>
    <link rel="icon" href="https://gasmasters.ru/de-v2-b2/favicon_reduslim.ico">
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

<body class="lang_de page_home page_cod" data-yandex="49083545" data-google="UA-108035617-17">
    <script src="https://gasmasters.ru/de-v2-b2/counter.js"></script>
    <div class="page_wrapper">
        <div class="warning_block">
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="warning">
                                <p class="lt0"><span>ACHTUNG: </span>Wegen der großen Medienaufmerksamkeit haben wir nur noch einen begrenzten Lagerbestand. Am <i class="date"></i> hatten wir nur noch <i class="date">52</i> Artikel verfügbar.</p>
                                <div class="close"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="header">
            <div class="wrapper">
                <div class="top_line">
                    <img alt="" class="top_line__logo" src="src/logo.png">
                    <div class="top_line__description lt1">
                        Verbrennen Sie Fett, um Ihre Versteckte Formschöne Figur Freizusetzen
                    </div>
                </div>
                <div class="header__site_title">
                    <div class="header__container">
                        <h1 class="lt2">Verbrennen Sie Natürlich</h1>
                        <div class="lt3">
                            bis zu 40 Kilo Fett pro Kurs ohne Anstrengende
                        </div>
                        <div class="lt4">
                            Diäten und Übungen!
                        </div>
                    </div>
                </div>

                <div class="header__colums">
                    <div class="header__wooman"></div>
                    <div class="header__left">
                        <ul class="header__list">
                            <li class="header__list__item lt5">Unterdrückt den Appetit</li>
                            <li class="header__list__item lt6">Belebt den Körper</li>
                            <li class="header__list__item lt7">Beschleunigt die Fettverbrennung</li>
                            <li class="header__list__item lt8">Verhindert die Spaltung von Kohlenhydraten</li>
                            <li class="header__list__item lt9">Normalisiert den Stoffwechsel</li>
                        </ul>
                        <div class="header__product">
                            <img alt="" src="src/product.png">
                            <ul class="header__ser_list">
                                <li class="header__ser_item"></li>
                                <li class="header__ser_item"></li>
                                <li class="header__ser_item"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="form_top header__form" id="form2">
                            <div id="scroll_to_form"></div>
                            <div class="form_top__discount lt10">
                                -50%
                            </div>
                            <div class="form_top__price_container">
                                <div class="form_top__price_old">
                                    <div class="form_top__price_old_label lt11">
                                        Verkauf:
                                    </div>
                                    <div class="form_top__price_old_value"><span class="old_price_val">123</span> <span class="old_price_cur">€</span></div>
                                </div>
                                <div class="form_top__price_new">
                                    <div class="form_top__price_val">
                                        <span class="new_price_val">49</span> <span class="new_price_cur">€</span>
                                        <div class="form_top__icon_new lt14">
                                            Neu!
                                        </div>
                                    </div>
                                    <div class="form_top__price_label lt15">
                                        + <span>SCHNELLE </span>LIEFERUNG
                                    </div>
                                </div>
                            </div>
                            <div class="timer" data-timer>
                                <div class="unit days" data-pattern="00">
                                    <div class="value">00</div>
                                    <div class="desc lt16">
                                        Tage
                                    </div>
                                </div>
                                <div class="unit hours" data-pattern="{hnn}">
                                    <div class="value">00</div>
                                    <div class="desc lt17">
                                        Stunden
                                    </div>
                                </div>
                                <div class="unit minutes" data-pattern="{mnn}">
                                    <div class="value">00</div>
                                    <div class="desc lt18">
                                        Minuten
                                    </div>
                                </div>
                                <div class="unit seconds" data-pattern="{snn}">
                                    <div class="value">00</div>
                                    <div class="desc lt19">
                                        Sekunden
                                    </div>
                                </div>
                            </div>
                            <div class="form_top__title lt20">
                                Bestellen mit <span>50% Rabatt!</span>
                            </div>
                            <form class="form landing__form" action="lucky.php" method="POST" data-errorname="Dein Name ist ungültig" data-errorphone="Ihre Kontakt Handynummer ist ungültig" data-errorphonenum_first="Geben Sie bitte mindestens " data-errorphonenum_last=" Zeichen ein.">

                                <div class="form_top__field">
                                    <select class="county_select form_top__input" name="country"></select>
                                </div>
                                <div class="form_top__field form_top__field-name">
                                    <input class="form_top__input" type="text" data-error-name="Name" name="name" placeholder="Ihr Name:">
                                </div>
                                <div class="form_top__field form_top__field-phone">
                                    <input class="form_top__input" type="tel" data-error-name="Phone" name="phone" placeholder="Ihre Handynummer">
                                    <input type='hidden' name='utm_source' value='<?=$_GET['utm_source']?>' />

                  <input type='hidden' name='utm_content' value='<?=$_GET['utm_content']?>' />
                  <input type='hidden' name='utm_campaign' value='<?=$_GET['utm_campaign']?>' />
                  <input type='hidden' name='utm_term' value='<?=$_GET['utm_term']?>' />
                  <input type='hidden' name='utm_medium' value='<?=$_GET['utm_medium']?>' />
                  <input type='hidden' name='subid' value='<?=$_GET['subid']?>' />
                  <input type='hidden' name='subid1' value='<?=$_GET['pixel']?>' />
                  <input type='hidden' name='subid2' value='<?=$_GET['subid2']?>' />
                  <input type='hidden' name='subid3' value='<?=$_GET['subid3']?>' />
                                </div>

                                <button class="submit_form form_top__submit" type="submit"><span class="big lt22">BESTELLEN</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="tv_logos">
            <div class="wrapper tv_logos__wrapper">
                <div class="tv_logos__label lt23">
                    Wie gesehen bei:
                </div>
                <div class="tv_logos__list">
                    <div class="tv_logos__item"><img src="src/logo_tv_1.png" alt=""></div>
                    <div class="tv_logos__item"><img src="src/logo_tv_2.png" alt=""></div>
                    <div class="tv_logos__item"><img src="src/logo_tv_3.png" alt=""></div>
                    <div class="tv_logos__item"><img src="src/logo_tv_4.png" alt=""></div>
                    <div class="tv_logos__item"><img src="src/logo_tv_5.png" alt=""></div>
                    <div class="tv_logos__item"><img src="src/logo_tv_6.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="mapping">
            <div class="wrapper">
                <div class="mapping__desc lt24">
                    Fast 50% aller Europäer leiden unter Übergewicht und können nicht erkennen, wie schädlich es für ihren Körper ist. Adipositas ist der Grund für fast 40% der Herzerkrankungen, die zu tödlichen Folgen führen können.
                </div>
                <div class="mapping__columns">
                    <div class="mapping__column_left">
                        <div class="mapping__list__title lt25">
                            Fettleibigkeit erhöht das Risiko von:
                        </div>
                        <div class="mapping__list">
                            <div class="mapping__list__item">
                                <span class="lt26">Nicht-alkoholischer Fettleber-Krankheit;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt27">Fruchtbarkeitsproblemen;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt28">Typ-2-Diabetes;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt29">Herzinfarkt;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt30">Herz-Kreislauf-Erkrankungen;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt31">Hohen Blutdruck;</span>
                            </div>
                            <div class="mapping__list__item">
                                <span class="lt32">Koronarer Herzkrankheit.</span>
                            </div>
                        </div>
                    </div>
                    <div class="mapping__column_right"><img alt="" src="src/map.png"></div>
                </div>
            </div>
        </div>
        <div class="why_fight">
            <div class="wrapper">
                <div class="why_fight__columns">
                    <div class="why_fight__right">
                        <div class="why_fight__title lt33">
                            Warum Übergewicht bekämpfen?
                        </div>
                        <div class="slider_container">
                            <ul class="why_fight__list" style="">
                                <li aria-hidden="false" class="why_fight__item">
                                    <div class="why_fight__item__title">
                                        <div class="why_fight__item__procent lt34">
                                            70%
                                        </div><strong class="lt35">Der Herz-Kreislauf-Erkrankungen beginnen mit Adipositas</strong>
                                    </div>
                                    <div class="why_fight__description lt36">
                                        Experten liefern Daten, dass etwa 70% der Herz-Kreislauf-Erkrankungen mit Übergewicht beginnen. Das Übergewicht führt zu hohem Blutdruck und erhöhtem Cholesterinspiegel, was zu Herzproblemen führt, die tödlich sein können
                                    </div>
                                </li>
                                <li aria-hidden="true" class="why_fight__item" style="">
                                    <div class="why_fight__item__title">
                                        <div class="why_fight__item__procent lt37">
                                            40%
                                        </div><strong class="lt38">der übergewichtigen Menschen werden aufgrund ihres Gewichts vom Service abgelehnt</strong>
                                    </div>
                                    <div class="why_fight__description lt39">
                                        Für manche kann es als sehr unhöflich angesehen werden, aber es ist wahr. Im letzten Jahr gab es Fälle, in denen übergewichtigen Passagieren aufgrund ihres Übergewichts der Bordservice von Flugzeugen, Schiffen und sogar öffentlichen Verkehrsmitteln verweigert
                                        wurde.
                                    </div>
                                </li>
                                <li aria-hidden="true" class="why_fight__item">
                                    <div class="why_fight__item__title">
                                        <div class="why_fight__item__procent lt40">
                                            86%
                                        </div><strong class="lt41">Der Männer gehen nicht auf ein Date mit einer übergewichtigen Frau</strong>
                                    </div>
                                    <div class="why_fight__description lt42">
                                        Es mag hart klingen, aber es stimmt, die meisten Männer betrachten übergewichtige Frauen als nicht attraktiv. Experten geben verschiedene Gründe dafür an, wie "Nicht den Standards der Schönheit zu entsprechen", "Nicht den Standards eines gesunden Lebensstils
                                        zu entsprechen" und so weiter. Unabhängig von den Gründen sind die Ergebnisse gleich. Männer mögen in der Regel keine übergewichtigen Frauen.
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="why_fight__img"><img alt="" src="src/fat_woman.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="never_help">
            <div class="wrapper">
                <div class="never_help__title lt43">
                    Warum helfen Diäten, Sport und andere beliebte <strong>Methoden nie?</strong>
                </div>
                <div class="slider_container">
                    <div class="never_help__list" style="">
                        <div aria-hidden="false" class="never_help__item">
                            <div class="never_help__item__image"><img alt="" src="src/help_1.jpg"></div>
                            <div class="never_help__item__name lt44">
                                Diät
                            </div>
                            <div class="never_help__item__desc lt45">
                                Wenn Sie aufhören, die gleiche Menge an Essen zu essen, die Sie zuvor gegessen haben, wird der Körper es als eine Bedrohung für Ihr Überleben betrachten. Daher wird es jedes Stück Nahrung in Ihren Körper saugen, um die Diät zu bekämpfen.
                            </div>
                        </div>
                        <div aria-hidden="true" class="never_help__item" style="">
                            <div class="never_help__item__image"><img alt="" src="src/help_2.jpg"></div>
                            <div class="never_help__item__name lt46">
                                Fitnessstudio
                            </div>
                            <div class="never_help__item__desc lt47">
                                Körperliche Übungen waren immer eine Antwort auf Übergewicht, aber nicht jeder hat genug Zeit oder Motivation, um mit dem Sport zu beginnen. Deshalb fangen viele Menschen einfach an zu trainieren und geben dann aufgrund von Zeitmangel auf. Kein Ergebnis
                                am Ende.
                            </div>
                        </div>
                        <div aria-hidden="true" class="never_help__item" style="">
                            <div class="never_help__item__image"><img alt="" src="src/help_3.jpg"></div>
                            <div class="never_help__item__name lt48">
                                Medizinische Lösung
                            </div>
                            <div class="never_help__item__desc lt49">
                                Medizinische Lösung kann die Abhängigkeit Ihres Körpers von medizinischen Produkten verursachen, da Sie natürlichen Zutaten keine Chance geben, Fettleibigkeit zu bekämpfen. So können Sie im moralischen Dilemma stecken: "Suchtgefahr oder Übergewicht?"
                            </div>
                        </div>
                        <div aria-hidden="true" class="never_help__item">
                            <div class="never_help__item__image"><img alt="" src="src/help_4.jpg"></div>
                            <div class="never_help__item__name lt50">
                                Fettabsaugung
                            </div>
                            <div class="never_help__item__desc lt51">
                                Der schlimmste Fall ist Fettabsaugung, bei der Sie eine Menge Geld für die Verformung Ihres Körpers zahlen und das Fett trotzdem zurückkehrt! Unser Körper wird versuchen, künstlich entferntes Fett zurückzuerlangen. Also, müssen Sie wirklich Geld bezahlen,
                                um sich selbst hässlich zu machen und auf lange Sicht Fett zurückzubekommen?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bdoctor">
            <div class="wrapper">
                <div class="bdoctor__title lt52">
                    Dutzende meiner Patienten haben dieses Produkt bereits ausprobiert und ihre Ergebnisse sind umwerfend!
                </div>
                <div class="bdoctor__colums">
                    <div class="bdoctor__colum__left">
                        <p class="lt53">Ich verschrieb meinen Patienten verschiedene medizinische Pillen, aber nicht alle schienen effektiv zu wirken. Patienten neigen dazu, Diäten und Sport aufzugeben und die eine Art von Pillen zu einer anderen ohne Wirkung auf ihren
                            Körper zu ändern. Es wird noch schlimmer, wenn sie anfangen, noch mehr Gewicht zu bekommen.</p>
                        <p><i class="lt54">Reduslim ist eine Innovation in der Gewichtsverlust-Industrie, die Ihren Appetit sofort nach der Verabreichung unterdrückt. Der vollständige Verlauf des Produkts wird dazu beitragen, über 40 Kilo zu verlieren. Außerdem hat dieses Produkt keine Nebenwirkungen.</i></p>
                        <p><strong class="lt55">Ich empfehle Reduslim allen meinen Patienten, die schnell, effektiv und natürlich abnehmen wollen. Die wichtigsten Vorteile von Reduslim im Vergleich zu anderen Ergänzungen sind:</strong></p>
                        <ul>
                            <li class="lt56">Aktiviert Energie, um Fett zu verbrennen;</li>
                            <li class="lt57">Verringert den Cholesterinspiegel;</li>
                            <li class="lt58">Normalisiert den Blutzuckerspiegel;</li>
                            <li class="lt59">Verbessert das Immunsystem;</li>
                            <li class="lt60">Beschleunigt die Zerstörung von Fettzellen.</li>
                        </ul>
                        <p class="lt61">Dutzende meiner Patienten haben dieses Produkt bereits ausprobiert und ihre Ergebnisse sind umwerfend. Ich hatte sogar einen Patienten mit einem Gewicht von über hundert Kilo, aber nach vier Monaten Reduslim konnte er 45 Kilo abnehmen.</p>
                        <p class="lt62">Es ist am besten, den vollen fortgeschrittenen Reduslim-Kurs von 4 Monaten zu durchlaufen, um fit und schön zu bleiben. Wenn Sie einen Kurs durchziehen, habe Sie eine Chance, keine Ihrer Extra-Kilos zurück zu bekommen!</p>
                    </div>
                    <div class="bdoctor__colum__right">
                        <div class="bdoctor__image">
                            <img alt="" src="src/doctor.png">
                            <div class="bdoctor__ser__list">
                                <div class="bdoctor__ser__item"></div>
                                <div class="bdoctor__ser__item"></div>
                            </div>
                            <div class="bdoctor__popup lt63">
                                Ich empfehle Reduslim allen meinen Patienten!
                            </div>
                        </div>
                        <div class="bdoctor__desc lt64">
                            <strong>Helen Schwartz, </strong>Ernährungsberaterin, Diätologin, Expertin für die Behandlung von Fettleibigkeit mit 20 Jahren Erfahrung, Autorin zahlreicher Bücher über Diätologie.
                        </div>
                    </div>
                </div>
                <div class="bdoctor__desc show_mobile lt65">
                    <strong>Helen Schwartz, </strong>Ernährungsberaterin, Diätologin, Expertin für die Behandlung von Fettleibigkeit mit 20 Jahren Erfahrung, Autorin zahlreicher Bücher über Diätologie.
                </div>
            </div>
        </div>
        <div class="lose_chance">
            <div class="wrapper">
                <button class="submit_form scroll_to_button form_top__submit show_mobile" type="submit"><span class="lt66">Bestellen</span></button>
                <div class="lose_chance__image">
                    <img alt="" src="src/product.png">
                    <div class="box"></div>
                </div>
                <div class="lose_chance__text">
                    <div class="lose_chance__title lt67">
                        Verpassen Sie Nicht Ihre Chance
                    </div>
                    <div class="lose_chance__desc lt68">
                        Die Neueste Innovation in der Diätologie Zu Verwenden!
                    </div><a class="scroll_to_button" href="#scroll_to_form"><button class="submit_form scroll_to_button form_top__submit" type="submit"><span class="lt69">Bestellen</span></button></a>
                </div>
            </div>
        </div>
        <div class="natural">
            <div class="wrapper">
                <div class="natural__title lt70">
                    Die Einzige Kombination von Natürlichen Zutaten, <span>die Fett 2-3 mal Effektiver Verbrennt</span>
                </div>
                <div class="natural__product">
                    <div class="natural__product__image"><img alt="" src="src/product.png"></div>
                    <div class="slider_container">
                        <ul class="natural__list" style="">
                            <li aria-hidden="false" class="natural__list__item">
                                <div class="box">
                                    <div class="natural__list__item__image"><img alt="" src="src/effect_1.jpg"></div>
                                    <div class="natural__list__item__text">
                                        <div class="natural__list__item__title lt71">
                                            Wasserfreies Koffein
                                        </div>
                                        <div class="natural__list__item__desc lt72">
                                            Unterdrückt den Hunger, erhöht die Lebhaftigkeit, erhöht die Energie, beschleunigt den Verbrauch von Fettreserven.
                                        </div>
                                    </div>
                                </div>
                                <div class="natural__list__item__desc show_mobile lt73">
                                    Unterdrückt den Hunger, erhöht die Lebhaftigkeit, erhöht die Energie, beschleunigt den Verbrauch von Fettreserven.
                                </div>
                            </li>
                            <li aria-hidden="true" class="natural__list__item natural__list__item_even" style="">
                                <div class="box">
                                    <div class="natural__list__item__image"><img alt="" src="src/effect_2.jpg"></div>
                                    <div class="natural__list__item__text">
                                        <div class="natural__list__item__title lt74">
                                            Grüntee-Extrakt
                                        </div>
                                        <div class="natural__list__item__desc lt75">
                                            Leitet überschüssige Flüssigkeit aus dem Körper, regt den Stoffwechsel an und reduziert Stress durch Gewichtsverlust.
                                        </div>
                                    </div>
                                </div>
                                <div class="natural__list__item__desc show_mobile lt76">
                                    Leitet überschüssige Flüssigkeit aus dem Körper, regt den Stoffwechsel an und reduziert Stress durch Gewichtsverlust.
                                </div>
                            </li>
                            <li aria-hidden="true" class="natural__list__item" style="">
                                <div class="box">
                                    <div class="natural__list__item__image"><img alt="" src="src/effect_3.jpg"></div>
                                    <div class="natural__list__item__text">
                                        <div class="natural__list__item__title lt77">
                                            Schwarzer Pfeffer
                                        </div>
                                        <div class="natural__list__item__desc lt78">
                                            Beschleunigt den Fettabbau, blockiert die Spaltung von Kohlenhydraten, reduziert den glykämischen Index, bewahrt das Muskelgewebe.
                                        </div>
                                    </div>
                                </div>
                                <div class="natural__list__item__desc show_mobile lt79">
                                    Beschleunigt den Fettabbau, blockiert die Spaltung von Kohlenhydraten, reduziert den glykämischen Index, bewahrt das Muskelgewebe.
                                </div>
                            </li>
                            <li aria-hidden="true" class="natural__list__item natural__list__item_even" style="">
                                <div class="box">
                                    <div class="natural__list__item__image"><img alt="" src="src/effect_4.jpg"></div>
                                    <div class="natural__list__item__text">
                                        <div class="natural__list__item__title lt80">
                                            Cayenne-Pfeffer
                                        </div>
                                        <div class="natural__list__item__desc lt81">
                                            Aktiviert die Produktion von Energie, erhöht die Ausdauer und Effizienz des Immunsystems.
                                        </div>
                                    </div>
                                </div>
                                <div class="natural__list__item__desc show_mobile lt82">
                                    Aktiviert die Produktion von Energie, erhöht die Ausdauer und Effizienz des Immunsystems.
                                </div>
                            </li>
                            <li aria-hidden="true" class="natural__list__item natural__list__item_last">
                                <div class="box">
                                    <div class="natural__list__item__image"><img alt="" src="src/effect_5.jpg"></div>
                                    <div class="natural__list__item__text">
                                        <div class="natural__list__item__title lt83">
                                            Acetyl-L-Carnitin
                                        </div>
                                        <div class="natural__list__item__desc lt84">
                                            Wenn es in das Verdauungssystem gelangt, bildet es ein Gel, das die Aufnahme von Fetten verhindert und Giftstoffe entfernt.
                                        </div>
                                    </div>
                                </div>
                                <div class="natural__list__item__desc show_mobile lt85">
                                    Wenn es in das Verdauungssystem gelangt, bildet es ein Gel, das die Aufnahme von Fetten verhindert und Giftstoffe entfernt.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="effective">
            <div class="wrapper">
                <div class="effective__title lt86">
                    Die Wirksamkeit von Reduslim <span>wurde von 2.032 Frauen und Männern bestätigt, die an klinischen Studien teilgenommen haben</span>
                </div>
                <div class="effective__desc lt87">
                    von der Abteilung für Diät- und Ernährungswissenschaften, Ungarn, Budapest, 2017.
                </div>
                <div class="graph_box">
                    <div class="graph">
                        <div class="item">
                            <div class="column_awaderm">
                                <div class="name lt88">
                                    Reduslim
                                </div>
                                <div class="value lt89">
                                    98%
                                </div>
                            </div>
                            <div class="column_other">
                                <div class="name lt90">
                                    andere methoden
                                </div>
                                <div class="value lt91">
                                    16%
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="column_awaderm">
                                <div class="name lt92">
                                    Reduslim
                                </div>
                                <div class="value lt93">
                                    97%
                                </div>
                            </div>
                            <div class="column_other">
                                <div class="name lt94">
                                    andere methoden
                                </div>
                                <div class="value lt95">
                                    14%
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="column_awaderm">
                                <div class="name lt96">
                                    Reduslim
                                </div>
                                <div class="value lt97">
                                    94%
                                </div>
                            </div>
                            <div class="column_other">
                                <div class="name lt98">
                                    andere methoden
                                </div>
                                <div class="value lt99">
                                    11%
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="column_awaderm">
                                <div class="name lt100">
                                    Reduslim
                                </div>
                                <div class="value lt101">
                                    99%
                                </div>
                            </div>
                            <div class="column_other">
                                <div class="name lt102">
                                    andere methoden
                                </div>
                                <div class="value lt103">
                                    50%
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="column_awaderm">
                                <div class="name lt104">
                                    Reduslim
                                </div>
                                <div class="value lt105">
                                    100%
                                </div>
                            </div>
                            <div class="column_other">
                                <div class="name lt106">
                                    andere methoden
                                </div>
                                <div class="value lt107">
                                    38%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="graph_legend">
                        <div class="desc lt108">
                            Unterdrückung von Hunger
                        </div>
                        <div class="desc lt109">
                            Entgiftet den Körper
                        </div>
                        <div class="desc lt110">
                            Aktivierung der Fettverbrennung
                        </div>
                        <div class="desc lt111">
                            Sofortige Wirkung nach der Anwendung
                        </div>
                        <div class="desc lt112">
                            Mangel an Nebenwirkungen
                        </div>
                    </div>
                </div>
                <div class="graph_mobile">
                    <div class="item">
                        <div class="desc lt113">
                            Unterdrückung von Hunger
                        </div>
                        <div class="row_container">
                            <div class="slim_jet lt114">
                                Reduslim <span>98%</span>
                            </div>
                            <div class="other_method lt115">
                                andere methoden <span>16%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="desc lt116">
                            Entgiftet den Körper
                        </div>
                        <div class="row_container">
                            <div class="slim_jet lt117">
                                Reduslim <span>97%</span>
                            </div>
                            <div class="other_method lt118">
                                andere methoden <span>14%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="desc lt119">
                            Aktivierung der Fettverbrennung
                        </div>
                        <div class="row_container">
                            <div class="slim_jet lt120">
                                Reduslim <span>94%</span>
                            </div>
                            <div class="other_method lt121">
                                andere methoden <span>11%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="desc lt122">
                            Sofortige Wirkung nach der Anwendung
                        </div>
                        <div class="row_container">
                            <div class="slim_jet lt123">
                                Reduslim <span>99%</span>
                            </div>
                            <div class="other_method lt124">
                                andere methoden <span>50%</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="desc lt125">
                            Mangel an Nebenwirkungen
                        </div>
                        <div class="row_container">
                            <div class="slim_jet lt126">
                                Reduslim <span>100%</span>
                            </div>
                            <div class="other_method lt127">
                                andere methoden <span>38%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="graph_box__description lt128">
                    Es hat kein Äquivalent in Europa. Erfüllt EU-Qualitätsstandards
                </div>
                <div class="effective__product">
                    <div class="effective__image">
                        <img alt="" src="src/product.png">
                        <div class="box"></div>
                    </div>
                    <div class="lose_chance__text">
                        <div class="lose_chance__title lt129">
                            2000+ Menschen bewiesen, wie Reduslim Fett ohne Chirurgie,
                        </div>
                        <div class="lose_chance__desc lt130">
                            Diäten oder körperliche Übungen verbrennt!
                        </div><a class="scroll_to_button" href="#scroll_to_form"><button class="submit_form form_top__submit" type="submit"><span class="lt131">Bestellen</span></button></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="reviews">
            <div class="wrapper">
                <div class="container">
                    <div class="title lt132">
                        Was schreiben uns die Menschen normalerweise nach der Einnahme von Reduslim?
                    </div>
                    <div class="slider_container">
                        <ul class="reviews_slider">
                            <li class="slide">
                                <div class="icon">
                                    <img src="src/review_1.png" alt="">
                                    <div class="before lt133">
                                        vorher
                                    </div>
                                    <div class="after lt134">
                                        nachher
                                    </div>
                                </div>
                                <div class="description">
                                    <div class="review_head">
                                        <div class="name lt140">
                                            Lena Meyer <span>26 Jahre, Berlin</span>
                                        </div>
                                        <div class="stars"></div>
                                    </div>
                                    <div class="review_body">
                                        <div class="caption lt141">
                                            Erstaunlicher Effekt zum erstaunlichen Preis!
                                        </div>
                                        <div class="text">
                                            <p class="lt142">Ich hatte ziemlich lange Zeit Übergewicht. Ich habe alles ausprobiert, beginnend mit verschiedenen Diäten, Fitness, Volksmedizin und sogar medizinischen Pillen. Nichts hat mir so geholfen wie Reduslim. Ich habe
                                                in zwei Monaten etwa 20 Kilo abgenommen und das ist erst der Anfang. Mein Blutdruck und Cholesterinspiegel kamen zur Norm. Das Produkt ist erstaunlich und vor allem der Preis! Es ist einfach großartig.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="slide">
                                <div class="icon">
                                    <img src="src/review_2.png" alt="">
                                    <div class="before lt143">
                                        vorher
                                    </div>
                                    <div class="after lt144">
                                        nachher
                                    </div>
                                </div>
                                <div class="description">
                                    <div class="review_head">
                                        <div class="name lt145">
                                            Julia Perle<span> 35 Jahre, Hamburg</span>
                                        </div>
                                        <div class="stars"></div>
                                    </div>
                                    <div class="review_body">
                                        <div class="caption lt146">
                                            Meine Freunde beneiden mich um meine perfekte Taille
                                        </div>
                                        <div class="text">
                                            <p class="lt147">Ich mag den Effekt von Reduslim. Ich verlor an Gewicht und bekam meine Taille zurück, die ich hatte, als ich jung war. Nun beneiden mich meine Freunde um meine perfekte Taille und all das wurde möglich durch
                                                Reduslim!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="slide">
                                <div class="icon">
                                    <img src="src/review_3.png" alt="">
                                    <div class="before lt148">
                                        vorher
                                    </div>
                                    <div class="after lt149">
                                        nachher
                                    </div>
                                </div>
                                <div class="description">
                                    <div class="review_head">
                                        <div class="name lt150">
                                            Hilda Richter <span>40 Jahre, Essen</span>
                                        </div>
                                        <div class="stars"></div>
                                    </div>
                                    <div class="review_body">
                                        <div class="caption lt151">
                                            Hilft auch in den schlimmsten Situationen
                                        </div>
                                        <div class="text">
                                            <p class="lt152">Vor ungefähr vier Monaten war mein Gewicht 136 Kilo. Dass es schlecht für meine Gesundheit war, braucht man gar nicht zu sagen. Ich hatte Probleme, mich von einem Ort zum anderen zu bewegen. Reduslim hat dieses
                                                Problem vollständig beseitigt. Mein Herzschlag normalisierte sich, der Cholesterinspiegel und der Blutdruck nahmen ab. Ich habe den professionellen Programmkurs von Reduslim benutzt und ungefähr 46 Kilo
                                                abgenommen. Ich bin immer noch dabei, Gewicht zu verlieren, da ich diesen Monat meine perfekte Form bekommen möchte, aber jetzt weiß ich, dass Reduslim selbst in den schlimmsten Situationen hilft.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="subtitle lt158">
                        Was sagen die Nutzer von Reduslim darüber auf Instagram?
                    </div>
                    <div class="slider_container_2">
                        <ul class="insta_slider">
                            <li class="item">
                                <div class="image image_1"></div>
                                <div class="descripton">
                                    <div class="review_head">
                                        <div class="icon avatar_1"></div>
                                        <div class="name lt162">
                                            Theresa
                                        </div>
                                    </div>
                                    <div class="review_body">
                                        <div class="text">
                                            <p class="lt163"><span>Theresa</span> Ich fing an, weniger zu essen und es scheint natürlich für mich zu sein. In nur vier Wochen habe ich etwa zehn Kilo abgenommen 😉. Mit Hilfe von Reduslim war ich auf meine Hochzeit mehr
                                                als vorbereitet. Ich habe viele Kritiken gelesen und beschlossen, es selbst auszuprobieren. Ich bin sehr zufrieden mit den Ergebnissen. 😜</p>
                                            <div class="hash_tags lt164">
                                                #Reduslim#loseweight #loseweightnow #loseweightfast #loseweightfeelgreat #loseweightgetfit
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews_bottom">
                                        <div class="icon_1"></div>
                                        <div class="icon_2"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="image image_2"></div>
                                <div class="descripton">
                                    <div class="review_head">
                                        <div class="icon avatar_2"></div>
                                        <div class="name lt165">
                                            Senta
                                        </div>
                                    </div>
                                    <div class="review_body">
                                        <div class="text">
                                            <p class="lt166"><span>Senta</span> Hartnäckiges Fett loszuwerden, nachdem ich fast drei Jahre lang alles versucht habe, scheint ein wirkliches Wunder zu sein 😃 Mein Leben hat sich verändert, nachdem ich Reduslim benutzt habe.
                                                Ich glaubte nicht, dass man 30 Kilo abnehmen kann, ohne viel Sport zu treiben, aber es ist wahr. Ich glaube, dass es der beste Weg ist, um Gewicht zu verlieren!</p>
                                            <div class="hash_tags lt167">
                                                #loseweightnowaskmehow #loseweightnaturally #loseweighthealthy #loseweightaskmehow#Reduslim
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews_bottom">
                                        <div class="icon_1"></div>
                                        <div class="icon_2"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="image image_3"></div>
                                <div class="descripton">
                                    <div class="review_head">
                                        <div class="icon avatar_3"></div>
                                        <div class="name lt168">
                                            Meins
                                        </div>
                                    </div>
                                    <div class="review_body">
                                        <div class="text">
                                            <p class="lt169"><span>Meins</span> Nachdem ich 40 geworden bin, merke ich plötzlich, wie schwer es sein kann, in Form zu bleiben. Sie können nicht alles essen, was Sie in Ihren Vierzigern wollen, da es leicht auf Ihrer Taille
                                                gespeichert werden kann. Reduslim verbrennt im Vergleich zu anderen Produkten Fett in den gewünschten Bereichen des Körpers 😋</p>
                                            <div class="hash_tags lt170">
                                                #loseweightinthekitchen #loseweightwithme#Reduslim
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews_bottom">
                                        <div class="icon_1"></div>
                                        <div class="icon_2"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="image image_4"></div>
                                <div class="descripton">
                                    <div class="review_head">
                                        <div class="icon avatar_4"></div>
                                        <div class="name lt171">
                                            Lübbert
                                        </div>
                                    </div>
                                    <div class="review_body">
                                        <div class="text">
                                            <p class="lt172"><span>Lübbert</span> Ich bin sehr beeindruckt von Reduslim. Ich benutzte es in meinem Trainingszyklus, um die überschüssige Flüssigkeit aus meinem Körper zu entfernen 😃 Es hat wirklich funktioniert. In nur
                                                zwei Wochen konnte ich die Anforderungen meiner Gewichtsklasse erfüllen. Wenn Sie schnell und effizient abnehmen möchten, dann ist Reduslim Ihre Antwort!</p>
                                            <div class="hash_tags lt173">
                                                #loseweighttheeasyway #Reduslim#loseweight #loseweightnow #loseweightfast #loseweightfeelgreat #loseweightnowaskmehow
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews_bottom">
                                        <div class="icon_1"></div>
                                        <div class="icon_2"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="million_customer">
            <div class="wrapper">
                <div class="image">
                    <img alt="" src="src/product.png">
                    <div class="box"></div>
                </div>
                <div class="lose_chance__text">
                    <div class="lose_chance__desc lt177">
                        Über 1 Million Kunden Nennen Reduslim ihr Traumprodukt, um Gewicht zu verlieren
                    </div>
                    <div class="lose_chance__title lt178">
                        Warum Sind Sie Nicht Dabei?
                    </div><a class="scroll_to_button" href="#scroll_to_form"><button class="submit_form scroll_to_button form_top__submit" type="submit"><span class="lt179">Bestellen</span></button></a>
                </div>
            </div>
        </div>
        <div class="methods_usage">
            <div class="wrapper">
                <div class="methods_usage__title lt180">
                    Verwendungsmethoden
                </div>
                <div class="slider_container">
                    <div class="methods_usage__list" style="">
                        <div aria-hidden="false" class="methods_usage__item">
                            <div class="methods_usage__item_image"><img alt="" src="src/methods_1.jpg"></div>
                            <div class="methods_usage__text lt181">
                                <div class="methods_usage__item__title">
                                    Programm Starter<strong> 1 Monat</strong>
                                </div>Wenn Sie bis zu 10 kg verlieren müssen
                                <ul>
                                    <li><span>Nehmen Sie Reduslim einmal täglich;</span></li>
                                    <li><span>Das Gewicht wird von selbst verbrannt</span></li>
                                </ul>
                            </div>
                        </div>
                        <div aria-hidden="true" class="methods_usage__item" style="">
                            <div class="methods_usage__item_image"><img alt="" src="src/methods_2.jpg"></div>
                            <div class="methods_usage__text lt182">
                                <div class="methods_usage__item__title">
                                    Programm Mittel <strong>2 Monate</strong>
                                </div>Wenn Sie 20 kg verlieren und die Gesundheit verbessern wollen
                                <ul>
                                    <li><span>Nehmen Sie Reduslim einmal täglich</span></li>
                                    <li><span>Halten Sie sich an jegliche Diät</span></li>
                                    <li><span>Machen Sie Morgengymnastik;</span></li>
                                </ul>
                            </div>
                            <div class="methods_usage__message lt183">
                                Verbrennt Fett, entgiftet den Körper, entfernt überschüssige Flüssigkeit, tonisiert die Muskeln, normalisiert den Blutdruck und den Cholesterinspiegel.
                            </div>
                        </div>
                        <div aria-hidden="true" class="methods_usage__item">
                            <div class="methods_usage__item_image"><img alt="" src="src/methods_2.jpg"></div>
                            <div class="methods_usage__text lt184">
                                <div class="methods_usage__item__title">
                                    Programm Fortgeschritten <strong>4 Monate</strong>
                                </div> Wenn Sie 30 kg verlieren müssen und die ganze Saison lang schlank sein wollen
                                <ul>
                                    <li><span>Nehmen Sie Reduslim einmal täglich;</span></li>
                                    <li><span>Halten Sie sich an jegliche Diät;</span></li>
                                    <li><span>Machen Sie Morgengymnastik;</span></li>
                                    <li><span>Gehen Sie zweimal pro Woche zum Fitnessstudio;</span></li>
                                </ul>
                            </div>
                            <div class="methods_usage__message lt185">
                                Verbrennt Fett, entgiftet den Körper, entfernt überschüssige Flüssigkeit, verbessert das Immunsystem, verbessert die Stoffwechselprozesse, reinigt die Blutgefäße, tonisiert die Muskeln, normalisiert den Blutdruck und den Cholesterinspiegel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mellisa">
            <div class="wrapper">
                <div class="mellisa__flex">
                    <div class="mellisa__text">
                        <div class="mellisa__title lt186">
                            Melissa McCarthy <span>verlor satte 35 Kilo </span>Und Ist Dabei, Ihre Geheime Diät-Zutat Mitzuteilen
                        </div>
                        <div class="mellisa__desc lt187">
                            Die Zeitschrift Life &amp; Style enthüllte das Geheimnis der Melissa McCarthy Diät! Der 47-jährige Star hat keine anstrengende Diät durchgemacht, um das fantastische Ergebnis zu erreichen, 35 Kilo zu verlieren. Die Brautjungfern-Schauspielerin scherzte,
                            dass sie keine Zeit für Übungen hatte und eine faule Lösung wollte, um ihr Gewicht zu verlieren. Die Zeitschrift enthüllte - ihre faule Waffe im Kampf gegen hartnäckige Kalorien war Reduslim.
                        </div>
                    </div>
                    <div class="mellisa__image"><img alt="" src="src/milissa.png"></div>
                </div>
                <div class="mellisa__short_desc lt188">
                    Die Logik dieser Annahme war ziemlich einfach und basierte auf den folgenden Schlüsselmerkmalen von Melissa McCarthy:
                </div>
                <div class="header__list" style="margin-left: 2em">
                    <div class="header__list__item lt189">
                        Verminderter Essensdrang
                    </div>
                    <div class="header__list__item lt190">
                        Erhöhte Energie
                    </div>
                    <div class="header__list__item lt191">
                        Verbesserte Stimmung
                    </div>
                </div>
                <div class="mellisa__product">
                    <div class="image">
                        <img alt="" src="src/product.png">
                        <div class="box"></div>
                    </div>
                    <div class="lose_chance__text">
                        <div class="lose_chance__title lt192">
                            Gewicht Verlieren, Effektiv Und Ohne Diäten
                        </div>
                        <div class="lose_chance__desc lt193">
                            Wie Die Hollywood Stars!
                        </div><a class="scroll_to_button" href="#scroll_to_form"><button class="submit_form scroll_to_button form_top__submit" type="submit"><span class="lt194">Bestellen</span></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="stubborn">
            <div class="wrapper">
                <div class="stubborn__title lt195">
                    <span>Warum Reduslim die Beste</span> Entscheidung ist, um Hartnäckiges<strong> Fett zu Verbrennen?</strong>
                </div>
                <div class="stubborn__flex">
                    <div class="stubborn__image"><img alt="" src="src/stubborn.jpg"></div>
                    <div class="stubborn__text">
                        <div class="header__list">
                            <div class="header__list__item lt196">
                                Verringert das Körperfett
                            </div>
                            <div class="header__list__item lt197">
                                Verbessert den Zustand des Herzens
                            </div>
                            <div class="header__list__item lt198">
                                Beeinflusst positiv die Bauchspeicheldrüse
                            </div>
                            <div class="header__list__item lt199">
                                Fördert den rationalen Stoffwechsel
                            </div>
                            <div class="header__list__item lt200">
                                Aktiviert die Fettverbrennung
                            </div>
                            <div class="header__list__item lt201">
                                Entgiftet den Körper
                            </div>
                            <div class="header__list__item lt202">
                                Tötet Essattacken
                            </div>
                            <div class="header__list__item lt203">
                                100% natürlich
                            </div>
                            <div class="header__list__item lt204">
                                Völlig sicher
                            </div>
                            <div class="header__list__item lt205">
                                Klinisch geprüft
                            </div>
                        </div>
                        <div class="stubborn__desc lt206">
                            Verschieben Sie Nicht Ihre <span>“Perfekten Körperpläne”</span> Auf Später!
                        </div><a class="scroll_to_button" href="#scroll_to_form"><button class="submit_form scroll_to_button form_top__submit" type="submit"><span class="lt207">Bestellen</span></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="how_order">
            <div class="wrapper">
                <div class="how_order__title">
                    <span class="lt208">Wie kann ich bestellen?</span>
                </div>
                <ul class="how_order__list">
                    <li>
                        <div class="how_order__image"><img alt="" src="src/order_1.png"></div>
                        <div class="box">
                            <div class="how_order__caption lt209">
                                Füllen Sie das untenstehende Bestellformular aus
                            </div>
                            <div class="how_order__desc lt210">
                                Ihr Name und Ihre Handynummer
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="how_order__image"><img alt="" src="src/order_2.png"></div>
                        <div class="box">
                            <div class="how_order__caption lt211">
                                Bestätigen Sie die Lieferadresse, den Typ und das Datum
                            </div>
                            <div class="how_order__desc lt212">
                                Der Manager wird Sie nach der Bestellung anrufen
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="how_order__image"><img alt="" src="src/order_3.png"></div>
                        <div class="box">
                            <div class="how_order__caption lt213">
                                Erhalt der Ware und Bezahlung
                            </div>
                            <div class="how_order__desc lt214">
                                Zahlung bei Lieferung an Kurierdienst
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="delivery">
                    <div class="delivery__flex">
                        <div class="delivery__text">
                            <div class="delivery__title lt215">
                                Lieferung nach ganz Europa
                            </div>
                            <ul class="delivery_list">
                                <li>
                                    <p class="lt216">Sie erhalten Ihren Reduslim innerhalb von 4-7 tagen nach der Bestellung.</p>
                                </li>
                                <li>
                                    <p class="lt217">Bezahlen Sie erst nach Erhalt des Pakets!</p>
                                </li>
                            </ul>
                            <div class="delivery__icons_list">
                                <ul>
                                    <li><img alt="" src="src/delivery_1.png"></li>
                                    <li><img alt="" src="src/delivery_2.png"></li>
                                    <li><img alt="" src="src/delivery_3.png"></li>
                                    <li><img alt="" src="src/delivery_4.png"></li>
                                    <li><img alt="" src="src/delivery_5.png"></li>
                                    <li><img alt="" src="src/delivery_6.png"></li>
                                    <li><img alt="" src="src/delivery_7.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="delivery__image"><img alt="" src="src/delivery.png"></div>
                    </div>
                </div>
                <div class="footer__title lt218">
                    Stellen Sie sich vor, wie sich Ihr Leben Verändert,<span> Wenn Sie Das Hartnäckige Fett Loswerden!</span>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                <div class="footer__colums">
                    <div class="footer__colum_2">
                        <div class="footer__title show_mobile lt219">
                            Stellen Sie sich vor, wie sich Ihr Leben Verändert,<span> Wenn Sie Das Hartnäckige Fett Loswerden!</span>
                        </div>
                        <ul class="footer__list">
                            <li><span class="lt220">Keine Diäten!</span></li>
                            <li><span class="lt221">Keine Operation!</span></li>
                            <li><span class="lt222">Keine Nebenwirkungen!</span></li>
                            <li><span class="lt223">Keine anstrengenden Übungen!</span></li>
                        </ul>
                        <div class="footer__image">
                            <img src="src/product.png" alt="">
                            <div class="img_woman"></div>
                        </div>
                    </div>
                    <div class="footer__colum_3">
                        <div class="form_top header__form" id="form">
                            <div class="form_top__discount">-50%</div>
                            <div class="form_top__price_container">
                                <div class="form_top__price_old">
                                    <div class="form_top__price_old_label lt225">
                                        Verkauf:
                                    </div>
                                    <div class="form_top__price_old_value"><span class="old_price_val">123</span> <span class="old_price_cur">€</span></div>
                                </div>
                                <div class="form_top__price_new">
                                    <div class="form_top__price_val">
                                        <span class="new_price_val">49</span> <span class="new_price_cur">€</span>
                                        <div class="form_top__icon_new lt228">
                                            Neu!
                                        </div>
                                    </div>
                                    <div class="form_top__price_label lt229">
                                        + <span>SCHNELLE </span>LIEFERUNG
                                    </div>
                                </div>
                            </div>
                            <div class="timer" data-timer>
                                <div class="unit days" data-pattern="00">
                                    <div class="value">00</div>
                                    <div class="desc lt230">
                                        Tage
                                    </div>
                                </div>
                                <div class="unit hours" data-pattern="{hnn}">
                                    <div class="value">00</div>
                                    <div class="desc lt231">
                                        Stunden
                                    </div>
                                </div>
                                <div class="unit minutes" data-pattern="{mnn}">
                                    <div class="value">00</div>
                                    <div class="desc lt232">
                                        Minuten
                                    </div>
                                </div>
                                <div class="unit seconds" data-pattern="{snn}">
                                    <div class="value">00</div>
                                    <div class="desc lt233">
                                        Sekunden
                                    </div>
                                </div>
                            </div>
                            <div class="form_top__title lt234">
                                Bestellen mit <span>50% Rabatt!</span>
                            </div>
                            <form class="form landing__form" action="lucky.php" method="POST" data-errorname="Dein Name ist ungültig" data-errorphone="Ihre Kontakt Handynummer ist ungültig" data-errorphonenum_first="Geben Sie bitte mindestens " data-errorphonenum_last=" Zeichen ein.">

                                <div class="form_top__field">
                                    <select class="county_select form_top__input" name="country"></select>
                                </div>
                                <div class="form_top__field form_top__field-name">
                                    <input class="form_top__input" type="text" data-error-name="Name" name="name" placeholder="Ihr Name:">
                                </div>
                                <div class="form_top__field form_top__field-phone">
                                    <input class="form_top__input" type="tel" data-error-name="Phone" name="phone" placeholder="Ihre Handynummer">
                                    <input type='hidden' name='utm_content' value='<?=$_GET['utm_content']?>' />
                                    <input type='hidden' name='utm_campaign' value='<?=$_GET['utm_campaign']?>' />
                                    <input type='hidden' name='utm_term' value='<?=$_GET['utm_term']?>' />
                                    <input type='hidden' name='utm_medium' value='<?=$_GET['utm_medium']?>' />
                                    <input type='hidden' name='subid' value='<?=$_GET['subid']?>' />
                                    <input type='hidden' name='subid1' value='<?=$_GET['pixel']?>' />
                                    <input type='hidden' name='subid2' value='<?=$_GET['subid2']?>' />
                                    <input type='hidden' name='subid3' value='<?=$_GET['subid3']?>' />
                                </div>

                                <button class="submit_form form_top__submit" type="submit"><span class="big lt236">Bestellen</span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer__container">
                    <div class="footer__top">
                        <div class="footer__logo"><img src="src/logo.png" alt=""></div>
                    </div>
                    <div class="footer__bottom">
                        <div class="footer__copyr"> SUMMER ALLIANCE LTD <br> Reg. No. 195655 Tenancy 10, Marina House, Eden Island, Mahe, Seychelles  <br> Copyright © 2018 Alle Rechte vorbehalten.
                        </div>
                        <div class="footer__menu"><a href="https://gasmasters.ru/de-v2-b2/privacy.html">Privacy policy</a> | <a href="https://gasmasters.ru/de-v2-b2/report.html">Report</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup step_link" id="step_1">
            <div class="close_container"></div>
            <link href="src/cod_popup.css" rel="stylesheet">
            <div class="discount_popup" id="popup_step_1">
                <div class="discount_popup__container__bg">
                    <div class="discount_popup__close"></div>
                    <div class="discount_popup__container">
                        <div class="discount_popup__title lt239">
                            Reduslim
                        </div>
                        <div class="discount_popup__subtitle lt240">
                            Willst du <span>€74 bei</span><br> deiner ersten Bestellung sparen?
                        </div>
                        <div class="discount_popup__desciption lt241">
                            Abonniere, um spezielle Reduslim<br> Angebote und Aktionen zu erhalten
                        </div>
                        <form action="" class="form form_esputnik landing__form" data-error_valid="ist ungültig">
                            <div class="discount_popup__form">
                                <div class="discount_popup__form__field">
                                    <textarea class="discount_popup__input discount_popup__input__textarea" data-errorname="Email" name="email" placeholder="Geben sie ihre E-Mail Adresse ein"></textarea>
                                </div>
                            </div>
                            <div class="discount_popup__message_success lt242">
                                Ihre @-mail wurde erfolgreich gespeichert
                            </div>
                            <div class="ajax_loader">
                                <div id="circularG">
                                    <div class="circularG" id="circularG_1"></div>
                                    <div class="circularG" id="circularG_2"></div>
                                    <div class="circularG" id="circularG_3"></div>
                                    <div class="circularG" id="circularG_4"></div>
                                    <div class="circularG" id="circularG_5"></div>
                                    <div class="circularG" id="circularG_6"></div>
                                    <div class="circularG" id="circularG_7"></div>
                                    <div class="circularG" id="circularG_8"></div>
                                </div>
                            </div>
                            <div class="discount_popup__submit_container">
                                <button class="discount_popup__submit lt243" id="submit-button" type="submit">Ja, ich will sparen €74</button>
                            </div><input name="timezone" type="hidden" value="3"><input name="click_id" type="hidden" value="1134744275"><input name="fp" type="hidden" value="da0d33324109d06ba4b40d3db785a188">
                        </form>
                    </div><a class="discount_popup__not_interested lt244" href="#">Nein, ich möchte den vollen Preis bezahlen</a>
                </div>
            </div>
            <div class="discount_popup" id="popup_step_2" style="display: none;">
                <div class="discount_popup__container__bg">
                    <div class="discount_popup__close"></div>
                    <div class="discount_popup__container">
                        <div class="discount_popup__title lt245">
                            Hat Ihnen das Produkt gefallen,<br> aber haben Sie noch Fragen?
                        </div>
                        <div class="discount_popup__desciption lt246">
                            Holen Sie sich<br> die
                            <strong>Beratung über</strong> die Details jedes Produkts und die <strong>besten</strong><br> Verkaufsbedingungen von unserem Manager!
                        </div>
                        <form action="" class="form landing__form" data-errorname="Dein Name ist ungültig" data-errorphone="Ihre Kontakt Handynummer ist ungültig" data-errorphonenum_first="Geben Sie bitte mindestens" data-errorphonenum_last=" Zeichen ein.">
                            <div class="discount_popup__form">
                                <div class="discount_popup__form__field">
                                    <div class="btn-group bootstrap-select county_select">
                                        <div class="dropdown-menu open" role="combobox">
                                            <ul aria-expanded="false" class="dropdown-menu inner" role="listbox"></ul>
                                        </div><select class="county_select form_top__input" name="country" tabindex="-98"></select>
                                    </div>
                                </div>
                                <div class="discount_popup__form__field">
                                    <input class="discount_popup__input" name="name" placeholder="Dein Name" type="text">
                                </div>
                                <div class="discount_popup__form__field">
                                    <input class="discount_popup__input phone" name="phone" placeholder="Ihre Kontakt Handynummer" type="tel">
                                </div>
                            </div>
                            <div class="discount_popup__submit_container">
                                <button class="discount_popup__submit lt248" type="submit">Rufen Sie mich zurück</button>
                            </div>
                        </form>
                    </div><a class="discount_popup__not_interested lt249" href="#">Nein, ich bin jetzt nicht interessiert</a>
                </div>
            </div>
        </div>

        <div class="popup" id="doctor">
            <div class="close_container"></div>
            <div class="popup_container">
                <div class="close"></div>
                <div class="doctor_head">
                    <div class="logo_list">
                        <span class="item_1"></span><span class="item_2"></span><span class="item_3"></span>
                    </div>
                    <div class="doctor_image"></div>
                </div>
                <div class="scroll_container">
                    <div class="doctor_sertificate">
                        <div class="bg"></div>
                        <div class="text">
                            <h4 class="lt250">Decision of the commission:</h4>
                            <p class="lt251">The product is completely natural, highly effective, harmless to people, and then without any restrictions can be used in the home as a basic or auxiliary mean.</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
        <script src="src/jquery.bxslider.min.js"></script>
        <script src="src/main.js"></script>
        <!-- <script src="src/lib.js"></script> -->
    </div>
    <link rel="stylesheet" href="src/cod_line.css">
    <script src="https://gasmasters.ru/de-v2-b2/coronavirus.js"></script>
    <script>
        var coronavirus = new CoronavirusWarning('DE');
        coronavirus.createPanel();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-url-parser/2.3.1/purl.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <script src="https://gasmasters.ru/de-v2-b2/price.js"></script>
</body>

</html>
