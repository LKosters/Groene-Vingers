@extends('layouts.dashboard')
@section('content')
    <p>Welkom op het dashboard</p>
    <div>
        <canvas id="myChart"></canvas>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php $currentDate = date('Y-m-d'); ?>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'day',
                            displayFormats: {
                                day: 'MMM D'
                            }
                        }
                    }]
                }
            },
            data: {
                labels: [ @foreach($users as $key => $value)'{{ $value->name }}',@endforeach],
                datasets: [{
                    label: 'Leeftijd account in dagen',
                    data: [
                        @foreach($users as $key => $value)
                            {{ Carbon\Carbon::parse($value->created_at)->diffInDays($currentDate) }},
                        @endforeach
                    ]
                }],
            }
        });


        // Update de grafiek om de nieuwe dataset weer te geven
        myChart.update();

    </script>
@endsection
