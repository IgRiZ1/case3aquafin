# case3aquafin

Voor ons eindproject in de opleiding Back End Webontwikkeling aan de Erasmushogeschool Brussel heb ik een gebruiksvriendelijke webapplicatie ontwikkeld met Laravel. De tool is bedoeld voor de techniekers van Aquafin, zodat ze intern materiaal kunnen bestellen via een eenvoudig en overzichtelijk beheerderspaneel. Alles gebeurt binnen een veilige omgeving met rolgebaseerde toegangscontrole.


## Inhoudsopgave

-   [Beschrijving](#beschrijving)
-   [Vereisten](#vereisten)
-   [Installatie](#installatie)
-   [Functionaliteiten](#functionaliteiten)
-   [Gebruik](#gebruik)
-   [Screenshots](#Screenshots)
-   [Bronnen](#bronnen)
-   [Technologien](#Gebruikte_technologieën)
-   [Auteurs](#Auteurs)
-   [Taak](#Taak_verdeling)


## Beschrijving

Deze webapplicatie dient als intern bestelsysteem voor Aquafin-medewerkers. Techniekers kunnen snel materialen opzoeken en bestellen die nodig zijn voor hun werkzaamheden. De app toont onder andere in welk magazijn de artikelen beschikbaar zijn, inclusief verwachte levertijd. Bestellingen zijn intern en worden dus niet afgerekend.
- Daarnaast biedt het beheerderspaneel de mogelijkheid om:
- Artikelen toe te voegen of te bewerken
- Bestellingen te bekijken of verwijderen
-Gebruikersbeheer toe te passen (optioneel uitbreidbaar)
De applicatie is ontwikkeld met het Laravel PHP-framework, maakt gebruik van Blade templates voor dynamische weergave, en Bootstrap voor een responsieve en gebruiksvriendelijke interface.



## Vereisten

Om de applicatie lokaal te draaien heb je het volgende nodig:
- PHP ≥ 8.0
- Composer
- MySQL of een andere ondersteunde relationele database
- Node.js + npm (voor het compileren van frontend-assets)
- Laravel CLI (optioneel, voor eenvoudiger beheer)
---


## Installatie

Volg de onderstaande stappen om het project lokaal op te zetten:

1. Installeer de PHP- en Node.js-afhankelijkheden:
   ```bash
   composer install
   php artisan breeze:install
   npm install
   npm run dev

2. Kopieer het voorbeeld-configuratiebestand en genereer een applicatiesleutel:
   cp .env.example .env
   php artisan key:generate

3. Stel de databaseconfiguratie in in .env (bijvoorbeeld):
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_db
   DB_USERNAME=root 
   DB_PASSWORD=secret

4. Voer de migraties uit:
   php artisan migrate:fresh

5. voer seeders uit
   php artisan db:seed

6. Optioneel migraties én seeders in één stap uitvoeren
   php artisan migrate --seed

7. start de server
   php artisan serve



## Gebruik

Wanneer je de applicatie opent, kom je eerst terecht op de loginpagina. Daar kun je inloggen als gewone gebruiker of als admin, afhankelijk van welke account je gebruikt.

Inloggegevens om te testen

Er zijn twee accounts voorzien om de applicatie te testen:

- **Admin gebruiker**
  - Gebruikersnaam: `admin`
  - E-mail: `admin@aquafin.be`
  - Wachtwoord: `admin123`
  - Is admin: Ja ✅

- **Test gebruiker**
  - Gebruikersnaam: `testuser`
  - E-mail: `test@example.com`
  - Wachtwoord: `password`
  - Is admin: Nee ❌

---


Na het inloggen kom je op de homepagina waar je een overzicht ziet van alle artikelen, netjes verdeeld per categorie.  
Je kunt:

- Artikelen bekijken
- Ze toevoegen aan je winkelmandje
- Aangeven in welke stad je het materiaal wilt ontvangen

De bestelling wordt automatisch doorgestuurd naar het magazijn van die stad. Alles gebeurt zonder betaling, omdat het om interne bestellingen gaat.

---

Als admin heb je extra mogelijkheden bovenop wat een gewone gebruiker kan:

- Artikelen toevoegen, aanpassen of verwijderen
- Bestellingen bekijken of verwijderen
- (Eventueel) gebruikers beheren

Zo krijg je als admin een handig overzicht en meer controle over het systeem.

Kort samengevat: de applicatie maakt het makkelijk om intern materiaal te bestellen en beheren, en werkt met verschillende rollen (gebruiker of admin) afhankelijk van wie er inlogt.



## Screenshots
Komt nog als de website klaar is


## Bronnen

- **Lessen Back End Webontwikkeling (Erasmushogeschool Brussel)**
  - Slides en cursusmateriaal gebruikt tijdens de opleiding
  - Voorbeelden en opdrachten afkomstig uit de lessen

- **Laravel Eindproject**
  - Projectopdracht en richtlijnen vanuit de opleiding
  - Feedback en aanbevelingen van docenten

- Laravel Blade Templates en Directives  
  [https://laravel.com/docs/10.x/blade#blade-directives]
  [https://laravel.com/docs/11.x/blade]
  [https://chatgpt.com/share/685285aa-8330-8005-899d-2df043ca925c]
  (Gebruikt door Kimberley voor het correct toepassen van Blade-syntax & om een goede readme aan te maken)

- Laravel officieel website
  [https://laravel.com/]
  (Gebruikt door Abdullah, Noah voor het opbouwen van laravel & de .env aangemaakt)

- Laravel 
  [https://laravel.com/docs/12.x/configuration]
  (Gebruikt door Dalil voor het laravel project te maken & admin erin te zetten)

- Claude Ai
  [https://claude.ai/share/378ba3b2-28a7-4b99-96de-9ccaad5db98b]
  (Gebruikt door Raihane voor de database)

## Gebruikte_technologieën

- Laravel 10
- PHP 8.1
- SQLite
- Blade templating
- Bootstrap 5
- Node.js & npm
- Git & GitHub


## Auteurs
Kimberley
Raihane
Dalil
Noah
Abdullah


## Taak_verdeling

| Taak                        | Verantwoordelijke(n)         |
|-----------------------------|------------------------------|
| Backend ontwikkeling        | Dalil, Abdullah              |
| Frontend ontwikkeling       | Kimberley, Noah              |
| Database ontwerp & beheer   | Raihane                      |
| Materiaalbeheer (inhoud)    | Aquafin, Erasmushogschool    |
| Testen & kwaliteitscontrole | Noah                         |
| Documentatie                | kimberley                    |
| Support & onderhoud         | Groep 6                      |