<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url()."asset/CustomCSSJS/ModalJavascript.js"?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()."asset/CustomCSSJS/HeaderStyle.css"; ?>">
    <link rel="stylesheet" href="<?php echo base_url()."asset/CustomCSSJS/BodyCustomStyle.css"; ?>">
    <link rel="stylesheet" href="<?php echo base_url()."asset/FA/fontawesome/css/all.css" ?>">
    <title>Reimbursement Management System</title>
  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarHeader">
      <div class="container-fluid">
        <a class="navbar-brand ms-2" id="logoColor" href="#">KRMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapseContent"
        aria-controls="navbarCollapseContent" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapseContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="#"><i class="far fa-user"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {Role}, <?php echo $this->session->userdata('username_karyawan'); ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-key me-2"></i>Ubah Password</a></li>
                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/KaryawanController/logout" ?>"><i class="fas fa-sign-out-alt me-2"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Body-->
    <div class="container-fluid ms-auto me-auto" id="bodyContent">
      <h1 class="h3" id="HeaderDaftarReimbursement">Daftar Reimbursement</h1>
      <!--Button Upper-->
      <div class="d-flex" id="buttonContentUpper">
        <button type="button" class="btn rounded btn-outline-primary me-2 mb-2 shadow" name="button" data-bs-toggle="modal" data-bs-target="#reimbursementModal"><i class="fas fa-plus me-2"></i>Buat Reimbursement</button>
        <form class="col-md-3 me-2" action="" method="post" id="">
          <div class="">
            <input type="text" name="" class="form-control" value="" placeholder="&#xf002; Cari ID Reimbursement, nama pembelian">
          </div>
        </form>
        <button type="button" class="btn btn-outline-primary dropdown-toggle shadow mb-2 rounded" name="button" data-bs-toggle="dropdown"><i class="fas fa-filter me-2"></i>Filter</button>
        <ul class="dropdown-menu ms-auto">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="kategori-tab" data-bs-toggle="tab" data-bs-target="#kategoriTab" type="button" role="tab" aria-controls="kategori" aria-selected="true">Kategori</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="nominal-tab" data-bs-toggle="tab" data-bs-target="#nominalTab" type="button" role="tab" aria-controls="nominal" aria-selected="false">Nominal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#statusTab" type="button" role="tab" aria-controls="status" aria-selected="false">Status</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active ms-2 mt-2" id="kategoriTab" role="tabpanel" aria-labelledby="home-tab">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Elektronik" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Elektronik
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pulsa" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Pulsa
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Paket Data" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Paket Data
                </label>
              </div>
            </div>
            <div class="tab-pane fade ms-2 mt-2" id="nominalTab" role="tabpanel" aria-labelledby="profile-tab">
              <div class="container">
                <div class="mb-3">
                  <label for="batasBawahNominal" class="col-sm-2 col-form-label">Dari</label>
                  <div class="col-sm">
                    <input type="number" name="" value="" class="form-control" id="batasBawahNominal" placeholder="Rp 20,000">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="batasAtasNominal" class="col-sm-2 col-form-label">Hingga</label>
                  <div class="col-sm">
                    <input type="number" name="" value="" class="form-control" id="batasAtasNominal" placeholder="Rp 2,000,000">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade ms-2 mt-2" id="statusTab" role="tabpanel" aria-labelledby="contact-tab">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Menunggu Verifikasi" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Menunggu Verifikasi
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Pending" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Pending
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Valid" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Valid
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Tidak Valid" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Tidak Valid
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Selesai" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Selesai
                </label>
              </div>
            </div>
          </div>
          <div class="d-flex">

          </div>
          <li><hr class="dropdown-divider"></li>
          <!--Button Bawah Filter-->
          <div class="d-flex">
            <button type="button" class="btn btn-outline-primary shadow ms-2 me-5 mb-2 rounded" name="button" id="btnHapusFilter">HAPUS FILTER</button>
            <button type="button" class="btn btn-outline-primary ms-auto ms-5 me-2 shadow mb-2 rounded" name="button"></i>BATAL</button>
            <button type="button" class="btn btn-outline-primary me-2 shadow mb-2 rounded" name="button">TERAPKAN</button>
          </div>
        </ul>
        <button type="button" class="btn rounded dropdown-toggle btn-outline-primary ms-auto me-2 shadow mb-2 rounded" name="button" data-bs-toggle="dropdown">Urut Berdasarkan</button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="#"><i class="fas fa-info me-2"></i>Status</a>
          </li>
          <li>
            <a class="dropdown-item" href="#"><i class="fa fa-list-alt me-2"></i>Kategori</a>
          </li>
        </ul>
        <button type="button" class="btn rounded btn-outline-primary dropdown-toggle me-2 shadow mb-2 rounded" id="btnDropdown" name="button" data-bs-toggle="dropdown"><i class="far fa-calendar me-2"></i></i>Rentang Waktu</button>
      </div>
      <!--List-->
      <div class="container-fluid" id="listContent">
        <table class="table table-hover table-custom mt-5">
          <thead>

          </thead>
        </table>
      </div>
      <!--Modal-->
      <form action="<?php echo base_url()."index.php/KaryawanController/createReimbursement";?>" method="post">
        <div class="modal fade" id="reimbursementModal">
          <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-1">
              <div class="modal-header" id="modalHeader">
                <h5 class="modal-title ms-3">Buat Reimbursement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="d-flex">
                  <div class="container">
                    <div class="mb-3">
                      <label for="inputNamaReimbursement" class="col-sm-2 col-form-label">Nama Reimbursement</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="NamaReimbursement" placeholder="Masukkan nama reimbursement">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputDeskripsiReimbursement" class="col-sm-2 col-form-label">Deskripsi Reimbursement</label>
                      <div class="col-sm">
                        <textarea name="" rows="6" class="form-control" id="DeskripsiReimbursement" placeholder="Isi deskripsi reimbursement"></textarea>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputTanggalPembelian" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                      <div class="col-sm">
                        <input type="date" name="" value="" class="form-control" id="TanggalPengajuan" placeholder="Masukkan tanggal">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputKategoriPengajuan" class="col-sm-2 col-form-label">Kategori Reimbursement</label>
                      <div class="col-sm">
                        <select class="form-select" aria-label="Default select example" name="KategoriReimbursement">
                          <option value="Makanan">Makanan</option>
                          <option value="Kuota Internet">Kuota Internet</option>
                          <option value="Inventaris">Inventaris</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="mb-3">
                      <label for="inputNominalPembelian" class="col-sm-2 col-form-label">Nominal Pembelian</label>
                      <div class="col-sm">
                        <input type="text" name="" value="" class="form-control" id="NominalPembelian" placeholder="Masukkan nominal pembelian">
                      </div>
                    </div>
                    <div class="mb-3" id="inputFotoCustom">
                      <label for="formFile" class="col-sm-2 col-form-label">Upload Bukti</label>
                      <div class="col-sm">
                        <input class="form-control" type="file" id="formFilePhoto1" placeholder="Upload struk">
                      </div>
                    </div>
                    <div class="mb-3" id="inputFotoCustom">
                      <div class="col-sm">
                        <input class="form-control" type="file" id="formFilePhoto2" placeholder="Upload struk">
                      </div>
                    </div>
                    <div class="mb-3" id="inputFotoCustom">
                      <div class="col-sm">
                        <input class="form-control" type="file" id="formFilePhoto3" placeholder="Upload struk">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="d-flex">
                  <button type="button" class="btn btn-confirmation rounded btn-outline-primary me-2 mb-2 shadow" name="button"><i class="fas fa-times me-2"></i>Batal</button>
                  <button type="submit" class="btn btn-confirmation rounded btn-outline-primary me-2 mb-2 shadow" name="button"><i class="fas fa-check me-2"></i>Simpan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    <!--Footer-->
  </body>
</html>
