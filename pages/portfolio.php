<?php
  $pfolio1 = ['link'=>'https://hungrybelly.netlify.app/', 'nama'=>'restaurant-apps', 'desc'=>'Dicoding Front End Expert Submission', 'lang'=>'JavaScript'];
  $pfolio2 = ['link'=>'https://github.com/alwandp/open-music-API', 'nama'=>'open-music-API', 'desc'=>'Dicoding Fundamental Back End Submission', 'lang'=>'JavaScript'];
  $pfolio3 = ['link'=>'https://github.com/alwandp/covid-api-express', 'nama'=>'php-nfcomputer', 'desc'=>'Covid API with Express.js', 'lang'=>'JavaScript'];
  $pfolio4 = ['link'=>'https://alwandp.github.io/siwikode/', 'nama'=>'siwikode', 'desc'=>'Siwikode responsive web design', 'lang'=>'Bootstrap, JavaScript'];
  $pfolio5 = ['link'=>'https://melity.vercel.app/', 'nama'=>'melity', 'desc'=>'Melity responsive web design', 'lang'=>'CSS, JavaScript'];
  $pfolio6 = ['link'=>'https://bookshelf-app-alwandp.vercel.app/', 'nama'=>'bookshelf-app', 'desc'=>'Bookshelf web app with JavaScript', 'lang'=>'JavaScript'];
  
  $portfolios = [$pfolio1, $pfolio2, $pfolio3, $pfolio4, $pfolio5, $pfolio6];
?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Portfolio</h2>
    </div>

    <div class="row">
      <?php
        foreach ($portfolios as $pf) {
      ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrapper">
          <div class="portfolio-info">
            <a href="<?= $pf['link'] ?>" target="_blank"><h4><?= $pf['nama'] ?></h4></a>
            <p><?= $pf['desc'] ?></p>
            <span><i class="bi bi-code-slash"></i> <?= $pf['lang'] ?></span>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</section><!-- End Portfolio Section -->
