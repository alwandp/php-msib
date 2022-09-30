<?php 
// array scalar
$m1 = ['nim'=>'011021901' , 'nama'=>'Mina', 'nilai'=>90];
$m2 = ['nim'=>'011021902' , 'nama'=>'Shin', 'nilai'=>95];
$m3 = ['nim'=>'011021903' , 'nama'=>'Wonyoung', 'nilai'=>60];
$m4 = ['nim'=>'011021904' , 'nama'=>'Dahyun', 'nilai'=>85];
$m5 = ['nim'=>'011021905' , 'nama'=>'Sana', 'nilai'=>80];
$m6 = ['nim'=>'011021906' , 'nama'=>'Ryujin', 'nilai'=>70];
$m7 = ['nim'=>'011021907' , 'nama'=>'Yeji', 'nilai'=>75];
$m8 = ['nim'=>'011021908' , 'nama'=>'Nayeon', 'nilai'=>35];
$m9 = ['nim'=>'011021909' , 'nama'=>'Lucas', 'nilai'=>50];
$m10 = ['nim'=>'011021910' , 'nama'=>'Arin', 'nilai'=>80];
// array asosiatif
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
// daftar aggregate nilai
$jumlah_mahasiswa = count($mahasiswa);
$ar_nilai = array_column($mahasiswa, 'nilai');
$nilai_max = max($ar_nilai);
$nilai_min = min($ar_nilai);
$nilai_rata2 = (array_sum($ar_nilai)) / $jumlah_mahasiswa;
$aggregate = [
  'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
  'Nilai Tertinggi'=>$nilai_max,
  'Nilai Terendah'=>$nilai_min,
  'Nilai Rata-rata'=>$nilai_rata2
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <a href="tugas3.php" class=" text-dark text-decoration-none text-center">
          <span class="fs-4">Daftar Nilai Mahasiswa</span>
        </a>
      </div>
    </header>

    <main>
      <div class="container py-5">
        <table class="table table-bordered">
          <thead class="table-dark text-center">
            <tr>
              <?php 
                // array judul
                $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
                foreach($ar_judul as $judul) {
              ?>
              <th><?= $judul ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody class="text-center table-light">
            <?php 
              $no = 1;
              foreach($mahasiswa as $m) {
                // minimal nilai 60 untuk lulus
                $keterangan = ($m['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                // grade
                if ($m['nilai'] >= 90 && $m['nilai'] <= 100) $grade = 'A';
                else if ($m['nilai'] >= 80 && $m['nilai'] <= 89) $grade = 'B';
                else if ($m['nilai'] >= 70 && $m['nilai'] <= 79) $grade = 'C';
                else if ($m['nilai'] >= 60 && $m['nilai'] <= 69) $grade = 'D';
                else if ($m['nilai'] >= 0 && $m['nilai'] <= 59) $grade = 'E';
                else $grade = 0;
                // predikat
                switch ($grade) {
                  case 'A': $predikat = 'Memuaskan'; break;
                  case 'B': $predikat = 'Bagus'; break;
                  case 'C': $predikat = 'Cukup'; break;
                  case 'D': $predikat = 'Kurang'; break;
                  case 'E': $predikat = 'Buruk'; break;
                  default: break;
                }
            ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $m['nim'] ?></td>
              <td><?= $m['nama'] ?></td>
              <td><?= $m['nilai'] ?></td>
              <td><?= $keterangan ?></td>
              <td><?= $grade ?></td>
              <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
          <tfoot class="table-dark">
            <?php 
              foreach($aggregate as $agg => $hasil) {
            ?>
            <tr>
              <th colspan="6"><?= $agg ?></th>
              <th><?= $hasil ?></th>
            </tr>
            <?php } ?>
          </tfoot>
        </table>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2022 Alwan Dwi Putra</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>