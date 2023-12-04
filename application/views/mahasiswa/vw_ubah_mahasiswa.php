<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                value="<?= $mahasiswa['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM"
                                value="<?= $mahasiswa['nim']; ?>">
                                <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="<?= $mahasiswa['jenis_kelamin']; ?>">
                                    <?= $mahasiswa['jenis_kelamin']; ?>
                                </option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                value="<?= $mahasiswa['email']; ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="prodi">Prodi</label>
                            <select name="prodi" id="prodi" class="form-select">
                                <?php foreach ($prodi as $p): ?>
                                    <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
                                          echo "selected";
                                      } ?>>
                                        <?= $p['nama']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control"
                                placeholder="Asal Sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No HP"
                                value="<?= $mahasiswa['no_hp']; ?>">
                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat"
                                value="<?= $mahasiswa['alamat']; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col">
                                    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Kembali</a>
                                </div>
                                <div class="col text-md-end">
                                    <button type="submit" name="ubah" class="btn btn-success">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>