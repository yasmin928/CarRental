@extends('master')
@section('title', 'Testimonials')
@section('content')

    <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="intro">
                        <h1><strong>Testimonials</strong></h1>
                        <div class="custom-breadcrumbs"><a href="{{ url('/') }}">Home</a> <span class="mx-2">/</span> <strong>Testimonials</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Testimonials</strong></h2>
                    <p class="mb-5">See what our customers are saying.</p>    
                </div>
            </div>
            <div class="row">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-4 mb-4">
                        <div class="testimonial-2">
                            <blockquote class="mb-4">
                                <p>"{{ $testimonial->content }}"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('images/' . $testimonial->image) }}" alt="Image" class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">{{ $testimonial->name }}</span>
                                    <span>{{ $testimonial->position }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section bg-primary py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-md-0">
                    <h2 class="mb-0 text-white">What are you waiting for?</h2>
                    <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                </div>
                <div class="col-lg-5 text-md-right">
                    <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
                </div>
            </div>
        </div>
    </div>

@endsection
