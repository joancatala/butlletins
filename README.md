# butlletins Newsletters Senzills

Continuant amb l'aplicació web de Newsletters Senzills, que ja vaig comentar ací a la meua web quan vaig fer la versió 1.0, ara ja es pot presentar la versió 1.2, on té un disseny millorat (100% responsive + HTML5 + CSS3 + Bootstrap).

Ara el formulari d'inserció de les dades està millor, on podem seleccionar si volem enviar un butlletí en format d'una o dues columnes, pensat sobretot per a enviar butlletins bilingües, castellà i valencià.

He afegit totes les rutes absolutes i molts includes de les distintes seccions, per a minimitzar la llargària de les pàgines i tenir-ho tot més ordenat i comprensible per a modificacions.

Des de la versió 1.2, totes les dades es enmagatzemen a una base de dades MySQL/MariaDB de tal manera que una vegada hem enviat un butlletí a una o certes persones, el tindrem sempre arxivat, i podrem obrir-lo o, si volem, recuperar-lo i tornar-lo a enviar a un nou usuari. Des del llistat de butlletins podem buscar ja que hi ha un cercador ajax del bootstrap que ens permet fer cerques ràpides sense necessitat d'actualitzar la pàgina.

![Portada](https://github.com/joancatala/butlletins/blob/master/vendor/versions/newsletters-senzills-1.png)

![Formulari d'inserció de les dades](https://github.com/joancatala/butlletins/blob/master/vendor/versions/newsletters-senzills-2.png)

![Últims butlletins publicats](https://github.com/joancatala/butlletins/blob/master/vendor/versions/newsletters-senzills-3.png)

![Llistat de butlletins](https://github.com/joancatala/butlletins/blob/master/vendor/versions/newsletters-senzills-4.png)

Els requisits per a fer servir Newsletters Senzills són simplement un servidor web (Nginx en el meu cas), PHP i tots els mòduls de MySQL (recomanable versions superiors a la 7, la versió 7.1 en el cas del meu servidor) i una base de dades MySQL/MariaDB.

