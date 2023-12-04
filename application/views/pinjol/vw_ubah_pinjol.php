<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Pinjol/update') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $Pinjol['id']; ?>">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK"
                                value="<?= $Pinjol['nik']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                placeholder="Nama Lengkap" value="<?= $Pinjol['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                value="<?= $Pinjol['email']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat"
                                value="<?= $Pinjol['alamat']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No HP"
                                value="<?= $Pinjol['no_hp']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="besar_pinjaman">Besar Pinjaman</label>
                            <input type="text" name="besar_pinjaman" id="besar_pinjaman" class="form-control"
                                placeholder="Besar Pinjaman" value="<?= $Pinjol['besar_pinjaman']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="durasi">Durasi Pinjaman</label>
                            <input type="text" name="durasi" id="durasi" class="form-control"
                                placeholder="Durasi Pinjaman" value="<?= $Pinjol['durasi']; ?>">
                        </div>
                        <div class="mt-3">
                            <a href="<?= base_url('Pinjol') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-danger float-right">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>