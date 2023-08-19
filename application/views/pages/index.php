<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= $page['title'] ?></title>
</head>

<body>
    <?php $this->load->view('components/_scrollto') ?>
    <header>
        <?php $this->load->view('components/_common_nav') ?>
    </header>
    <main>
        <section id="banner-section">
            <!-- Slider main container -->
            <div class="swiper banner">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="row h-100 align-items-center">
                                <div class="col-lg-6 col-10">
                                    <div class="title">
                                        <h2>Logistics Delivered Better</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Twenty plus years in this business does gives us bragging rights to say we can do it better and ofcourse faster!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="row h-100 align-items-center">
                                <div class="col-lg-6 col-10">
                                    <div class="title">
                                        <h2>Professional Logistics</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            You are in the safe hands. Our professional staff ensures precise documentation on-time submissions leading to on-time deliveries.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="row h-100 align-items-center">
                                <div class="col-lg-6 col-10">
                                    <div class="title">
                                        <h2>Logistics is a Team Sport</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Global partners, close pool of vendors, seamless teamwork to deliver tailor-made door-to-door solutions, Accelerate your shipments or have it just in time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="row h-100 align-items-center">
                                <div class="col-lg-6 col-10">
                                    <div class="title">
                                        <h2>Customer-focused Logistics</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            We exist because we create value for our customers!
                                        </p>
                                        <p>
                                            Our customer-focused approach guarantees quality service offering significant cost and time saving enabling businesses to cross the finish line first!
                                        </p>
                                        <p>
                                            We win when you - <b>Our Customer</b> wins!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>
        <section id="about-us">
            <div class="container">
                <div class="row m-0">
                    <div class="col-xl-6 col-md-6">
                        <div class="media-content mb-5">
                            <div class="img-overlap">
                                <img class="shape" src="<?= base_url() ?>assets/media/images/about/shape.png" alt="">
                                <img class="img-front d-none d-md-block" src="<?= base_url() ?>assets/media/mockup/about/2.png" alt="">
                                <img class="img-back" src="<?= base_url() ?>assets/media/mockup/about/1.png" alt="">
                            </div>
                            <div class="img-text">
                                <div class="card widget-card-01">
                                    <div class="card-body">
                                        <h3>40</h3>
                                        <p>Years Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-5 col-md-6">
                        <div class="text-content">
                            <div class="title">
                                <p class="section-pill">About Us</p>
                                <!-- <h2 class="section-title">About Us</h2> -->
                            </div>
                            <div class="desc">
                                <p>
                                    Proficient Services was established to provide the Indian industry and business community with integrated shipping related services ranging from Container, Shipping, Forwarding, Transportation, Warehousing, Air Freight, Consolidation, Door to Door Delivery Services, Heavy Lift Transportation and Special Project Handling etc. We are fully geared with facilities and manpower to provide services to our client with a high standard of professionalism. Our combined existing networks and experience in the Air Freighting, Forwarding, Shipping, Transportation and warehousing gives us the edge over our competitors to become a one stop Shipping and Air Freighting agency catering effectively to the complex needs of our clients.
                                </p>
                                <div class="read-more collapsed" aria-controlled-by="expand-btn">
                                    <p>
                                        Proficient Services was established to provide the Indian industry and business community with integrated shipping related services ranging from Container, Shipping, Forwarding, Transportation, Warehousing, Air Freighting, Consolidation, Door to Door Delivery Services, Heavy Lift Transportation and Special Project Handling etc. We are fully geared with facilities and manpower to provide services to our client with a high standard of professionalism. Our combined existing networks and experience in the Air Freighting, Forwarding, Shipping, Transportation and warehousing gives us the edge over our competitors to become a one stop Shipping and Air Freighting agency catering effectively to the complex needs of our clients.
                                    </p>

                                    <p>
                                        'IT'S A SMALL WORLD' Ask our clients
                                    </p>
                                    <p>
                                        Our association with established agents worldwide enhance our services Internationally. As a result we are able to co-ordinate, plan, arrange and control the timely shipment of your materials, equipments and project cargos from various worldwide sources to various construction sites, supply base and other locations that you may assign.
                                    </p>
                                    <p>
                                        We hold all the required government licenses for custom clearance and operate a small fleet of our vehicle for local collection and deliveries.
                                    </p>
                                </div>
                            </div>
                            <div class="cta py-3">
                                <div class="persona row g-0 m-0 justify-content-between">
                                    <div class="col-md-auto col-12">
                                        <a href="" class="btn btn-lg btn-primary">About More</a>
                                    </div>
                                    <div class="col-md-auto col-12 widget-signature text-center">
                                        <div class="d-flex gap-3">
                                            <div class="profile">
                                                <img src="<?= base_url() ?>assets/media/mockup/about/4.png" alt="Image">
                                            </div>
                                            <div class="">
                                                <img class="mb-2" src="<?= base_url() ?>assets/media/images/about/signature.png" alt="Signature of the Owner">
                                                <div class="position">CEO of the Comapny</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="title text-center">
                    <p class="section-pill m-auto mb-3">Our Services</p>
                    <h2 class="section-title">Our Services For You</h2>
                    <p>Quickly optimize cooperative models for long-term high-impact ROI. Dynamically drive innovative e-commerce and distributed paradigms.</p>
                </div>
                <div class="swiper services">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php for ($i = 0; $i < 12; $i++) : ?>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="card widget-card-02 h-100">
                                        <div class="media-content">
                                            <img src="<?= base_url() ?>assets/media/images/service/tab4.jpg" class="w-100" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <div class="icon">
                                                <img src="" alt="">
                                            </div>
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit soluta asperiores expedita provident distinctio.
                                            </p>
                                            <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </section>
        <section id="why-us">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12">
                        <div class="text-content">
                            <div class="title">
                                <p class="section-pill pill-white mb-3">Why Choose Us</p>
                                <h2 class="section-title">Why Choose Us?</h2>
                            </div>
                            <div class="desc">
                                <ul class="widget-pointers_with_icon row m-0">
                                    <li class="point d-flex gap-3 col-md-6 col-12">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/media/images/wcu/') ?>icon-1.png" alt="">
                                        </div>
                                        <div class="text">
                                            Collaborative Customer Relationships
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3 col-md-6 col-12">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/media/images/wcu/') ?>icon-1.png" alt="">
                                        </div>
                                        <div class="text">
                                            Optimized Network to Save You Money
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3 col-md-6 col-12">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/media/images/wcu/') ?>icon-1.png" alt="">
                                        </div>
                                        <div class="text">
                                            Proven Industry Expertise
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3 col-md-6 col-12">
                                        <div class="icon">
                                            <img src="<?= base_url('assets/media/images/wcu/') ?>icon-1.png" alt="">
                                        </div>
                                        <div class="text">
                                            Flexible Transportation Solutions
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row m-0 justify-content-center g-0">
                            <div class="col-lg-10 col-12">
                                <div class="widget-counter row m-0">
                                    <div class="col-lg-4 col-md-6 col-12 widget-counter-element">
                                        <h3><span>5000</span>+</h3>
                                        <h4>Project Complete</h4>
                                        <p>
                                            Conveniently impact front-end niches via maintainable.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 widget-counter-element">
                                        <h3><span>5000</span>+</h3>
                                        <h4>Project Complete</h4>
                                        <p>
                                            Conveniently impact front-end niches via maintainable.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 widget-counter-element">
                                        <h3><span>5000</span>+</h3>
                                        <h4>Project Complete</h4>
                                        <p>
                                            Conveniently impact front-end niches via maintainable.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team">
            <div class="container">
                <div class="title text-center">
                    <p class="section-pill m-auto mb-3">Team Members</p>
                    <h2 class="section-title">Our Professional Team</h2>
                </div>
                <div class="swiper services">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php for ($i = 0; $i < 12; $i++) : ?>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="card widget-card-03 h-100">
                                        <div class="media-content">
                                            <img src="<?= base_url() ?>assets/media/mockup/service/1.png" class="w-100" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <div class="icon">
                                                <img src="" alt="">
                                            </div>
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit soluta asperiores expedita provident distinctio.
                                            </p>
                                            <div class="card-footer text-body-secondary">
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </section>
        <section id="testimonials">
            <div class="container">
                <div class="title text-center mb-3">
                    <p class="section-pill m-auto mb-3">Happy Clients</p>
                    <h2 class="section-title">Trusted by our 365,000 Clients</h2>
                    <p>
                        Dramatically enhance interactive metrics for reliable services. Proactively unleash fully researched e-commerce.
                    </p>
                </div>
                <div class="swiper testimonial-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php for ($i = 0; $i < 12; $i++) : ?>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="testimonial-item">
                                        <div class="media-content">
                                            <img src="<?= base_url() ?>assets/media/images/partner/aacargo.jpg" class="w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>
        <section id="contact-us">
            <div class="videowrapper">
                <video id="myVideomob" class="res-video" muted loop autoplay poster="<?= base_url('assets/media/images/') ?>posters/video-poster-img.jpg">
                    <source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/mp4">
                    <source src="<?= base_url('assets/media/images/') ?>video/My-Video2.mp4" type="video/webm">
                </video>
                <div class="vidbuttons">
                    <button type="button" class="play playpausebtn" style="display: none;"></button>
                    <button type="button" class="pause playpausebtn" style="display: block;"></button>
                </div>
            </div>
            <div class="text-content"></div>
        </section>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
    <script>
        const swiper = [
            new Swiper('.banner', {
                loop: true,
                navigation: {
                    nextEl: '.banner .swiper-button-next',
                    prevEl: '.banner .swiper-button-prev',
                },
            }),
            new Swiper('.services', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.services .swiper-button-next',
                    prevEl: '.services .swiper-button-prev',
                },
                breakpoints: {
                    824: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            }),
            new Swiper('.testimonial-slider', {
                loop: true,
                slidesPerView: 2,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.testimonial-slider .swiper-button-next',
                    prevEl: '.testimonial-slider .swiper-button-prev',
                },
                breakpoints: {
                    824: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 7,
                        spaceBetween: 30,
                    },
                    1400: {
                        slidesPerView: 8,
                        spaceBetween: 40,
                    }
                }
            })
        ];
    </script>
</body>

</html>