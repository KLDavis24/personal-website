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
        top: 55%;
        left: 50%;
        z-index: 1;
    }
    .intro {
        top: 45%;
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
    .logo img {
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
    .mobile-menu {
        letter-spacing: 0;
    }
    .w3-bar-block .w3-bar-item {
        letter-spacing: 0;
        font-weight: normal;
    }
    .w3-dropdown-content {
        left: -53% !important;
        top: 115% !important;
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

    /* ----------- iPhone 4 and 4S ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 320px)
    and (max-device-width: 480px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 320px)
    and (max-device-width: 480px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: landscape) {
    }

    /* ----------- iPhone 5, 5S, 5C and 5SE ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 320px)
    and (max-device-width: 568px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .mobile-policy-body {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .mobile-policy-logo img {
            width: 80%;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 320px)
    and (max-device-width: 568px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: landscape) {
    }

    /* ----------- iPhone 6, 6S, 7 and 8 ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 375px)
    and (max-device-width: 667px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .mobile-policy-body {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .mobile-policy-logo img {
            width: 85%;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 375px)
    and (max-device-width: 667px)
    and (-webkit-min-device-pixel-ratio: 2)
    and (orientation: landscape) {
    }

    /* ----------- iPhone 6+, 7+ and 8+ ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 414px)
    and (max-device-width: 736px)
    and (-webkit-min-device-pixel-ratio: 3)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 414px)
    and (max-device-width: 736px)
    and (-webkit-min-device-pixel-ratio: 3)
    and (orientation: landscape) {
    }

    /* ----------- iPhone X ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 375px)
    and (max-device-width: 812px)
    and (-webkit-min-device-pixel-ratio: 3)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 375px)
    and (max-device-width: 812px)
    and (-webkit-min-device-pixel-ratio: 3)
    and (orientation: landscape) {
    }

    /* ----------- Galaxy S3 ----------- */

    /* Portrait */
    @media screen
    and (device-width: 320px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 2)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media screen
    and (device-width: 320px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 2)
    and (orientation: landscape) {

    }

    /* ----------- Galaxy S4, S5 and Note 3 ----------- */

    /* Portrait */
    @media screen
    and (device-width: 320px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 3)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media screen
    and (device-width: 320px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 3)
    and (orientation: landscape) {

    }

    /* ----------- Galaxy S6 ----------- */

    /* Portrait */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 4)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 4)
    and (orientation: landscape) {

    }

    /* ----------- Google Pixel ----------- */

    /* Portrait */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 3)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 3)
    and (orientation: landscape) {

    }

    /* ----------- Google Pixel XL ----------- */

    /* Portrait */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 4)
    and (orientation: portrait) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
    }

    /* Landscape */
    @media screen
    and (device-width: 360px)
    and (device-height: 640px)
    and (-webkit-device-pixel-ratio: 4)
    and (orientation: landscape) {

    }

    /* ----------- iPad 1, 2, Mini and Air ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 768px)
    and (max-device-width: 1024px)
    and (orientation: portrait)
    and (-webkit-min-device-pixel-ratio: 1) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .desktop-policy, .desktop-header {
            display: none;
        }
        .mobile-policy, .mobile-header {
            display: block;
        }
        .mobile-policy-logo img {
            width: 70%;
        }
        .mobile-policy-body {
            padding-left: 6rem;
            padding-right: 6rem;
            font-size: 2rem;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 768px)
    and (max-device-width: 1024px)
    and (orientation: landscape)
    and (-webkit-min-device-pixel-ratio: 1) {

    }

    /* ----------- iPad 3, 4 and Pro 9.7" ----------- */

    /* Portrait */
    @media only screen
    and (min-device-width: 768px)
    and (max-device-width: 1024px)
    and (orientation: portrait)
    and (-webkit-min-device-pixel-ratio: 2) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .desktop-policy {
            display: none;
        }
        .mobile-policy {
            display: block;
        }
        .mobile-policy-logo img {
            width: 70%;
        }
        .mobile-policy-body {
            padding-left: 6rem;
            padding-right: 6rem;
            font-size: 2rem;
        }
    }

    /* Landscape */
    @media only screen
    and (min-device-width: 768px)
    and (max-device-width: 1024px)
    and (orientation: landscape)
    and (-webkit-min-device-pixel-ratio: 2) {

    }

    /* ----------- iPad Pro 10.5" ----------- */

    /* Portrait */
    /* Declare the same value for min- and max-width to avoid colliding with desktops */
    /* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
    @media only screen
    and (min-device-width: 834px)
    and (max-device-width: 834px)
    and (orientation: portrait)
    and (-webkit-min-device-pixel-ratio: 2) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .desktop-policy {
            display: none;
        }
        .mobile-policy {
            display: block;
        }
        .mobile-policy-logo img {
            width: 70%;
        }
        .mobile-policy-body {
            padding-left: 9rem;
            padding-right: 9rem;
            font-size: 2.5rem;
        }
    }

    /* Landscape */
    /* Declare the same value for min- and max-width to avoid colliding with desktops */
    /* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
    @media only screen
    and (min-device-width: 1112px)
    and (max-device-width: 1112px)
    and (orientation: landscape)
    and (-webkit-min-device-pixel-ratio: 2) {

    }

    /* ----------- iPad Pro 12.9" ----------- */

    /* Portrait */
    /* Declare the same value for min- and max-width to avoid colliding with desktops */
    /* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
    @media only screen
    and (min-device-width: 1024px)
    and (max-device-width: 1024px)
    and (orientation: portrait)
    and (-webkit-min-device-pixel-ratio: 2) {
        footer {
            position: inherit !important;
        }
        html, body {
            overflow: visible !important;
        }
        .desktop-policy {
            display: none;
        }
        .mobile-policy {
            display: block;
        }
        .mobile-policy-logo img {
            width: 70%;
        }
        .mobile-policy-body {
            padding-left: 9rem;
            padding-right: 9rem;
            font-size: 2.5rem;
        }
    }

    /* Landscape */
    /* Declare the same value for min- and max-width to avoid colliding with desktops */
    /* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
    @media only screen
    and (min-device-width: 1366px)
    and (max-device-width: 1366px)
    and (orientation: landscape)
    and (-webkit-min-device-pixel-ratio: 2) {

    }
</style>