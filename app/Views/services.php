<!DOCTYPE html>
<html lang="ua">

<?= view('head', $meta) ?>

<body>


  <?= view('menu') ?>


  <div class="site-section-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-10 text-center">
          <h1><strong>Послуги</strong></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">

          <img src="<?php echo base_url('assets/images/vizytok.jpg') ?>" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-lg-4 mr-auto">
          <div class="heading mb-4">
            <h2>Сайт візитка</h2>
          </div>
          <p>Сайт-візитка - це невеликий сайт, який відображає основну інформацію про компанію, особу, проект чи послугу. Зазвичай такий сайт складається з кількох сторінок і має просту структуру.</p>
          <p>Сайт-візитка часто використовується для того, щоб дати короткий опис бізнесу чи проекту, залучити нових клієнтів та створити позитивне враження про компанію чи особу. Також він може містити контактну інформацію, щоб потенційні клієнти могли зв'язатися з вами.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="<?php echo base_url('assets/images/landing.jpg') ?>" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="heading mb-4">
            <h2>Landing Page</h2>
          </div>
          <p>Це веб-сторінка, на яку потрапляє користувач після кліку на рекламний банер або посилання в результатах пошукового запиту. Головна мета Landing Page - переконати користувача здійснити певну дію, таку як придбання товару або послуги, заповнення форми зворотного зв'язку, підписка на розсилку, завантаження файлу тощо.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-primary py-5 cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-4 mb-md-0">
          <h2 class="mb-0 text-white">Як я працюю?</h2>
          <p class="mb-0 opa-7">Працюю лише з найкращими!</p>
        </div>
        <div class="col-lg-5 text-md-right">
          <a href="tel:+38 (063) 786-25-04" class="btn btn-primary btn-white">Замовити консультацію</a>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>Зателефонуйте або заповніть форму для зв'язку і відправте – я обов'язково зв'яжусь з Вами.</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>Обговорюємо всі деталі проєкту, визначаємо формат нашої співпраці, можливості та цілі.</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>Обираємо дизайн. Вивчення сучасних тенденцій дизайну може допомогти вам визначитися.</p>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>Розробка сайту, на цьому етапі прошу повністю довіритись мені. Розробляю на фреймворці.</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>Наповнюю сторінки сайту інформацією. Роблю це швидко, правильно та ефективно.</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="testimonial-2">
            <p>
              Реєструю домен, купуємо і налаштовуємо хостинг, переношу сайт з комп'ютера в мережу Інтернет.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?= view('footer') ?>

</body>

</html>