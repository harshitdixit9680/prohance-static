<?php
define("NITROPACK_HOME_URL", "https://www.prohance.ai");
define("NITROPACK_SITE_ID", "AAMaEwwRTYDGHepNsnqHOmPbisuKHYIN");
define("NITROPACK_SITE_SECRET", "PVA44WV9iNtNM6YDr5L7a1b1yFXHqVU11LujLekzkZHe0jMCr1ACxgEWUVJtG6bI");

require_once $_SERVER['DOCUMENT_ROOT'] . "/nitropack-sdk/bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/prohance/">
    <?php include 'inc/head-tag-inc.php'; ?>
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/responsive.css" rel="stylesheet">

    <?php include 'other-codes.php'; ?>


    <style>
        * {
            font-family: "Montserrat", serif;
        }

        .about-hero {
            position: relative;
            /* margin-top: 40px; */
            padding: 80px 0 0px;
            /* background: linear-gradient(90deg, #126387 0%, #6CEA7E 141.27%), #126387;
            background-image: linear-gradient(90deg, #126387 0%, #6CEA7E 141.27%), url('images/about-us/OBJECTS.png'); */
            background-repeat: no-repeat;
            background-position: right top;
            background-size: cover, 520px;
            color: #ffffff;
            overflow: hidden;
        }

        .about-hero .hero-brand img {
            max-width: 370px;
        }

        .hero-subtitle {
            color: #000000;
            font-size: 14px;
            font-weight: 500;
            /* margin-top: 7px; */
            margin-bottom: 28px;
        }

        .hero-content h1 {
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 141.27%);
            -webkit-background-clip: text;
            /* for Chrome/Safari */
            /* [web:6][web:12][web:13] */
            background-clip: text;
            /* [web:9] */
            -webkit-text-fill-color: transparent;
            /* [web:12][web:13] */
            color: transparent;

            font-size: 36px;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 14px;
        }


        .hero-content p {

            font-size: 18px;
            font-weight: 600;
            color: #000000;
            line-height: 26px;
            letter-spacing: 0%;
        }

        .hero-cta {
            display: inline-block;
            padding: 12px 28px;
            background-color: #00AD4C;
            color: #ffffff;
            font-weight: 700;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(0, 173, 76, 0.35);
        }

        .hero-cta:hover {
            color: #ffffff;
            background-color: #009543;
        }

        .hero-panel {
            margin-top: 50px;
            position: relative;
            /* parent for overlap alignment */
            z-index: 2;
        }

        /* SINGLE CARD CONTAINER */
        .hero-card-container {
            background: #ffffff;
            border: 2px solid #b8e7d5;
            border-radius: 25px;
            /* box-shadow: 0 18px 45px rgba(0, 0, 0, 0.08); */
            display: flex;
            overflow: hidden;
            max-width: 1100px;
            margin: 0 auto;
        }

        .hero-card-section {
            flex: 1;
            padding: 25px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-card-section--left {
            text-align: left;
        }

        .hero-card-section--right {
            text-align: left;
            border-left: 1px solid #b8e7d5;
            position: relative;
        }

        .hero-card-section h3 {
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 247.73%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            font-size: 32px;
            font-weight: 400;
            line-height: 40px;
            letter-spacing: 0%;
            margin-bottom: 12px;
        }

        .hero-card-section p {
            color: #000000;
            font-size: 18px;
            font-weight: 400;
            line-height: 26px;
            letter-spacing: 0%;
            margin: 0;
        }

        /* Right section with globe */
        .hero-card-section--right .clarity-title {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 12px;
        }

        .hero-card-section--right .clarity-title-text {
            flex: 1;
        }

        .hero-card-section--right .clarity-title h3 {
            font-size: 32px;
            font-style: Regular;
            font-weight: 400;
            line-height: 34px;
            letter-spacing: 0%;
            color: #000000;
            margin-bottom: 12px;
        }

        .hero-card-section--right .clarity-title .subtitle {
            font-size: 16px;
            font-weight: 500;
            color: #000000;
            line-height: 1.4;
        }

        .hero-card-section--right .clarity-title img {
            max-width: 100px;
            /* flex-shrink: 0; */
            align-self: flex-start;
            margin-top: 4px;
        }

        /* MISSION ELLIPSE */
        .mission-callout {
            position: relative;
            z-index: 1;
            margin: 0 auto;
            /* center under card */
            margin-top: -17px;
            /* pull up to touch the card edge */
            width: 551px;
            height: 294px;
            /* exactly half of width */
            background: #0b6185;
            color: #ffffff;
            border-radius: 0 0 270px 270px;
            /* bottom-only rounded => half circle */
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.18);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 60px 60px;
            text-align: center;
            overflow: hidden;
        }

        .mission-callout h3 {
            font-size: 32px;
            font-family: "Montserrat";
            font-style: bold;
            line-height: 40px;
            letter-spacing: 0%;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .mission-callout p {
            font-size: 18px;
            font-weight: 500;
            line-height: 24px;
            letter-spacing: 0%;
            font-family: "Montserrat";

            margin: 0;
        }

        /* our values section */
        .values-section {
            margin-top: 70px;
        }

        /* Outer card */
        .values-card {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #4CBA81;
            /* same border color as hero card */
            border-radius: 22px;
            padding: 32px 56px 36px;
        }

        /* Title */
        .values-title {
            background: linear-gradient(90deg, #6CEA7E -98.87%, #126387 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            text-align: center;
            font-size: 32px;
            font-family: "Montserrat";
            font-style: bold;
            line-height: 40px;
            letter-spacing: 0%;
            font-weight: 700;
            margin: 0 0 18px;
        }

        /* Thin divider under title */
        .values-divider {
            height: 1px;
            background-color: #b8e7d5;
            margin: 0 -40px 22px;
        }

        /* Two-column grid */
        .values-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 80px;
            row-gap: 14px;
        }

        .values-column {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        /* Each value row */
        .value-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }

        /* Code (R-, A-, etc.) */
        .value-code {
            background: linear-gradient(90deg, #6CEA7E -98.87%, #126387 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            text-align: center;
            font-size: 32px;
            font-family: "Montserrat";
            font-style: bold;
            line-height: 40px;
            letter-spacing: 0%;
            font-weight: 700;
            min-width: 40px;
        }

        /* Icon */
        .value-icon {
            color: #0c8f75;
            font-size: 20px;
            min-width: 28px;
            text-align: center;
        }

        /* Text */
        .value-text {
            color: #000000;
            font-weight: 500;
            font-size: 22px;
            line-height: 22px;
            font-family: "Montserrat";
        }

        /* Responsive */
        @media (max-width: 991px) {
            .values-card {
                padding: 24px 20px 28px;
            }

            .values-grid {
                grid-template-columns: 1fr;
                row-gap: 18px;
            }

            .values-divider {
                margin: 0 -10px 18px;
            }

            .values-title {
                font-size: 24px;
            }

            .value-row {
                font-size: 16px;
            }
        }

        .stats-section {
            margin-top: 40px;
        }

        .stats-grid {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .stat-card {
            background: #ffffff;
            border: 2px solid #b8e7d5;
            /* same border color as other cards */
            border-radius: 26px;
            padding: 26px 24px 22px;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .stat-icon {
            width: 52px;
            height: auto;
            margin-bottom: 18px;
        }

        /* small gradient line */
        .stat-line {
            height: 2px;
            width: 60%;
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 100%);
            margin-bottom: 18px;
        }

        .stat-number {
            font-size: 22px;
            font-weight: 800;
            color: #000000;
            margin-bottom: 6px;
        }

        .stat-label {
            font-size: 14px;
            font-weight: 500;
            color: #000000;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }




        /* mobile */
        @media (max-width: 991px) {
            .hero-card-container {
                flex-direction: column;
            }

            .hero-card-section--right {
                border-left: none;
                border-top: 1px solid #b8e7d5;
            }

            .mission-callout {
                margin-top: 20px;
                /* no overlap on small screens */
                width: 100%;
                height: auto;
                border-radius: 26px;
                padding: 30px 24px;
            }
        }

        .partners-section-logo {
            background-color: #F3FBFF;
        }

        .company-logo-div {
            gap: 20px;
        }

        .partner-logo {
            max-height: 70px;
            object-fit: contain;
        }

        @media (max-width: 991px) {
            .about-hero {
                padding: 90px 0 110px;
                background-size: cover, 360px;
            }

            .hero-content h1 {
                font-size: 30px;
            }

            .hero-card-container {
                flex-direction: column;
            }

            .hero-card-section--right {
                border-left: none;
                border-top: 1px solid #b8e7d5;
            }

            .mission-callout {
                border-radius: 26px;
                padding: 30px 24px;
            }
        }

        @media (max-width: 767px) {
            .about-hero {
                margin-top: 56px;
                padding: 70px 0 90px;
                text-align: center;
                background-position: center top;
            }

            .hero-content h1 {
                font-size: 26px;
            }

            .hero-content p {
                font-size: 16px;
            }

            .hero-card-section {
                padding: 24px 20px;
            }

            .hero-card-section h3 {
                font-size: 20px;
            }

            .hero-card-section--right .clarity-title h3 {
                font-size: 24px;
            }

            .hero-card-section--right .clarity-title .subtitle {
                font-size: 15px;
            }

            .hero-card-section--right .clarity-title img {
                max-width: 70px;
            }

            .hero-card-section p,
            .mission-callout p {
                font-size: 15px;
            }
        }

        .analyst-section {
            margin-top: 70px;
            text-align: center;
        }

        .analyst-title {
            font-size: 30px;
            font-family: "Montserrat";
            font-weight: 800;
            margin-bottom: 28px;
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 140%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }



        /* cards row */
        .analyst-grid {
            max-width: 1120px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px;
        }

        /* base card */
        .analyst-card {
            position: relative;
            display: block;
            border-radius: 32px;
            overflow: hidden;
            text-decoration: none;
            color: #ffffff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
            transform: translateY(0) scale(1);
            background: linear-gradient(120deg, #026d9d 0%, #00ed85 100%);
        }

        /* hover effect */
        .analyst-card:hover {

            color: #ffffff;

        }




        .analyst-line {
            position: relative;
            height: 2px;
            width: 60%;
            overflow: hidden;
            background: transparent;
            margin-bottom: 6px;
            /* base stays transparent */
        }

        .analyst-line::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg,
                    rgba(90, 188, 249, 0) 0%,
                    #5abcf9 25%,
                    #6cea7e 75%,
                    rgba(108, 234, 126, 0) 100%);

            background-size: 150% 100%;
            animation: analystLineSweep 2s ease-in-out infinite;
        }

        @keyframes analystLineSweep {
            0% {
                transform: translateX(-100%);
            }

            50% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(100%);
            }
        }


        .analyst-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* bottom gradient overlay with text */
        .analyst-overlay {
            position: absolute;
            inset: 45% 0 0 0;
            background: linear-gradient(180deg,
                    rgba(0, 56, 91, 0.1) 0%,
                    rgba(0, 56, 91, 0.92) 45%,
                    rgba(0, 56, 91, 1) 100%);
            padding: 18px 22px 16px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .analyst-overlay h3 {
            font-size: 16px;
            font-weight: 700;
            line-height: 1.4;
            margin: 0 0 14px;
            text-align: left;
        }

        /* Learn more row */
        .analyst-cta {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #ffffff;
            background-size: 150% 150%;
            transition:
                transform 280ms cubic-bezier(0.19, 1, 0.22, 1),
                box-shadow 280ms cubic-bezier(0.19, 1, 0.22, 1),
                background-position 450ms ease-out;
        }

        /* hover effect */
        .analyst-cta:hover {
            transform: translateY(-8px) scale(1.015);
            box-shadow: 0 22px 55px rgba(0, 0, 0, 0.28);
            color: #6CEA7E;
            background-position: 100% 0;
            /* soft gradient sweep */
        }

        /* optional: inner content slight move */
        .analyst-cta:hover .analyst-card-content {
            transform: translateY(-2px);
        }

        .analyst-cta {
            transition: transform 220ms ease-out;
        }

        .cta-arrow {
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 1199px) {
            .analyst-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .analyst-title {
                font-size: 24px;
            }

            .analyst-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .analyst-card {
                border-radius: 24px;
            }

            .analyst-overlay {
                inset: 50% 0 0 0;
                padding: 14px 18px 12px;
            }

            .analyst-overlay h3 {
                font-size: 15px;
            }
        }

        .success-section {
            margin-top: 40px;
            text-align: center;
        }

        .success-title {
            font-size: 30px;
            font-family: "Montserrat";
            font-weight: 800;
            margin-bottom: 28px;
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 140%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        /* carousel layout */
        .success-carousel {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .success-track-wrapper {
            overflow: hidden;
            flex: 1;
        }

        .success-track {
            display: flex;
            transition: transform 0.4s ease;
        }

        /* each slide = 1 card */
        .success-slide {
            min-width: 100%;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        /* card */
        .success-card {
            position: relative;
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #d8efe2;
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.09);
            padding: 28px 32px 24px;
            text-align: left;
        }

        .success-quote-mark {
            position: absolute;
            top: 16px;
            left: 24px;
            font-size: 48px;
            color: #e8f6f0;
            line-height: 1;
            pointer-events: none;
        }

        .success-text {
            margin: 0 0 26px;
            font-size: 15px;
            line-height: 1.7;
            color: #000000;
        }

        .success-footer {
            display: flex;
            align-items: center;
            gap: 14px;
        }


        .success-logo {
            width: 70px;
            height: auto;
        }

        .success-name {
            font-size: 14px;
            font-weight: 700;
            color: #0b6185;
        }

        .success-role {
            font-size: 12px;
            color: #555555;
        }


        /* nav arrows */
        .success-nav {
            border: none;
            background: transparent;
            font-size: 26px;
            cursor: pointer;
            color: #9fb9b0;
            transition: color 0.2s;
        }

        .success-nav:hover {
            color: #126387;
        }

        /* dots */
        .success-dots {
            margin-top: 16px;
            display: flex;
            justify-content: center;
            gap: 6px;
        }

        .success-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: none;
            background-color: #d7e6df;
            cursor: pointer;
        }

        .success-dot.active {
            background-color: #24b37c;
        }

        /* CTA button */
        .success-cta {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 26px;
            border-radius: 999px;
            background: #00a651;
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        /* responsive */
        @media (max-width: 768px) {
            .success-slide {
                grid-template-columns: 1fr;
            }

            .success-card {
                padding: 22px 20px 20px;
            }
        }

        .knowus-section {
            margin: 70px 0 0;
            text-align: center;
        }

        /* title */
        .knowus-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 26px;
            color: #126387;
        }

        /* cards row */
        .knowus-grid {
            max-width: 960px;
            margin: 0 auto 32px;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        /* base card */
        .knowus-card {
            display: flex;
            flex-direction: column;
            background: #ffffff;
            border-radius: 26px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            text-align: left;
            text-decoration: none;
            color: inherit;
            border: 3px solid transparent;
            transition: box-shadow 0.2s ease, transform 0.2s ease;
        }

        .knowus-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 26px 55px rgba(0, 0, 0, 0.12);
        }

        /* special blue-outline card */
        .knowus-card--primary {
            border-color: #0b8ae3;
        }

        /* image */
        .knowus-image img {
            display: block;
            width: 100%;
            height: 170px;
            object-fit: cover;
        }

        /* card body */
        .knowus-body {
            padding: 18px 22px 20px;
        }

        .knowus-tag {
            font-size: 12px;
            font-weight: 600;
            color: #999999;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .knowus-heading {
            font-size: 18px;
            font-weight: 700;
            color: #000000;
            margin: 0 0 4px;
        }

        .knowus-desc {
            font-size: 13px;
            color: #555555;
            margin: 0;
        }

        /* gradient strip with button */
        .knowus-cta-strip {
            margin-top: 10px;
            padding: 18px 16px 22px;
            background: linear-gradient(90deg, #126387 0%, #6CEA7E 140%);
            color: #ffffff;
            text-align: center;
        }

        .knowus-cta-text {
            margin: 0 0 10px;
            font-size: 14px;
        }

        .knowus-cta-btn {
            display: inline-block;
            padding: 8px 26px;
            border-radius: 999px;
            background: #ffffff;
            color: #126387;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        /* responsive */
        @media (max-width: 768px) {
            .knowus-grid {
                grid-template-columns: 1fr;
            }

            .knowus-image img {
                height: 160px;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.stat-number');

            const animateCounter = (el) => {
                const target = parseInt(el.getAttribute('data-target'), 10);
                const suffix = el.getAttribute('data-suffix') || '';
                const duration = 1500; // ms
                const start = 0;
                const startTime = performance.now();

                const step = (now) => {
                    const progress = Math.min((now - startTime) / duration, 1);
                    const value = Math.floor(start + (target - start) * progress);
                    el.textContent = value.toLocaleString() + suffix;
                    if (progress < 1) requestAnimationFrame(step);
                };

                requestAnimationFrame(step);
            };

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.4 });  // start when ~40% visible [web:55][web:64][web:65]

            counters.forEach(c => observer.observe(c));
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.success-track');
            const slides = Array.from(document.querySelectorAll('.success-slide'));
            const prevBtn = document.querySelector('.success-nav--prev');
            const nextBtn = document.querySelector('.success-nav--next');
            const dots = Array.from(document.querySelectorAll('.success-dot'));

            const totalSlides = slides.length;  // 5
            let currentIndex = 0;

            function updateCarousel() {
                const offset = -currentIndex * 100;
                track.style.transform = `translateX(${offset}%)`;
                dots.forEach((dot, i) => dot.classList.toggle('active', i === currentIndex));
            }

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });

            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    updateCarousel();
                });
            });

            // optional auto‑play
            setInterval(() => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }, 8000);
        });
    </script>



