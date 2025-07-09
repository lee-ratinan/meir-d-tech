<!DOCTYPE html>
<html lang="th">
<head>
    <?php
    $meta_title   = ('blog-view' == $slug ? $title : lang('Theme.pages.' . $slug)) . ' | ' . lang('Theme.website-name');
    $company_logo = base_url('img/logo.png');
    $favicon_file = base_url('img/favicon.png');
    $meta_image   = ($post['media']['media_details']['sizes']['full']['source_url'] ?? $company_logo);
    ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $meta_title ?></title>
    <meta name="description" content="<?= ($meta_description ?? lang('Seo.' . $slug . '.description')) ?>">
    <meta name="keywords" content="<?= ($meta_keywords ?? lang('Seo.' . $slug . '.keywords')) ?>">
    <meta name="author" content="<?= lang('Theme.website-name') ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= $meta_title ?>">
    <meta property="og:description" content="<?= ($meta_description ?? lang('Seo.' . $slug . '.description')) ?>">
    <meta property="og:image" content="<?= $meta_image ?>">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:type" content="<?= (in_array($slug, ['blog-view', 'blog']) ? 'article' : 'website') ?>">
    <!-- Favicons -->
    <link href="<?= $favicon_file ?>" rel="icon">
    <link href="<?= $favicon_file ?>" rel="apple-touch-icon">
    <link rel="canonical" href="<?= current_url() ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Noto+Serif+Thai:wght@100..900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="<?= base_url('/strategy-theme/css/main.css') ?>" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Strategy
    * Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
    * Updated: Jun 06 2025 with Bootstrap v5.3.6
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <?php if ('contact-us' == $slug) : ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "ContactPage",
                "name": "ติดต่อเรา - Meir D-Tech",
                "url": "https://meirdtech.com/contact",
                "mainEntity": {
                    "@type": "Organization",
                    "name": "Meir D-Tech Co., Ltd.",
                    "url": "https://meirdtech.com",
                    "logo": "https://meirdtech.com/img/logo.png",
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "+66-#######",
                        "email": "#######",
                        "contactType": "customer service",
                        "areaServed": "TH",
                        "availableLanguage": ["Thai", "English"]
                    },
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "#######",
                        "addressLocality": "#######",
                        "postalCode": "#####",
                        "addressCountry": "TH"
                    }
                }
            }
        </script>
    <?php endif; ?>
</head>
<body>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="<?= $company_logo ?>" alt="<?= lang('Theme.website-name') ?>">
            <h1 class="sitename"><?= lang('Theme.website-name') ?></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a <?= ('home' == $slug ? 'class="active"' : '') ?> href="<?= base_url() ?>"><?= lang('Theme.pages.home') ?></a></li>
                <li><a <?= ('about-us' == $slug ? 'class="active"' : '') ?> href="<?= base_url('about-us') ?>"><?= lang('Theme.pages.about-us') ?></a></li>
                <li><a <?= ('services' == $slug ? 'class="active"' : '') ?> href="<?= base_url('services') ?>"><?= lang('Theme.pages.services') ?></a></li>
                <li><a <?= ('products' == $slug ? 'class="active"' : '') ?> href="<?= base_url('products') ?>"><?= lang('Theme.pages.products') ?></a></li>
                <li><a <?= ('blog' == $slug ? 'class="active"' : '') ?> href="<?= base_url('blog') ?>"><?= lang('Theme.pages.blog') ?></a></li>
                <li><a <?= ('contact-us' == $slug ? 'class="active"' : '') ?> href="<?= base_url('contact-us') ?>"><?= lang('Theme.pages.contact-us') ?></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none fa-solid fa-bars"></i>
        </nav>
    </div>
</header>
<main class="main">
    <?= $this->renderSection('content') ?>
</main>
<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
                    <span class="sitename"><img src="<?= $company_logo ?>" alt="<?= lang('Theme.website-name') ?>" style="height:1em"> <?= lang('Theme.website-name') ?></span>
                </a>
                <p><?= lang('Theme.footer-paragraph') ?></p>
                <div class="social-links d-flex mt-4">
                    <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-line"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 footer-links">
                <h4><?= lang('Theme.footer-links') ?></h4>
                <ul>
                    <li><a href="<?= base_url() ?>"><?= lang('Theme.pages.home') ?></a></li>
                    <li><a href="<?= base_url('about-us') ?>"><?= lang('Theme.pages.about-us') ?></a></li>
                    <li><a href="<?= base_url('services') ?>"><?= lang('Theme.pages.services') ?></a></li>
                    <li><a href="<?= base_url('products') ?>"><?= lang('Theme.pages.products') ?></a></li>
                    <li><a href="<?= base_url('blog') ?>"><?= lang('Theme.pages.blog') ?></a></li>
                    <li><a href="<?= base_url('contact-us') ?>"><?= lang('Theme.pages.contact-us') ?></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-6 footer-links"></div>
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start"></div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>
            &copy; <?= date('Y') ?> | สงวนลิขสิทธิ์ | <?= lang('Theme.company-name') ?>
        </p>
    </div>
</footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-circle-up"></i></a>
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('/vendor/php-email-form/validate.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/js/glightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<!-- Main JS File -->
<script src="<?= base_url('/strategy-theme/js/main.js') ?>"></script>
</body>
</html>