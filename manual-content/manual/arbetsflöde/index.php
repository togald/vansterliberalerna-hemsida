<?php
	$title = "Arbetsflöde";
?>

		<h1>Arbetsflöde</h1>
		<p>Om du vill skapa en webbsida på Vänsterliberalernas webbplats, så är det mycket smidigare att göra det via kompilatorn än att göra det direkt i HTML-koden. För att göra det, går du till den katalog där du vill skapa en ny sida, och skapar en katalog med samma namn som sidan ska ha. Därefter kopierar du filen <tt>/source/index.php</tt> till den nya katalogen. I filen finns kommentarer som beskriver hur du går tillväga när du skapar innehållet i din nya sida. 
		
		<p>När du är klar med att redigera din nya sida, och känner att du vill prova den, är det dags att kompilera. Det görs på följande sätt: 
		
		<ol>
			<li>Öppna <tt>/source/skel.php</tt> och leta rätt på sidmenyn. Lägg till en länk till den sida du skapade enligt instruktionerna i kommentarerna. 
			<li>Öppna <tt>/source/creator.php</tt>, och läs kommentaren överst i filen. De första variablerna som listas är sökvägar till filer på din dator, på internet eller på webbhotellet som du laddar upp webbsidan till, och dessa behöver du troligtvis ändra så att de motsvarar din egen konfiguration. 
			<ul>
				<li><tt>$Source</tt> är sökvägen till mappen <tt>/source/</tt>. 
				<li><tt>$Content</tt> är sökvägen till mappen <tt>/content/</tt>. 
				<li><tt>$URL</tt> är URL-addressen till din webbsida. Det kan också vara sökvägen till den plats där din sida ligger när du ska titta på den i webbläsaren. Om du tittar på webbsidan medan den ligger på din egen dator ska du troligtvis ha sökvägen till mappen <tt>/target/</tt> här. 
				<li><tt>$Target</tt> är sökvägen till mappen <tt>/target/</tt>, oavsett om du tittar på webbsidan på din egen dator eller laddar upp den till en server. 
			</ul>
			<li>Kör filen <tt>/source/creator.php</tt>. Hur du gör det beror på vilket operativsystem du har. I Linux så öppnar du en terminal, navigerar den till webbsidans <strong>root-katalog</strong> och kör därefter kommandot "<tt>php source/creator.php</tt>". 
		</ol>
		
		<p>Det har nu skapats en helt fristående webbsida i mappen <tt>/target/</tt>. Du kan titta på webbsidan genom att öppna <tt>/target/index.html</tt> i din webbläsare, eller genom att ladda upp alla filer som ligger i mappen <tt>/target/</tt> till ett webbhotell eller en egen server. Vänsterliberalernas webbsida utvecklas på ett gratis webbhotellskonto hos <a href="http://www.000webhost.com/667499.html">000webhost.com</a>, och de har hittils levererat en bra och väl fungerande tjänst, som inkluderar PHP, MySQL, och 1,5 GB lagringsutrymme. Gratiskontot hos 000webhost är dessutom helt reklamfritt. 
		