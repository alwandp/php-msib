<?php
require 'Pegawai.php';
// membuat objek
$p1 = new Pegawai('001', 'Mina', 'Manager', 'Islam', 'Menikah');
$p2 = new Pegawai('002', 'Wonyoung', 'Asisten', 'Kristen', 'Belum Menikah');
$p3 = new Pegawai('003', 'Sana', 'Kepala Bagian', 'Katholik', 'Menikah');
$p4 = new Pegawai('004', 'Dahyun', 'Staff', 'Budha', 'Belum Menikah');
$p5 = new Pegawai('005', 'Yeji', 'Staff', 'Islam', 'Menikah');
$p6 = new Pegawai('006', 'Nayeon', 'Kepala Bagian', 'Konghucu', 'Menikah');

$pegawai = [$p1, $p2, $p3, $p4, $p5, $p6];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <a href="tugas4.php" class=" text-dark text-decoration-none text-center">
          <span class="fs-4">Daftar Gaji Pegawai</span>
        </a>
      </div>
    </header>

    <main>
      <div class="container py-5">
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead class="table-dark text-center">
              <tr>
                <?php
                  $ar_judul = ['No', 'NIP', 'Nama', 'Jabatan', 'Agama', 'Status', 'Gaji Pokok', 'Tunjangan Jabatan', 'Tunjangan Keluarga', 'Gaji Kotor', 'Zakat Profesi', 'Take Home Pay'];
                  foreach($ar_judul as $judul) {
                ?>
                <th><?= $judul ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach($pegawai as $peg) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <?= $peg->mencetak() ?>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2022 Alwan Dwi Putra</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>