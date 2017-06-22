# NaamPlaat

Een naamplaat project in php van Marc, voor Luuk
____________________________________


## Opdrachtomschrijving 


###### Fase 1 á 2

Stel dat de naam ‘Marc Derix’ is:

+ de M kan een vierkant zijn, en omdat het een hoofdletter is een vierkant met een dikke rand
+ de a kan een lijn in het midden van het scherm zijn
+ de r een cirkel vanuit linksonder
+ de c een cirkel van het midden
+ de D een driehoek met een dikke rand
+ de e een vijfhoek (extra rekenwerk) vanuit een hoek die bepaald word door het volgende karakter (r is rechts bijvoorbeeld)
+ de r is weer een cirkel, maar omdat het de tweede keer is dat er een r gevonden een grotere radius (of juist kleiner)
+ de i een diagonale lijn
+ de x een groot kruis door het scherm, onder alle andere lagen. Én omdat er een i voor staat in het zwart (ink) bijvoorbeeld.


###### Fase 3

Als dit werkt voor allerlei verschillende namen en deze constant hetzelfde plaatje voor die naam teruggeeft kun je het wat ingewikkelder maken door een ‘seed’ toe te voegen. Dit is een variabele die beïnvloed hoe de karakters zich gedragen. Je kunt bijvoorbeeld een seed van 1 t/m 10 toevoegen die beïnvloed hoe lijnen eruit zien, welke kleuren bepaalde vlakken hebben, etc.

###### Fase 4

Als er géén seed is gekozen kiest de app er automatisch een, maar als er wél een gekozen is ziet het plaatje er altijd exact hetzelfde uit

###### Fase 5

Opnemen in Lumen

###### Fase 6

Het uitrekenen van Fase 1 t/m 5 opnemen als een json functie in lumen die via XHR (ajax, zie Reqwest: https://github.com/ded/reqwest en Qwery) aan te roepen is (het plaatje ververst elke keer dat iemand een karakter verandert in het vak). Géén jQuery!! ;)

###### Fase 7

Schrijf een nieuwe functie in Lumen die hetzelfde doet als alle eerdere stappen maar een SVG teruggeeft.
