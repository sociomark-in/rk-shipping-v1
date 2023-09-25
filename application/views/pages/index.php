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
        <section class="banner-section">
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
                    <div class="col-xl-7 col-md-6 col-12">
                        <div class="media-content mb-5">
                            <div class="img-overlap">
                                <img class="shape" src="<?= base_url() ?>assets/media/images/about/shape.png" alt="">
                                <!-- <img class="img-front d-none d-md-block" src="<?= base_url() ?>assets/media/mockup/about/2.png" alt=""> -->
                                <img class="img-back" src="<?= base_url() ?>assets/media/images/about/profile_old.png" alt="">
                                <!-- <img class="img-back" src="<?= base_url() ?>assets/media/images/about/profile.jpg" alt=""> -->
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
                    <div class="col-xl-5 col-md-6 col-12">
                        <div class="text-content">
                            <div class="title">
                                <p class="section-pill">About Us</p>
                                <!-- <h2 class="section-title">About Us</h2> -->
                            </div>
                            <div class="desc">
                                <p>
                                    At <strong>Proficient Cargo Services India LLP</strong>, we're more than just a logistics company; we're your reliable partner for seamless international logistics solutions. Our mission is to serve the Indian industry and business community by offering a comprehensive suite of integrated shipping services. These include Container, Shipping, Forwarding, Transportation, Warehousing, Air Freight, Consolidation, Door to Door Delivery Services, Heavy Lift Transportation, and Special Project Handling. With our advanced facilities and a dedicated team of professionals, we deliver services with the highest level of professionalism.
                                </p>
                                <p>
                                    Its a Small World - ask our clients. We offer unmatched door to door services from all over the world.
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
                                        <a href="<?= base_url() ?>assets/brochure_2023.pdf" title="Proficient Brochure <?= date("Y") ?>" class="btn btn-lg btn-primary"><i class="fa-regular fa-file-pdf me-2"></i>Read Our Brochure</a>
                                    </div>
                                    <div class="col-md-auto col-12 widget-signature text-center">
                                        <div class="d-flex gap-3">
                                            <div class="profile">
                                                <img src="<?= base_url() ?>assets/media/images/about/profile_thumb.jpg" alt="Image">
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
                    <p class="section-pill m-auto mb-3">Our Comprehensive Services</p>
                    <h2 class="section-title">Our Services For You</h2>
                    <p>
                        We take pride in offering personalized services that cater to the unique needs of each customer. Our dedicated team is specially trained to understand your specific requirements and deliver services precisely as you desire. Our approach is characterized by friendliness, and our commitment to prompt customer service sets us apart in the industry.
                    </p>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-9 col-md-10 col-12">
                        <div class="services swiper">
                            <div class="swiper-wrapper">
                                <!-- Sea / Air Fright -->
                                <div class="swiper-slide">
                                    <div class="card widget-service-card freight-service">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="h-100 card-body">
                                            <h4 class="card-title">Sea / Air Fright</h4>
                                            <p class="card-text">
                                                Direct & Consolidated airfreight/sea freight services world-wide.Preferential bookings covering door to door delivery, time sensitive shipments, dangerous goods and out of gauge cargo. Coordination with Lines and tracking of consignments for freight movement control till final delivery to enable customer to plan distribution and disbursement logistics of goods even before arrival. <br>
                                                Preferential bookings covering door to door delivery, time sensitive shipments, dangerous goods, over dimension cargo
                                            </p>
                                            <!-- <div class="card-footer text-body-secondary">
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Custom Clearance -->
                                <div class="swiper-slide">
                                    <div class="card widget-service-card freight-service">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="h-100 card-body">
                                            <h4 class="card-title">Custom Clearance</h4>
                                            <p class="card-text">
                                                Our Mumbai team is an expert in handling even the most complex Indian customs procedures, guaranteeing seamless transactions for our clients. Our range of air freight, forwarding, shipping, and transportation solutions come at a reasonable cost, all while holding the necessary government licenses. With our industry experience, we add significant value to our clients' supply-chain operations.
                                            </p>
                                            <!-- <div class="card-footer text-body-secondary">
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Warehousing -->
                                <div class="swiper-slide">
                                    <div class="card widget-service-card freight-service">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="h-100 card-body">
                                            <h4 class="card-title">Warehousing</h4>
                                            <p class="card-text">
                                                Exclusive warehousing contracts with warehouses located inside mumbai and outside mumbai enable us to provide our clients with safe / better rent to our clients.We also can arrange for goods to be stored in Bonded warehouse within and outside mumbai limits.
                                            </p>
                                            <!-- <div class="card-footer text-body-secondary">
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Transport Planning -->
                                <div class="swiper-slide">
                                    <div class="card widget-service-card freight-service">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="h-100 card-body">
                                            <h4 class="card-title">Transport Planning</h4>
                                            <p class="card-text">
                                                Inland surface transportation, Full & Part Container loads loaded at your door or from our premises. <br>
                                                Packing, Crating, Marking, Survey and inspection
                                            </p>
                                            <!-- <div class="card-footer text-body-secondary">
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper services-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="widget-service-card card">
                                <div class="card-body">
                                    <h3>One Stop Shop</h3>
                                    <p>For all your supply chain needs</p>
                                </div>
                            </div>
                        </div>
                        <?php for ($i = 0; $i < count($brands); $i++) : ?>
                            <div class="swiper-slide">
                                <div class="widget-service-card card">
                                    <div class="card-body">
                                        <h3>Service <?= $i ?></h3>
                                        <p>Service <?= $i ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
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
                                        <h3><span class="counterPlugin">5000</span>+</h3>
                                        <h4>Project Complete</h4>
                                        <p>
                                            Conveniently impact front-end niches via maintainable.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 widget-counter-element">
                                        <h3><span class="counterPlugin">300</span>+</h3>
                                        <h4>Project Complete</h4>
                                        <p>
                                            Conveniently impact front-end niches via maintainable.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 widget-counter-element">
                                        <h3><span class="counterPlugin">600</span>+</h3>
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
        <section class="gandhi-quote">
            <div class="container">
                <div class="row g-0 m-0 justify-content-center mb-3">
                    <div class="col-xl-6 col-lg-8 col-10">
                        <img src="<?= base_url('assets/media/images/gandhi/') ?>quote-01.png" alt="Gandhi Quote 01">
                    </div>
                </div>
                <!-- <div class="row g-0 m-0 justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-10">
                        <div class="row m-0 justify-content-center align-items-center">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-4 col-6">
                                <div class="thumbnail-rounded mb-3">
                                    <img src="<?= base_url('assets/media/images/gandhi/') ?>Mahatma-Gandhi.jpg" alt="Gandhi Quote 01">
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-7 col-12">
                                <p>
                                    A customer is the most important visitor on our premises. he is not dependant on us, we are dependant on him. He is not an interruption of our work, he is a part of it. We are not doing him a favor by serving him. He is doing us a favor by giving us the opportunity to do so.
                                </p>
                                <p><strong>- Mahatma Gandhi</strong></p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <section id="team">
            <div class="container-fluid p-0">
                <div class="row m-0 justify-content-end">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                        <div class="title mx-3">
                            <p class="section-pill mb-3">Team Members</p>
                            <h2 class="section-title">Our Proficient Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6 col-12">
                        <div class="row g-0 justify-content-center">
                            <div class="col-lg-9 col-md-10 col-sm-10 col-12">
                                <div class="widget-testimonial-card card mb-3">
                                    <div class="card-header mb-3">
                                        <div class="row align-items-end g-2">
                                            <div class="col-md-auto col-12">
                                                <h3>Vinay Krishnan</h3>
                                            </div>
                                            <div class="col-md-auto col-12">
                                                <p>(Designation)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-content">
                                            <p>
                                                <strong>Vinay Krishnan, Managing Partner</strong> of <?= APP_NAME ?>, is a seasoned professional in the logistics sector. His journey in logistics began after completing his management studies at the renowned NMIMS Mumbai, and he has since amassed over three decades of practical experience in this dynamic industry. His career is characterized by an unwavering passion for logistics, unwavering dedication and an unwavering commitment to delivering genuine value to clients.
                                            </p>
                                            <p>
                                                Vinay firmly believes that quality is not an automatic outcome but rather the product of a highly dedicated team working diligently behind the scenes. He upholds a core principle of personal ownership and accountability, stating, '<i>I firmly believe in taking complete responsibility for every aspect I am involved in. If your name is associated with it, ensure it counts.</i>' This unwavering commitment to excellence has been instilled throughout his team. Vinay Krishnan has successfully imparted his passion for excellence to his team, emphasizing the importance of alignment between personal dedication and the team's shared objectives. As he aptly puts it,
                                                <br> '<i>When your team aligns with your passion, delivering value to your customers becomes a certainty.</i>'
                                            </p>
                                            <p>
                                                The company's tagline, 'Logistics Delivered Better', epitomizes its confidence in its capabilities, driven by the unwavering personal commitment to excellence exhibited by the entire team."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-10 col-sm-10 col-12">
                                <div class="widget-testimonial-card card mb-3">
                                    <div class="card-header mb-3">
                                        <div class="row align-items-end g-2">
                                            <div class="col-md-auto col-12">
                                                <h3>Anita</h3>
                                            </div>
                                            <div class="col-md-auto col-12">
                                                <p>(Designation)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src="" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="text-content">
                                            <p>
                                                In the dynamic realm of logistics, characterized by tight margins and an imperative for meticulous precision, Anita emerges as a paragon of logical thinking and professionalism. With a career spanning over two decades in this field, Anita has cultivated a reputation as an unflappable and methodical expert. Armed with a Science degree, she commenced her professional journey as an intern in the Courier Industry, later ascending to the helm of logistics management within a prominent Textile manufacturing company.
                                            </p>
                                            <p>
                                                Anita's approach is defined by a commitment to logical problem-solving and methodical planning. Whether the challenge involves optimizing production schedules, streamlining workflows, or ensuring timely deliveries, Anita's meticulous planning and execution leave no room for error. Her dedication to precision and professionalism consistently yields superior results in the intricate landscape of logistics."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-12">
                        <div class="teams-desc mb-3 bg-primary-translucent">
                            <h5>Beyond the Professional Realm:</h5>
                            <p>
                                Both Vinay and Anita are dedicated advocates for causes close to their hearts—supporting education for underprivileged communities and championing the prevention of cruelty to animals. They generously volunteer their time and resources at local animal shelters and rescue organizations, providing a nurturing environment for animals in need. Additionally, they actively contribute to educational programs designed to uplift underprivileged individuals and support the vital work carried out by animal shelters, showcasing their deep commitment to creating a better world for all
                            </p>
                        </div>
                        <div class="swiper teams-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php for ($i = 0; $i < 12; $i++) : ?>
                                    <div class="swiper-slide bg-white">
                                        <div class="slide-content">
                                            <div class="media-content">
                                                <img src="<?= base_url() ?>assets/media/mockup/service/1.png" class="w-100" alt="...">
                                                Slide <?= $i ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor ?>
                            </div>
                        </div>
                    </div>
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
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9 col-11">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <img src="<?= base_url() ?>assets/media/images/testimonial/fffai.jpg" alt="FFFAI" class="w-100">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <img src="<?= base_url() ?>assets/media/images/testimonial/bchaa.jpg" alt="BCHAA" class="w-100">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <img src="<?= base_url() ?>assets/media/images/testimonial/fiata.jpg" alt="FIATA" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="text-content">
                <div class="contact-section">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-lg-6 col-12">
                                <div class="contact-footer">
                                    <div class="container">
                                        <div class="row m-0">
                                            <div class="col-12">
                                                <div class="title mb-3">
                                                    <p class="section-pill mb-3">Contact Us</p>
                                                    <h2 class="section-title">Reach Out to Us</h2>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-12">
                                                <div class="cf-item">
                                                    <div class="content">
                                                        <div class="row m-0">
                                                            <div class="col-lg-auto col-12">
                                                                <div class="icon">
                                                                    <img src="<?= base_url('assets/media/images/icon/map-marker.png') ?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md col-12">
                                                                <div class="title">
                                                                    <h3>office Address</h3>
                                                                </div>
                                                                <div class="desc">
                                                                    <p>
                                                                        CONCORDE, Office Nr 901-903, 9th Floor, Plot Nr 66A , <br>
                                                                        Sector 11, CBD Belapur , Navi Mumbai 400614.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-12">
                                                <div class="cf-item">
                                                    <div class="content">
                                                        <div class="row m-0">
                                                            <div class="col-md-auto col-12">
                                                                <div class="icon">
                                                                    <img src="<?= base_url('assets/media/images/icon/phone.png') ?>" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md col-12">
                                                                <div class="title">
                                                                    <h3>Contact us</h3>
                                                                </div>
                                                                <div class="desc">
                                                                    <p>
                                                                        <a href="mailto:info@proficient.bz">info@proficient.bz</a>
                                                                        <br>
                                                                        <a href="tel:+912227560939">+91 22 27560939</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card widget-glassy-card">
                                    <div class="card-header">
                                        <h4>Get a Quote</h4>
                                    </div>
                                    <div class="card-body widget-glassy-form">
                                        <?= form_open('') ?>
                                        <div class="row m-0">
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Your Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Your Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Your Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Your Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="">Your Email Address</label>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-2">submit</button>
                                                <button type="reset" class="btn btn-white-outline me-2">Clear</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer> -->
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
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 10,
                grid: {
                    rows: 1,
                },
                navigation: {
                    nextEl: '.services .swiper-button-next',
                    prevEl: '.services .swiper-button-prev',
                },

                breakpoints: {
                    824: {
                        slidesPerView: 2,
                        grid: {
                            rows: 3,
                        },
                        spaceBetween: 20,
                    },
                }
            }),
            new Swiper('.teams-slider', {
                loop: true,
                effect: 'fade',
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                }
            }),
            new Swiper('.services-slider', {
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false
                },
                slidesPerView: 1,
                spaceBetween: 10,
                // navigation: {
                //     nextEl: '.testimonial-slider .swiper-button-next',
                //     prevEl: '.testimonial-slider .swiper-button-prev',
                // },
                breakpoints: {
                    824: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1400: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    }
                }
            }),
            new Swiper('.testimonial-slider', {
                loop: true,
                centeredSlides: true,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false
                },
                slidesPerView: 2,
                spaceBetween: 10,
                // navigation: {
                //     nextEl: '.testimonial-slider .swiper-button-next',
                //     prevEl: '.testimonial-slider .swiper-button-prev',
                // },
                breakpoints: {
                    824: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                    1400: {
                        slidesPerView: 6,
                        spaceBetween: 40,
                    }
                }
            })
        ];
    </script>

    <script src="<?= base_url("/assets/js/counter.min.js") ?>"></script>
    <script>
        $(".counterPlugin").each(function() {
            $(this).counter({
                countFrom: 0
            });

            /* $("#counter").counter({
                autoStart: true, // true/false, default: true
                duration: 5000, // milliseconds, default: 1500
                countFrom: 10, // start counting at this number, default: 0
                countTo: 30, // count to this number, default: 0
                runOnce: true, // only run the counter once, default: false
                placeholder: "?", // replace the number with this before counting,
                // most useful with autoStart: false. default: undefined
                easing: "easeOutCubic", // see http://gsgd.co.uk/sandbox/jquery/easing
                // for all available effects, see visual examples:
                // http://easings.net
                // default: "easeOutQuad"
                onStart: function() {}, // callback on start of the counting
                onComplete: function() {}, // callback on completion of the counting
                numberFormatter: // function used to format the displayed numbers.
                    function(number) {
                        return "$ " + number;
                    }
            }); */
        });
    </script>
</body>

</html>