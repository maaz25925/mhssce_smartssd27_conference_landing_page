<?php
// AI SmartSSD 2027 landing page
// Change this URL when the new conference website is deployed.
$mainWebsiteUrl = 'https://mhssconfrece.vercel.app/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="AI SmartSSD 2027 — International Conference on Smart Systems for Sustainable Development at MHSSCE.">

    <title>AI SmartSSD 2027 | MHSSCE</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
    /* =========================================================
       DESIGN TOKENS
       MHSSCE-INSPIRED GREEN EDITORIAL PALETTE
    ========================================================= */

        :root {
            --green: #1B5E3F;
            --green-bright: #2E7D5B;
            --green-soft: #EAF4EE;

            --black: #08110D;
            --charcoal: #142019;
            --text: #202924;

            --white: #FFFFFF;
            --off-white: #F7F9F7;

            --gray-100: #EEF2EF;
            --gray-200: #DDE5DF;
            --gray-300: #C6D1CA;
            --gray-500: #717B75;
            --gray-700: #444D48;

            --gold: #C8A44D;
            --gold-soft: #E9DDB8;

            --max-width: 1280px;

            --ease: cubic-bezier(.22, 1, .36, 1);
        }


    /* =========================================================
       RESET
    ========================================================= */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--white);
            color: var(--text);

            font-family: "Inter", Arial, Helvetica, sans-serif;

            line-height: 1.6;
            overflow-x: hidden;
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
        }

        button {
            font: inherit;
        }

        button,
        a {
            -webkit-tap-highlight-color: transparent;
        }

        :focus-visible {
            outline: 3px solid var(--green-bright);
            outline-offset: 4px;
        }


    /* =========================================================
       TYPOGRAPHY
    ========================================================= */

        h1,
        h2,
        h3,
        p {
            margin-top: 0;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 0;
            font-family: "Inter", Arial, Helvetica, sans-serif;
            font-weight: 800;
            letter-spacing: -0.055em;
        }

        h1 {
            font-size: clamp(4rem, 9vw, 8.6rem);
            line-height: .86;
        }

        h2 {
            font-size: clamp(2.8rem, 5.4vw, 5.2rem);
            line-height: .92;
        }


    /* =========================================================
       GLOBAL LAYOUT
    ========================================================= */

        .container {
            width: min(var(--max-width), calc(100% - 64px));
            margin-inline: auto;
        }

        .section {
            padding: 120px 0;
        }


    /* =========================================================
       HEADER
    ========================================================= */

        .site-header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;

            z-index: 50;

            border-top: 5px solid var(--green);

            color: var(--white);
        }

        .nav {
            width: min(var(--max-width), calc(100% - 64px));
            min-height: 86px;

            margin-inline: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid rgba(255, 255, 255, .18);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 14px;

            color: var(--white);
            text-decoration: none;
        }

        .brand-mark {
            width: 38px;
            height: 38px;

            display: grid;
            place-items: center;

            background: var(--green);

            font-size: .9rem;
            font-weight: 800;
        }

        .brand-name {
            font-size: .86rem;
            font-weight: 700;
            letter-spacing: .01em;
        }

        .header-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            color: var(--white);

            text-decoration: none;

            font-size: .78rem;
            font-weight: 700;
            letter-spacing: .07em;
            text-transform: uppercase;

            transition: color .2s ease;
        }

        .header-link::after {
            content: "↗";

            width: 28px;
            height: 28px;

            display: grid;
            place-items: center;

            background: var(--green);

            font-size: .95rem;

            transition:
                transform .25s var(--ease),
                background .2s ease;
        }

        .header-link:hover {
            color: #DDEDE4;
        }

        .header-link:hover::after {
            transform: translate(2px, -2px);
            background: var(--green-bright);
        }


    /* =========================================================
       HERO
    ========================================================= */

        .hero {
            min-height: 820px;

            display: flex;
            align-items: center;

            position: relative;

            padding: 155px 0 90px;

            background:
                linear-gradient(90deg,
                    var(--black) 0%,
                    var(--black) 65%,
                    var(--charcoal) 65%,
                    var(--charcoal) 100%);

            color: var(--white);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(330px, .65fr);
            align-items: stretch;

            gap: 0;
        }

        .hero-copy {
            padding-right: 70px;
        }

        .hero-eyebrow {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 28px;

            color: #D7DDD9;

            font-size: .73rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .hero-eyebrow::before {
            content: "";

            width: 42px;
            height: 3px;

            background: var(--green);
        }

        .hero h1 {
            max-width: 850px;
        }

        .hero-title-accent {
            display: block;

            color: var(--green);

            margin-top: 10px;
        }

        .hero-subtitle {
            max-width: 680px;

            margin: 38px 0 0;

            color: #C8D0CB;

            font-size: clamp(1rem, 1.7vw, 1.18rem);
            line-height: 1.8;
        }

        .hero-actions {
            margin-top: 42px;
        }

        .hero-main-button {
            min-height: 58px;

            display: inline-flex;
            align-items: center;
            gap: 18px;

            padding: 0 24px;

            background: var(--green);
            color: var(--white);

            border: 0;

            text-decoration: none;

            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;

            transition:
                background .2s ease,
                transform .25s var(--ease);
        }

        .hero-main-button span {
            font-size: 1.2rem;
            transition: transform .25s var(--ease);
        }

        .hero-main-button:hover {
            background: var(--green-bright);
            transform: translateY(-2px);
        }

        .hero-main-button:hover span {
            transform: translateX(4px);
        }


    /* =========================================================
       HERO SNAPSHOT
    ========================================================= */

        .hero-snapshot {
            min-height: 500px;

            padding: 46px 42px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            background: var(--green);

            border-left: 1px solid rgba(255, 255, 255, .12);
        }

        .snapshot-label {
            color: #DDEDE4;

            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .snapshot-number {
            margin-top: auto;
            margin-bottom: 12px;

            font-size: clamp(5rem, 10vw, 8rem);
            font-weight: 800;
            line-height: .85;

            letter-spacing: -.08em;
        }

        .snapshot-caption {
            max-width: 290px;

            margin-bottom: 28px;

            color: var(--white);

            font-size: 1.05rem;
            font-weight: 500;
            line-height: 1.55;
        }

        .snapshot-rule {
            width: 100%;
            height: 1px;

            background: rgba(255, 255, 255, .35);
        }

        .snapshot-meta {
            display: flex;
            justify-content: space-between;
            gap: 20px;

            margin-top: 18px;

            color: #D5E5DC;

            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }


    /* =========================================================
       SECTION HEADER
    ========================================================= */

        .section-header {
            display: grid;
            grid-template-columns: 180px minmax(0, 1fr);
            gap: 44px;

            margin-bottom: 68px;
        }

        .section-index {
            padding-top: 9px;

            color: var(--green);

            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .section-index::before {
            content: "";

            display: block;

            width: 200px;
            height: 3px;

            margin-bottom: 14px;

            background: var(--green);
        }

        .section-description {
            max-width: 720px;

            margin: 22px 0 0;

            color: var(--gray-500);

            font-size: 1rem;
            line-height: 1.75;
        }


    /* =========================================================
       STATISTICS
    ========================================================= */

        .statistics {
            background: var(--off-white);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);

            border-top: 1px solid var(--gray-300);
            border-bottom: 1px solid var(--gray-300);
        }

        .stat-card {
            min-height: 270px;

            padding: 34px 30px 30px;

            background: var(--off-white);

            border-right: 1px solid var(--gray-300);

            transition:
                background .25s ease,
                transform .25s var(--ease);
        }

        .stat-card:last-child {
            border-right: 0;
        }

        .stat-card:hover {
            background: var(--white);
            transform: translateY(-4px);
        }

        .stat-index {
            color: var(--gray-500);

            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .1em;
        }

        .stat-value {
            margin-top: 65px;

            color: var(--green);

            font-size: clamp(3.5rem, 6vw, 6rem);
            font-weight: 800;
            line-height: .8;

            letter-spacing: -.075em;
        }

        .stat-label {
            margin-top: 30px;

            max-width: 150px;

            color: var(--text);

            font-size: .75rem;
            font-weight: 800;
            letter-spacing: .1em;
            line-height: 1.45;
            text-transform: uppercase;
        }


    /* =========================================================
       HIGHLIGHTS
    ========================================================= */

        .highlights {
            background: var(--white);
        }

        .highlights-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);

            border-top: 1px solid var(--gray-300);
            border-left: 1px solid var(--gray-300);
        }

        .highlight {
            min-height: 170px;

            padding: 30px 34px;

            display: grid;
            grid-template-columns: 48px minmax(0, 1fr);
            gap: 22px;

            border-right: 1px solid var(--gray-300);
            border-bottom: 1px solid var(--gray-300);

            background: var(--white);

            transition:
                background .25s ease,
                padding-left .25s var(--ease);
        }

        .highlight:hover {
            background: var(--off-white);
            padding-left: 40px;
        }

        .highlight-number {
            color: var(--green);

            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .08em;
        }

        .highlight p {
            margin: 0;

            max-width: 450px;

            color: var(--text);

            font-size: .95rem;
            font-weight: 600;
            line-height: 1.65;
        }


    /* =========================================================
       GALLERY
    ========================================================= */

        .gallery {
            background: var(--black);
            color: var(--white);
        }

        .gallery .section-index {
            color: #91C2A8;
        }

        .gallery .section-index::before {
            background: var(--green);
        }

        .gallery h2 {
            color: var(--white);
        }

        .gallery .section-description {
            color: #AEB8B2;
        }

        .carousel-shell {
            position: relative;
        }

        .carousel {
            overflow: hidden;

            border: 1px solid #373B38;

            background: #111412;
        }

        .slides {
            display: flex;

            transition:
                transform .65s var(--ease);
        }

        .slide {
            min-width: 100%;

            padding: 12px;
        }

        .slide img {
            width: 100%;
            height: auto;
            max-height: 720px;

            object-fit: contain;

            background: #151A17;
        }

        .carousel-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-top: 24px;
        }

        .carousel-navigation {
            display: flex;
            gap: 8px;
        }

        .carousel-btn {
            width: 48px;
            height: 48px;

            display: grid;
            place-items: center;

            border: 1px solid #555B57;

            background: transparent;

            color: var(--white);

            cursor: pointer;

            transition:
                background .2s ease,
                border-color .2s ease,
                transform .2s var(--ease);
        }

        .carousel-btn:hover {
            background: var(--green);
            border-color: var(--green);
            transform: translateY(-2px);
        }

        .dots {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dot {
            width: 8px;
            height: 8px;

            padding: 0;

            border: 0;
            border-radius: 50%;

            background: #555B57;

            cursor: pointer;

            transition:
                width .25s var(--ease),
                background .2s ease;
        }

        .dot.active {
            width: 30px;

            border-radius: 999px;

            background: var(--green);
        }

        .gallery-note {
            margin: 24px 0 0;

            color: #8E9691;

            text-align: right;

            font-size: .75rem;
        }

        .gallery-note strong {
            color: #D5DDD8;
        }


    /* =========================================================
       FINAL CTA
    ========================================================= */

        .footer-cta {
            padding: 110px 0;

            background: var(--green);

            color: var(--white);
        }

        .footer-cta-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: end;

            gap: 60px;
        }

        .footer-cta .section-index {
            color: #D6E9DE;
        }

        .footer-cta .section-index::before {
            background: var(--white);
        }

        .footer-cta h2 {
            max-width: 840px;

            color: var(--white);
        }

        .footer-cta p {
            max-width: 660px;

            margin: 26px 0 0;

            color: #DDEDE4;

            font-size: 1rem;
        }

        .cta-button {
            min-height: 58px;

            display: inline-flex;
            align-items: center;
            gap: 18px;

            padding: 0 24px;

            background: var(--black);

            color: var(--white);

            text-decoration: none;

            font-size: .76rem;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;

            transition:
                background .2s ease,
                transform .25s var(--ease);
        }

        .cta-button span {
            font-size: 1.15rem;
        }

        .cta-button:hover {
            background: var(--charcoal);
            transform: translateY(-2px);
        }


    /* =========================================================
       FOOTER
    ========================================================= */

        footer {
            padding: 24px 0;

            background: var(--black);

            color: #929A95;

            font-size: .72rem;
            line-height: 1.6;

            text-align: center;
        }


    /* =========================================================
       REVEAL ANIMATION
    ========================================================= */

        .reveal {
            opacity: 0;

            transform: translateY(24px);

            transition:
                opacity .7s ease,
                transform .7s var(--ease);
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }


    /* =========================================================
       TABLET
    ========================================================= */

        @media (max-width: 980px) {

            .hero {
                background:
                    linear-gradient(180deg,
                        var(--black) 0%,
                        var(--black) 72%,
                        var(--green) 72%,
                        var(--green) 100%);
            }

            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-copy {
                padding-right: 0;
                padding-bottom: 60px;
            }

            .hero-snapshot {
                min-height: 390px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-card:nth-child(2) {
                border-right: 0;
            }

            .stat-card:nth-child(-n + 2) {
                border-bottom: 1px solid var(--gray-300);
            }

            .highlights-grid {
                grid-template-columns: 1fr;
            }

            .footer-cta-grid {
                grid-template-columns: 1fr;
                align-items: start;

                gap: 35px;
            }
        }


    /* =========================================================
       MOBILE
    ========================================================= */

        @media (max-width: 640px) {

            .container,
            .nav {
                width: calc(100% - 36px);
            }

            .site-header {
                border-top-width: 4px;
            }

            .nav {
                min-height: 72px;
            }

            .brand-name {
                display: none;
            }

            .header-link {
                font-size: .68rem;
            }

            .hero {
                padding: 125px 0 0;

                background:
                    linear-gradient(180deg,
                        var(--black) 0%,
                        var(--black) 68%,
                        var(--green) 68%,
                        var(--green) 100%);
            }

            .hero h1 {
                font-size:
                    clamp(3.8rem,
                        18vw,
                        5.7rem);
            }

            .hero-subtitle {
                font-size: .93rem;

                line-height: 1.7;
            }

            .hero-actions {
                margin-top: 32px;
            }

            .hero-main-button {
                width: 100%;

                justify-content: space-between;
            }

            .hero-snapshot {
                min-height: 320px;

                padding: 34px 24px;

                margin-top: 10px;
            }

            .snapshot-number {
                font-size: 5rem;
            }

            .section {
                padding: 78px 0;
            }

            .section-header {
                grid-template-columns: 1fr;

                gap: 18px;

                margin-bottom: 44px;
            }

            .section-index {
                padding-top: 0;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .stat-card,
            .stat-card:nth-child(2),
            .stat-card:nth-child(-n + 2) {
                min-height: 210px;

                border-right: 0;
                border-bottom:
                    1px solid var(--gray-300);
            }

            .stat-card:last-child {
                border-bottom: 0;
            }

            .stat-value {
                margin-top: 45px;
            }

            .highlight {
                min-height: 150px;

                padding: 26px 22px;

                grid-template-columns:
                    40px minmax(0, 1fr);
            }

            .highlight:hover {
                padding-left: 26px;
            }

            .slide {
                padding: 6px;
            }

            .carousel-controls {
                align-items: center;
            }

            .gallery-note {
                text-align: left;
            }

            .footer-cta {
                padding: 80px 0;
            }

            .footer-cta h2 {
                font-size: 3rem;
            }

            .cta-button {
                width: 100%;

                justify-content: space-between;
            }
        }


    /* =========================================================
       REDUCED MOTION
    ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>


<body>

    <header class="site-header">

        <nav class="nav" aria-label="Main navigation">

            <a
                class="brand"
                href="#top"
                aria-label="AI SmartSSD 2027 home">
                <span class="brand-mark">S</span>

                <span class="brand-name">
                    AI SmartSSD 2027
                </span>
            </a>

            <a
                class="header-link"
                href="<?= htmlspecialchars($mainWebsiteUrl, ENT_QUOTES, 'UTF-8') ?>"
                target="_blank"
                rel="noopener">
                Visit IEEE Conference Website
            </a>

        </nav>

    </header>


    <main id="top">


    <!-- =========================================================
         HERO
    ========================================================== -->

        <section class="hero">

            <div class="container hero-grid">

                <div class="hero-copy reveal">

                    <div class="hero-eyebrow">
                        2nd International Conference
                    </div>

                    <h1>
                        SmartSSD
                        <span class="hero-title-accent">2027</span>
                    </h1>

                    <p class="hero-subtitle">
                        International Conference on Smart Systems for Sustainable Development - bringing together research, technology and ideas for a smarter future.
                    </p>

                    <div class="hero-actions">

                        <a
                            class="hero-main-button"
                            href="<?= htmlspecialchars($mainWebsiteUrl, ENT_QUOTES, 'UTF-8') ?>"
                            target="_blank"
                            rel="noopener">
                            Visit IEEE Conference Website
                            <span>→</span>
                        </a>

                    </div>

                </div>


                <div class="hero-snapshot reveal">

                    <div class="snapshot-label">
                        Conference Snapshot
                    </div>

                    <div class="snapshot-number">
                        208
                    </div>

                    <div class="snapshot-caption">
                        papers published across multiple thematic areas.
                    </div>

                    <div class="snapshot-rule"></div>

                    <div class="snapshot-meta">
                        <span>AI SmartSSD</span>
                        <span>2027</span>
                    </div>

                </div>

            </div>

        </section>


    <!-- =========================================================
         STATISTICS
    ========================================================== -->

        <section class="section statistics" id="statistics">

            <div class="container">

                <div class="section-header reveal">

                    <div class="section-index">
                        By the numbers
                    </div>

                    <div>

                        <h2>
                            A conference measured in ideas.
                        </h2>

                        <p class="section-description">
                            SmartSSD 2026 brought together research contributions, delegates and parallel academic activity across a broad range of smart-system disciplines.
                        </p>

                    </div>

                </div>


                <div class="stats-grid">

                    <article class="stat-card reveal">

                        <div class="stat-index">
                            01
                        </div>

                        <div class="stat-value">
                            208
                        </div>

                        <div class="stat-label">
                            Papers Published
                        </div>

                    </article>


                    <article class="stat-card reveal">

                        <div class="stat-index">
                            02
                        </div>

                        <div class="stat-value">
                            250+
                        </div>

                        <div class="stat-label">
                            Delegates Attended
                        </div>

                    </article>


                    <article class="stat-card reveal">

                        <div class="stat-index">
                            03
                        </div>

                        <div class="stat-value">
                            24
                        </div>

                        <div class="stat-label">
                            Parallel Sessions
                        </div>

                    </article>


                    <article class="stat-card reveal">

                        <div class="stat-index">
                            04
                        </div>

                        <div class="stat-value">
                            6
                        </div>

                        <div class="stat-label">
                            Thematic Tracks
                        </div>

                    </article>

                </div>

            </div>

        </section>


    <!-- =========================================================
         HIGHLIGHTS
    ========================================================== -->

        <section class="section highlights">

            <div class="container">

                <div class="section-header reveal">

                    <div class="section-index">
                        Conference highlights
                    </div>

                    <div>

                        <h2>
                            Research, recognition &amp; collaboration.
                        </h2>

                        <p class="section-description">
                            A snapshot of the programme, publication activity and moments that shaped SmartSSD 2026.
                        </p>

                    </div>

                </div>


                <div class="highlights-grid">

                    <article class="highlight reveal">

                        <span class="highlight-number">
                            01
                        </span>

                        <p>
                            Inaugural ceremony with Quran Recitation &amp; Keynote Address
                        </p>

                    </article>


                    <article class="highlight reveal">

                        <span class="highlight-number">
                            02
                        </span>

                        <p>
                            208 papers across AI, IoT, Civil, Mechanical &amp; Blockchain
                        </p>

                    </article>


                    <article class="highlight reveal">

                        <span class="highlight-number">
                            03
                        </span>

                        <p>
                            Peer-reviewed abstract proceedings published
                        </p>

                    </article>


                    <article class="highlight reveal">

                        <span class="highlight-number">
                            04
                        </span>

                        <p>
                            Selected papers to be published in six journals of GR Journal Publications
                        </p>

                    </article>


                    <article class="highlight reveal">

                        <span class="highlight-number">
                            05
                        </span>

                        <p>
                            Microsoft CMT adopted for paper management
                        </p>

                    </article>


                    <article class="highlight reveal">

                        <span class="highlight-number">
                            06
                        </span>

                        <p>
                            Valedictory ceremony with awards &amp; best paper recognition
                        </p>

                    </article>

                </div>

            </div>

        </section>


    <!-- =========================================================
         GALLERY
    ========================================================== -->

        <section class="section gallery" id="gallery">

            <div class="container">

                <div class="section-header reveal">

                    <div class="section-index">
                        Conference in pictures
                    </div>

                    <div>

                        <h2>
                            Moments worth remembering.
                        </h2>

                        <p class="section-description">
                            Browse the conference visuals below. The carousel is structured so individual photographs can be added later without changing the page layout.
                        </p>

                    </div>

                </div>


                <div class="carousel-shell reveal">

                    <div
                        class="carousel"
                        aria-label="AI SmartSSD 2027 conference image carousel">

                        <div class="slides" id="slides">

                            <!-- Replace/add individual photographs here as they become available. -->

                            <div class="slide">

                                <img
                                    src="assets/conference-pictures.png"
                                    alt="AI SmartSSD 2027 conference photographs showing the inauguration, sessions and organising team">

                            </div>


                            <div class="slide">

                                <img
                                    src="assets/conference-report.png"
                                    alt="AI SmartSSD 2027 conference report and key statistics">

                            </div>

                        </div>

                    </div>


                    <div class="carousel-controls">

                        <div class="carousel-navigation">

                            <button
                                class="carousel-btn"
                                type="button"
                                id="prev"
                                aria-label="Previous image">
                                ←
                            </button>

                            <button
                                class="carousel-btn"
                                type="button"
                                id="next"
                                aria-label="Next image">
                                →
                            </button>

                        </div>


                        <div
                            class="dots"
                            id="dots"
                            aria-label="Choose carousel image"></div>

                    </div>

                </div>


                <p class="gallery-note">
                    Previous Publishing Partner:
                    <strong>GR Journal Publications</strong>
                </p>

            </div>

        </section>


    <!-- =========================================================
         FINAL CTA
    ========================================================== -->

        <section class="footer-cta">

            <div class="container footer-cta-grid reveal">

                <div>

                    <div class="section-index">
                        AI SmartSSD 2027
                    </div>

                    <h2>
                        Continue to the AI SmartSSD 2027 experience.
                    </h2>

                    <p>
                        Explore the full conference website for detailed information, publications, programme content and future updates.
                    </p>

                </div>


                <a
                    class="cta-button"
                    href="<?= htmlspecialchars($mainWebsiteUrl, ENT_QUOTES, 'UTF-8') ?>"
                    target="_blank"
                    rel="noopener">
                    Visit IEEE Conference Website
                    <span>↗</span>
                </a>

            </div>

        </section>

    </main>


    <footer>
        Anjuman-I-Islam's M. H. Saboo Siddik College of Engineering, Byculla, Mumbai · AI SmartSSD 2027
    </footer>


    <script>
        (() => {

            const slides = document.getElementById('slides');
            const slideItems = Array.from(
                document.querySelectorAll('.slide')
            );

            const dots = document.getElementById('dots');
            const prev = document.getElementById('prev');
            const next = document.getElementById('next');

            let current = 0;
            let timer;


            /* =========================================================
               CREATE CAROUSEL DOTS
            ========================================================== */

            slideItems.forEach((_, index) => {

                const dot = document.createElement('button');

                dot.className =
                    'dot' +
                    (index === 0 ? ' active' : '');

                dot.type = 'button';

                dot.setAttribute(
                    'aria-label',
                    `Go to image ${index + 1}`
                );

                dot.addEventListener('click', () => {
                    goTo(index);
                });

                dots.appendChild(dot);

            });


            /* =========================================================
               CAROUSEL
            ========================================================== */

            function goTo(index) {

                current =
                    (index + slideItems.length) %
                    slideItems.length;

                slides.style.transform =
                    `translateX(-${current * 100}%)`;

                dots
                    .querySelectorAll('.dot')
                    .forEach((dot, i) => {

                        dot.classList.toggle(
                            'active',
                            i === current
                        );

                    });

                resetTimer();
            }


            function resetTimer() {

                clearInterval(timer);

                if (
                    !window.matchMedia(
                        '(prefers-reduced-motion: reduce)'
                    ).matches &&
                    slideItems.length > 1
                ) {

                    timer = setInterval(() => {
                        goTo(current + 1);
                    }, 6000);

                }

            }


            prev.addEventListener('click', () => {
                goTo(current - 1);
            });


            next.addEventListener('click', () => {
                goTo(current + 1);
            });


            resetTimer();


            /* =========================================================
               SCROLL REVEAL
            ========================================================== */

            const observer = new IntersectionObserver(
                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                'visible'
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                }, {
                    threshold: 0.12
                }
            );


            document
                .querySelectorAll('.reveal')
                .forEach(element => {
                    observer.observe(element);
                });

        })();
    </script>

</body>

</html>