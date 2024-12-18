@extends('layouts.app')

@section('title', 'Welcome to ClimateWare')

@section('content')
<!-- Hero Section with Background Image -->
<div class="hero-section" style="background-image: url('{{ asset('images/Plants.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; color: white; text-align: center; padding: 100px 0;">
    <div class="hero-overlay">
        <h1 class="display-4">Welcome to ClimateWare</h1>
        <p class="lead">A platform to raise awareness about global warming.</p>
        <a href="{{ route('articles') }}" class="btn hero-btn">Explore Articles</a>
    </div>
</div>


<!-- Section: Causes, Impacts, Actions -->
<div class="container mt-5 section-bg">
    <div class="row mt-4">
        <!-- Penyebab -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/causes.jpg" class="card-img-top" alt="Causes of Global Warming">
                <div class="card-body">
                    <h5 class="card-title">Causes of Global Warming</h5>
                    <p class="card-text">
                        Global warming is primarily driven by human activities that increase the concentration of greenhouse gases in the atmosphere. Deforestation, for example, removes trees that naturally absorb CO2. The burning of fossil fuels for energy, such as coal, oil, and natural gas, releases carbon dioxide and methane into the air. Additionally, industrial activities, agriculture, and waste management practices all contribute to the release of greenhouse gases, which trap heat and result in rising global temperatures.
                    </p>
                </div>
            </div>
        </div>

        <!-- Dampak -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/forestfire.jpeg" class="card-img-top" alt="Impacts of Global Warming">
                <div class="card-body">
                    <h5 class="card-title">Impacts of Global Warming</h5>
                    <p class="card-text">
                        The effects of global warming are already being felt around the world. Rising temperatures lead to the melting of polar ice caps and glaciers, causing sea levels to rise. This can result in flooding of low-lying areas, threatening coastal communities. Additionally, extreme weather events such as hurricanes, droughts, and heatwaves are becoming more frequent and severe. These changes negatively impact biodiversity, with many species struggling to adapt or survive. Human health is also at risk, as rising temperatures contribute to the spread of diseases and pose challenges to food and water security.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pentingnya Tindakan -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="images/actnow.jpg" class="card-img-top" alt="Why Act Now">
                <div class="card-body">
                    <h5 class="card-title">Why Act Now?</h5>
                    <p class="card-text">
                        Immediate action is necessary to prevent the worst impacts of global warming. The longer we delay, the more difficult and expensive it will be to reverse or adapt to the consequences. Mitigation efforts, such as reducing carbon emissions and transitioning to renewable energy sources, can help slow down the process. At the same time, adaptation strategies like building resilient infrastructure, protecting natural ecosystems, and improving public health systems are essential to safeguard our future. It is crucial that we act now to protect our planet and ensure a sustainable future for generations to come.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section: Articles -->
<div class="mt-5 section-bg">
    <h2 class="text-center">Articles</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Article</a>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($posts as $post)
        <div class="col">
            <!-- Article Card -->
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
