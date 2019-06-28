# Planning


Opgedeelt in stukken.

Eerste deel 
1: Beginnen met het design maken in axure, kijken of alles past en er goed uitziet(Kleuren, font-size, plaatjes, text).
2: Homepage maken voor Marty Robbins. Begonnen met Navigation bar(About-Marty, Albums, Tracks, Home, Register, Login).
3: Div boxes toegevoegt. hier komt de text en de plaatjes in. (Begonnen met plaatjes uit een img folder halen inplaats van de database, om te kijken of het de goede grote ect heeft). Het zelfde geld voor de text in de Homepage.
4: Database aangemaakt (db = Myband). Als eerste het login/register in de database gezet en werkende gemaakt.
5: In de Database nieuwe tabel aangemaakt ('text' in text een column genaamt 'dummytext' aangemaakt (Lorem Ipsum text)). Getest of het werkt en het goed op de website komt te staan.
6: In de Database nieuwe tabel aangemaakt ('uploadedimage' (Dit zijn alle images op de website.)). Getest of het werkt en het goed op de website komt te staan.
7: In de Database nieuwe tabel aangemaakt ('songs' (Dit zijn de songs op de website met lengte van de song en met een nummer van meest geluisterd. Deze informatie komt van LastFM ('https://www.last.fm/music/Marty+Robbins'))). Getest of het werkt en het goed op de website komt te staan.
8: Homepage is helemaal af (Op responsive title na).

Tweede deel 
1: Nieuwe .php file gemaakt genaamt 'albums.php' Dit is de pagina over de albums van Marty Robbins.
2: tabel ('uploadedimage') Herbruikt en nieuwe info eraan toegevoegt(id, info). Met aboutstyle.css ervoor gezorgt dat de info onder de image komt te staan.

Derde deel 
1: Nieuwe .php file gemaakt genaamt 'about.php' Dit is de pagina over Marty Robbins.
2: in de tabel ('text') nieuwe column aangemaakt genaamt ('aboutmarty') in deze tabel staan een uitgebreid verhaal over Marty Robbins.
3: Plaatjes van Marty aan de zijkanten geplaats met een zwarte background(Plaatjes paste niet perfect en ik wou de image's niet stretchen dus heb er voor gekozen om de background bij de plaatjes zwart te maken).
4: Een white border rond de 2 images neer gezet in de about page.
5: Rode border rond de ('text'('aboutmarty')) neer gezet om de color-thema bij te houden.

Vierde deel 
1: Nieuwe .php file gemaakt genaamt 'tracks.php' Dit is de pagina over de tracks van Marty Robbins(Niet alle tracks staan erin want het waren er te veel om handmatig in de database neer te zetten).
2: tabel ('tracks') aangemaakt. Dit is een uitgebreide versie van de tabel ('songs'). Hier staan veel meer tracks in dan in de tabel ('songs').
3: Heb (hr) toegevoegt. (Dit is een rechte lijn van links naar rechts van 1px breed.) om een devider te krijgen tussen de "tracks". Deze (hr) staat in de php loop waardoor na elke track die word ge-displayed een (hr)komt te staan.
4: (hr) ook gebruikt op Homepage bij de ('songs') en op elke pagina gebruikt net onder de Navigation bar.

Vijfde deel 
1: In de tabel('text') nieuwe column aan gemaakt genaamt ('shortabout'). Dit is een ingekorte versie van ('text'('aboutmarty')) Dit stuk text komt te staan in de Homepage waar eerst ('text'('dummytext')).
2: :Hover effect toegevoegt aan de Navigation.
3: Google-Fonts ge-importeert en gebruikt door de text die word ge ('echo')'d in een <div> te zetten met de propertie ('font-family').
4: Logo image in de Navigation rond gemaakt.
5: Login en Register ge-styled. (Niks special ervan gemaakt).
  




