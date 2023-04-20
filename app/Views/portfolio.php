<!DOCTYPE html>
<html lang="ua">

<?= view('head', $meta) ?>

<body>


  <?= view('menu') ?>

  <div class="site-section-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1><strong>Портфоліо</strong></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
          <img src="<?php echo base_url('assets/images/drone.jpg') ?>" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="<?php echo base_url('assets/images/sailing.jpg') ?>" alt="Image" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5 section-2-title">
        <div class="col-md-6">
        </div>
      </div>
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
              <a href="https://mirperevodoff.com.ua/" target="_blank">
                <img src="<?php echo base_url('assets/images/translate.jpg') ?>" alt="Image" class="img-fluid rounded"></a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="<?php echo base_url('assets/images/landinng.jpg') ?>" alt="Image" class="img-fluid rounded">
            </div>
          </div>
        </div>
      </div>
      <div class="site-section bg-light">
        <div class="container">
          <div class="row justify-content-center text-center mb-5 section-2-title">
            <div class="col-md-6">
            </div>
          </div>



          <?= view('footer') ?>
</body>

</html>