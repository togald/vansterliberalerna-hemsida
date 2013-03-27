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
            <h1><a href="<?php echo $URL ?>index.html" title="Klicka för att återvända till startsidan">Vänsterliberalerna</a></h1>
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
                    <li><a href="<?php echo $URL ?>index.html">Hem</a>
                    <li><a href="<?php echo $URL ?>politik/index.html">Politik</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>politik/bistand/index.html">Bistånd</a>
                            <li><a href="<?php echo $URL ?>politik/forsvar/index.html">Försvar</a>
                            <li><a href="<?php echo $URL ?>politik/immaterialratt/index.html">Immaterialrätt</a>
                            <li><a href="<?php echo $URL ?>politik/invandring/index.html">Invandring</a>
                            <li><a href="<?php echo $URL ?>politik/miljo/index.html">Miljö</a>
                            <li><a href="<?php echo $URL ?>politik/rattsvasende/index.html">Rättsväsende</a>
                            <li><a href="<?php echo $URL ?>politik/skatter/index.html">Skatter och bidrag</a>
                            <li><a href="<?php echo $URL ?>politik/utbildning/index.html">Utbildning</a>
                            <li><a href="<?php echo $URL ?>politik/vard/index.html">Vård och omsorg</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>vardegrund/index.html">Värdegrund</a>
                    <li><a href="<?php echo $URL ?>styrelsen/index.html">Styrelsen</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>styrelsen/bard/index.html">Bard Nilsson (ordförande)</a>
                            <li><a href="<?php echo $URL ?>styrelsen/togald/index.html">Togald Nilsson (sekreterare)</a>
                            <li><a href="<?php echo $URL ?>styrelsen/alexander/index.html">Alexander Van Dam (kassör)</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>om/index.html">Om partiet</a>
                        <ul>
                            <li><a href="<?php echo $URL ?>om/stadgar/index.html">Stadgar</a>
                            <li><a href="<?php echo $URL ?>om/stadgar/stadgar.pdf">Ladda ner stadgar (PDF)</a>
                            <li><a href="<?php echo $URL ?>om/protokoll/index.html">Mötesprotokoll</a>
                        </ul>
                    <li><a href="<?php echo $URL ?>press/index.html">Press</a>
                </ul>
            </nav>
        </div>
        <object data="<?php echo $URL ?>img/icon.svg" type="image/svg+xml">
            <img src="<?php echo $URL ?>img/icon.png" height="96" width="96" alt="Vänsterliberalernas logotyp">
        </object>
    </header>
    <div id="wrapper">
        <div id="content">
            <?php echo $content ?>
        </div>
        <aside>
            <section>
                <?php
                    $togald  = array( "Jag driver framför allt frågor som gäller immaterialrätt och miljöpolitik. Välkommen att debattera med mig på facebook, google+ eller min styrelseblogg! "
                                    , "Om man vill åka in i fängelse riktigt jävla länge i Sverige så ska man inte bli mördare, våldtäktsman eller pedofil. Det är mycket lättare att bli nätpirat. Att ladda ner och seeda en film till en ratio på 2,5 är nämligen liktydligt med att våldta och mörda en mindre dagisklass, med dagens straffskala. "
                                    );
                    $alex    = array( "Så ligger man nermysad i sängen bredvid flickan sin, med en katt i fotänden och den andra på bröstet. Det enda som hörs är en vinande vind och ett milt spinnande. Det är såhär det ska vara ^^"
                                    , "Då har man skålat in det nya året med 15 kg krut, skumpa och Raubtier på högsta volym! "
                                    );
                    $bard    = array( "För att utvecklas som individ och uppnå inre frid måste du övervinna dina egna hinder. Ibland kan det krävas stort tålamod och ibland bara en grov jävla bössa... vet detta och handla efter eget förstånd. "
                                    , "Allt som har den ungefärliga formen av ett ollon går att gnida mot någons ansikte för att skapa läskig stämning. "
                                    );
                    $cite    = array( "Togald Nilsson"    => $togald
                                    , "Bard Nilsson"      => $bard
                                    , "Alexander Van Dam" => $alex
                                    );
                    $members = array( "Togald Nilsson"
                                    , "Bard Nilsson"
                                    , "Alexander Van Dam"
                                    );
                    # All of the above are arrays necessary to display the 
                    # citations correctly. 
                    $name = $members[rand(0,count($members)-1)];
                    $quote = $cite[$name][rand(0,count($cite[$name])-1)];
                    echo "<h2>$name</h2>\n";
                    echo "<img src=\"".$URL."img/$name.thumb.jpg\" height=96, width=96, style=\"float:left;margin: 0 7pt 7pt 0;\" alt=\"Bild på $name\">\n";
                    echo "<p style=\"font-style:italic;\">$quote";
                ?>
            </section>
            <section class="important">
                <h2>Vänsterliberalerna i sociala media</h2>
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
</body>
</html>