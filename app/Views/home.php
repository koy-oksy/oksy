<!DOCTYPE html>
<html lang="ua">

<?= view('head', $meta) ?>

<body>
  <?= view('menu') ?>


  <div class="site-section-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">

    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-sm-10 text-center">
          <h1><strong>CТВОРЕННЯ І РОЗРОБКА САЙТІВ</strong></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <h2 class="text-primary">Розробка сайтів</h2>
          <p>Звернувшись до Oksy, ви отримуєте якісні послуги із створення сайту на замовлення: збір вимог і обговорення, планування та структурування, дизайн,
            розробка, тестування, запуск та оптимізація, підтримка та обслуговування.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <img src="<?php echo base_url('assets/images/programming.jpg') ?>" alt="Image" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <h4 class="text-primary">Переваги замовлення сайту в Oksy:</h4>
            <h6><strong>Економія часу</strong></h6>
            <p>Замовлення сайту може допомогти вам зекономити час,
              оскільки вам не доведеться вчитися у веб-розробці та дизайні, щоб створити власний сайт.</p>
            <a href="<?php echo site_url('portfolio') ?>" target="_blank" class="btn btn-outline-primary">Портфоліо</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <h6 class=""><strong>Адаптацію до будь-якого хостингу.</strong></h6>
            <p>В Україні найчастіше використовують Хостінг Центр.
              Завдяки хмарним рішенням саме цей хостинг розподіляє навантаження на сервера хостингу завдяки чому всі сайти працюють швидко.
            </p>
            <p><a href="https://www.ukraine.com.ua/" target="_blank" class="btn btn-outline-primary">Сайт хостингу</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <h6 class=""><strong>Придатність для мобільних пристроїв</strong></h6>
            <p>Cайт, який добре працює на різних пристроях та з різними розмірами екрану. Це особливо важливо в наші дні,
              коли все більше людей використовують мобільні пристрої для доступу до Інтернету.
            </p>
            <a href="https://support.google.com/google-ads/answer/2472719?hl=uk" target="_blank" class="btn btn-outline-primary">Детальніше</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="post-entry-1 h-100">
            <h6 class=""><strong>Захист сайту</strong></h6>
            <p>Коли користувач взаємодіє зі сторінкою сайту, що використовує SSL, його браузер запитує сервер про SSL-сертифікат.
              Якщо сервер має дійсний SSL-сертифікат, то він передає його користувачеві, і браузер показує, що сторінка захищена.</p>
            <a href="https://www.ukraine.com.ua/uk/blog/seo-optimization/chto-takoe-https-i-zachem-on-nuzhen-kazhdomu-sajtu.html" target="_blank" class="btn btn-outline-primary">Використання https</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-primary py-5 cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-4 mb-md-0">
          <h2 class="mb-0 text-white">Досі думаєш?</h2>
          <p class="mb-0 opa-7">Замовляй безкоштовну консультацію, отримай надійний сайт!</p>
        </div>
        <div class="col-lg-5 text-md-right">
          <a href="tel:+38 (063) 786-25-04" class="btn btn-primary btn-white">Замовити консультацію</a>
        </div>
      </div>
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center mb-5">
          <div class="heading">
            <span class="caption">Feedback</span>
            <h2>Відгуки</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <h3 class="h5">Сайт з нуля</h3>
            <div>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star-o text-warning"></span>
            </div>
            <blockquote class="mb-4">
              <p>Замовив сайт по рекомендації друзів.
                Оксана добре знає свою справу, процес розробки сайту був цікавим для мене
                і я отримав саме що я хотів.
              </p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="<?php echo base_url('assets/images/person_1.jpg') ?>" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Дмитро</span>
                <span>Сайт оренди катамарана</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <h3 class="h5">Оновлення сайту</h3>
            <div>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
            </div>
            <blockquote class="mb-4">
              <p>Потрібно було оновити сайт повністю, звернулась до Oksy, сама підібрала потрібний дизайн.
                З тобою приємно і легко працювати</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="<?php echo base_url('assets/images/person_2.jpg') ?>" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Таня</span>
                <span>Сайт перекладів Запоріжжя</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <h3 class="h5">Website from scratch</h3>
            <div>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
            </div>
            <blockquote class="mb-4">
              <p>Reasonable prices for services, competence, desire to always come to the rescue.
                In a word, the best company that knows its business!</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="<?php echo base_url('assets/images/person_3.jpg') ?>" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Mark</span>
                <span>Website for drone</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?= view('footer') ?>

  </div>


</body>

</html>