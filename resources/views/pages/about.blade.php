@extends('layouts.master')

@section('content')

    <section class="section2 parallax bg2">
        <div class="one-whole">
            <img class="about-picture" src="/images/kldavisphoto.jpeg" />
            <h1 class="parallax-quote2">"Hello there..."<br><strong><i class="fas fa-minus hyphen"></i> Obi-Wan Kenobi</strong></h1>
        </div>
    </section>

    <div class="about-section-container one-whole">

        <div class="one-whole about-details">
            <p class="about-paragraph">
                My name is Kevin Davis and I am the Droid, er, Developer you are looking for! By visiting this page, it seems that you'd like to know a little
                bit more about me. It would be rude of me to not oblige:
            </p>
            <p class="about-paragraph">
                First things first, I am a huge Star Wars nerd! The Shadows of the Empire novel is my favorite piece of literature,
                and I've read through it multiple times. It takes place in between Empire and Return of the Jedi, I highly suggest it! I am also a gamer at
                heart, and I feel that I always will be (the Dark Souls series is the greatest collection of games of all time). In addition to that, I have a massive interest in building computers piece by piece. Plug-and-play is definitely great, but
                there is an added satisfaction when you build your own machine. My love for gaming and building computers is really what sparked my initial
                interest in programming, and I haven't looked back!
            </p>
            <p class="about-paragraph">
                It all started one day when I was simply playing with the calculator that comes on Windows, and I wondered how to go about coding something like that.
                After reading into some basic programming concepts, I decided to dive deeper and enroll in a Computer Science program. I had finally found my muse, coding!
                Being able to take my ideas, turn them into code, and watch something being built right in front of me is exactly what I wanted to do, and I didn't stop. After
                learning the syntax and capabilities of different programming languages along the way, I graduated from Governors State University, with my
                Bachelor's in Computer Science.
            </p>
            <p class="about-paragraph">
                I was hired directly out of school by Grunt Style, and am currently still employed there. I started by doing front-end work on the company's Shopify-based e-commerce
                store, and my professional career grew from there. After finally professionally applying all of the work I put into my degree, I wanted more - of everything! I asked for
                more responsibility, more tasks, and greater challenges. I received all of that, and I got to go back to doing what I loved the most, learning. PHP was not part of my
                Computer Science curriculum, and that is what most of our back-end functionality is written in. I struggled at first, but if I'm not struggling some way, it means
                that I'm not trying my hardest to better myself. After learning what PHP could do, and grasping the syntax, I was off and running.
            </p>
            <p class="about-paragraph">
                From that point on, I've been tasked with robust, full-stack projects that have all been delivered above and beyond expectations. From building out
                web applications in the Laravel framework, to extending our Shopify store's capabilities by interacting with the API, to building out
                custom websites for brand launches, I've grown exponentially as a full-stack developer. Some of the previously mentioned projects include:
            </p>
            <ul class="projects-list">
                <li class="single-project"><i class="fab fa-mandalorian"> - </i>
                    Written in Laravel, a promotional product web application for a specific group of customers to redeem a unique code, attached to their email address, to receive
                    a free product from Grunt Style's Shopify store.
                </li>
                <li class="single-project"><i class="fab fa-mandalorian"> - </i>
                    Connecting to a third party company's API, in order to drastically help our customer service team. This third party company handles our
                    monthly and annual subscription customers, but they do not offer any sort of front-end to the customers to edit their data. This situation
                    took up a good majority of our CS team's call times in order to make the changes to this customer data. I queried the customer's Shopify
                    customer ID against the ID's of the third party company's API, and presented a form to every customer who is a subscriber. This form would
                    let those customers change their shipping information, product variant, or product size. A successful form validation would hit the
                    third party company's API, as well as our Shopify store's API to POST the new data in both places - which saved our CS team from interacting
                    with any of that.
                </li>
                <li class="single-project"><i class="fab fa-mandalorian"> - </i>
                    Also written in Laravel, a web application for a company Grunt Style acquired, which sponsors professional shooting matches.
                </li>
                <li class="single-project"><i class="fab fa-mandalorian"> - </i>
                    A custom Wordpress theme written for our sister company's website re-launch.
                </li>
            </ul>
            <p class="about-paragraph">
                More detailed information about these projects can be found on my <a class="links" href="/portfolio"><u>portfolio</u></a> page, where you can also see them in action!
            </p>
            <p class="about-paragraph">
                Oh hey, you're still here, and you're looking to hear more? Head on over to my <a class="links" href="/contact"><u>contact</u></a> page to drop me a line! I love receiving questions
                about myself, and I'll be absolutely sure to respond back as quickly as I can!
            </p>
        </div>

        <div class="return-home-container one-wholet">
            <a class="return-home" href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To The Cockpit</a>
        </div>

    </div>

@stop