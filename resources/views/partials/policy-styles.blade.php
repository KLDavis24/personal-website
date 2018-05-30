<style>
    html,
    body {
        width: 100%;
        height: 100%;
        font: 700 1em "News Cycle", sans-serif;
        letter-spacing:.15em;
        color: #ff6;
        background: #000;
        overflow: hidden;
        margin: 0;
    }
    section {
        position: absolute;
        top: 45%;
        left: 50%;
        z-index: 1;
    }
    .intro {
        width: 15em;
        margin: 0 0 0 -7.5em;
        opacity: 0;
        font-size: 200%;
        font-weight: 400;
        color: rgb(75, 213, 238);
        animation: intro 6s ease-out 1s;
    }
    .logo {
        opacity: 0;
        animation: logo 9s ease-out 9s;
    }
    .logo svg {
        width: inherit;
    }
    .titles {
        width: 14.65em;
        margin: 0 0 0 -7.325em;
        top: auto;
        bottom: 95px;
        height: 50em;
        font-size: 350%;
        text-align: justify;
        overflow: hidden;
        transform-origin: 50% 100%;
        transform: perspective(300px) rotateX(25deg);
    }
    .titles div {
        position: absolute;
        top: 100%;
        animation: titles 80s linear 13s;
    }
    .titles p {
        margin: 1.35em 0 1.85em 0;
        line-height: 1.35em;
        backface-visibility: hidden;
    }
    .text-center {
        text-align: center;
    }
    .episode {
        font-size: 2.5rem;
    }
    .site-footer {
        bottom: 0;
        position: fixed;
        text-align: center;
    }
    .footer-content p {
        font-size: 15px;
        letter-spacing: 0;
        font-weight: normal;
    }
    .navbar-items {
        letter-spacing: 0;
        font-weight: normal;
    }
    .page-container > * {
        padding: 0 10px 0 10px;
        -webkit-box-flex: 1;
        -ms-flex: 1 100%;
        flex: 1 100%;
    }
    @keyframes intro {
        0% {
            opacity: 0;
        }
        20% {
            opacity: 1;
        }
        90% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    @keyframes logo {
        0% {
            width: 18em;
            margin: -9em 0 0 -9em;
            transform: scale(2.15);
            opacity: 1;
        }
        50% {
            opacity: 1;
            width: 18em;
            margin: -9em 0 0 -9em;
        }
        100% {
            transform: scale(.1);
            opacity: 0;
            width: 18em;
            margin: -9em 0 0 -9em;
        }
    }

    @keyframes titles {
        0% {
            top: 100%;
            opacity: 1;
        }
        95% {
            opacity: 1;
        }
        100% {
            top: 20%;
            opacity: 0;
        }
    }
    /* latin-ext */
    @font-face {
        font-family: 'News Cycle';
        font-style: normal;
        font-weight: 400;
        src: local('News Cycle'), local('NewsCycle'), url(https://fonts.gstatic.com/s/newscycle/v14/CSR64z1Qlv-GDxkbKVQ_fO4KTet_.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'News Cycle';
        font-style: normal;
        font-weight: 400;
        src: local('News Cycle'), local('NewsCycle'), url(https://fonts.gstatic.com/s/newscycle/v14/CSR64z1Qlv-GDxkbKVQ_fOAKTQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* latin-ext */
    @font-face {
        font-family: 'News Cycle';
        font-style: normal;
        font-weight: 700;
        src: local('News Cycle Bold'), local('NewsCycle-Bold'), url(https://fonts.gstatic.com/s/newscycle/v14/CSR54z1Qlv-GDxkbKVQ_dFsvWNpeudwk.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'News Cycle';
        font-style: normal;
        font-weight: 700;
        src: local('News Cycle Bold'), local('NewsCycle-Bold'), url(https://fonts.gstatic.com/s/newscycle/v14/CSR54z1Qlv-GDxkbKVQ_dFsvWNReuQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>