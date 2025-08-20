<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('logos.png'); ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #007084;
            --secondary-color: #637b84;
            --accent-color: #007084;
            --text-dark: #1f2937;
            --text-muted: #6b7280;
            --text-light: #9ca3af;
            --bg-light: #f9fafb;
            --bg-white: #ffffff;
            --border-light: #e5e7eb;
            --shadow-light: rgba(0, 0, 0, 0.05);
            --shadow-medium: rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            backdrop-filter: blur(10px);
            box-shadow: none;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 20px var(--shadow-medium);
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .navbar.scrolled .navbar-brand {
            color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            transition: color 0.3s ease;
        }

        .navbar.scrolled .navbar-nav .nav-link {
            color: var(--text-dark) !important;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        .navbar.scrolled .navbar-toggler {
            border-color: var(--border-light);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar.scrolled .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 0;
            margin-top: -5rem;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff" fill-opacity="0.05" points="0,1000 1000,0 1000,1000"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-text {
            padding: 2rem 0;
        }

        .hero-subtitle {
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero-illustration {
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-illustration img {
            max-width: 400px;
            max-height: 350px;
            width: 100%;
            height: auto;
        }

        .hero-wave {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            z-index: 3;
        }

        .hero-wave svg {
            width: 100%;
            height: auto;
            display: block;
        }

        .btn-hero {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: var(--primary-color);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 112, 132, 0.2);
        }

        .btn-hero:hover {
            background: linear-gradient(135deg, #007084 0%, #637b84 100%);
            color: white;
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(0, 112, 132, 0.3);
        }

        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
        }

        .about-section .section-title::after {
            left: 0;
            transform: none;
        }

        .about-content {
            padding: 2rem 0;
        }

        .about-subtitle {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .about-description {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .about-credit {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .about-credit a {
            color: var(--primary-color);
            transition: color 0.3s ease;
        }

        .about-credit a:hover {
            color: var(--secondary-color);
        }

        .about-illustration {
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-illustration img {
            max-width: 400px;
            max-height: 350px;
            width: 100%;
            height: auto;
        }

        .service-card {
            background: var(--bg-white);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px var(--shadow-medium);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 1.5rem;
        }

        .about-section {
            background: var(--bg-light);
        }

        .vision-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            position: relative;
        }

        .vision-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff" fill-opacity="0.03" points="1000,0 0,1000 0,0"/></svg>');
            background-size: cover;
        }

        .vision-content {
            position: relative;
            z-index: 2;
        }

        .footer {
            background: var(--primary-color);
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-brand img {
            height: 60px;
            margin-right: 1rem;
        }

        .footer-brand h5 {
            margin: 0;
            font-weight: 600;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .footer-social a {
            color: white;
            font-size: 1.25rem;
            transition: opacity 0.3s ease;
        }

        .footer-social a:hover {
            opacity: 0.8;
        }

        .footer-section h6 {
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a,
        .footer-section ul li span {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .btn-primary {
            background: var(--secondary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }

        .vision-illustration img {
            max-width: 400px;
            max-height: 350px;
            width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 60px;
            }

            .section-padding {
                padding: 60px 0;
            }
        }

        @media (max-width: 991.98px) {
            .hero-section {
                min-height: auto;
                padding: 80px 0;
            }

            .hero-text {
                text-align: left;
                margin-bottom: 1rem;
            }

            .hero-illustration {
                padding: 1rem;
            }

            .hero-illustration img {
                max-width: 300px;
                max-height: 250px;
            }

            .about-content {
                text-align: left;
                margin-bottom: 1rem;
            }

            .about-illustration {
                padding: 1rem;
            }

            .about-illustration img {
                max-width: 300px;
                max-height: 250px;
            }

            .vision-illustration img {
                max-width: 300px;
                max-height: 250px;
            }
        }

        @media (max-width: 767.98px) {
            .hero-section {
                padding: 60px 0;
            }

            .hero-text {
                text-align: center;
                margin-bottom: 2rem;
            }

            .about-content {
                text-align: center;
                margin-bottom: 2rem;
            }

            .vision-content {
                text-align: center;
                margin-bottom: 2rem;
            }

            .footer {
                padding: 2rem 0 1rem;
            }

            .footer-brand {
                justify-content: center;
                text-align: center;
                flex-direction: column;
                margin-bottom: 2rem;
            }

            .footer-brand img {
                margin-right: 0;
                margin-bottom: 1rem;
            }

            .footer-social {
                justify-content: center;
                margin-bottom: 2rem;
            }

            .footer-section {
                text-align: center;
                margin-bottom: 2rem;
            }

            .footer-section:last-child {
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('logos.png'); ?>" alt="<?php echo $company_name; ?>" height="65" class="me-2">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vision">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6 col-md-6 hero-content">
                    <div class="hero-text">
                        <!-- <p class="hero-subtitle text-white-50 mb-3">WHAT BUSINESS ARE YOU?</p> -->
                        <h1 class="display-3 fw-bold mb-4"><?php echo $company_name; ?></h1>
                        <p class="lead mb-2"><?php echo $tagline; ?></p>
                        <p class="mb-4"><?php echo $focus; ?></p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#about" class="btn btn-hero btn-lg px-4 py-3">
                                <i class="fas fa-info-circle me-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="hero-illustration">
                        <img src="assets/undraw_private-data_7v0o.svg" alt="Data Privacy Illustration" class="w-100 h-auto">
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative SVG Wave -->
        <div class="hero-wave">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                    </g>
                </g>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h2 class="section-title mb-4">About Us</h2>
                        <p class="about-subtitle mb-4">Who We Are</p>
                        <p class="about-description mb-4">
                            Tumikila Talents Solutions is a dynamic HR agency based in Lusaka, Zambia, specializing in
                            talent outsourcing and comprehensive employee management services. We partner with
                            businesses to provide skilled and reliable personnel, while handling all employee-related
                            matters—from recruitment and onboarding to performance management and compliance.
                        </p>
                        <p class="about-description">
                            With a focus on efficiency, integrity, and professionalism, we help companies reduce their
                            HR burden so they can focus on what they do best—growing their business.
                        </p>
                        <!-- <p class="about-credit mt-4">Images from: <a href="https://undraw.co" target="_blank" class="text-decoration-none">undraw.co</a></p> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-illustration">
                        <img src="assets/undraw_team-spirit_18vw.svg" alt="Team Spirit Illustration" class="w-100 h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <h2 class="section-title text-center">Our Services</h2>
            <div class="row">
                <?php
                $service_icons = [
                    'fas fa-user-tie',
                    'fas fa-search',
                    'fas fa-calculator',
                    'fas fa-handshake',
                    'fas fa-gavel',
                    'fas fa-chart-line'
                ];

                $service_descriptions = [
                    'Employee Outsourcing' => 'Comprehensive workforce solutions where we handle all aspects of employee management, from recruitment to payroll, allowing you to focus on your core business operations.',
                    'Recruitment' => 'Strategic talent acquisition services including job posting, candidate screening, interviews, and placement to find the perfect fit for your organization.',
                    'Payroll Management' => 'Complete payroll processing including salary calculations, tax deductions, benefits administration, and compliance with local labor laws and regulations.',
                    'HR Consulting' => 'Expert guidance on HR policies, employee relations, performance management, and organizational development to optimize your workforce.',
                    'Legal Compliance' => 'Ensuring your business adheres to all labor laws, employment regulations, and industry standards to minimize legal risks and maintain compliance.',
                    'Performance Management' => 'Systematic approach to employee development including goal setting, performance reviews, feedback systems, and career progression planning.'
                ];

                foreach ($services as $index => $service): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="<?php echo $service_icons[$index]; ?>"></i>
                            </div>
                            <h5 class="mb-3"><?php echo $service; ?></h5>
                            <p style="color: var(--text-muted);"><?php echo $service_descriptions[$service]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section id="vision" class="vision-section section-padding" style="position: relative;">
        <!-- Decorative SVG Wave -->
        <div class="vision-wave" style="position: absolute; top: -1px; left: 0; width: 100%; z-index: 3; transform: rotate(180deg);">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                        <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-lg-1 order-2">
                    <div class="vision-content">
                        <h2 class="section-title text-white mb-4">Our Vision</h2>
                        <div class="card bg-transparent border-light">
                            <div class="card-body">
                                <blockquote class="blockquote text-white">
                                    <p class="fs-5 mb-4"><?php echo $vision; ?></p>
                                </blockquote>
                                <!-- <p class="vision-credit mt-4 text-white-50">Images from: <a href="https://undraw.co" target="_blank" class="text-decoration-none text-white-50">undraw.co</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="vision-illustration text-center">
                        <img src="<?php echo base_url('assets/undraw_connected-world_anke.svg'); ?>" alt="Connected World" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Contact Us</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h5>Address</h5>
                                <p style="color: var(--text-muted);"><?php echo $location; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h5>Phone</h5>
                                <p style="color: var(--text-muted);"><?php echo $phone; ?></p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <div class="service-icon mx-auto">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h5>Email</h5>
                                <p style="color: var(--text-muted);"><?php echo $email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="footer-brand">
                        <img src="<?php echo base_url('logos.png'); ?>" alt="<?php echo $company_name; ?>">
                        <h5><?php echo $company_name; ?></h5>
                    </div>
                    <p class="mb-3">Your trusted partner for HR and talent outsourcing solutions in Zambia.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-section">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#vision">Vision</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-section">
                        <h6>Services</h6>
                        <ul>
                            <li><span>Employee Outsourcing</span></li>
                            <li><span>Recruitment</span></li>
                            <li><span>HR Administration</span></li>
                            <li><span>Compliance</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!-- <p class="mb-0">Built with <i class="fas fa-heart text-danger"></i> using CodeIgniter & Bootstrap</p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Smooth Scrolling -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>