@include('partials.head')
@include('partials.header')
@include('partials.policy-styles')

<div class="page-container">

    <div class="desktop-policy">
        <article class="starwars">
            <audio preload="auto">
                <source src="https://s.cdpn.io/1202/Star_Wars_original_opening_crawl_1977.ogg" type="audio/ogg" />
                <source src="https://s.cdpn.io/1202/Star_Wars_original_opening_crawl_1977.mp3" type="audio/mpeg" />
            </audio>

            <div class="animation">

                <section class="logos">
                    <img class="text-center logo-image" src="/images/privacy-logo-thin.png"/>
                </section>

                <section class="intro">
                    A long time ago, in a galaxy far,<br> far away....
                </section>

                <section class="titles">
                    <div spellcheck="false">
                        <p class="text-center">Episode X<br><span class="episode">Privacy Policy</span></p>
                        <p>
                            By entering your name, email address, and phone number
                            into the form on the contact page, you can feel safe
                            knowing that your information is not stored by me in any way.
                        </p>

                        <p>
                            Said form only sends an email to
                            me personally, and your information is
                            included as a means to reach
                            back out to you. You could always enter dummy
                            information if you aren't comfortable, but
                            where's the fun in that?
                        </p>

                        <p>
                            If you wish to not fill out the form, my personal contact
                            information is also listed on the contact page, and please
                            feel free to send me an email, or give me a call - I would
                            love to hear from you....
                        </p>
                    </div>
                </section>

                <section class="logo">
                    <img class="text-center logo-image" src="/images/privacy-logo-thin.png"/>
                </section>
            </div>
        </article>
    </div>

    <div class="mobile-policy">
        <div class="mobile-policy-logo">
            <img class="one-whole" src="/images/privacy-logo-thin.png"/>
        </div>
        <div class="mobile-policy-body">
            <p>
                By entering your name, email address, and phone number
                into the form on the contact page, you can feel safe
                knowing that your information is not stored by me in any way.
            </p>

            <p>
                Said form only sends an email to
                me personally, and your information is
                included as a means to reach
                back out to you. You could always enter dummy
                information if you aren't comfortable, but
                where's the fun in that?
            </p>

            <p>
                If you wish to not fill out the form, my personal contact
                information is also listed on the contact page, and please
                feel free to send me an email, or give me a call - I would
                love to hear from you....
            </p>
        </div>
    </div>

    <script type="text/javascript">

        StarWars = (function() {

            function StarWars(args) {
                this.el = $(args.el);
                this.audio = this.el.find('audio').get(0);
                this.start = this.el.find('.start');
                this.animation = this.el.find('.animation');
                this.audio.play();
                this.el.append(this.animation);
            }

            return StarWars;
        })();

        (function($) {

            if ( $('.desktop-policy').is(":visible") ) {
                new StarWars({
                    el : '.starwars'
                });
            }

        })(jQuery);

    </script>

</div>


@include('partials.footer')
