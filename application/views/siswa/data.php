<!-- Divider -->
 <hr class="sidebar-divider">
 <div class="container ml-4">

    <a href="siswa/tambah" type="submit" class="btn btn-primary">Tambah Siswa</a>
 </div>

 <!-- row table-->
 <div class="row">
 <div class="table-responsive table-bordered col-lg-11 ml-auto mr-auto mt-2">
 <div class="page-header">
 <h1><span class="fas fa-users text-primary mt-2 "> Data siswa</span></h1>
 </div>
 <table class="table table-hover text-dark table-bordered mt-4">
<thead>
 <tr class="text-center">
<th>#</th>
 <th>Nama Anggota</th>
 <th>NIS</th>
 <th>Kelas</th>
 <th>Tanggal Lahir</th>
 <th>Tempat Lahir</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Opsion</th>
 
 </tr>
 </thead>
 <tbody class="table-group-divider">
 <?php
 $i = 1;
 foreach ($siswa as $sis) { ?>
 <tr>
 <td><?= $i++; ?></td>
 <td><?= $sis['nama']; ?></td>
 <td><?= $sis['nis']; ?></td>
 <td><?= $sis['kelas']; ?></td>
 <td><?= $sis['tanggal_lahir']; ?></td>
 <td><?= $sis['tempat_lahir']; ?></td>
 <td><?= $sis['alamat']; ?></td>
 <td><?= $sis['jenis_kelamin']; ?></td>
 <td><?= $sis['agama']; ?></td>
 
 <td>
  <a href="<?= base_url('siswa/edit/').$sis['id'];?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
  <a href="<?= base_url('siswa/hapus/').$sis['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $sis['nama'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a></td>
 </tr>
 </tbody>

 <?php } ?>

  </table>
 </div>
 </div>
</div>

