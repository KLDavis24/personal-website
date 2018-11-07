@extends('layouts.master')

@section('content')

    <div class="portfolio-container one-whole float-left text-center">
        <h1 class="portfolio-header">My Work</h1>

        <div class="one-whole float-left">
            <div class="one-half float-left text-center project-container">
                <p class="project-title">Grunt Style</p>
                <a target="_blank"  href="https://www.gruntstyle.com/"><img class="one-half project-img" src="/images/grunt-style.jpg"/></a>
                <p class="project-description">
                    Grunt Style's mainline, e-commerce store hosted in Shopify. Custom functionality includes: specific collection filters,
                    using AJAX calls to force hidden products into the customer's cart (specifically to offer a one-time, promo price for
                    subscription sign-ups, a subscription product pop-up modal on the cart page, custom drop-down mega menu, and much more!
                </p>
            </div>
            <div class="one-half float-left text-center project-container">
                <p class="project-title">Grunt Style Promos</p>
                <a target="_blank" href="https://promo.gruntstyle.com/"><img class="one-half project-img" src="/images/gs-promo.jpg" /></a>
                <p class="project-description">
                    Connecting to Grunt Style's Shopify API, a successful form validation will create an order with the entered information
                    instantly, without the customer having to see a cart or go through a checkout process. The application also comes with
                    an admin dashboard to import the email addresses/codes, and to check conversion analytics.
                </p>
            </div>
        </div>

        <div class="one-whole float-left">
            <div class="one-half float-left text-center project-container">
                <p class="project-title">Merica Bourbon</p>
                <a target="_blank"  href="http://www.mericabourbon.com/"><img class="one-half project-img" src="/images/merica-bourbon.jpg"/></a>
                <p class="project-description">
                    A simple brand information page that utilizes the Google Maps API for a store locator, an Instagram plugin
                    for users to see their posts on the site by adding a custom tag to them, and a custom 'Press' page to post
                    articles written about the brand.
                </p>
            </div>
            {{--<div class="one-half float-left text-center project-container">--}}
                {{--<p class="project-title">G3 Dynamics</p>--}}
                {{--<a target="_blank"  href="http://www.g3dynamics.com/"><img class="one-half project-img" src="/images/g3-dynamics.jpg"/></a>--}}
                {{--<p class="project-description">--}}
                    {{--This application utilizes Stripe for users to purchase a spot to participate in professional shooting matches. Also included is a--}}
                    {{--section to apply to sponsor any upcoming matches by selecting a specific sponsorship level, a gallery with--}}
                    {{--a carousel which utlizes the javascript slick library, and a custom dashboard to check sponsor applications,--}}
                    {{--email sign-ups, etc.--}}
                {{--</p>--}}
            {{--</div>--}}
        </div>

        <div class="return-home-container one-wholet">
            <a class="return-home" href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To The Cockpit</a>
        </div>
    </div>

@stop