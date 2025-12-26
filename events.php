<?php include 'config.php'; ?>

<?php
// include 'db.php';

$currentDate = date("Y-m-d");
$base_url_img = "https://www.prohance.ai/prohance_admin/assets/images/events";

if (isset($_GET['ajax']) && $_GET['ajax'] === 'true') {
    $type = $_GET['type'] ?? 'upcoming';
    $page = $_GET['page'] ?? 1;
    $limit = 12;
    $offset = ($page - 1) * $limit;

    if ($type === 'upcoming') {
        // Query for upcoming events
        $query = "SELECT title, category, image, event_start_date, venue, slug 
                     FROM events 
                     WHERE event_start_date >= :currentDate 
                     ORDER BY event_start_date ASC 
                     LIMIT :offset, :limit";

        $countQuery = "SELECT COUNT(*) 
                          FROM events 
                          WHERE event_start_date >= :currentDate";
    } else {
        $query = "SELECT title, category, image, event_start_date, venue, slug 
                     FROM events 
                     WHERE event_start_date < :currentDate 
                     ORDER BY event_start_date DESC 
                     LIMIT :offset, :limit";

        $countQuery = "SELECT COUNT(*) 
                          FROM events 
                          WHERE event_start_date < :currentDate";
    }

    $stmt = $pdo_conn->prepare($query);
    $stmt->bindValue(':currentDate', $currentDate, PDO::PARAM_STR);
    $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
    $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
    $stmt->execute();
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $countStmt = $pdo_conn->prepare($countQuery);
    $countStmt->bindValue(':currentDate', $currentDate, PDO::PARAM_STR);
    $countStmt->execute();
    $totalEvents = $countStmt->fetchColumn();

    $totalPages = ceil($totalEvents / $limit);

    echo json_encode(['events' => $events, 'totalPages' => $totalPages]);
    exit;
}
?>
<?php
// NitroPack SDK - disabled for Docker environment
// define("NITROPACK_HOME_URL", "https://www.prohance.ai");
// define("NITROPACK_SITE_ID", "AAMaEwwRTYDGHepNsnqHOmPbisuKHYIN");
// define("NITROPACK_SITE_SECRET", "PVA44WV9iNtNM6YDr5L7a1b1yFXHqVU11LujLekzkZHe0jMCr1ACxgEWUVJtG6bI");
// require_once $_SERVER['DOCUMENT_ROOT'] . "/nitropack-sdk/bootstrap.php";
?>

<!doctype html>
<html lang="en">

