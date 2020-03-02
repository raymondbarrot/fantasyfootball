<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

    </head>
    <body>
    <div class="flex-center">

        <div class="content">
            <img src="/img/player_profile.jpg" alt="player logo">
            <br />

            <div>
                <h3>{{$player->first_name}} {{$player->second_name}}</h3>
            </div>

            <table class="table table-striped" id="table">

                <thead>
                    <tr></tr>
                </thead>

                <tbody>
                    <tr>
                        <td> ID </td>
                        <td> {{$player->id}} </td>
                    </tr>

                    <tr>
                        <td> Form </td>
                        <td> {{$player->form}} </td>
                    </tr>

                    <tr>
                        <td> Total Points </td>
                        <td> {{$player->total_points}} </td>
                    </tr>

                    <tr>
                        <td> Influence </td>
                        <td> {{$player->influence}} </td>
                    </tr>

                    <tr>
                        <td> Creativity </td>
                        <td> {{$player->creativity}} </td>
                    </tr>

                    <tr>
                        <td> Threat </td>
                        <td> {{$player->threat}} </td>
                    </tr>

                    <tr>
                        <td> ICT Index </td>
                        <td> {{$player->ict_index}} </td>
                    </tr>
                </tbody>
                
            </table>
            <br />

            <a href="/players"><b>Back to List</b></a>
        
        </div>
    </div>
    <br />

    <footer>
        Copyright 2020 FantasyFootball
    </footer>
    
    </body>
</html>



