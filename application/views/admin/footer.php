<th>Tahun Terbit</th>
 <th>ISBN</th>
 <th>Stok</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $i = 1;
 foreach ($buku as $b) { ?>
 <tr>
 <td><?= $i++; ?></td>
 <td><?= $b['judul_buku']; ?></td>
 <td><?= $b['pengarang']; ?></td>
 <td><?= $b['penerbit']; ?></td>
 <td><?= $b['tahun_terbit']; ?></td>
 <td><?= $b['isbn']; ?></td>
 <td><?= $b['stok']; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<th>Tahun Terbit</th>
 <th>ISBN</th>
 <th>Stok</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $i = 1;
 foreach ($buku as $b) { ?>
 <tr>
 <td><?= $i++; ?></td>
 <td><?= $b['judul_buku']; ?></td>
 <td><?= $b['pengarang']; ?></td>
 <td><?= $b['penerbit']; ?></td>
 <td><?= $b['tahun_terbit']; ?></td>
 <td><?= $b['isbn']; ?></td>
 <td><?= $b['stok']; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); 
?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); 
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jqueryeasing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin2.min.js"></script>
<script>
 $('.custom-file-input').on('change', function() {
 let fileName = $(this).val().split('\\').pop();
 $(this).next('.custom-filelabel').addClass("selected").html(fileName);
 });
 $(document).ready(function() {
 $("#table-datatable").dataTable();
 });
 $('.alert-message').alert().delay(3500).slideUp('slow');
</script>
</body>
</html>