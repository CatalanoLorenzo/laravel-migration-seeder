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
                @foreach($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Train {{$train->Train_Code}} of {{$train->Agency}} direct {{$train->Departure_station}}-{{$train->Arrival_station}} </h4>
                            <p class="card-text">Start : {{$train->Departure_time}} to {{$train->Departure_station}}</p>
                            <p class="card-text">End : {{$train->Arrival_time}} to {{$train->Arrival_station}}</p>
                            <p class="card-text">Code : {{$train->Train_Code}}</p>
                            <p class="card-text">Number of carriges : {{$train->Number_of_carriages}}</p>
                            <p class="card-text">is {{$train->In_time}}</p>
                            <p class="card-text">is {{$train->Deleted}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>