<?php
// Initial PHP homepage. Edit confirmed clinic details here before launch.
$clinic = [
    'name' => 'Sankofa Tete Organic Research Center',
    'phone' => '', // Example format: +233...
    'whatsapp' => '', // International digits only, without + or spaces.
    'email' => '',
    'address' => '',
    'hours' => '',
];
function e($value) { return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8'); }
$video = 'assets/videos/video.mp4';
$hasVideo = is_file(__DIR__ . '/' . $video);
$whatsapp = preg_replace('/\D/', '', $clinic['whatsapp']);
$care = [
    ['01', 'A conversation first', 'A place to discuss your wellbeing, ask questions, and explore your next steps.'],
    ['02', 'An individual approach', 'Your needs and concerns belong at the centre of the conversation.'],
    ['03', 'Clarity along the way', 'Understand the proposed approach and ask about your follow-up before you leave.'],
];
$faqs = [
    ['How can I arrange a consultation?', 'Use the consultation button to view the centre’s available contact options. Contact details will be added before the website launches.'],
    ['What should I bring to my first visit?', 'Bring a list of medicines and supplements you use, any relevant reports, and the questions you would like to discuss.'],
    ['Where can I find treatment information?', 'Contact the centre for information about its services and whether a consultation is appropriate for your needs. Confirmed service details will be added to this website.'],
];
function logoMark($class = '') { ?>
<svg class="logo-mark <?= e($class) ?>" viewBox="0 0 120 120" fill="none" aria-hidden="true">
    <path class="logo-ring" d="M18 91C-7 56 11 9 55 7C92 5 116 31 114 65C112 95 91 116 60 114" stroke="currentColor" stroke-width="3" pathLength="1"/>
    <path class="logo-leaf leaf-left" d="M43 50C17 64 17 92 35 109C25 89 35 72 43 68V50Z" fill="currentColor"/>
    <path class="logo-leaf leaf-right" d="M74 40C86 31 87 25 87 18C105 49 91 73 74 79V61L84 49L74 55Z" fill="currentColor"/>
    <rect x="46" y="29" width="25" height="72" rx="12.5" fill="white" stroke="currentColor" stroke-width="3"/>
    <path class="capsule-fill" d="M49 65V42C49 27 68 27 68 42V65Z" fill="#00CA79"/>
    <path d="M51 48V42C51 37 53 35 55 34" stroke="white" stroke-width="2.3" stroke-linecap="round"/>
</svg>
<?php } ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($clinic['name']) ?> | Herbal care &amp; wellbeing</title>
    <meta name="description" content="Discover Sankofa Tete Organic Research Center. Learn about our approach to herbal care and get in touch to discuss a consultation.">
    <meta name="theme-color" content="#17462D">
    <link rel="icon" href="assets/images/logo-original.png" type="image/png">
    <style>
        :root {
            --green: #17462d;
            --dark: #103822;
            --ink: #183b2a;
            --bright: #00ca79;
            --pale: #f2f6f0;
            --line: #dce6dc;
            --muted: #607266;
            --white: #fff;
            --gutter: clamp(22px, 5.6vw, 96px)
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 105px
        }

        body {
            margin: 0;
            color: var(--ink);
            font: 16px/1.65 Arial, Helvetica, sans-serif;
            background: white
        }

        body.locked {
            overflow: hidden
        }

        button, a {
            -webkit-tap-highlight-color: transparent
        }

        a {
            color: inherit;
            text-decoration: none
        }

        button {
            font: inherit;
            cursor: pointer
        }

        button:disabled {
            cursor: default
        }

        button, input {
            font: inherit
        }

        button:focus-visible, a:focus-visible, summary:focus-visible {
            outline: 3px solid #00ad64;
            outline-offset: 6px
        }

        img {
            display: block;
            max-width: 100%
        }

        button {
            color: inherit
        }

        ::selection {
            background: #00ca79;
            color: #103822
        }

        .skip {
            position: absolute;
            top: -80px;
            background: #fff;
            padding: 12px;
            z-index: 100
        }

        .skip:focus {
            top: 10px
        }

        .wrap {
            padding-inline: var(--gutter);
            max-width: 1600px;
            margin: auto
        }

        .eyebrow {
            font-size: 11px;
            letter-spacing: .18em;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            gap: 12px;
            align-items: center
        }

        .eyebrow:before {
            content: '';
            width: 22px;
            height: 1px;
            background: currentColor
        }

        h1, h2, h3, p {
            margin-top: 0
        }

        h1, h2 {
            font-weight: 400;
            letter-spacing: -.055em;
            line-height: 1.08
        }

        h1 {
            font-size: clamp(52px, 6.7vw, 108px)
        }

        h2 {
            font-size: clamp(38px, 4.3vw, 66px);
            margin-bottom: 24px
        }

        h3 {
            font-size: 22px;
            letter-spacing: -.03em;
            font-weight: 500
        }

        .serif {
            font-family: Georgia, 'Times New Roman', serif;
            font-style: italic;
            font-weight: 400
        }

        p {
            color: var(--muted)
        }

        .btn {
            min-height: 52px;
            padding: 14px 25px;
            border: 1px solid transparent;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            transition: background .25s, transform .25s
        }

        .btn:hover {
            transform: translateY(-2px)
        }

        .btn-green {
            background: var(--green);
            color: white
        }

        .btn-green:hover {
            background: #22613e
        }

        .btn-white {
            background: white;
            color: var(--green)
        }

        .btn-line {
            border-color: #cbd8ce;
            background: transparent
        }

        .text-link {
            font-size: 13px;
            font-weight: 600;
            border-bottom: 1px solid currentColor;
            padding-bottom: 5px;
            display: inline-block
        }

        .logo-mark {
            width: 58px;
            height: 58px;
            flex: none;
            color: #275a00
        }

        .loader {
            position: fixed;
            inset: 0;
            background: #fff;
            z-index: 200;
            display: none;
            place-content: center;
            text-align: center;
            transition: opacity .45s, visibility .45s;
            pointer-events: none
        }

        .js .loader {
            display: grid;
            animation: loader-failsafe 0s 3s forwards
        }

        .loader .logo-mark {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px
        }

        .loader small {
            font-size: 10px;
            letter-spacing: .25em;
            text-transform: uppercase;
            color: var(--green)
        }

        .loader.is-done {
            opacity: 0;
            visibility: hidden
        }

        .loader .logo-ring {
            stroke-dasharray: 1;
            stroke-dashoffset: 1;
            animation: draw 1.1s ease forwards
        }

        .loader .logo-leaf {
            transform-box: fill-box;
            transform-origin: bottom;
            animation: unfold .8s .15s both
        }

        .loader .capsule-fill {
            animation: fill .9s both;
            transform-origin: center;
            transform-box: fill-box
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0
            }
        }

        @keyframes unfold {
            from {
                opacity: 0;
                transform: scale(.7) rotate(-12deg)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        @keyframes fill {
            from {
                opacity: 0;
                transform: scaleY(.1)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        @keyframes loader-failsafe {
            to {
                opacity: 0;
                visibility: hidden
            }
        }

        header {
            height: 100px;
            background: white;
            position: sticky;
            top: 0;
            z-index: 50;
            border-bottom: 1px solid #edf1eb;
            transition: box-shadow .3s
        }

        header.scrolled {
            box-shadow: 0 4px 22px #173b2a0a
        }

        .nav-inner {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            line-height: 1.22
        }

        .brand strong {
            display: block;
            font-size: 19px;
            letter-spacing: -.04em;
            font-weight: 600
        }

        .brand span {
            display: block;
            font-size: 9px;
            letter-spacing: .1em;
            text-transform: uppercase;
            margin-top: 5px
        }

        .desktop-nav {
            display: flex;
            gap: 28px;
            align-items: center;
            font-size: 12px
        }

        .desktop-nav>a {
            position: relative;
            padding-block: 8px
        }

        .desktop-nav>a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 1px;
            width: 0;
            background: var(--green);
            transition: width .3s
        }

        .desktop-nav>a:hover:after {
            width: 100%
        }

        .menu-button {
            display: none;
            background: none;
            border: 1px solid var(--line);
            border-radius: 4px;
            width: 46px;
            height: 44px
        }

        .menu-button span {
            display: block;
            width: 19px;
            height: 1px;
            background: var(--green);
            margin: 6px auto
        }

        .mobile-nav {
            display: none
        }

        .hero {
            position: relative;
            min-height: 690px;
            min-height: min(780px, calc(100svh - 100px));
            isolation: isolate;
            overflow: hidden;
            color: #fff;
            background: #123c27
        }

        .hero-image, .hero video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -3
        }

        .hero-image {
            background: url('assets/images/botanical-hero.png') center/cover no-repeat;
            animation: breathe 22s ease-in-out infinite alternate
        }

        .hero:after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: -1;
            background: linear-gradient(90deg, rgba(8, 37, 22, .78), rgba(8, 37, 22, .32) 60%, rgba(8, 37, 22, .07))
        }

        .hero-content {
            position: relative;
            padding-top: clamp(65px, 9vh, 120px);
            padding-bottom: 120px
        }

        .hero .eyebrow {
            color: #d6ead8;
            margin-bottom: 29px
        }

        .hero h1 {
            max-width: 850px;
            margin-bottom: 28px
        }

        .hero h1 .serif {
            color: #d2edcc
        }

        .hero p {
            color: #e3eae1;
            max-width: 405px;
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 32px
        }

        .hero-actions {
            display: flex;
            gap: 28px;
            align-items: center;
            flex-wrap: wrap
        }

        .hero-actions .text-link {
            color: #fff;
            font-weight: 400
        }

        .hero-bottom {
            position: absolute;
            bottom: 30px;
            left: var(--gutter);
            right: var(--gutter);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #ffffff30;
            padding-top: 20px;
            font-size: 10px;
            letter-spacing: .1em;
            text-transform: uppercase
        }

        .hero-bottom span {
            display: flex;
            gap: 9px;
            align-items: center
        }

        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--bright);
            display: inline-block
        }

        .motion-toggle {
            background: #ffffff10;
            border: 1px solid #ffffff50;
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            font-size: 12px;
            display: grid;
            place-items: center
        }

        .hero.motion-paused .hero-image {
            animation-play-state: paused
        }

        @keyframes breathe {
            from {
                transform: scale(1)
            }

            to {
                transform: scale(1.065)
            }
        }

        .intro-strip {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            padding-top: 26px;
            padding-bottom: 26px;
            border-bottom: 1px solid var(--line)
        }

        .intro-strip p {
            margin: 0;
            font-size: 12px;
            color: var(--ink)
        }

        .strip-label {
            font-size: 10px;
            letter-spacing: .14em;
            white-space: nowrap;
            color: var(--muted)
        }

        .strip-items {
            display: flex;
            gap: 40px
        }

        .strip-items span {
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 10px
        }

        .mini-leaf {
            width: 11px;
            height: 18px;
            background: var(--green);
            border-radius: 12px 0 12px 0;
            display: inline-block;
            transform: rotate(25deg)
        }

        section.section {
            padding-top: 110px;
            padding-bottom: 110px
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: clamp(40px, 8vw, 130px);
            align-items: center
        }

        .about-visual {
            position: relative;
            min-height: 465px;
            background: var(--pale);
            border-radius: 3px 120px 3px 3px;
            display: grid;
            place-items: center;
            overflow: hidden
        }

        .about-visual:before, .about-visual:after {
            content: '';
            position: absolute;
            width: 340px;
            height: 340px;
            border: 1px solid #dbe5d6;
            border-radius: 50%;
            left: -140px;
            bottom: -120px
        }

        .about-visual:after {
            width: 450px;
            height: 450px;
            left: -195px;
            bottom: -175px
        }

        .about-logo {
            width: 76%;
            mix-blend-mode: multiply;
            transition: transform .8s
        }

        .about-visual:hover .about-logo {
            transform: scale(1.035)
        }

        .visual-caption {
            position: absolute;
            bottom: 26px;
            left: 30px;
            font-size: 10px;
            letter-spacing: .15em;
            text-transform: uppercase
        }

        .about-copy .eyebrow {
            margin-bottom: 24px
        }

        .about-copy>p {
            font-size: 15px;
            max-width: 450px;
            margin-bottom: 28px
        }

        .about-note {
            padding-top: 23px;
            border-top: 1px solid var(--line);
            font-size: 12px;
            color: var(--muted);
            margin-top: 32px
        }

        .care {
            background: var(--pale)
        }

        .section-top {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            align-items: end;
            margin-bottom: 55px
        }

        .section-top h2 {
            margin: 23px 0 0
        }

        .section-top>p {
            max-width: 310px;
            font-size: 14px;
            margin-bottom: 4px
        }

        .care-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr)
        }

        .care-card {
            padding: 10px 35px 18px;
            border-right: 1px solid #d5dfd1;
            transition: transform .35s
        }

        .care-card:first-child {
            padding-left: 0
        }

        .care-card:last-child {
            border: 0
        }

        .care-card:hover {
            transform: translateY(-6px)
        }

        .card-number {
            font-size: 11px;
            color: #6f856e;
            display: block;
            margin-bottom: 42px
        }

        .care-card h3 {
            margin-bottom: 15px
        }

        .care-card p {
            font-size: 14px;
            max-width: 300px;
            margin-bottom: 0
        }

        .care-icon {
            width: 43px;
            height: 43px;
            margin-bottom: 25px;
            stroke: var(--green);
            fill: none;
            stroke-width: 1.2
        }

        .visit-grid {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 100px
        }

        .visit-heading {
            position: sticky;
            top: 140px;
            align-self: start
        }

        .visit-heading .eyebrow {
            margin-bottom: 26px
        }

        .visit-heading p {
            font-size: 15px;
            max-width: 330px
        }

        .steps {
            border-top: 1px solid var(--line)
        }

        .step {
            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 20px;
            padding: 31px 0;
            border-bottom: 1px solid var(--line)
        }

        .step-index {
            font-size: 11px;
            color: #7d9380;
            padding-top: 4px
        }

        .step h3 {
            margin-bottom: 10px
        }

        .step p {
            font-size: 14px;
            max-width: 390px;
            margin-bottom: 0
        }

        .faq {
            padding-top: 80px !important;
            background: #fbfcfa
        }

        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 90px
        }

        .faq h2 {
            font-size: 45px
        }

        .faq .eyebrow {
            margin-bottom: 24px
        }

        details {
            border-bottom: 1px solid var(--line)
        }

        summary {
            cursor: pointer;
            list-style: none;
            padding: 23px 35px 23px 0;
            font-size: 15px;
            position: relative
        }

        summary::-webkit-details-marker {
            display: none
        }

        summary:after {
            content: '+';
            position: absolute;
            right: 2px;
            top: 20px;
            font-size: 22px;
            font-weight: 300
        }

        details[open] summary:after {
            content: '−'
        }

        details p {
            font-size: 14px;
            padding-right: 30px;
            margin-bottom: 25px
        }

        .contact-section {
            padding-block: 80px
        }

        .contact-panel {
            background: var(--green);
            padding: 65px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            color: white;
            border-radius: 4px;
            position: relative;
            overflow: hidden
        }

        .contact-panel:after {
            content: '';
            width: 360px;
            height: 360px;
            border: 1px solid #ffffff15;
            border-radius: 50%;
            position: absolute;
            right: -120px;
            top: -120px;
            pointer-events: none
        }

        .contact-panel h2 {
            font-size: clamp(34px, 4vw, 55px);
            margin-bottom: 16px
        }

        .contact-panel p {
            color: #ccdccb;
            font-size: 14px;
            max-width: 480px;
            margin: 0
        }

        .contact-panel .eyebrow {
            color: #c2dac1;
            margin-bottom: 20px
        }

        .contact-panel .btn {
            flex-shrink: 0;
            position: relative;
            z-index: 1
        }

        .contact-details {
            display: flex;
            gap: 45px;
            flex-wrap: wrap;
            padding-top: 26px;
            font-size: 13px
        }

        .contact-details a {
            border-bottom: 1px solid var(--line)
        }

        footer {
            border-top: 1px solid var(--line);
            padding-top: 45px;
            padding-bottom: 27px
        }

        .footer-main {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            align-items: center;
            padding-bottom: 35px
        }

        .footer-links {
            display: flex;
            gap: 25px;
            font-size: 12px
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            gap: 25px;
            padding-top: 22px;
            border-top: 1px solid var(--line);
            font-size: 10px;
            color: var(--muted)
        }

        .footer-bottom p {
            margin: 0
        }

        .reveal {
            opacity: 1
        }

        .js .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .8s, transform .8s
        }

        .js .reveal.visible {
            opacity: 1;
            transform: none
        }

        .hero .hero-enter {
            animation: hero-enter .9s .15s both
        }

        @keyframes hero-enter {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        dialog {
            padding: 0;
            border: 0;
            border-radius: 10px;
            color: var(--ink);
            max-width: 490px;
            width: calc(100% - 36px);
            box-shadow: 0 30px 100px #0003
        }

        dialog::backdrop {
            background: #092b1c99;
            backdrop-filter: blur(5px)
        }

        .dialog-content {
            padding: 42px
        }

        .dialog-content h2 {
            font-size: 36px;
            letter-spacing: -.04em;
            margin: 25px 0 18px
        }

        .dialog-content p {
            font-size: 14px
        }

        .dialog-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: 1px solid var(--line);
            border-radius: 50%;
            width: 32px;
            height: 32px;
            font-size: 20px
        }

        .contact-options {
            display: grid;
            gap: 12px;
            margin-top: 25px
        }

        .contact-options a {
            width: 100%
        }

        .setup-note {
            padding: 16px;
            background: var(--pale);
            border-left: 2px solid var(--green);
            font-size: 13px
        }

        .dialog-label {
            font-size: 10px;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--muted)
        }

        @media (min-width: 1550px) {
            .hero-content {
                padding-top: 120px
            }
        }

        @media (max-width: 1100px) {
            .desktop-nav {
                gap: 18px
            }

            .brand strong {
                font-size: 17px
            }

            .brand .logo-mark {
                width: 48px;
                height: 48px
            }

            .nav-inner {
                gap: 15px
            }

            .desktop-nav .btn {
                padding-inline: 17px
            }

            .strip-items {
                gap: 22px
            }

            .visit-grid {
                gap: 60px
            }

            .faq-grid {
                gap: 50px
            }
        }

        @media (max-width: 850px) {
            header {
                height: 84px
            }

            .desktop-nav {
                display: none
            }

            .menu-button {
                display: block
            }

            .mobile-nav {
                position: absolute;
                top: 84px;
                left: 0;
                right: 0;
                padding: 20px var(--gutter) 28px;
                background: white;
                border-bottom: 1px solid var(--line);
                box-shadow: 0 12px 20px #153a2510
            }

            .mobile-nav.open {
                display: grid;
                gap: 10px
            }

            .mobile-nav a {
                padding-block: 10px
            }

            .mobile-nav .btn {
                margin-top: 8px
            }

            .hero {
                min-height: 680px
            }

            .hero h1 {
                font-size: 76px
            }

            .hero-content {
                padding-top: 95px
            }

            .intro-strip {
                align-items: flex-start
            }

            .strip-items {
                flex-wrap: wrap;
                gap: 15px 25px
            }

            .about-grid {
                gap: 45px
            }

            .about-visual {
                min-height: 390px
            }

            .section-top {
                align-items: start
            }

            .care-card {
                padding-inline: 23px
            }

            .visit-grid {
                gap: 45px
            }

            .contact-panel {
                padding: 45px
            }

            .contact-panel .btn {
                padding-inline: 18px
            }

            .footer-main {
                align-items: start
            }
        }

        @media (max-width: 600px) {
            html {
                scroll-padding-top: 100px
            }

            .brand strong {
                font-size: 16px
            }

            .brand span {
                font-size: 8px
            }

            .hero {
                min-height: 660px
            }

            .hero-content {
                padding-top: 86px;
                padding-bottom: 140px
            }

            .hero h1 {
                font-size: clamp(54px, 12vw, 72px);
                max-width: 450px
            }

            .hero .eyebrow {
                font-size: 9px;
                letter-spacing: .16em
            }

            .hero p {
                font-size: 14px;
                max-width: 310px
            }

            .hero-image {
                background-position: 60% center
            }

            .hero:after {
                background: linear-gradient(90deg, #082516c7, #08251659)
            }

            .hero-actions {
                gap: 23px
            }

            .hero-bottom {
                font-size: 8px;
                letter-spacing: .08em
            }

            .hero-bottom .botanical-label {
                display: none
            }

            .intro-strip {
                display: block;
                padding-block: 24px
            }

            .strip-label {
                display: block;
                margin-bottom: 16px
            }

            .strip-items {
                gap: 12px 24px
            }

            .strip-items span {
                font-size: 11px
            }

            section.section {
                padding-block: 72px
            }

            .about-grid, .visit-grid, .faq-grid {
                grid-template-columns: 1fr;
                gap: 38px
            }

            .about-visual {
                min-height: 340px;
                order: 2;
                border-top-right-radius: 90px
            }

            .about-logo {
                width: 65%;
                max-width: 320px
            }

            .about-copy h2 {
                max-width: 330px
            }

            .section-top {
                display: block;
                margin-bottom: 35px
            }

            .section-top>p {
                margin-top: 22px
            }

            .care-grid {
                grid-template-columns: 1fr
            }

            .care-card, .care-card:first-child {
                padding: 30px 0;
                border-right: 0;
                border-bottom: 1px solid #d5dfd1;
                display: grid;
                grid-template-columns: 45px 1fr;
                gap: 0 17px
            }

            .care-card:last-child {
                padding-bottom: 0
            }

            .card-number {
                grid-column: 1;
                grid-row: 1;
                margin: 7px 0 0
            }

            .care-icon {
                display: none
            }

            .care-card h3 {
                grid-column: 2;
                margin-bottom: 10px
            }

            .care-card p {
                grid-column: 2;
                max-width: none
            }

            .visit-heading {
                position: static
            }

            .step {
                padding-block: 25px
            }

            .faq h2 {
                font-size: 39px
            }

            .contact-section {
                padding-block: 45px
            }

            .contact-panel {
                display: block;
                padding: 35px 27px
            }

            .contact-panel h2 {
                font-size: 39px
            }

            .contact-panel .btn {
                margin-top: 28px
            }

            .footer-main {
                display: block
            }

            .footer-links {
                margin-top: 28px;
                flex-wrap: wrap
            }

            .footer-bottom {
                flex-direction: column;
                gap: 10px
            }

            .dialog-content {
                padding: 34px 26px
            }

            .contact-details {
                gap: 18px
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto
            }

            *, *:before, *:after {
                animation: none !important;
                transition: none !important
            }

            .js .reveal {
                opacity: 1;
                transform: none
            }

            .js .loader {
                display: none
            }

            .hero-image {
                transform: none
            }
        }
    </style>
    <script>
        document.documentElement.classList.add('js');
    </script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="loader" aria-hidden="true"><?= logoMark() ?><small>Sankofa Tete</small></div>
<header id="header">
    <div class="wrap nav-inner">
        <a class="brand" href="#home" aria-label="Sankofa Tete home"><?= logoMark() ?><div><strong>Sankofa Tete</strong><span>Organic Research Center</span></div></a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="#about">Our story</a>
            <a href="#approach">Our approach</a>
            <a href="#visit">Your visit</a>
            <a href="#contact">Contact</a>
            <button class="btn btn-green" data-consult>Book a consultation</button>
        </nav>
        <button class="menu-button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav"><span></span><span></span></button>
    </div>
    <nav id="mobile-nav" class="mobile-nav" aria-label="Mobile navigation" inert>
        <a href="#about">Our story</a>
        <a href="#approach">Our approach</a>
        <a href="#visit">Your visit</a>
        <a href="#contact">Contact</a>
        <button class="btn btn-green" data-consult>Book a consultation</button>
    </nav>
</header>
<main id="main">
    <section class="hero" id="home" aria-labelledby="hero-title">
        <div class="hero-image" aria-hidden="true"></div>
        <?php if ($hasVideo): ?>
        <video id="hero-video" muted loop playsinline preload="metadata" poster="assets/images/botanical-hero.png" aria-hidden="true">
            <source src="<?= e($video) ?>" type="video/mp4">
        </video>
        <?php endif; ?>
        <div class="wrap hero-content">
            <div class="hero-enter">
                <div class="eyebrow">Sankofa Tete Organic Research Center</div>
                <h1 id="hero-title">Rooted in nature.<br>Centred on <span class="serif">you.</span></h1>
                <p>A thoughtful approach to herbal care, with space to listen and time to understand.</p>
                <div class="hero-actions">
                    <button class="btn btn-white" data-consult>Book a consultation</button>
                    <a class="text-link" href="#about">Get to know us</a>
                </div>
            </div>
        </div>
        <div class="hero-bottom">
            <span><i class="dot"></i> Nature. Care. Connection.</span>
            <span class="botanical-label">A natural perspective on wellbeing</span>
            <button class="motion-toggle" id="motion-toggle" aria-label="Pause background motion" aria-pressed="false">Ⅱ</button>
        </div>
    </section>
    <div class="wrap intro-strip">
        <span class="strip-label">Our guiding principles</span>
        <div class="strip-items">
            <span><i class="mini-leaf"></i>Thoughtful conversations</span>
            <span><i class="mini-leaf"></i>Individual attention</span>
            <span><i class="mini-leaf"></i>Clear guidance</span>
        </div>
    </div>
    <section class="section wrap" id="about">
        <div class="about-grid">
            <div class="about-visual reveal">
                <img class="about-logo" src="assets/images/logo-original.png" alt="Sankofa Tete leaf and capsule emblem" width="1181" height="1181" loading="lazy">
                <span class="visual-caption">Our identity. Naturally connected.</span>
            </div>
            <div class="about-copy reveal">
                <div class="eyebrow">Welcome to Sankofa Tete</div>
                <h2>A connection to nature.<br>A focus on <span class="serif">wellbeing.</span></h2>
                <p>Welcome to Sankofa Tete Organic Research Center. Discover our approach to herbal care and begin a conversation about your wellbeing.</p>
                <p>Whether you are exploring your options or planning your first visit, we invite you to get in touch with the centre.</p>
                <a class="text-link" href="#approach">Explore our approach</a>
                <div class="about-note">Every journey begins with a conversation.</div>
            </div>
        </div>
    </section>
    <section class="section care" id="approach">
        <div class="wrap">
            <div class="section-top reveal">
                <div>
                    <div class="eyebrow">Our approach</div>
                    <h2>Care begins with<br><span class="serif">understanding.</span></h2>
                </div>
                <p>A considered introduction to your visit, from your first question to your next step.</p>
            </div>
            <div class="care-grid">
                <?php foreach ($care as $item): ?>
                <article class="care-card reveal">
                    <span class="card-number"><?= e($item[0]) ?></span>
                    <svg class="care-icon" viewBox="0 0 48 48" aria-hidden="true">
                        <?php if ($item[0] === '01'): ?>
                        <path d="M8 10h32v23H22l-9 7v-7H8zM15 18h18M15 25h11"/>
                        <?php elseif ($item[0] === '02'): ?>
                        <circle cx="24" cy="14" r="7"/>
                        <path d="M10 41v-5a14 14 0 0 1 28 0v5M5 21h7M36 21h7"/>
                        <?php else: ?>
                        <path d="M11 8h26v34H11zM18 8V5h12v7H18zM17 22l4 4 9-9M17 33h14"/>
                        <?php endif; ?>
                    </svg>
                    <h3><?= e($item[1]) ?></h3>
                    <p><?= e($item[2]) ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="section wrap" id="visit">
        <div class="visit-grid">
            <div class="visit-heading reveal">
                <div class="eyebrow">Your first visit</div>
                <h2>A little preparation.<br>A clearer <span class="serif">beginning.</span></h2>
                <p>Take the first step with a few simple preparations.</p>
                <button class="btn btn-line" data-consult>Plan your consultation</button>
            </div>
            <div class="steps">
                <article class="step reveal">
                    <span class="step-index">01</span>
                    <div>
                        <h3>Get in touch</h3>
                        <p>Contact the centre to ask about availability and discuss arranging a consultation.</p>
                    </div>
                </article>
                <article class="step reveal">
                    <span class="step-index">02</span>
                    <div>
                        <h3>Bring your questions</h3>
                        <p>Prepare your questions and bring details of any medicines, supplements, and relevant medical reports.</p>
                    </div>
                </article>
                <article class="step reveal">
                    <span class="step-index">03</span>
                    <div>
                        <h3>Discuss your next steps</h3>
                        <p>Ask about the proposed approach, what to expect, and any follow-up you may need.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="section faq" id="questions">
        <div class="wrap faq-grid">
            <div class="reveal">
                <div class="eyebrow">Good to know</div>
                <h2>A few questions,<br><span class="serif">answered.</span></h2>
            </div>
            <div class="reveal">
                <?php foreach ($faqs as $faq): ?>
                <details>
                    <summary><?= e($faq[0]) ?></summary>
                    <p><?= e($faq[1]) ?></p>
                </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="contact-section wrap" id="contact">
        <div class="contact-panel reveal">
            <div>
                <div class="eyebrow">Let’s start a conversation</div>
                <h2>Your wellbeing.<br>Our next <span class="serif">conversation.</span></h2>
                <p>Get in touch with Sankofa Tete Organic Research Center to discuss your visit.</p>
            </div>
            <button class="btn btn-white" data-consult>Contact the centre</button>
        </div>
        <?php if ($clinic['phone'] || $clinic['email'] || $clinic['address'] || $clinic['hours']): ?>
        <div class="contact-details">
            <?php if ($clinic['phone']): ?>
            <a href="tel:<?= e(preg_replace('/[^+0-9]/', '', $clinic['phone'])) ?>"><?= e($clinic['phone']) ?></a>
            <?php endif; ?>
            <?php if ($clinic['email']): ?>
            <a href="mailto:<?= e($clinic['email']) ?>"><?= e($clinic['email']) ?></a>
            <?php endif; ?>
            <?php if ($clinic['address']): ?>
            <span><?= e($clinic['address']) ?></span>
            <?php endif; ?>
            <?php if ($clinic['hours']): ?>
            <span><?= e($clinic['hours']) ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </section>
</main>
<footer class="wrap">
    <div class="footer-main">
        <a class="brand" href="#home"><?= logoMark() ?><div><strong>Sankofa Tete</strong><span>Organic Research Center</span></div></a>
        <nav class="footer-links" aria-label="Footer navigation">
            <a href="#about">Our story</a>
            <a href="#approach">Our approach</a>
            <a href="#visit">Your visit</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
    <div class="footer-bottom">
        <p>© <?= date('Y') ?> <?= e($clinic['name']) ?>.</p>
        <p>Website information does not replace an individual clinical assessment.</p>
    </div>
</footer>
<dialog id="consult-dialog" aria-labelledby="consult-title">
    <div class="dialog-content">
        <button class="dialog-close" aria-label="Close consultation panel">×</button>
        <span class="dialog-label">Sankofa Tete</span>
        <h2 id="consult-title">Let’s plan<br>your <span class="serif">visit.</span></h2>
        <p>Contact the centre to ask about available consultation times.</p>
        <div class="contact-options">
            <?php if ($whatsapp): ?>
            <a class="btn btn-green" href="https://wa.me/<?= e($whatsapp) ?>?text=<?= rawurlencode('Hello Sankofa Tete, I would like to enquire about a consultation.') ?>" target="_blank" rel="noopener noreferrer">Enquire on WhatsApp</a>
            <?php endif; ?>
            <?php if ($clinic['phone']): ?>
            <a class="btn btn-line" href="tel:<?= e(preg_replace('/[^+0-9]/', '', $clinic['phone'])) ?>">Call <?= e($clinic['phone']) ?></a>
            <?php endif; ?>
            <?php if ($clinic['email']): ?>
            <a class="btn btn-line" href="mailto:<?= e($clinic['email']) ?>?subject=Consultation%20enquiry">Send an email enquiry</a>
            <?php endif; ?>
            <?php if (!$whatsapp && !$clinic['phone'] && !$clinic['email']): ?>
            <div class="setup-note">Online enquiries will be available when the centre’s contact details are published. No appointment has been booked.</div>
            <?php else: ?>
            <p>Contacting the centre sends an enquiry. Your appointment is confirmed directly by the team.</p>
            <?php endif; ?>
        </div>
    </div>
</dialog>
<script>
    (() => {
        'use strict';
        const reduced = window.matchMedia('(prefers-reduced-motion: reduce)');
        const loader = document.querySelector('.loader');
        let visited = false;
        try {
            visited = sessionStorage.getItem('sankofa-visited') === '1';
            sessionStorage.setItem('sankofa-visited', '1')
        } catch (e) {
        }
        setTimeout(() => loader.classList.add('is-done'), reduced.matches || visited ? 0 : 1050);
        const header = document.getElementById('header');
        const onScroll = () => header.classList.toggle('scrolled', window.scrollY > 20);
        window.addEventListener('scroll', onScroll, {passive: true});
        onScroll();
        const menu = document.querySelector('.menu-button'), nav = document.getElementById('mobile-nav');
        function setMenu(open) {
            menu.setAttribute('aria-expanded', String(open));
            menu.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            nav.classList.toggle('open', open);
            nav.inert = !open;
        }

        menu.addEventListener('click', () => setMenu(menu.getAttribute('aria-expanded') !== 'true'));
        nav.querySelectorAll('a,button').forEach(el => el.addEventListener('click', () => setMenu(false)));
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && menu.getAttribute('aria-expanded') === 'true') {
                setMenu(false);
                menu.focus()
            }
        });
        window.matchMedia('(min-width:851px)').addEventListener('change', e => {
            if (e.matches) setMenu(false)
        });
        const reveal = document.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(entries => entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target)
                }
            }), {threshold: .1});
            reveal.forEach(el => observer.observe(el));
        } else {
            reveal.forEach(el => el.classList.add('visible'))
        }
        const dialog = document.getElementById('consult-dialog');
        let lastTrigger = null;
        document.querySelectorAll('[data-consult]').forEach(button => button.addEventListener('click', () => {
            lastTrigger = button;
            dialog.showModal();
            document.body.classList.add('locked')
        }));
        dialog.querySelector('.dialog-close').addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', event => {
            if (event.target === dialog) {
                const rect = dialog.getBoundingClientRect();
                if (event.clientX < rect.left || event.clientX > rect.right || event.clientY < rect.top || event.clientY > rect.bottom) dialog.close()
            }
        });
        dialog.addEventListener('close', () => {
            document.body.classList.remove('locked');
            if (lastTrigger) lastTrigger.focus()
        });
        const hero = document.querySelector('.hero'), video = document.getElementById('hero-video'), toggle = document.getElementById('motion-toggle');
        let manualPaused = reduced.matches;
        function syncMotion() {
            const paused = manualPaused || reduced.matches;
            hero.classList.toggle('motion-paused', paused);
            toggle.textContent = paused ? '▷' : 'Ⅱ';
            toggle.setAttribute('aria-label', paused ? 'Play background motion' : 'Pause background motion');
            toggle.setAttribute('aria-pressed', String(paused));
            toggle.disabled = reduced.matches;
            if (video) {
                if (paused || document.hidden) video.pause();
                else video.play().catch(() => {
                    video.style.display = 'none'
                })
            }
        }

        toggle.addEventListener('click', () => {
            manualPaused = !manualPaused;
            syncMotion()
        });
        reduced.addEventListener('change', () => {
            manualPaused = reduced.matches;
            syncMotion()
        });
        document.addEventListener('visibilitychange', syncMotion);
        syncMotion();
    })();
</script>
</body>
</html>
