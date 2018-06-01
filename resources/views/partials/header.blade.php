<header class="one-whole" id="navbar">

    <div class="site-header one-whole">

        <div class="desktop-header">
            <div class="one-third float-left">
                <i class="fa fa-code navbar-code" aria-hidden="true"></i>
            </div>
            <div class="one-third float-left">
                <a href="/" id="nav-home" class="navbar-items">Home</a>
                <a href="/about" id="nav-about" class="navbar-items">About Me</a>
                <a href="/portfolio" id="nav-port" class="navbar-items">Portfolio</a>
                <a href="/contact" id="nav-contact" class="navbar-items">Contact Me</a>
            </div>
            <div class="one-third float-left">
                <i class="navbar-bracket float-right" aria-hidden="true">{ }</i>
            </div>
        </div>

        <div class="mobile-header">
            <div class="one-third float-left">
                <i class="fa fa-code navbar-code" aria-hidden="true"></i>
            </div>
            <div class="one-third float-left mobile-menu-container">
                <div class="w3-container">
                    <div class="w3-dropdown-click">
                        <i onclick="myFunction()" class="fa fa-bars" aria-hidden="true"> <span class="mobile-menu">Menu</span></i>
                        <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                            <a href="/" class="w3-bar-item w3-button">Home</a>
                            <a href="/about" class="w3-bar-item w3-button">About Me</a>
                            <a href="/portfolio" class="w3-bar-item w3-button">Portfolio</a>
                            <a href="/contact" class="w3-bar-item w3-button">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third float-left">
                <i class="navbar-bracket float-right" aria-hidden="true">{ }</i>
            </div>
        </div>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("Demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>

</header>