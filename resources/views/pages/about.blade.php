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
                My development background all started one day when I was simply playing with Windows calculator, and I wondered how to go about coding something like that.
                After reading into some basic programming concepts, I decided to dive deeper and enroll in a Computer Science program. I had finally found my muse, coding!
                Being able to take my ideas, turn them into code, and watch something being built right in front of me is exactly what I wanted to do, and I didn't stop. After
                learning the syntax and capabilities of different programming languages along the way, I graduated from Governors State University, with my
                Bachelor's in Computer Science.
            </p>
            <p class="about-paragraph">
                I was hired directly out of school by Grunt Style (an e-commerce retail company), where I worked for over two years. I started by doing front-end work on the company's Shopify-based e-commerce
                store, and my professional career grew from there. After finally professionally applying all of the work I put into my degree, I wanted more - of everything! I asked for
                more responsibility, more tasks, and greater challenges. I received all of that, and I got to go back to doing what I loved the most, learning. PHP was not part of my
                Computer Science curriculum, and that is what most of Grunt Style's back-end functionality was written in. I struggled at first, but if I'm not struggling some way, it means
                that I'm not trying my hardest to better myself. After learning what PHP could do, and grasping the syntax, I was off and running.
            </p>
            <p class="about-paragraph">
                From that point on, I was tasked with robust, full-stack projects that have all been delivered above and beyond expectations. From building out
                web applications in the Laravel framework, to extending Grunt Style's Shopify store's capabilities by interacting with the API, to building out
                custom websites for brand launches, I've grown exponentially as a full-stack developer. Some of the previously mentioned projects include:
            </p>
            <p class="about-paragraph">
                In August of 2018, I left Grunt Style to pursue an opportunity to keep bettering myself as a developer at a much higher level. I am currently working
                for another e-commerce based company called Interior Define. With our headquarters in Chicago, the Interior Define team offers customers a fully customized
                and personal experience when ordering high-quality furniture pieces. I/D also offers customers the ability to shop our physical Guide Shops in Chicago, New York,
                San Francisco, Boston, LA, and Austin to get an in-person perspective on the quality of furniture, and to decide on which product best suits their lifestyle!
            </p>
            <p class="about-paragraph">
                I am currently tackling all sorts of tasks based in our middleware application between our Magento store, and our ERP system. I'm so excited to keep learning on a
                daily basis, and I could no have asked for a better team to be a part of at I/D! As my knowledge continues to grow, I fully expect the Interior Define team to grow
                exponentially as well; both with team number, and revenue-based outcomes!
            </p>
            {{--<ul class="projects-list">--}}
                {{--<li class="single-project"><i class="fab fa-mandalorian"> - </i>--}}
                    {{--Written in Laravel, a promotional product web application for a specific group of customers to redeem a unique code, attached to their email address, to receive--}}
                    {{--a free product from Grunt Style's Shopify store.--}}
                {{--</li>--}}
                {{--<li class="single-project"><i class="fab fa-mandalorian"> - </i>--}}
                    {{--Connecting to a third party company's API, in order to drastically help Grunt Style's customer service team. This third party company handled the--}}
                    {{--monthly and annual subscription customers, but they do not offer any sort of front-end to the customers to edit their data. This situation--}}
                    {{--took up a good majority of the CS team's call times in order to make the changes to this customer data. I queried the customer's Shopify--}}
                    {{--customer ID against the ID's of the third party company's API, and presented a form to every customer who is a subscriber. This form would--}}
                    {{--let those customers change their shipping information, product variant, or product size. A successful form validation would hit the--}}
                    {{--third party company's API, as well as the Shopify store's API to POST the new data in both places - which saved the CS team from interacting--}}
                    {{--with any of that.--}}
                {{--</li>--}}
                {{--<li class="single-project"><i class="fab fa-mandalorian"> - </i>--}}
                    {{--Also written in Laravel, a web application for a company Grunt Style acquired, which sponsors professional shooting matches.--}}
                {{--</li>--}}
                {{--<li class="single-project"><i class="fab fa-mandalorian"> - </i>--}}
                    {{--A custom Wordpress theme written for a Grunt Style sister company's website re-launch.--}}
                {{--</li>--}}
            {{--</ul>--}}
            <p class="about-paragraph">
                More detailed information about some of my projects can be found on my <a class="links" href="/portfolio"><u>portfolio</u></a> page, where you can also see them in action!
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