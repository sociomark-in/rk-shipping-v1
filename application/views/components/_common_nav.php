<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url("") ?>">
            <img src="<?= base_url("assets/media/logo.png") ?>" alt="R K Shipping Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#about-us") ?>">About&nbsp;Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#services") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#why-us") ?>">Why&nbsp;Proficient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#team") ?>">Proficient&nbsp;Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#testimonials") ?>">Our&nbsp;Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("#contact-us") ?>">Contact&nbsp;Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link <?= (base_url("#contact-us") == current_url()) ? "active" : "" ?>" <?= (base_url("#contact-us") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("#contact-us") ?>">Contact&nbsp;Us</a>
                </li> -->

            </ul>
        </div>
    </div>
</nav>