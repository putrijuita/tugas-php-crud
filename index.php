<?php include 'crud.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seravina Nuryanti Juita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-md">
        <a class="navbar-brand" href="#">Pemograman PHP</a>
      </div>
    </nav>
    
    <div class="container">
        <!-- Content here -->
        <h2>CRUD DAFTAR KUESIONER</h2>
      
        <!-- Button Tambah Data -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
          Tambah Data
        </button>
        
        <!-- Modal Tambah Data-->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <form method="post">
                      <div class="modal-body">
                        
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"><br>
                        <input type="text" name="tanggallahir" class="form-control" placeholder="Tempat Tanggal Lahir"><br>
                        <select class="form-select" name="jeniskelamin" aria-label="Default select example"><br>
                          <option selected>Jenis Kelamin</option>
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>
                        </select><br>
                        <input type="number" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan NIK"><br>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="tambahdata" value="Tambah Data">
                      </div>
                </form>
            </div>
          </div>
        </div>
      
        <!-- Modal Ubah Data-->
        <?php foreach ($AmbilData as $data):?>
            <div class="modal fade" id="<?= $data['ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                    <form method="post">
                          <div class="modal-body">
                            <input type="text" name="id" value="<?= $data['ID']?>" class="form-control" placeholder="ID" hidden>
                            <input type="text" name="nama" value="<?= $data['NamaLengkap']?>" class="form-control" placeholder="Nama Lengkap"><br>
                            <input type="text" name="tanggallahir" value="<?= $data['TempatTanggalLahir']?>" class="form-control" placeholder="Tempat Tanggal Lahir"><br>
                            <select class="form-select" name="jeniskelamin" aria-label="Default select example"><br>
                              <option selected><?= $data['JenisKelamin']?></option>
                              <option value="Pria">Pria</option>
                              <option value="Wanita">Wanita</option>
                            </select><br>
                            <input type="number" name="nik" value="<?= $data['NIK']?>" class="form-control" placeholder="Nomor Induk Kependudukan NIK"><br>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" name="ubahdata" value="Ubah Data">
                          </div>
                    </form>
                </div>
              </div>
            </div>
        <?php endforeach;?>
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Tempat Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Nomor Induk Kependudukan NIK</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              
                <?php foreach ($AmbilData as $data):?>
                
                    <tr>
                      <td><?= $data['NamaLengkap']?></td>
                      <td><?= $data['TempatTanggalLahir']?></td>
                      <td><?= $data['JenisKelamin']?></td>
                      <td><?= $data['NIK']?></td>
                      <td>
                          <form method="post">
                            <!-- Button Ubah Data -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $data['ID']?>">
                              Ubah Data
                            </button>
                        
                            <input type="hidden" name="id" value="<?= $data['ID']?>">
                            <input type="submit" class="btn btn-primary" name="hapus" value="Hapus Data">
                        </form>
                      </td>
                    </tr>
                    
                <?php endforeach;?>
                
          </tbody>
        </table>
        
    </div>
       
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>