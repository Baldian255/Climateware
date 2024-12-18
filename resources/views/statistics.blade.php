@extends('layouts.app')

@section('title', 'Climate Statistics')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Global Climate Statistics</h1>

    <!-- Grafik Suhu Global -->
    <div class="row">
        <div class="col-md-6">
            <h3>Global Temperature Change</h3>
            <canvas id="temperatureChart"></canvas>
            <p><small>Data Source: NASA GISS, Global Surface Temperature Analysis</small></p>
        </div>
        <div class="col-md-6">
            <h3>Carbon Emissions by Sector</h3>
            <canvas id="emissionsChart"></canvas>
            <p><small>Data Source: Global Carbon Project</small></p>
        </div>
    </div>

    <!-- Statistik Permukaan Laut -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Sea Level Rise</h3>
            <p>The average sea level has been rising due to global warming. Here are the projections for the next 50 years:</p>
            <canvas id="seaLevelChart"></canvas>
            <p><small>Data Source: NASA Sea Level Change</small></p>
        </div>
    </div>

    <!-- Statistik Kehilangan Keanekaragaman Hayati -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Endangered Species</h3>
            <p>The effects of climate change are causing more species to become endangered. See the trend below:</p>
            <canvas id="biodiversityChart"></canvas>
            <p><small>Data Source: IUCN Red List</small></p>
        </div>
    </div>

    <!-- Statistik Polusi Udara -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Air Pollution Index</h3>
            <p>Air pollution has become a significant issue in many cities worldwide. Below is the air quality index for major cities:</p>
            <canvas id="airPollutionChart"></canvas>
            <p><small>Data Source: World Health Organization (WHO), AirVisual</small></p>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Grafik Suhu Global
var ctx = document.getElementById('temperatureChart').getContext('2d');
var temperatureChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1880', '1900', '1950', '2000', '2020'],
        datasets: [{
            label: 'Global Temperature (°C)',
            data: [13.7, 13.8, 14.0, 14.4, 15.2],  // Data suhu global dari NASA
            borderColor: 'rgba(255, 99, 132, 1)',
            fill: false,
        }]
    }
});

// Grafik Emisi Karbon
var ctx2 = document.getElementById('emissionsChart').getContext('2d');
var emissionsChart = new Chart(ctx2, {
    type: 'pie',
    data: {
        labels: ['Transport', 'Energy', 'Industry', 'Agriculture', 'Other'],
        datasets: [{
            label: 'Global Carbon Emissions',
            data: [23, 40, 18, 13, 6],  // Data emisi karbon berdasarkan sektor
            backgroundColor: ['#FF5733', '#33FF57', '#3357FF', '#57FF33', '#FF33FF'],
        }]
    }
});

// Grafik Peningkatan Permukaan Laut
var ctx3 = document.getElementById('seaLevelChart').getContext('2d');
var seaLevelChart = new Chart(ctx3, {
    type: 'line',
    data: {
        labels: ['2020', '2050', '2100'],
        datasets: [{
            label: 'Sea Level Rise (meters)',
            data: [0.1, 0.3, 0.6],  // Data proyeksi kenaikan permukaan laut
            borderColor: 'rgba(54, 162, 235, 1)',
            fill: false,
        }]
    }
});

// Grafik Kehilangan Keanekaragaman Hayati
var ctx4 = document.getElementById('biodiversityChart').getContext('2d');
var biodiversityChart = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: ['2000', '2020'],
        datasets: [{
            label: 'Endangered Species (%)',
            data: [10, 25],  // Data spesies terancam punah berdasarkan IUCN
            backgroundColor: 'rgba(255, 159, 64, 0.2)',
            borderColor: 'rgba(255, 159, 64, 1)',
            borderWidth: 1
        }]
    }
});

// Grafik Polusi Udara (misal, AQI di beberapa kota)
var ctx5 = document.getElementById('airPollutionChart').getContext('2d');
var airPollutionChart = new Chart(ctx5, {
    type: 'bar',
    data: {
        labels: ['New York', 'Los Angeles', 'Beijing', 'Delhi', 'Jakarta'],
        datasets: [{
            label: 'Air Quality Index (AQI)',
            data: [61, 53, 82, 167, 50],  // Data AQI di beberapa kota
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    }
});
</script>
@endsection
