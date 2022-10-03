<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$l1 = new Lingkaran(10);
$p1 = new PersegiPanjang(4, 3);
$s1 = new Segitiga(3, 4);
$l2 = new Lingkaran(5);
$p2 = new PersegiPanjang(4, 4);
$s2 = new Segitiga(5, 7);

$kumpulan_bidang = [$l1, $p1, $s1, $l2, $p2, $s2];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <a href="tugas4.php" class=" text-dark text-decoration-none text-center">
          <span class="fs-4">Kumpulan Bidang</span>
        </a>
      </div>
    </header>

    <main>
      <div class="container py-5">
        <div class="table-responsive">
          <table class="table table-secondary table-bordered table-striped">
            <thead class="table-dark text-center">
              <tr>
                <?php 
                  $ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
                  foreach ($ar_judul as $judul) {
                ?>
                <th><?= $judul ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody class="align-middle">
              <?php 
                $no = 1;
                foreach ($kumpulan_bidang as $bidang) {
                  $sisiMiring = sqrt(pow($bidang->alas, 2) + pow($bidang->tinggi, 2));
                  switch ($bidang->namaBidang()) {
                    case 'Lingkaran': $keterangan = 'Jari-jari: '.$bidang->jari2; break;
                    case 'Persegi Panjang': $keterangan = 'Panjang: '.$bidang->panjang.'<br/>Lebar: '.$bidang->lebar; break;
                    case 'Segitiga Siku-siku': $keterangan = 'Alas: '.$bidang->alas.'<br/>Tinggi: '.$bidang->tinggi.'<br/>Sisi Miring: '.round($sisiMiring, 2); break;
                  }
              ?>
              <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $bidang->namaBidang() ?></td>
                <td><?= $keterangan ?></td>
                <td><?= round($bidang->luasBidang(), 2) ?></td>
                <td><?= round($bidang->kelilingBidang(), 2) ?></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

