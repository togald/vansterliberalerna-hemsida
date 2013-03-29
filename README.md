vansterliberalerna-hemsida
==========================

Vänsterliberalernas hemsida. Utveckling sker på svenska.

Vänsterliberalerna är ett politiskt parti stationerat i Uppsala, Sverige. Detta GIT-projekt är partiets publika hemsida, som innehåller all den information som ska vara tillgänglig för alla som besöker hemsidan. Hackers som ämnar ta sig in i medlemsdatabasen göre sig icke besvär, den delen utvecklas separat i ett privat projekt. 

###Mappstruktur: 
- content/ innehåller alla de sidor som agerar mallar för webbsidan senare. 
- source/ innehåller stilmall, statiska bilder och PHP-skript som genererar sidan som den ser ut på webbhotellet sen. 
- target/ innehöll förut den färdiga webbsidan. Dock har denna sedan Vänsterliberalerna börjat använda PHP på servern också bytts ut mot /srv/http/. Om du vill ha webbsidan någon annan stans är det bara att ändra på $Target i source/creator.php.

###todo: 
- Skapa sidor med faktiskt innehåll
- Publicera!
