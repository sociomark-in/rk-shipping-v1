<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('components/_head') ?>
    <?php $this->load->view('components/_common_css') ?>
    <title><?= $page['title'] ?></title>
</head>

<body>
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
                                        <h2>Lorem ipsum dolor sit amet.</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit porro soluta facilis. Maiores, nostrum tenetur? Veniam ea quaerat perferendis deserunt!
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
                                        <h2>Lorem ipsum dolor sit amet.</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit porro soluta facilis. Maiores, nostrum tenetur? Veniam ea quaerat perferendis deserunt!
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
                                        <h2>Lorem ipsum dolor sit amet.</h2>
                                    </div>
                                    <div class="desc">
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit porro soluta facilis. Maiores, nostrum tenetur? Veniam ea quaerat perferendis deserunt!
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
                                <p class="section-pill">Lorem, ipsum dolor.</p>
                                <h2 class="section-title">About Us</h2>
                            </div>
                            <div class="desc">
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae tempora reprehenderit numquam nulla aliquam excepturi, ipsa eaque, aliquid repellat neque doloribus, quas sequi impedit quae consequatur voluptatum doloremque. Ab ratione perspiciatis eligendi possimus quo vel explicabo culpa placeat totam ullam. Possimus sequi vero doloribus sapiente impedit rerum similique vel dicta!
                                </p>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae tempora reprehenderit numquam nulla aliquam excepturi, ipsa eaque, aliquid repellat neque doloribus, quas sequi impedit quae consequatur voluptatum doloremque. Ab ratione perspiciatis eligendi possimus quo vel explicabo culpa placeat totam ullam. Possimus sequi vero doloribus sapiente impedit rerum similique vel dicta!
                                </p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, minus quos. At quidem maxime minima quae nulla nesciunt iure, illo similique quibusdam quisquam commodi, ut porro harum sit esse repudiandae.
                                </p>
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
                    <p class="section-pill m-auto mb-3">Lorem, ipsum dolor.</p>
                    <h2 class="section-title">Our Services For You</h2>
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
        <section id="why-us">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-5 col-md-6">
                        <div class="text-content">
                            <div class="title">
                                <p class="section-pill pill-white mb-3">Why Choose Us</p>
                                <h2 class="section-title">Lorem, ipsum dolor.</h2>
                            </div>
                            <div class="desc">
                                <ul class="widget-pointers_with_icon">
                                    <li class="point d-flex gap-3">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </li>
                                    <li class="point d-flex gap-3">
                                        <div class="icon">
                                            <img src="" alt="">
                                        </div>
                                        <div class="text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">

                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="title text-center">
                    <p class="section-pill m-auto mb-3">Lorem, ipsum dolor.</p>
                    <h2 class="section-title">Our Services For You</h2>
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
        <section id="services">
            <div class="container">
                <div class="title text-center">
                    <p class="section-pill m-auto mb-3">Lorem, ipsum dolor.</p>
                    <h2 class="section-title">Our Services For You</h2>
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
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            }),
            new Swiper('.services', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                }
            })
        ];
    </script>
</body>

</html>