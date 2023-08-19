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
    <div class="row m-0 justify-content-center">
        <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-12">
            <?= form_open('api/track/consignment') ?>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Track Consignment:</label>
                <input type="text" name="cons_id" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="radio" name="shipper" value="DHL" class="form-check-input" checked>
                <label class="form-check-label" for="exampleCheck1">DHL</label>
            </div>
            <div class="mb-3 form-check">
                <input type="radio" name="shipper" value="UPS" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1">UPS</label>
            </div>
            <div class="mb-3 form-check">
                <input type="radio" name="shipper" value="TNT" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1">TNT</label>
            </div>
            <div class="mb-3 form-check">
                <input type="radio" name="shipper" value="DBS" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1">DBS</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </main>
    <footer>
        <?php $this->load->view('components/_common_footer') ?>
    </footer>
    <?php $this->load->view('components/_common_js') ?>
</body>

</html>