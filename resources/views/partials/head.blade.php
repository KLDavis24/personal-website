<meta name="viewport" content="width=device-width, initial-scale=1">
<link async href='https://fonts.googleapis.com/css?family=Oswald:700,300,400' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ URL::asset(elixir('css/app.css')) }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>Kevin Davis</title>

<script type="text/javascript">
    $(window).scroll(
        {
            previousTop: 0,
        },
        function () {
            var currentTop = $(window).scrollTop();
            var headerHeight = 65;
            if ($(window).scrollTop() > headerHeight) {
                if (currentTop < this.previousTop) {
                    $('#navbar').fadeIn(300);
                } else {
                    $('#navbar').fadeOut(300);
                }
            }
            this.previousTop = currentTop;
        });
</script>