<head>
    <?php include 'inc/head-tag-inc.php'; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
        integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
        crossorigin="anonymous"></script>
    <meta name="description"
        content="Click Here to connect with ProHance experts and learn more about our business and our successes." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <?php include 'other-codes.php'; ?>
    <style type="text/css">
        .ph-events-list h4:first-of-type {
            width: 100%;
        }

        .loader {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .events-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .pagination-container {
            text-align: center;
            margin-top: 20px;
        }

        .pagination-link {
            margin: 0 10px;
            cursor: pointer;
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }

        .pagination-link.active {
            font-weight: 600;
            color: #000;
            background: #6CEA7E;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            display: inline-block;
        }

        .ph-trial-banner {
            background: #f9f9f9;
            padding: 15px;
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        .ph-trial-banner h5 {
            margin: 0;
        }

        .ph-trial-btn {
            margin-left: 20px;
        }

        .container-1360-wrp {
            width: 80%%;
        }

        .events .evnt-bx {
            background-color: #fff;
            width: 100%;
            text-align: left;
            max-width: 363px;
            border: 0.5px solid #0D3C58;
            border-radius: 31px;
            margin-bottom: 50px;
            min-height: 340px;
        }

        .events .evnt-bx .img-fluid {
            /* border-radius: 31px; */
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #40bf4f !important;
        }

        .events .tab-content .nav .nav-item {
            background: #fff;
            font-size: 18px;
            margin-right: 15px;
        }

        .events .tab-content .tabbable {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        .events-hero {
            padding: 84px 0 40px;
            text-align: center;
        }

        .events-kicker {
            font-size: 30px;
            font-weight: 600;
            color: #000000;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        /* .events-kicker::after {
            content: "";
            display: block;
            height: 2px;
            width: 120px;
            margin: 8px auto 0;
            background: linear-gradient(90deg, #5ABCF9 0%, #6CEA7E 100%);

        } */

            
        .analyst-line {
            position: relative;
            height: 2px;
             width: 150px;
            margin: 0px auto 0;
            overflow: hidden;
            background: transparent;
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



        .events-hero-title {
            background: linear-gradient(90deg, #026D9D 0%, #6CEA7E 173.98%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            font-size: 35px;
            font-weight: 700;
            color: #000000;
            margin: 8px 0 10px;
        }

        .events-hero-subtitle {
            max-width: 857px;
            margin: 0 auto;
            font-size: 20px;
            font-weight: 400;
            line-height: 30px;
            color: #030303;
        }

        /* Upcoming event highlight section */
        .event-feature {
            margin-top: 40px;
            padding: 32px 0;
            background: linear-gradient(180deg,
                    #e8ffe9 0%,
                    #ffffff 40%,
                    #fbfbfb 100%);


            border-top: 1px solid #5ABCF9;
            border-bottom: 1px solid #5ABCF9;
        }

        .event-feature-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        /* left column */
        .event-feature-text {
            flex: 1 1 0;
            text-align: left;
        }

        .event-feature-label {
            font-size: 20px;
            font-family: "Montserrat", sans-serif;
            font-weight: 600;
            line-height: 100%;
            color: #000000;
            margin-bottom: 8px;
        }

        .event-feature-title {
            font-size: 25px;
            font-weight: 700;
            line-height: 34px;
            margin: 0 0 10px;
            background: linear-gradient(264.69deg, #026D9D 22.5%, #6CEA7E 199.55%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        .event-feature-desc {
            font-size: 17px;
            line-height: 30px;
            color: #000000;
            margin: 0 0 18px;
        }

        .event-feature-btn {
            display: inline-block;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(90deg, #026D9D 0%, #6CEA7E 204.88%);
            text-decoration: none;
        }

        /* right image card */
        .event-feature-media img {
            display: block;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.15);
        }

        .event-feature-card {
            position: relative;
            display: inline-block;
        }

        .event-feature-card img {
            display: block;
            width: 100%;
        }

        /* center overlay */
        .event-feature-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* white outlined box like design */
        .event-feature-box {

            padding: 10px 28px;
            border-radius: 4px;
            text-align: center;
            color: #ffffff;
        }

        .event-feature-main {
            display: block;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 0.03em;
        }

        .event-feature-year {
            display: block;
            font-size: 20px;
            font-weight: 700;
            margin-top: 4px;
        }

        .event-feature-label::after {
            content: "";
            display: block;
            height: 2px;
            width: 85px;
            margin-top: 11px;
               background: linear-gradient(90deg,
                    rgba(90, 188, 249, 0) 0%,
                    #5abcf9 25%,
                    #6cea7e 75%,
                    rgba(108, 234, 126, 0) 100%);
              background-size: 150% 100%;
            animation: analystLineSweeps 2s ease-in-out infinite;

        }


        @keyframes analystLineSweeps {
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



        /* responsive */
        @media (max-width: 768px) {
            .event-feature-inner {
                flex-direction: column;
                align-items: flex-start;
            }

            .event-feature-media img {
                max-width: 100%;
            }

            .event-feature-title {
                font-size: 20px;
            }
        }


        .tabbable .nav-pills {
            margin-left: 0px;
        }

        .events .d-flex {
            text-align: center;
            justify-content: center;
        }

        .events .d-flex h3 {
            font-size: 40px;
            color: #00ad4c;
            font-weight: 700;
        }

        .events .d-flex p {
            font-size: 20px;
            margin-top: 10px;
        }

        .tabbable-responsive {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
        }

        .events .tabbable {
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
        }

        @media(max-width: 767px) {
            .events .nav .nav-item {
                background: #fff;
                font-size: 15px;
                margin-right: 25px;
            }
        }

        .ph-events-list .tabs {
            text-align: center;
            margin: 50px;
        }

        .tab-link {
            background: #0D3C58;
            border-radius: 18px;
            font-style: normal;
            font-weight: 700;
            font-size: 25px;
            line-height: 36px;
            text-align: center;
            color: #FFFFFF;
            display: inline-block;
            padding: 10px 15px;
            margin-right: 15px;
        }

        .tab-parent {
            margin-top: 20px;
            margin-bottom: 100px;
        }

        .tab-block .tab-link {
            font-size: 14px;
        }

        .tab-link.active {
            background-color: #40bf4f !important;
            color: #fff;
        }

        .pane {
            display: none;
        }

        .pane.active {
            display: block;
            color: #000;
            text-align: center;
            max-width: 1280px;
            margin: 0 auto;
        }

        .pane.active p {
            font-weight: 500;
            font-style: Medium;
            font-size: 15px;
            line-height: 24px;
            letter-spacing: 0%;
            position: super;
            width: 470px;
            padding: 10px;
        }


        .events-bnr {
            height: 300px;
            padding: 50px 0px;
            display: flex;
            align-items: center;
            max-width: 100%;
            margin: 0 auto;
            background-image: url(images/webp/ph-events-top-banner.webp);
            background-position: 0px 0px;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 50px 0px;
        }

        .events-bnr h1 {
            font-style: normal;
            font-weight: 700;
            font-size: 42px;
            line-height: 60px;
            color: #FFFFFF;
        }

        .events-bnr h1 span {
            /*display: block;*/
        }

        .ph-events-list h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 141%;
            margin-bottom: 0px;
            letter-spacing: 0%;
            color: #0D3C58;
            width: 100%;
        }

       .card-line {
  position: relative;
  height: 2px;
  width: 85px;
  overflow: hidden;
  background: transparent;
  margin-top: 4px;
}

.card-line::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, #5ABCF9 0%, #6CEA7E 100%);
  animation: cardLineSlide 2s linear infinite;
}

@keyframes cardLineSlide {
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


        .ph-events-list h4 {
            font-family: "Montserrat";
            font-weight: 400;
            font-style: Regular;
            font-size: 10px;
            line-height: 20px;
            letter-spacing: 0%;

        }

        .ph-events-list .feat-desc-bx2 {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: end;
        }

        .ph-events-list button.read-more-btn {
            margin-top: 5px;
            border: none;
            background: transparent;
            margin-left: 0;
            padding-left: 0;
        }

        .ph-events-list .read-more-btn a {
            width: 110.12px;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 26px;
            display: flex;
            align-items: center;
            color: #FFFFFF;
            background: linear-gradient(90deg, #026D9D 0%, #6CEA7E 202.63%);
            padding: 10px;
            border-radius: 2px;
            background-size: 200% 100%;
            background-position: 0% 0%;
            transition: background-position 0.4s ease;
        }

        .ph-events-list .read-more-btn a:hover {
            background-position: 100% 0%;
            /* left to right */

        }

        .ph-trial-banner>.row {
            display: flex;
            align-items: center;
            justify-content: left;
            text-align: left;
            padding: 15px 20px;
        }

        .ph-trial-banner {
            background: #00ED85;
            width: 100%;
            margin: 30px 0px 60px;
        }

        .ph-trial-heading {
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 43px;
            color: #0D3C58;
        }

        .ph-trial-btn {
            width: 310px;
            font-style: normal;
            font-weight: 600;
            font-size: 25px;
            line-height: 36px;
            color: #000000;
            background: #FFFFFF;
            border-radius: 9px;
            padding: 9px;
            border: 1px solid white;
            margin-top: 10px;
        }

        .event-info {
            max-width: 100%;
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            align-items: center;
            justify-content: space-between;
        }

        .pagination-arrow img {
            width: 8px;
            margin-top: -3px;
        }

        .pagination-arrow.prev img {
            margin-right: 10px;
        }

        .pagination-arrow.next img {
            margin-left: 10px;
        }

        /* For flex-based .events-container */
        .events-banner-wrapper {
            flex: 0 0 100%;
            max-width: 100%;
        }

        /* If later you switch to CSS grid, also include: */
        @supports (display: grid) {
            .events-container {
                /* your grid definition */
            }

            .events-banner-wrapper {
                grid-column: 1 / -1;
                /* span all columns */
            }
        }


        @media (min-width: 320px) and (max-width: 767px) {
            .events-container {
                margin-right: 0px;
                margin-left: 0px;
            }

            .ph-events-list .tabs {
                margin: 10px 9px 20px;
            }

            .ph-trial-heading {
                text-align: center;
            }

            .tab-link {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .ph-trial-banner>.row {
                padding: 0;
                text-align: center;
                margin-right: -15px;
                margin-left: -15px;
            }

            .events-bnr h1 {
                padding: 0 20px;
                font-size: 30px;
                line-height: 1.4;
            }
        }

        /* section wrapper */
        .events-list-section {
            padding: 0px 0 60px;
        }

        /* top main tabs (Events / Roundtables) */
        .events-top-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 16px;
        }

        .events-top-tab {
            border: none;
            padding: 8px 32px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            background: #f3f7f9;
            color: #000000;
        }

        .events-top-tab:first-child {
            border-radius: 0px 0 0 19px;
        }

        .events-top-tab:last-child {
            border-radius: 0px 0 19px 0px;
        }

        .events-top-tab.active {
            background: linear-gradient(84.83deg, #026D9D -3.9%, #00ED85 185.59%);

            color: #ffffff;
        }

        /* “Past / Upcoming” pill tabs directly touching cards */
        .ph-events-list .tabs {
            margin: 0 auto;
            text-align: center;
        }

        .tab-parent {
            margin-top: 0;
            margin-bottom: 60px;
        }

        .tab-link {
            background: #ffffff;
            border-radius: 999px;
            border: 1px solid #126387;
            font-weight: 600;
            font-size: 14px;
            line-height: 1.4;
            padding: 6px 20px;
            margin: 0 6px;
            color: #126387;
        }

        .tab-link.active {
            background-color: #126387 !important;
            color: #ffffff;
        }

        /* cards container: 3‑column grid centered under tabs */
        .events-container {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
            margin-top: 20px;
        }

        /* single card body, reusing existing structure */
        .events .evnt-bx,
        .feat2-bx.evnt-bx {
            max-width: 100%;
            width: 100%;
            border-radius: 18px;
            border: none;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        /* header gradient already in images; keep radius tight */
        .feat-pic2 img {
            display: block;
            width: 100%;
        }

        /* card content */
        .ph-events-list .feat-desc-bx2 {
            padding: 16px 18px 18px;
            align-items: flex-start;
        }

        .ph-events-list h2 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .ph-events-list h4 {
            font-size: 13px;
        }

        /* Read more button smaller */
        .ph-events-list .read-more-btn a {
            font-size: 12px;
            padding: 6px 18px;
            /* border-radius: 999px; */
        }

        .event-label-sp {
            font-family: "Montserrat";
            font-weight: 600;
            font-style: "SemiBold";
            font-size: 10px;
            line-height: 20px;
            letter-spacing: 0%;

        }

        /* pagination dots remain same; center below cards */
        .pagination-container {
            margin-top: 18px;
        }

        .events-benchmark-banner {
            width: 100%;
            border-radius: 8px;
            padding: 14px 20px;
            background: linear-gradient(90deg, #073D56 0%, #6CEA7E 240.14%);
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #ffffff;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        .events-benchmark-text {
            max-width: 70%;
            text-align: left;
        }

        .events-benchmark-title {
            font-family: "Montserrat";
            font-weight: 700;
            font-style: Bold;
            font-size: 20px;
            line-height: 20px;
            letter-spacing: 0%;
            position: super;
            padding: 10px;
        }

        .events-benchmark-subtitle {
            font-size: 12px;
            margin: 0;
            opacity: 0.9;
        }

        /* pill button on right */
        .events-benchmark-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 22px;
            border-radius: 8px;
            background: #ffffff;
            color: #000000;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
        }

        /* responsive */
        @media (max-width: 768px) {
            .events-benchmark-banner {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .events-benchmark-text {
                max-width: 100%;
            }

            .events-benchmark-btn {
                align-self: stretch;
                text-align: center;
                justify-content: center;
            }
        }


        /* responsive breakpoints */
        @media (max-width: 992px) {
            .events-container {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .events-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="inner-pages events">

    <section class="events-hero">
        <div class="container-1360-wrp">
            <p class="events-kicker">ProHance Events</p>
            <div class="analyst-line"></div>
            <h1 class="events-hero-title">
                Connect, learn, and grow with us.
            </h1>
            <p class="events-hero-subtitle">
                Explore upcoming opportunities to connect with us in person or digitally at
                ProHance events and other events we're attending.
            </p>
        </div>
    </section>

    <section class="event-feature">
        <div class="container-1360-wrp event-feature-inner">
            <div class="event-feature-text">
                <p class="event-feature-label">Upcoming Event</p>
                <h2 class="event-feature-title">
                    Driving AI ROI in GBS: Unlocking the<br>
                    Next Frontier of Intelligent Operations
                </h2>

                <p class="event-feature-desc">
                    Join ProHance at <strong>Shared Services &amp; Outsourcing Week (SSOW) India 2026.</strong>
                </p>

                <a href="#" class="event-feature-btn">Meet Us at SSOW India 2026</a>
            </div>

            <div class="event-feature-media">
                <div class="event-feature-card">
                    <img src="images/about-us/eventimg.png" alt="SSOW India 2026" />
                    <div class="event-feature-overlay">
                        <div class="event-feature-box">
                            <span class="event-feature-main">SSOW India</span>
                            <span class="event-feature-year">2026</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="tab-parent ph-events-list">
        <div class="tabs">
            <a href="#upcomingEvents" class="tab-link active" onclick="switchTab('upcoming')">Upcoming Events</a>
            <a href="#pastEvents" class="tab-link" onclick="switchTab('past')">Past Events</a>
            <h2 style="margin-top: 20px;">Workforce Analytics and Productivity Events & Conferences</h2>
        </div>
        
    </div> -->

    <section class="events-list-section">
        <div class="container-1360-wrp">
            <div class="events-top-tabs">
                <button class="events-top-tab active">Events</button>
                <button class="events-top-tab">Roundtables</button>
            </div>

            <div class="tab-parent ph-events-list">
                <div class="tabs">
                    <a href="#pastEvents" class="tab-link active" onclick="switchTab('past')">Past</a>
                    <a href="#upcomingEvents" class="tab-link " onclick="switchTab('upcoming')">Upcoming </a>

                    <!-- <h2 style="margin-top: 20px;">Workforce Analytics and Productivity Events & Conferences</h2> -->
                </div>
                <div class="tab-block">
                    <!-- Upcoming Events -->
                    <section class="pane " id="upcomingEvents">
                        <h3 id="upcoming-header" style="display:none;">More Events in 2025</h3>
                        <div id="upcoming-events" class="events-container"></div>
                        <div id="upcoming-loader" class="loader"></div>
                        <div class="pagination-container" id="upcoming-pagination"></div>
                    </section>
                    <!-- Past Events -->
                    <section class="pane active" id="pastEvents">
                        <h3 id="past-header" style="display:none;">Past Events - Coming Soon</h3>
                        <div id="past-events" class="events-container"></div>
                        <div id="past-loader" class="loader"></div>
                        <div class="pagination-container" id="past-pagination"></div>
                    </section>
                </div>
            </div>
        </div>
    </section>








    <script>
        // const baseUrl = (() => {
        //     const path = "<?php echo $_SERVER['PHP_SELF']; ?>";
        //     if (path.includes('events')) {
        //         return "/events";
        //     }
        //     return path;
        // })();
        const baseUrl = "<?php echo BASE_URL; ?>/events.php";

        function getFormattedDateWithOrdinal(dateString) {
            const date = new Date(dateString);

            const day = date.getDate();
            const month = date.toLocaleString("default", { month: "long" });
            const year = date.getFullYear();

            const ordinal =
                day % 10 === 1 && day !== 11
                    ? "st"
                    : day % 10 === 2 && day !== 12
                        ? "nd"
                        : day % 10 === 3 && day !== 13
                            ? "rd"
                            : "th";

            return `${day}${ordinal} ${month}, ${year}`;
        }

        function fetchEvents(page = 1, type = "past") {
            const eventsContainer = document.getElementById(`${type}-events`);
            const paginationContainer = document.getElementById(`${type}-pagination`);
            const header = document.getElementById(`${type}-header`);
            const loader = document.getElementById(`${type}-loader`);

            // Show loader before fetching data
            loader.style.display = "block";
            eventsContainer.innerHTML = "";

            fetch(`${baseUrl}?ajax=true&type=${type}&page=${page}`)
                .then((response) => response.json())
                .then((data) => {
                    const events = data.events;
                    const totalPages = data.totalPages;

                    loader.style.display = "none";

                    // Build the events HTML
                    const eventsHtml = events
                        .map((event, index) => {
                            let eventHtml = `
                           
                                <div class="feat2-bx evnt-bx">
                                    <div class="feat-pic2">
                                        <img alt="${event.title}" class="img-fluid" src="<?php echo $base_url_img; ?>/${event.image}">
                                    </div>
                                    <div class="feat-desc-bx2">
                                        <h2 >${event.title}</h2>
                                        <span class="card-line"> </span>
                                        <div class="event-info">
                                            <h4><span class="event-label-sp">Date:</span> ${getFormattedDateWithOrdinal(event.event_start_date)}</h4>
                                            <h4><span class="event-label-sp">Venue:</span> ${event.venue}</h4>
                                          
                                        </div>
                                          <button class="read-more-btn">
                                                <a href="https://www.prohance.ai/events/${event.slug}">Read More</a>
                                            </button>
                                    </div>
                                </div>
                           `;

                            if (index === 5) {
                                const trialBanner = `
     <div class="events-banner-wrapper">
      <div class="events-benchmark-banner">
        <div class="events-benchmark-text">
          <h5 class="events-benchmark-title">
            Global Productivity Benchmarking Report 2023 | 2024 | H1’25
          </h5>
          <p class="events-benchmark-subtitle">
            Discover how your organization’s productivity compares with industry benchmarks.
          </p>
        </div>
        <a href="https://www.prohance.ai/benchmarking-report" class="events-benchmark-btn">
          Explore Benchmarking Report
        </a>
      </div>
    </div>`;
                                eventHtml += trialBanner;
                            }


                            return eventHtml;
                        })
                        .join("");

                    eventsContainer.innerHTML = eventsHtml;

                    // Display pagination
                    if (events.length === 0) {
                        header.style.display = "block";
                        paginationContainer.style.display = "none";
                    } else {
                        header.style.display = "none";
                        if (totalPages > 1) {
                            paginationContainer.style.display = "block";
                        } else {
                            paginationContainer.style.display = "none";
                        }

                        // Generate pagination with previous and next arrows
                        paginationContainer.innerHTML = `
                        <a href="#" class="pagination-arrow prev" data-page="${page - 1}" data-type="${type}" ${page === 1 ? "style='visibility:hidden;'" : ""}><img src="https://prohance.ai/images/prev-arrow.png" alt="prev arrow" /></a>
                        ${Array.from({ length: totalPages }, (_, i) => i + 1)
                                .map(
                                    (p) =>
                                        `<a href="#" class="pagination-link ${p === page ? "active" : ""
                                        }" data-page="${p}" data-type="${type}">${p}</a>`
                                )
                                .join("")}
                        <a href="#" class="pagination-arrow next" data-page="${page + 1}" data-type="${type}" ${page === totalPages ? "style='visibility:hidden;'" : ""
                            }><img src="https://prohance.ai/images/next-arrow.png" alt="next arrow" /></a>`;
                    }
                })
                .catch((error) => {
                    console.error("Error fetching events:", error);
                    loader.style.display = "none";
                });
        }

        document.addEventListener("click", function (e) {
            if (
                e.target.classList.contains("pagination-link") ||
                e.target.classList.contains("pagination-arrow")
            ) {
                e.preventDefault();

                const page = parseInt(e.target.dataset.page);
                const type = e.target.dataset.type;
                fetchEvents(page, type);
            }
        });

        function switchTab(type) {
            document.querySelectorAll(".pane").forEach((pane) => pane.classList.remove("active"));

            document.querySelector(`#${type === "upcoming" ? "upcomingEvents" : "pastEvents"}`).classList.add("active");

            document.querySelectorAll(".tab-link").forEach((link) => link.classList.remove("active"));

            document.querySelector(type === "upcoming" ? `a[href="#upcomingEvents"]` : `a[href="#pastEvents"]`).classList.add("active");

            fetchEvents(1, type);
        }

        document.addEventListener("DOMContentLoaded", () => {
            fetchEvents(1, "past");
            // fetchEvents(1, "upcoming");
        });




    </script>
 
    <!-- Bootstrap core JavaScript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://www.prohance.ai/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://www.prohance.ai/js/bootstrap.min.js"></script>
    <script src="https://www.prohance.ai/js/mainjs.js"></script>
    <?php include 'inc/footer-script.php'; ?>
</body>

</html>