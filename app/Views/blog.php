<!DOCTYPE html>
<html lang="ua">

<?= view('head', $meta) ?>



<body>


  <?= view('menu') ?>


  <div class="site-section-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1><strong>Blog Posts</strong></h1>
        </div>
      </div>
    </div>
  </div>




  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_1.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">

              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_2.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_3.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_1.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_2.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <a href="single.html" class="thumbnail-link">
              <img src="<?php echo base_url('assets/images/img_3.jpg') ?>" alt="Image" class="img-fluid">
            </a>
            <div class="post-entry-1-contents">
              <h2><a href="single.html">Microsoft Azure Synapse for Developers</a></h2>
              <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-5">
          <div class="custom-pagination">
            <a href="#">1</a>
            <span>2</span>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?= view('footer') ?>

</body>

</html>