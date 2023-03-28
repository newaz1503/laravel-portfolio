
@extends('frontend.layouts.app')

@section('title' ,'Portfolio Details')

@push('css')
  <style>

  </style>
@endpush

@section('content')
  <!-- ======= Header ======= -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfoio Details</h2>
          <ol>
            <li><a href="{{ route('front.home') }}">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('uploads/portfolio/'.$portfolio->image)}}" alt="Portfolio image">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{ $portfolio->title ?? '' }}</h3>
              <ul>
                <li><strong>Category</strong>: {{ $portfolio->category->name ?? '' }}</li>
                <li><strong>Project URL</strong>: <a href="{{ $portfolio->url ?? '' }}" target="_blank">{{ $portfolio->url ?? '' }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio detail</h2>
              <p>
                {{ $portfolio->description ?? '' }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection

@push('script')

@endpush
