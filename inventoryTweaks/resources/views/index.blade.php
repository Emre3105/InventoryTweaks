<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InventoryTweaks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        </style>
    </head>
    <body>
        <table class="table table-bordered table-striped">
            <thead>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
            </thead>
            @foreach($employes as $employe)
                <tr>
                    <td> {{ $employe->id }} </td>
                    <td> {{ $employe->nom }} </td>
                    <td> {{ $employe->prenom }} </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
