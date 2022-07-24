 <div class="dashboard-wrapper">
     <div class="container-fluid dashboard-content">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="page-header">
                     <h2 class="pageheader-title">Data Pendaftaran Akun </h2>
                     <div class="page-breadcrumb">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item">Master Data</a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('pendaftaran') ?>" class="breadcrumb-link">Pendaftaran Akun</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Tampil Data</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <?php
                    $this->load->view('template/notifikasi');
                    ?>
                 <div class="card">
                     <h5 class="card-header">
                         Data Beasiswa
                         <a href="<?= base_url('beasiswa/tambah') ?>" class="btn btn-rounded btn-primary btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                         <a href="<?= base_url('beasiswa/cetak') ?>" target="blank" class="btn btn-rounded btn-sm btn-info mr-1 float-right"><i class="fas fa-print"></i> Cetak Data</a>
                     </h5>
                     <div class="card-body">
                         <div class="alert alert-secondary">
                             <div>Klik pada foto bukti datar untuk melihat foto lebih jelas</div>
                         </div>
                         <table class="table table-bordered" id="mytabel">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>No Pendaftaran</th>
                                     <th>Nama Lengkap</th>
                                     <th>No Handphone</th>
                                     <th>Bukti Daftar</th>
                                     <th>Keterangan</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($pendaftaran as $a) {
                                        $lokasi = base_url('upload/bukti_daftar/' . $a->bukti_daftar);
                                    ?>
                                     <tr>
                                         <td><?= $no++; ?></td>
                                         <td><?= $a->no_pendaftaran; ?></td>
                                         <td><?= $a->nama_lengkap; ?></td>
                                         <td><?= $a->no_handphone; ?></td>
                                         <td><a href="<?= $lokasi ?>" target="_blank">
                                                 <img src="<?= $lokasi ?>" width="50%" height="50%" alt="gambar bukti daftar">
                                             </a></td>
                                         <?php
                                            if ($a->keterangan == "Belum Diverifikasi") :
                                            ?>
                                             <td>
                                                 <a href="<?= base_url('pendaftaran/verifikasi/acc/') . $a->id; ?>" class="btn btn-info btn-sm"><i class="fa fa-check"></i> Konfirmasi
                                                 </a>
                                                 <a href="<?= base_url('pendaftaran/verifikasi/batal/') . $a->id; ?>" class="btn btn-danger btn-sm"><i class="fa fa-check"></i> Batalkan
                                                 </a>
                                             </td>
                                         <?php
                                            else :
                                            ?>
                                             <td><?= $a->keterangan; ?></td>
                                         <?php
                                            endif;
                                            ?>
                                     </tr>
                                 <?php  } ?>
                             </tbody>
                         </table>
                     </div>
                     <div class="card-footer">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>