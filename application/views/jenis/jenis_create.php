 <div class="dashboard-wrapper">
     <div class="container-fluid dashboard-content">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="page-header">
                     <h2 class="pageheader-title">Tambah Jenis Beasiswa </h2>
                     <div class="page-breadcrumb">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item">Master Data</a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('jenis') ?>" class="breadcrumb-link">Jenis Beasiswa</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Tambah Jenis Beasiswa</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="card">
                     <h5 class="card-header">
                         Tambah Jenis Beasiswa
                     </h5>
                     <div class="card-body">
                         <form action="" method="post">
                             <div class="form-group row">
                                 <label for="nama_jenis" class="col-md-2">Nama Jenis Beasiswa</label>
                                 <div class="col-md-10">
                                     <input type="text" class="form-control" name="nama_jenis" placeholder="Nama Jenis Beasiswa" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="keterangan" class="col-md-2">Keterangan Jenis Beasiswa</label>
                                 <div class="col-md-10">
                                     <input type="text" class="form-control" name="keterangan" placeholder="Keterangan Jenis Beasiswa" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-2"></div>
                                 <div class="col-md-10">
                                     <button type="submit" class="btn btn-sm btn-success" name="create"> Simpan</button>
                                     <a href="<?= base_url('jenis'); ?>" class="btn btn-sm btn-brand"> Batal</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="card-footer">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>