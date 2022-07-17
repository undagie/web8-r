 <div class="dashboard-wrapper">
     <div class="container-fluid dashboard-content">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="page-header">
                     <h2 class="pageheader-title">Data Beasiswa </h2>
                     <div class="page-breadcrumb">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item">Master Data</a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('beasiswa') ?>" class="breadcrumb-link">Beasiswa</a></li>
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
                         <table class="table table-bordered" id="mytabel">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Nama Beasiswa</th>
                                     <th>Tanggal Mulai</th>
                                     <th>Tanggal Selesai</th>
                                     <th>Nama Jenis Beasiswa</th>
                                     <th>Keterangan</th>
                                     <th>Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($beasiswa as $a) {
                                    ?>
                                     <tr>
                                         <td><?= $no++; ?></td>
                                         <td><?= $a->nama_beasiswa; ?></td>
                                         <td><?= $a->tanggal_mulai; ?></td>
                                         <td><?= $a->tanggal_selesai; ?></td>
                                         <td><?= $a->nama_jenis; ?></td>
                                         <td><?= $a->keterangan; ?></td>
                                         <td>
                                             <div class="btn-group">
                                                 <a href="<?= base_url('beasiswa/ubah/' . $a->id); ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Ubah </a>
                                                 <a href="<?= base_url('beasiswa/hapus/' . $a->id); ?>" onclick="return confirm('Yakin, ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                             </div>
                                         </td>
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