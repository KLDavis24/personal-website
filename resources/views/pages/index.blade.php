<!DOCTYPE HTML>
<html>

<head>
    @include('partials.head')
</head>

<body>

<div class="page-container">
    <header class="one-whole" id="navbar">

        <div class="site-header one-whole">
            <div class="one-third float-left">
                <i class="fa fa-code navbar-code" aria-hidden="true"></i>
            </div>
            <div class="one-third float-left">
                <a href="#" class="navbar-items">About Me</a>
                <a href="#" class="navbar-items">My Work</a>
                <a href="#" class="navbar-items">Fun Things</a>
                <a href="#" class="navbar-items">Contact Me</a>
            </div>
            <div class="one-third float-left">
                <i class="navbar-bracket float-right" aria-hidden="true">{ }</i>
            </div>
        </div>

    </header>
    <main class="wrapper">
        <section class="section parallax bg1">
            <h1 class="parallax-quote">"One man's crappy software is another man's full time job."<br><strong>- Jessica Gaston</strong></h1>
        </section>
        <section class="skills-section one-whole float-left">

            <p class="skills-header">Technical Skills</p>

            <div class="one-whole float-left skills-row">
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-php skills-icon"> <span class="skills-text">PHP</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-js-square skills-icon"> <span class="skills-text">JavaScript</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-laravel skills-icon"> <span class="skills-text">Laravel</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                    </div>
                </div>
            </div>

            <div class="one-whole float-left skills-row">
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-angular skills-icon"> <span class="skills-text">Angular</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-node skills-icon"> <span class="skills-text">Node</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-react skills-icon"> <span class="skills-text">React</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                    </div>
                </div>
            </div>

            <div class="one-whole float-left skills-row">
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-html5 skills-icon"> <span class="skills-text">HTML</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-css3-alt skills-icon"> <span class="skills-text">CSS</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fab fa-python skills-icon"> <span class="skills-text">Python</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                    </div>
                </div>
            </div>

            <div class="one-whole float-left skills-row">
                <div class="one-quarter float-left skill-container">
                    <i class="fas fa-code-branch skills-icon"> <span class="skills-text">Git</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fas fa-database skills-icon"> <span class="skills-text">SQL</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                    </div>
                </div>
                <div class="one-quarter float-left skill-container">
                    <i class="fas fa-terminal skills-icon"> <span class="skills-text">Command Line</span></i>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="one-whole float-left experience-section text-center">
            <p class="experience-header">Full-Stack Developer</p>
            <p class="experience-subtext">With over 2 years of experience in a plethora of languages and frameworks, I am fully accustomed to the Agile and Object-oriented methodologies.</p>
            <button class="btn experience-button">My Background</button>
            <p class="experience-quote">"I'm just a simple man trying to make my way in the universe."<br><strong>- Jango Fett</strong></p>
        </section>

        <footer class="one-whole float-left site-footer">
            <p>Kevin L Davis - Copyright 2018 &copy;</p>
            <p>Privacy Policy | Contact</p>
        </footer>
    </main>
</div>

</body>

</html>

{{--@extends('layouts.master')--}}

{{--@section('content')--}}

    {{--<div class="index-container">--}}
        {{--<section class="index-banner"></section>--}}

        {{--<section class="skills-section one-whole float-left">--}}

            {{--<h1 class="skills-header"><u>Technical Skills</u></h1>--}}

            {{--<div class="one-whole float-left skills-row">--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-php skills-icon"> <span class="skills-text">PHP</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-js-square skills-icon"> <span class="skills-text">JavaScript</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-laravel skills-icon"> <span class="skills-text">Laravel</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="one-whole float-left skills-row">--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-angular skills-icon"> <span class="skills-text">Angular</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-node skills-icon"> <span class="skills-text">Node</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-react skills-icon"> <span class="skills-text">React</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="one-whole float-left skills-row">--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-html5 skills-icon"> <span class="skills-text">HTML</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-css3-alt skills-icon"> <span class="skills-text">CSS</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fab fa-python skills-icon"> <span class="skills-text">Python</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="one-whole float-left skills-row">--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fas fa-code-branch skills-icon"> <span class="skills-text">Git</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fas fa-database skills-icon"> <span class="skills-text">SQL</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="one-quarter float-left skill-container">--}}
                    {{--<i class="fas fa-terminal skills-icon"> <span class="skills-text">Command Line</span></i>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</section>--}}
    {{--</div>--}}

{{--@stop--}}