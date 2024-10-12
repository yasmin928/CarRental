@extends('master') <!-- Extend the master layout that contains the header, footer, and common sections -->

@section('title', $car->title) <!-- Set the car's title as the page title -->

@section('content')

<div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-5">
                <div class="intro">
                    <h1><strong>{{ $car->title }}</strong></h1> <!-- Car Title as Heading -->
                    <div class="custom-breadcrumbs"><a href="/">Home</a> <span class="mx-2">/</span> <a href="/listing">Listings</a> <span class="mx-2">/</span> <strong>{{ $car->title }}</strong></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="section-heading"><strong>{{ $car->title }}</strong></h2>
                <p class="mb-5">Discover the details of this car available for rent.</p>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Car Image -->
                <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->title }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Car Information -->
                <div class="car-details">
                    <h3>Car Details</h3>
                    <ul>
                        <li><strong>Price per day: </strong>${{ $car->price }}</li>
                        <li><strong>Luggage Capacity: </strong>{{ $car->luggage }}</li>
                        <li><strong>Doors: </strong>{{ $car->doors }}</li>
                        <li><strong>Passenger Capacity: </strong>{{ $car->passengers }}</li>
                        <li><strong>Description: </strong>{{ $car->content }}</li>
                    </ul>
                </div>
                <p><a href="#" class="btn btn-primary">Rent Now</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
