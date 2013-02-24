<?php
	$title = "Manual";
?>

		<h1>Manual</h1>
		<p>Denna manual beskriver hur man skapar en sida på Vänsterliberalernas webbsida. Vänsterliberalerna använder ett php-skript för att generera webbsidans struktur. Webbsidan beror inte av att PHP finns på servern, däremot så behöver PHP vara installerat på datorn där webbsidan ska skapas, eller "kompileras" som det också kan kallas. Nedan följer en liten ordlista med ord som är bra att känna till. 
		
		<dl>
			<dt>Katalog, mapp
			<dd>Filer på datorn är organiserade i mappar, eller kataloger som de också kan kallas. När man listar filer, är det vanligt att man lägger till ett snedstreck, "/", på slutet av filnamnet för att visa att det är en katalog. 
			<dt>root
			<dd>root, eller "/" som det ofta skrivs, är den katalog som utgör din webbsidas toppnivå. 
			<dt>Filnamnstillägg
			<dd>En fil avslutas i regel av en punkt, följd av några bokstäver. Dessa bokstäver, är filens filnamnstillägg, och används i regel för att tala om vilken typ av fil det är. ".php" betecknar oftast en PHP-fil, ".html" eller ".htm" används för HTML-filer. 
			<dt>Kompilering, kompilera
			<dd>Att ta källkod, och köra det genom ett program som bearbetar den, kallas för kompilering. Kompileraren kan i vissa fall generera en binär, exekverbar fil, det vill säga ett program. Det finns även kompilatorer som genererar PDF-dokument, eller i det här fallet, webbsidor. 
			<dt>Interpretering
			<dd>Interpretering innebär att ett program körs genom att det tolkas direkt från källkod, utan att källkoden görs om till maskinkod först. Interpretering är i regel mycket långsammare än att köra ett kompilerat program, men du slipper besväret att kompilera koden innan den körs. 
		</dl>
		
		<h2>Vad behöver du för att leka med källkoden?</h2>
		För att kunna ladda hem och kika på källkoden behöver du ha några program installerade på din dator. Vänsterliberalernas hemsida är designad med öppenhet i åtanke, och inga av programvarorna kostar därför pengar. 
		
		<h3>För att kunna se källkoden behöver du: </h3>
		<ul>
			<li>En webbläsare, för att kunna se källkoden på <a href="https://github.com/MFserver/vansterliberalerna-hemsida">GitHub</a>. Vänsterliberalerna rekommenderar inte någon speciell webbläsare, och sannolikheten är stor att du redan har en webbläsare installerad på din dator. Bland annat därför att du behöver den för att kunna besöka denna hemsida. 
		</ul>
		
		<h3>För att kunna redigera och spara källkoden behöver du: </h3>
		<ul>
			<li>En textredigerare, det vill säga ett program som kan redigera textfiler. Detta finns alltid med i ditt operativsystem. Notepad++, Bluefish Editor och Kate är exempel på program som fungerar bra att använda. 
		</ul>
		
		<h3>För att kunna använda hemsidans inbyggda verktyg fullt ut, och kompilera en egen webbsida, behöver du: </h3>
		<ul>
			<li>PHP. PHP står för "PHP: Hypertext Preprocessor" och är ett interpreterande programmeringsspråk. För att kunna köra webbsidans kompilator måste du ha PHP installerat på din dator. Om du kör Linux, är det lätt. Om du kör Mac OS X eller Windows, är det svårt. För att ta reda på hur du installerar PHP, googla "install php [ditt operativsystem]". 
		</ul>
		
		<h2>Att ladda ner och redigera källkoden till webbsidan</h2>
		<p>Vänsterliberalernas hemsida finns att ladda ner på <a href="https://github.com/MFserver/vansterliberalerna-hemsida">GitHub</a>. Du kan välja att ladda ner webbsidan som ett .zip-arkiv, eller att ladda ner den genom att använda Git. Om du vet hur man använder Git, så vet du vad du ska göra. Om du inte har Git, inte vet vad Git är, eller inte bryr dig utan bara vill knacka lite kod, så laddar du hem .zip-arkivet. 
		
		<p>Spara .zip-arkivet på din hårddisk, och extrahera det. När du extraherar filen, får du en katalog som innehåller hela källkoden till Vänsterliberalernas hemsida. Denna katalog är din <strong>root-katalog</strong>. Katalogstrukturen förklaras i <a href="<?php echo $URL ?>manual/kataloger/">nästa del av manualen</a>. 
		
		<p class="strong"><a href="<?php echo $URL ?>manual/kataloger/">Nästa del: Kataloger</a></p>