<div class="mt-3">
 <form action="<?= base_url('pekerjaanadmin/editpekerjaan2') ?>" method="POST">
  <input type="hidden" name="id_pekerjaan2" value="<?= $pekerjaan2['id_pekerjaan2'] ?>">
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Pekerjaan</label>
   <input type="text" name="nama_pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Nama Sekolah" value="<?= $pekerjaan2['nama_pekerjaan'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Lama Kerja</label>
   <input type="text" name="lama_kerja" class="form-control" id="exampleFormControlInput1" placeholder="Lama Kerja" value="<?= $pekerjaan2['lama_kerja'] ?>">
  </div>
  <div class="mb-3">
   <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
   <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Masuk" value="<?= $pekerjaan2['nama_perusahaan'] ?>">
</div>
  <div class="mb-3">
   <button type='submit' class="btn btn-primary">Edit</button>
  </div>
 </form>

</div>