</head>

<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container text-center">
            <div class="hero-brand">
                <img src="images/about-us/about-us-logo.png" alt="ChrysCapital">
                <div class="hero-subtitle">ChrysCapital Portfolio Company</div>
            </div>
            <div class="hero-content">
                <h1>Real-time Workforce Intelligence for Modern Enterprises</h1>
                <p>Because the future of work isn't about doing more. It's about seeing better.</p>
                <a class="hero-cta" href="book-a-demo.php">Book a Demo</a>
            </div>
            <div class="hero-panel">
                <div class="hero-card-container">
                    <div class="hero-card-section hero-card-section--left">
                        <h3>Workforce intelligence that turns visibility into action</h3>
                        <p>Measure how work happens, uncover bottlenecks, and optimize performance with confidence.</p>
                    </div>
                    <div class="hero-card-section hero-card-section--right">
                        <div class="clarity-title">
                            <div class="clarity-title-text">
                                <h3>Clarity</h3>
                                <div class="subtitle">that moves organizations</div>
                            </div>
                            <img src="images/about-us/OBJECTS.png" alt="Globe">
                        </div>

                    </div>
                </div>
            </div>
            <div class="mission-callout mx-auto">
                <h3>Our Mission</h3>
                <p>To offer enterprises a fresh perspective on productivity - creating next-generation workforce
                    management built on first principles.</p>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="values-section">
        <div class="values-card">
            <h2 class="values-title">Our Values</h2>
            <div class="values-divider"></div>

            <div class="values-grid">
                <div class="values-column">
                    <div class="value-row">
                        <span class="value-code">R-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/respect.png" alt="Respect for All">
                        </span>
                        <span class="value-text">Respect for All</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">A-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/authentic.png" alt="Authentic &amp; Candid Communication">
                        </span>
                        <span class="value-text">Authentic &amp; Candid Communication</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">C-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/customer.png" alt="Customer Centricity">
                        </span>
                        <span class="value-text">Customer Centricity</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">E-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/excellence.png" alt="Excellence">
                        </span>
                        <span class="value-text">Excellence</span>
                    </div>
                </div>

                <div class="values-column">
                    <div class="value-row">
                        <span class="value-code">H-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/hands.png" alt="Hands-On">
                        </span>
                        <span class="value-text">Hands-On</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">A-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/aim.png" alt="Aim High">
                        </span>
                        <span class="value-text">Aim High</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">R-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/result.png" alt="Result-Driven">
                        </span>
                        <span class="value-text">Result-Driven</span>
                    </div>

                    <div class="value-row">
                        <span class="value-code">D-</span>
                        <span class="value-icon">
                            <img src="images/about-us/icons/dicipline.png" alt="Discipline + Hustle">
                        </span>
                        <span class="value-text">Discipline + Hustle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Stats -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-card">
                <img src="images/about-us/icons/group.png" alt="Licenses" class="stat-icon">
                <div class="stat-line"></div>
                <div class="stat-number" data-target="400000" data-suffix="+">0</div>
                <div class="stat-label">Licenses</div>
            </div>

            <div class="stat-card">
                <img src="images/about-us/icons/Enterprises.png" alt="Enterprises" class="stat-icon">
                <div class="stat-line"></div>
                <div class="stat-number" data-target="200" data-suffix="+">0</div>
                <div class="stat-label">Enterprises</div>
            </div>

            <div class="stat-card">
                <img style="width:38px" src="images/about-us/icons/Countries.png" alt="Countries" class="stat-icon">
                <div class="stat-line"></div>
                <div class="stat-number" data-target="36">0</div>
                <div class="stat-label">Countries</div>
            </div>

            <div class="stat-card">
                <img src="images/about-us/icons/Million.png" alt="Hours Saved" class="stat-icon">
                <div class="stat-line"></div>
                <div class="stat-number" data-target="84">0</div>
                <div class="stat-label">Million Hours Saved</div>
            </div>
        </div>
    </section>

    <!-- analyst-section -->
    <section class="analyst-section">
        <h2 class="analyst-title">
            What Industry Analysts Say About <span>ProHance</span>
        </h2>

        <div class="analyst-grid">
            <a href="industry-reports/everest-group-people-analytics-platforms-peak-matrix-assessment-2025"
                class="analyst-card">
                <img src="images/about-us/icons/Mask1.png" alt="Everest Group People Analytics" class="analyst-img">
                <div class="analyst-overlay">
                    <h3>Everest Group People Analytics PEAK Matrix 2025</h3>
                    <div class="analyst-line"></div>
                    <div class="analyst-cta ">
                        <span>Learn More</span>
                        <span class="cta-arrow">↗</span>
                    </div>
                </div>
            </a>

            <a href="industry-reports/everest-group-recognized-prohance-as-a-trailblazer" class="analyst-card">
                <img src="images/about-us/icons/Mask2.png" alt="Everest Group Top 15" class="analyst-img">
                <div class="analyst-overlay">
                    <h3>Everest Group Top 15 Trailblazers in Contact Centers</h3>
                    <div class="analyst-line"></div>
                    <div class="analyst-cta">
                        <span>Learn More</span>
                        <span class="cta-arrow">↗</span>
                    </div>
                </div>
            </a>

            <a href="industry-reports.php" class="analyst-card">
                <img src="images/about-us/icons/Mask3.png" alt="Gartner Market Guide" class="analyst-img">
                <div class="analyst-overlay">
                    <h3>Gartner Market Guide Representative Vendor 2025</h3>
                    <div class="analyst-line"></div>
                    <div class="analyst-cta">
                        <span>Learn More</span>
                        <span class="cta-arrow">↗</span>
                    </div>
                </div>
            </a>

            <a href="industry-reports.php" class="analyst-card">
                <img src="images/about-us/icons/Mask4.png" alt="Gartner Hype Cycle" class="analyst-img">
                <div class="analyst-overlay">
                    <h3>Gartner Hype Cycle Sample Vendor 2025</h3>
                    <div class="analyst-line"></div>
                    <div class="analyst-cta">
                        <span>Learn More</span>
                        <span class="cta-arrow">↗</span>
                    </div>
                </div>
            </a>
        </div>
    </section>


    <!-- Awards Section -->
    <style>
        .awards-grid {
            display: flex;
            align-items: center;
            justify-content: space-around;
            max-width: 900px;
            margin: 0 auto;
        }

        .awards-grid img {
            max-width: 105px;
        }

        .awards-section .main-title {
            text-align: center;
            font-size: 30px;
            font-family: "Montserrat";
            font-weight: 800;

            background: linear-gradient(90deg, #126387 0%, #6CEA7E 161.97%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;

        }

        .awards-section .main-subtitle {
            text-align: center;
            color: #000000;
            font-size: 17px;
            font-weight: 400;
            line-height: 20px;
            letter-spacing: 0%;
            margin-bottom: 28px;
            /* margin: 0; */
        }

        .certified-security h2 {
            color: #112A5F;
            text-align: center;
            font-size: 30px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        .container-wrapper-inner {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .container-wrapper-inner img {
            max-width: 100%;
        }

        @media(max-width:960px) {
            .awards-grid {
                flex-wrap: wrap;
            }

            .container-wrapper-inner {
                flex-wrap: wrap;
            }

        }

        @media(max-width:800px) {
            .awards-section .main-title {
                font-size: 22px;
            }
        }

        /* memberships */
        .memberships-title {
            text-align: center;
            font-size: 30px;
            font-family: "Montserrat";
            font-weight: 800;

            background: linear-gradient(90deg, #126387 0%, #6CEA7E 161.97%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;

        }
    </style>
    <section class="ttlp-award-wrp  pt-5">
        <div class="container-1360-wrp plr-15">
            <section class="awards-section">
                <h2 class="main-title">Recognized globally </h2>
                <h3 class="main-subtitle">for innovation, impact, and excellence. </h3>

                <div class="awards-grid">
                    <!-- G2 Award Badges -->
                    <img src="images/about-us/icons/awards1.png" alt="Enterprise High Performer Asia"
                        class="award-badge">
                    <img src="images/about-us/icons/awards2.png" alt="Leader Mid-Market" class="award-badge">
                    <img src="images/about-us/icons/awards3.png" alt="Enterprise High Performer Asia Pacific"
                        class="award-badge">
                    <img src="images/about-us/icons/awards4.png" alt="Best Est. ROI" class="award-badge">
                    <img src="images/about-us/icons/awards5.png" alt="Highest User Adoption" class="award-badge">
                    <img src="images/about-us/icons/awards6.png" alt="Highest User Adoption 6" class="award-badge">
                </div>
            </section>
        </div>
        <div class="award-seg-wrp">
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-section pb-4">
        <h2 class="success-title">Success Stories</h2>

        <div class="success-carousel">
            <button class="success-nav success-nav--prev" aria-label="Previous">&#10094;</button>

            <div class="success-track-wrapper">
                <div class="success-track">

                    <div class="success-slide">
                        <!-- 1 -->
                        <div class="success-card">
                            <div class="success-quote-mark">“</div>
                            <p class="success-text">
                                Helped in Tesco Business Services transformation roadmap. The real-time
                                insights and information generated by tool are leveraged by multiple teams
                                to make meaningful business decisions.
                            </p>
                            <div class="success-footer">
                                <img src="images/about-us/icons/success1.png" alt="Tesco" class="success-logo">
                                <div>
                                    <div class="success-name">Altaf Patel</div>
                                    <div class="success-role">
                                        Director, Business Transformation, Tesco Business Services
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="success-card">
                            <div class="success-quote-mark">“</div>
                            <p class="success-text">
                                ProHance stood out as the most comprehensive solution — providing
                                real-time, enterprise-wide visibility, actionable insights, and seamless
                                operational enablement.
                            </p>
                            <div class="success-footer">
                                <img src="images/about-us/icons/success2.png" alt="JLL" class="success-logo">
                                <div>
                                    <div class="success-name">Martin Edgerton</div>
                                    <div class="success-role">Global Head - JLL Service Centers</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="success-slide">
                        <!-- 3 -->
                        <div class="success-card">
                            <div class="success-quote-mark">“</div>
                            <p class="success-text">
                                It supports employee well-being through better workload balancing and the ability to
                                proactively identify employees who need assistance (workload analysis). 
                            </p>
                            <div class="success-footer">
                                <img src="images/about-us/icons/success3.png" alt="Client" class="success-logo">
                                <div>
                                    <div class="success-name">Shalabh Srivastava,</div>
                                    <div class="success-role">Head, Quality and Process Excellence, Wipro</div>
                                </div>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="success-card">
                            <div class="success-quote-mark">“</div>
                            <p class="success-text">
                                ProHance has helped us improve our operational acumen and decision-making process
                                through their advanced reporting and insights capabilities.
                            </p>
                            <div class="success-footer">
                                <img src="images/about-us/icons/success4.png" alt="Client" class="success-logo">
                                <div>
                                    <div class="success-name">Mohith Mohan,</div>
                                    <div class="success-role">Divisional Vice President and Site Head, HBC</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- 5 -->
                    <div class="success-slide">
                        <div class="success-card">
                            <div class="success-quote-mark">“</div>
                            <p class="success-text">
                                With ProHance we can accurately track these employees’ time regardless of whether they
                                are working on their workstation or away from their desks.
                            </p>
                            <div class="success-footer">
                                <img src="images/about-us/icons/success5.png" alt="Client" class="success-logo">
                                <div>
                                    <div class="success-name">N Muthuraman,</div>
                                    <div class="success-role">Sr. Director</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="success-nav success-nav--next" aria-label="Next">&#10095;</button>
        </div>

        <div class="success-dots">
            <button class="success-dot active"></button>
            <button class="success-dot"></button>
            <button class="success-dot"></button>
            <!-- <button class="success-dot"></button>
            <button class="success-dot"></button> -->
        </div>

        <a href="/testimonials.php" class="success-cta">Explore Our Success Stories</a>
    </section>



    <!-- Partners Section -->
    <section class="py-5 partners-section-logo">
        <div class="container justify-content-center text-center">
            <div class="d-flex justify-content-center  company-logo-div align-items-center flex-wrap">
                <!-- <img src="images/chryscapital-logo.png" alt="ChrysCapital" class="partner-logo"> -->
                <img src="images/about-us/icons/nassom.png" alt="NASSCOM" class="partner-logo">
                <img src="images/about-us/icons/nassom2.png" alt="Microsoft Ventures" class="partner-logo">
            </div>
        </div>
    </section>

    <!-- Our Memberships Section -->

    <section class="py-3 bg-white">
        <div class="container text-center">
            <h2 class="memberships-title pb-3">Our Memberships</h2>
            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-sm-4 col-md-2 mb-4">
                    <img src="images/abt-us-himap-logo.png" class="img-fluid" alt="HIMAP Logo">
                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4">
                    <img src="images/abt-us-eccp-logo.png" class="img-fluid" alt="ECCP Logo">
                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4">
                    <img src="images/about-us/icons/cplogo.png" class="img-fluid" alt="ANZCHAM Logo">
                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4">
                    <img src="images/abt-us-amcham-logo.png" class="img-fluid" alt="AMCHAM Logo">
                </div>
                <div class="col-6 col-sm-4 col-md-2 mb-4">
                    <img src="images/abt-us-bpap-logo.png" class="img-fluid" alt="BPAP Logo">
                </div>
            </div>
        </div>
    </section>

    <!-- knowus-section -->
    <section class="knowus-section">
        <h2 class="knowus-title">Get To Know Us Better</h2>

        <div class="knowus-grid">
            <!-- Card 1 -->
            <a href="/press-releases.php" class="knowus-card">
                <div class="knowus-image">
                    <img src="images/about-us/icons/news.png" alt="ProHance in News">
                </div>
                <div class="knowus-body">
                    <div class="knowus-tag">Read</div>
                    <h3 class="knowus-heading">ProHance in News</h3>
                    <p class="knowus-desc">
                        Check out some of our favourite articles over the years!
                    </p>
                </div>
            </a>

            <!-- Card 2 (blue border) -->
            <a href="/blog" class="knowus-card">
                <div class="knowus-image">
                    <img src="images/about-us/icons/blogs.png" alt="Our Blog Stack">
                </div>
                <div class="knowus-body">
                    <div class="knowus-tag">Explore</div>
                    <h3 class="knowus-heading">Our Blog Stack</h3>
                    <p class="knowus-desc">
                        Customer stories, tips, and our opinions on everything in between.
                    </p>
                </div>
            </a>
        </div>

        <div class="knowus-cta-strip">
            <p class="knowus-cta-text">
                ProHance isn’t just raising the bar – we’re setting a new one.
            </p>
            <a href="ProHance isn’t just raising the bar – we’re setting a new one." class="knowus-cta-btn">Talk to
                Us</a>
        </div>
    </section>



    <?php include 'footer.php'; ?>
    <script src="https://www.prohance.ai/js/mainjs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'inc/footer-script.php'; ?>
</body>

</html>