<?php 
  $task1 = ['link'=>'https://github.com/alwandp/msib3-nfcomputer', 'nama'=>'msib3-nfcomputer', 'desc'=>'Tasks from MSIB Batch 3', 'lang'=>'HTML, CSS'];
  $task2 = ['link'=>'https://github.com/alwandp/javascript', 'nama'=>'javascript-nfcomputer', 'desc'=>'JavaScript tasks from MSIB Batch 3', 'lang'=>'JavaScript'];
  $task3 = ['link'=>'https://github.com/alwandp/php-msib', 'nama'=>'php-nfcomputer', 'desc'=>'PHP tasks from MSIB Batch 3', 'lang'=>'PHP'];

  $tasks = [$task1, $task2, $task3];
?>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Tasks</h2>
    </div>

    <div class="row">
      <?php
        foreach ($tasks as $task) {
      ?>
      <div class="col-xl-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrapper">
          <div class="portfolio-info">
            <a href="<?= $task['link'] ?>" target="_blank"><h4><?= $task['nama'] ?></h4></a>
            <p><?= $task['desc'] ?></p>
            <span><i class="bi bi-code-slash"></i> <?= $task['lang'] ?></span>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</section><!-- End Portfolio Section -->
