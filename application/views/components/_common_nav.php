
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url("") ?>">
            <img src="<?= base_url("assets/media/logo.png") ?>" alt="R K Shipping Logo">R&nbsp;K&nbsp;Shipping
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("") == current_url()) ? "active" : "" ?>" <?= (base_url("") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("about") == current_url()) ? "active" : "" ?>" <?= (base_url("about") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("about") ?>">About&nbsp;Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("services") == current_url()) ? "active" : "" ?>" <?= (base_url("services") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("services") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("contact-us") == current_url()) ? "active" : "" ?>" <?= (base_url("contact-us") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("contact-us") ?>">Contact&nbsp;Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (base_url("track-your-consignment") == current_url()) ? "active" : "" ?>" <?= (base_url("track-your-consignment") == current_url()) ? 'aria-current="page"' : "" ?> href="<?= base_url("track-your-consignment") ?>">Cargo&nbsp;Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Report</a>
                </li>
            </ul>
        </div>
    </div>
</nav>