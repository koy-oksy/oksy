<!DOCTYPE html>
<html lang="ua">

<?= view('head', $meta) ?>

<body>


  <?= view('menu') ?>


  <div class="site-section-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1><strong>Контакти</strong></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5">
          <?php
          $attributes = array('method' => 'post', 'id' => 'form-submit');
          echo form_open('cont', $attributes);
          ?>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Ім'я" required />
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text" class="form-control" id="emailadress" name="emailadress" placeholder="Email" required />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6 mr-auto">
              <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Відправити" />
            </div>
          </div>
          </form>
        </div>

        <div class="col-lg-4 ml-auto">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Контактна інформація</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Адреса:</span>
                <span>Львів, Україна</span>
              </li>
              <li class="d-block mb-3"><span class="d-block text-black">Телефон:</span><span>+3 806 3786 25 04</span></li>
              <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>ksykravchyk@gmail.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?= view('footer') ?>
</body>

</html>