<?php
	$title = "Värdegrund";
    $Dires = array(
        "liberalism"
        , "vansterpolitik"
        , "ansvar"
        , "fakta"
        , "miljo"
        );
    
    echo "<h1>$title</h1>";
    echo '<p>Vänsterliberalernas värdegrund bygger på fem saker som vi tycker är viktiga för samhället:

<ol>
    <li>Liberalism - individens frihet och rätt till privatliv
    <li>Vänsterpolitik - det sociala skyddsnätet
    <li>Individens ansvar för sina egna handlingar
    <li>Fakta och saklighet, inte löst tyckande eller dåligt underbyggda känsloargument
    <li>Miljö- och energipolitik
</ol>';
    
    foreach ( $Dires as $dir ) {
        ob_start();
        include $dir.'/index.php';
        $output = ob_get_clean();
        $output = str_replace( "</h1>", "</h2>", str_replace( "<h1>", "<h2>", $output ) );
        echo $output;
    }
    $title = "Värdegrund";
?>

<p>Vänsterliberalerna är, som namnet antyder, ett vänsterparti med en liberal ideologi. Det kan tyckas motsägelsefullt, eftersom Vänster alltid förknippats med den socialistiska ideologin, men det är långt ifrån omöjligt. Vänsterliberalerna tror på individens rätt att bestämma över sig själv, men vill samtidigt att det ska finnas ett skyddsnät i samhället för att se till att människor som inte har arbete, eller inte kan arbeta, också kan leva i samhället. 

<p>Vänsterliberalerna vill se ett helt tätslutande socialt skyddsnät, där ingen exkluderas från samhället. Det är inte nödvändigtvis individens fel att det går åt helvete i livet, och det ingår i statens arbete att se till att alla människor kan försörja sig. Vi tror att alla människor vill arbeta, och bidra till samhället, men alla individer kanske inte kan bidra ekonomiskt. Men även om man inte kan arbeta, så bidrar man till samhället på andra sätt. Varje enskild individ är en ovärderlig resurs, och samhället har inte råd att ignorera det. 

<p>Vänsterliberalerna vill även se en stark, men rättvis, rättsstat. Ingen ska kunna dömas oskyldig, och tillgången till kapital ska inte kunna styra utgången i en rättegång, må det vara ett civilrättsligt mål eller ett brottmål. Polisen ska ha resurser att utreda alla våldsbrott, och samtidigt kunna vara närvarande ute i samhället för att förebygga dem. Alla som bor i samhället måste kunna känna sig trygga, oavsett var de är eller vad klockan är. 

<p>Samtidigt, värnar Vänsterliberalerna hårt om individens rätt till privatliv. Rutinmässig övervakning av enskilda individer är varken särskilt effektivt eller förenligt med en liberal ideologi. Kameraövervakning på allmän plats är ett exempel på en dyr och mycket ineffektiv lösning, det har man kunnat konstatera efter att ha provat i London. Samma sak gäller för övervakning av internet för att hitta terrorister och fildelare. Att övervaka allt en människa gör på internet är dessutom ett enormt ingrepp i en människas privatliv. 

<p>Infrastruktur är en oerhört viktig del av samhället, i vårt moderna samhälle mer än någonsin. Vänsterliberalerna vill att alla människor ska få tillgång till dessa system i så stor utsträckning det går. Vi eftersträvar därför att elnät, kollektivtrafiklinjer, 3G/4G-nät och bredbandsnät ska ägas och skötas av offentlig sektor, och vara gratis eller mycket billiga att använda sig av. Vi vil även göra kollektivtrafiken gratis, eftersom det skulle innebära en stor besparing när biljettsystemet kan avvecklas. Dessutom skulle det göra trafiken snabbare om man inte behöver kontrollera biljett vid av- och påstigning. Samt att det skulle innebära en stor insats för miljön, eftersom många idag väljer att avstå från att åka kollektivt helt enkelt för att det kan vara billigare att åka med egen bil. 

<p>Vänsterliberalernas miljöpolitik präglas även den av liberalism, och vår tro på stark infrastruktur. Vi tror att det absolut viktigaste för att nå en bra miljöpolitik är att det finns fungerande återvinningssystem. Därför vill vi att det ska lagstadgas om att alla kommuner måste erbjuda sorterad sophämtning till sina invånare, så att man slipper åka till återvinningsstationen för att slänga sorterade sopor. Vi vill också att man ska bygga fler biogasanläggningar, för att på sikt kunna driva hela landets kollektivtrafik på fordonsgas och el. 

<p>För miljöpolitik, liksom för övriga delar av Vänsterliberalernas politik, gäller att vi lutar oss på en saklig grund, snarare än löst tyckande. För de allra flesta politiska frågor, finns omfattande forskning som visar vad som fungerar respektive inte fungerar. Så långt det är möjligt, vill Vänsterliberalerna att politiken styrs av rationella argument och forskningsresultat. Det finns frågor som saknar entydigt svar, till exempel integration och skattepolitik. Men inom många frågor, inte minst skolpolitik, miljö, och övervakning, finns omfattande forskning att luta sig mot. Och då tycker vi att det är bäst att göra det. Man har till exempel kunnat konstatera att kameraövervakning på allmän plats inte leder till fler lösta brott, och inte heller till att färre brott begås. Då är kameraövervakningen bortkastade pengar. 