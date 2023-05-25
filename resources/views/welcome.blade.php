<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">Train {{Train_Code}} of {{Agency}} direct{{Departure_station}}-{{Arrival_station}} </h4>
                            <p class="card-text">Start : {{Departure_time}} to {{Departure_station}}</p>
                            <p class="card-text">End : {{Arrival_time}} to {{Arrival_station}}</p>
                            <p class="card-text">Code : {{Train Code}}</p>
                            <p class="card-text">Number of carriges : {{Number_of_carriages}}</p>
                            <p class="card-text">is {{In_time}}</p>
                            <p class="card-text">is {{Deleted}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>