<?
    # PHP short tags are used to make dynamic content. This section makes dev-side variables avaliable to the server-side. 
    $Root = "<?php echo $URL ?>"; # Developer variable $URL is avaliable as server variable $Root
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?php echo $title ?></title>
    
    <meta name="author" content="Togald Nilsson">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo $URL ?>style.css" type="text/css">
    <link rel="shortcut icon" href="<?php echo $URL ?>img/favicon.ico" type="image/gif">
    <script type="text/javascript">
        function printMail() {
            var address = "togald.nilsson";
            var domain = "gmail";
            var suffix = "com";
            document.getElementById("authorEmail").href = "mailto:" + address + "@" + domain + "." + suffix;
            document.getElementById("authorEmail").innerHTML = address + "@" + domain + "." + suffix;
            visible = 0;
        }
        function toggle(x) {
            if (visible == 0) {
                document.getElementById(x).className = "expanded";
                visible = 1;
            }
            else {
                document.getElementById(x).className = "";
                visible = 0;
            }
        }
    </script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
<body onload="printMail()">
    
    <!-- Facebook Social plugin JavaScript SDK -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_PI/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Facebook code ends here -->
    
    <div id="bgcolor"></div>
    <header>
        <div id="hgroup">
            <h1><a href="<?php echo $URL ?>index.php" title="Klicka för att återvända till startsidan">Vänsterliberalerna</a></h1>
            <h2>Nya tider ger ny politik</h2>
            <span id="navbutton" onclick="toggle('nav')"> ≡ </span>
            <nav id="nav">
                <?php /* 
                    Detta är menyn, den kan behöva ändras om mappstrukturen ändras. Ett menyavsnitt ska se ut så här:
                    <li><a href"<?php echo $URL ?>sökväg/till/sidan/">Titel</a>
                    
                    För copypaste-fan: 
                    <li><a href="<?php echo $URL ?>"></a>
                    
                    För att skapa en undermeny, lägg bara till <ul> i början av undermenyn och sedan </ul> när den ska vara slut. Exempel: 
                    <li><a href="">Menyelement med submeny</a>
                        <ul>
                            <li><a href="">Undermeny</a>
                            <li><a href="">Mer undermeny</a>
                            <li><a href="">Ännu mer undermeny</a>
                        </ul>
                    <li><a href="">Nästa element</a>
                */ ?>
                <ul>
                    <li><a href="<?php echo $URL ?>index.php">Hem</a>
                    <li><a href="<?php echo $URL ?>politik/index.php">Politik</a>
                        <ul>
                            <?php
                                echo "<!-- Denna del genereras av ett skript -->\n";
                                $files = array();
                                $ignore = array( '.', '..' );
                                $dh = @opendir( $Content.'politik' );
                                while ( false !== ( $file = readdir( $dh ) ) ) {
                                    if ( !in_array( $file, $ignore ) && is_dir( $Content.'politik/'.$file ) ) {
                                        $files[ sizeof( $files ) ] = $file;
                                    }
                                }
                                
                                natcasesort( $files );
                                
                                foreach ( $files as $file ) {
                                    ob_start();
                                    include( $Content.'politik/'.$file.'/index.php' );
                                    $indexfile = ob_get_clean();
                                    eval( substr( $indexfile, 5, strpos( $indexfile, "?>" ) ) );
                                    echo '                            <li><a href="'.$URL.'politik/'.$file.'/index.php">'.$title."</a>\n";
                                }
                            ?>
                        </ul>
                    <li><a href="<?php echo $URL ?>vardegrund/index.php">Värdegrund</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>vardegrund/liberalism">Liberalism - frihet för individen</a>
                            <li><a href="<?php echo $URL ?>vardegrund/vansterpolitik">Vänsterpolitik - de sociala systemen</a>
                            <li><a href="<?php echo $URL ?>vardegrund/ansvar">Ansvar för egna handlingar</a>
                            <li><a href="<?php echo $URL ?>vardegrund/fakta">Fakta och saklighet</a>
                            <li><a href="<?php echo $URL ?>vardegrund/miljo">Miljö- och energipolitik</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>styrelsen/index.php">Styrelsen</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>styrelsen/bard/index.php">Bard Nilsson (ordförande)</a>
                            <li><a href="<?php echo $URL ?>styrelsen/togald/index.php">Togald Nilsson (sekreterare)</a>
                            <li><a href="<?php echo $URL ?>styrelsen/alexander/index.php">Alexander Van Dam (kassör)</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>om/index.php">Om partiet</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>om/stadgar/index.php">Stadgar</a>
                            <li><a href="<?php echo $URL ?>om/stadgar/stadgar.pdf">Ladda ner stadgar (PDF)</a>
                            <li><a href="<?php echo $URL ?>om/protokoll/index.php">Mötesprotokoll</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>press/index.php">Press</a>
                </ul>
            </nav>
        </div>
        <object data="<?php echo $URL ?>img/icon.svg" type="image/svg+xml">
            <img src="<?php echo $URL ?>img/icon.png" height="96" width="96" alt="Vänsterliberalernas logotyp">
        </object>
    </header>
    <div id="wrapper">
        <div id="content">
            <?
                /*
                 * These arrays are used to store citations. 
                 */
                $togald  = array( 
                    "Jag driver framför allt frågor som gäller immaterialrätt och miljöpolitik. Välkommen att debattera med mig på facebook eller google+! "
                    , "Dagens antipiratpolitik är spårad. Speltillverkarna satsar massor av pengar på att bygga ett system som förhindrar folk att sälja spel begagnade eller låna av varandra. Resultatet: man kan inte spela första veckan efter release eftersom servrarna är överbelastade. "
                    , "DRM är dyrt och närmast verkningslöst. DVD har skydd, som knäcktes dagar efter release. Blu-ray har skydd, som knäcktes dagar efter release. DRM-skyddade spel finns crackade och klara på The Pirate Bay en eller ett par veckor efter release. Det är dags att vi slutar med DRM! "
                    , "Det stora problemet med DRM är, att om man kan titta på något, eller lyssna på det, eller över huvud taget konsumera det, så kan det kopieras. Det har med naturlagarna att göra. Så länge det finns fri programvara, är DRM ett svärd utan klinga. "
                    , "För att Sverige ska kunna bryta sitt oljeberoende, måste vi enas om vad vi ska driva våra bilar med. Kollektivtrafik är inte den stora lösningen i ett land som Sverige, vi är beroende av bilar. "
                    , "Om vi tog vara på allt matavfall och all gödsel som produceras i Sverige, och gjorde biogas av det, så skulle vi kunna driva alla bussar i hela landet med den gasen. "
                    , "Sverige får årligen ungefär 420 000 TWh energi från solen. Hela Sveriges energiförbrukning ligger i storleksordningen 650 TWh per år. Vi får 646 gånger mer energi från solen än vad vi använder, och så pratar man om energikris, och att vi behöver olja och kärnkraft. "
                    , "Det finns tillfällen när man i sin hjärna tänker sig en Hitlermustasch på alla bilder man ser. Nu är ett sådant tillfälle. "
                );
                $alex    = array( 
                    "Den som fyller sina fickor med missgärningarnas stenar kommer med stor sannolikhet att tappa byxorna inför allmänheten."
                    , "Då har man skålat in det nya året med 15 kg krut, skumpa och Raubtier på högsta volym! "
                    , "Sitter på bussen och försöker sätta mig in i karaktären som en ond äcklig andebesvärjare/shaman inför teatern. Upptäcker plötsligt att flera runt omkring kollar konstigt på mig. Då kommer jag på att jag suttit och läst ramsor på djupaste death-metal growl högt för mig själv. Bussen är på väg mot Knutby och jag är klädd som en Primus Satanist. FML."
                    , "Har man dödat en neger så måste man fan äta den också. "
                );
                $bard    = array( 
                    "För att utvecklas som individ och uppnå inre frid måste du övervinna dina egna hinder. Ibland kan det krävas stort tålamod och ibland bara en grov jävla bössa. Vet detta och handla efter eget förstånd. "
                );
                $cite    = array( 
                    "Togald Nilsson"      => $togald
                    , "Bard Nilsson"      => $bard
                    , "Alexander Van Dam" => $alex
                );
                $members = array( 
                    "Togald Nilsson"
                    , "Bard Nilsson"
                    , "Alexander Van Dam"
                );
            ?>
            <?php 
                echo $content;
            ?>
            <section id="likebar">
                <div class="fb-like" data-href="https://www.facebook.com/Vansterliberalerna" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
                <div class="g-plusone" data-size="medium" data-href="https://plus.google.com/b/114415882304437608773/114415882304437608773/posts" style="padding-top: 12px;"></div>
            </section>
        </div>
        <aside>
            <section>
                <?
                    if ( !isset( $name ) ) 
                        $name = $members[rand(0,count($members)-1)];
                    if ( !isset( $quote ) )
                        $quote = $cite[$name][rand(0,count($cite[$name])-1)];
                    echo "<h2>$name</h2>\n";
                    echo "                <img src=\"".$Root."img/".rawurlencode( $name ).".thumb.jpg\" height=96 width=96 style=\"float:left;margin: 0 7pt 7pt 0;\" alt=\"Bild på $name\">\n";
                    echo "                <p style=\"font-style:italic;\">$quote\n";
                ?>
            </section>
            <section class="important">
                <h2>Vänsterliberalerna på nätet</h2>
                <object data="<?php echo $URL ?>img/facebook.svg" type="image/svg+xml" height="48" width="48">
                    <a href="http://www.facebook.com/Vansterliberalerna/">
                        <img src="<?php echo $URL ?>img/facebook.png" height="48" width="48" alt="facebook">
                    </a>
                </object>
                <object data="<?php echo $URL ?>img/google+.svg" type="image/svg+xml" height="48" width="48">
                    <a href="https://plus.google.com/u/0/b/114415882304437608773/114415882304437608773/posts">
                        <img src="<?php echo $URL ?>img/google+.png" height="48" width="48" alt="Google+">
                    </a>
                </object>
            </section>
            <section>
                <h2>Facebook</h2>
                <div class="fb-like-box" data-href="http://www.facebook.com/Vansterliberalerna" data-width="220" data-show-faces="true" data-stream="false" data-header="false"></div>
            </section>
        </aside>
    </div>
    <footer>
        <p>Webbansvarig: Togald Nilsson, <a href="" id="authorEmail">Togald Nilsson</a><br>
        Källkoden till sidan distribueras under <a href="http://sam.zoy.org/wtfpl/">WTFPL-licensen</a>, och finns på <a href="https://github.com/MFserver/vansterliberalerna-hemsida">GitHub</a> för nedladdning. Copyright är för mesar. </p>
    </footer>
    
    <!-- Script for the Google +1 button -->
    <script type="text/javascript">
  window.___gcfg = {lang: 'sv'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>