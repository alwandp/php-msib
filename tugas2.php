<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center justify-content-md-between align-items-center">
        <div class="d-none d-md-block">
          <img src="assets/images/nf-computer.png" alt="logo nf computer" height="40">  
        </div>  
        <a href="tugas2.php" class=" text-dark text-decoration-none text-center">
          <span class="fs-4">Aplikasi Gaji</span>
        </a>
        <div class="d-none d-md-block">
          <img src="assets/images/logo-km.png" alt="logo kampus merdeka" height="40px">
        </div>
      </div>
    </header>

    <main class="py-5">
      <section>
        <div class="container">
          <!-- Form -->
          <h4 class="mb-3">Form Pegawai</h4>
          <form id="formPegawai" method="POST">
            <div class="mb-3">
              <label for="inputNama" class="form-label">Nama Pegawai</label>
              <input type="text" class="form-control" id="inputNama" name="nama">
            </div>
            <div class="mb-3">
              <label for="inputAgama" class="form-label">Agama</label>
              <select name="agama" id="inputAgama" class="form-select">
                <option value="">-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label d-block">Jabatan</label>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager">
                  <label class="form-check-label" for="manager">Manager</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten">
                  <label class="form-check-label" for="asisten">Asisten</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kepala Bagian">
                  <label class="form-check-label" for="kabag">Kepala Bagian</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff">
                  <label class="form-check-label" for="staff">Staff</label>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label d-block">Status</label>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah">
                  <label class="form-check-label" for="menikah">Menikah</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" id="belum" type="radio" name="status" value="Belum Menikah">
                  <label class="form-check-label" for="belum">Belum Menikah</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="inputJumlah" class="form-label">Jumlah Anak</label>
              <input type="text" class="form-control" id="inputJumlah" name="jumlahAnak">
            </div>
            <div class="mb-3">
              <button type="submit" name="simpan" class="btn btn-primary">
                Simpan
              </button>
            </div>
          </form>
          <?php 
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlahAnak = $_POST['jumlahAnak'];
            $tombol = $_POST['simpan'];

            switch ($jabatan) {
              case 'Manager': $gapok = 20000000; break;
              case 'Asisten': $gapok = 15000000; break;
              case 'Kepala Bagian': $gapok = 10000000; break;
              case 'Staff': $gapok = 4000000; break;
              default: $gapok = 0; break;
            }

            $tunjanganJabatan = $gapok * 0.2;

            if ($status == 'Menikah' && $jumlahAnak <= 2) $tunjanganKeluarga = $gapok * 0.05;
            else if ($status == 'Menikah' && $jumlahAnak >= 3 && $jumlahAnak <=5) $tunjanganKeluarga = $gapok * 0.1;
            else if ($status == 'Menikah' && $jumlahAnak > 5) $tunjanganKeluarga = $gapok * 0.15;
            else $tunjanganKeluarga = 0;

            $gajiKotor = $gapok + $tunjanganJabatan + $tunjanganKeluarga;
            $zakatProfesi = ($agama == 'Islam' && $gajiKotor >= 6000000) ? $gajiKotor * 0.025 : 0;
            $takeHomePay = $gajiKotor - $zakatProfesi;
            
            if (isset($tombol)) {
          ?>
          <!-- Tabel -->
          <div class="table-responsive my-3">
            <table class="table table-hover table-bordered align-middle caption-top">
              <caption>Tabel Pegawai</caption>
              <thead class="text-center">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Jumlah Anak</th>
                  <th scope="col">Gaji Pokok</th>
                  <th scope="col">Tunjangan Jabatan</th>
                  <th scope="col">Tunjangan Keluarga</th>
                  <th scope="col">Gaji Kotor</th>
                  <th scope="col">Zakat Profesi</th>
                  <th scope="col">Take Home Pay</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?= $nama; ?></td>
                  <td><?= $agama; ?></td>
                  <td><?= $jabatan; ?></td>
                  <td><?= $status; ?></td>
                  <td class="text-center"><?= $jumlahAnak; ?></td>
                  <td><?= 'Rp ',number_format($gapok, 2, ',', '.'); ?></td>
                  <td><?= 'Rp ',number_format($tunjanganJabatan, 2, ',', '.'); ?></td>
                  <td><?= 'Rp ',number_format($tunjanganKeluarga, 2, ',', '.');; ?></td>
                  <td><?= 'Rp ',number_format($gajiKotor, 2, ',', '.'); ?></td>
                  <td><?= 'Rp ',number_format($zakatProfesi, 2, ',', '.'); ?></td>
                  <td><?= 'Rp ',number_format($takeHomePay, 2, ',', '.'); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php } ?>
      </section>
    </main>
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">© 2022 Alwan Dwi Putra</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>