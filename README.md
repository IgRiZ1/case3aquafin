# case3aquafin

Dit is een handige Laravel-webapp waarmee je eenvoudig bestellingen kunt beheren via een overzichtelijk beheerderspaneel.

## Inhoudsopgave

-   [Beschrijving](#beschrijving)
-   [Vereisten](#vereisten)
-   [Installatie](#installatie)
-   [Functionaliteiten](#functionaliteiten)
-   [Gebruik](#gebruik)
-   [Fotos](#Fotos_project)
-   [Bronnen](#bronnen)
-   [Auteurs](#Auteurs)
-   [Taak](#Taak_verdeling)

---

## Beschrijving

Dit project is een webapplicatie waar de techniekers van Aquafin bestellingen kunnen plaatsen voor materialen die zij nodig hebben voor hun werk. Op de website is zichtbaar in welk magazijn de producten beschikbaar zijn en wat de levertijd is. Omdat het een interne tool is, zijn alle bestellingen gratis.

Er is ook een admin-paneel waarin beheerders bestellingen kunnen beheren, producten kunnen toevoegen en verwijderen. Het systeem geeft een overzicht van alle bestellingen, met functionaliteiten om deze te bekijken en te verwijderen.

De applicatie is gebouwd met Laravel, gebruikt Blade templates voor de weergave en Bootstrap voor de styling.

---

## Vereisten

-   PHP >= 8.0
-   Composer
-   MySQL of een andere ondersteunde database
-   Node.js & npm (optioneel, voor frontend assets)

---

## Installatie

Volg de onderstaande stappen om het project lokaal op te zetten:

-   composer install
-   cp .env.example .env
-   php artisan key:generate
-   DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=root
    DB_PASSWORD=secret
-   npm install
    npm run dev
-   php artisan migrate

dan om de server te starten moet je

-   php artisan serve

## Gebruik

Wanneer je de applicatie opent, kom je eerst op de loginpagina terecht. Hier log je in als admin of als gebruiker.

-   **Als gebruiker**:  
    Na het inloggen zie je de homepagina met een overzicht van alle artikelen, ingedeeld per categorie. Je kunt artikelen aan je winkelmandje toevoegen en vervolgens kiezen in welke stad je het wilt ontvangen. De bestelling wordt dan automatisch gekoppeld aan het magazijn in die stad en geplaatst.

-   **Als admin**:  
    Je hebt toegang tot dezelfde functies als een gewone gebruiker, maar daarnaast kun je ook nieuwe artikelen toevoegen, bestaande artikelen bewerken en alle bestellingen beheren.

Zo biedt de applicatie een overzichtelijke manier om bestellingen te plaatsen en te beheren, aangepast aan de rol die je hebt.


## Fotos_project
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
  (Gebruikt door Kimberley voor het correct toepassen van Blade-syntax)


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