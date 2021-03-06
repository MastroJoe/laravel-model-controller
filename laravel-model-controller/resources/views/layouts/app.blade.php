<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <!-- linko file SCSS -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      @include('partials.header')
      <main>
        @yield('main')
      </main>
      @include('partials.footer')
      <!-- linko file JS -->
      <script src="/js/app.js" charset="utf-8"></script>
    </body>
</html>


<!-- oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.
Create un nuovo progetto Laravel 7 e tramite phpMyAdmin create un nuovo database.
Importate nel vostro database la tabella movies in allegato e inserite le vostre credenziali per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /.
All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view
che quindi li visualizzerà a schermo, tramite delle card.

BONUS: Stilare il layout nei dettagli con Sass -->
