vansterliberalerna-hemsida
==========================

Vänsterliberalernas hemsida. Utveckling sker på svenska.

Vänsterliberalerna är ett politiskt parti stationerat i Uppsala, Sverige. Detta GIT-projekt är partiets publika hemsida, som innehåller all den information som ska vara tillgänglig för alla som besöker hemsidan. Hackers som ämnar ta sig in i medlemsdatabasen göre sig icke besvär, den delen utvecklas separat i ett privat projekt. 

- content/ innehåller alla de sidor som agerar mallar för webbsidan senare. 
- source/ innehåller stilmall, statiska bilder och PHP-skript som genererar sidan som den ser ut på webbhotellet sen. 
- target/ innehåller den färdiga webbsidan. Innehållet i denna mapp är det som synkroniseras till webbhotellet. 

###todo: 
- Revidera och sedan godkänna stilmallen i partistyrelsen
- Bestämma vad som ska finnas på sidan förutom info om politiken
- Skapa sidor med faktiskt innehåll
- Publicera!

###Layoutfunderingar:
- Sidebar? Medlemsinloggning, nyhetsflöde, kontaktinfo...?
- Ska sidebaren vara statisk, eller ändras beroende på vilken sida som besöks?

###PHP-funderingar:
- `$root` är osmidig, det måste gå att automatisera! Kanske genom den globala arrayen `$Root` som använder sig av `$level`?
- Det behövs en manual. Detta skall skapas!
- Automatiskt skript för att generera menyerna på sidan
