<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $poster['id']; ?>">
                        <div class="form-group mt-2">
                            <label for="acara">Judul Acara</label>
                            <input type="text" name="acara" id="acara" class="form-control" placeholder="Jumlah acara"
                                value="<?= $poster['acara']; ?>">
                            <?= form_error('acara', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="peserta">Jumlah Peserta</label>
                            <input type="text" name="peserta" id="peserta" class="form-control"
                                placeholder="Jumlah Peserta" value="<?= $poster['peserta']; ?>">
                            <?= form_error('peserta', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="tanggal">Tanggal Acara</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                placeholder="Tanggal Acara" value="<?= $poster['tanggal']; ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="biaya">Biaya Pendaftaran</label>
                            <input type="text" name="biaya" id="biaya" class="form-control" placeholder="Biaya Acara"
                                value="<?= $poster['biaya']; ?>">
                            <?= form_error('biaya', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="cp">Contact Person</label>
                            <input type="text" name="cp" id="cp" class="form-control" placeholder="Contact Person"
                                value="<?= $poster['cp']; ?>">
                            <?= form_error('cp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control"
                                placeholder="No HP Contact Person" value="<?= $poster['no_hp']; ?>">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Acara"
                                value="<?= $poster['alamat']; ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="keterangan">Keterangan Acara</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control"
                                placeholder="Asal Sekolah" value="<?= $poster['keterangan']; ?>">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <img id="gambar-preview" src="<?= base_url('assets/img/poster/') . $poster['gambar']; ?>"
                                alt="" class="mb-2" style="width:100px;">
                            <div class="custom-file">
                                <input type="file" name="gambar" id="gambar" class="custom-file-input form-control"
                                    placeholder="Gambar">
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col">
                                    <a href="<?= base_url('Poster') ?>" class="btn btn-danger">Kembali</a>
                                </div>
                                <div class="col text-md-end">
                                    <button type="submit" name="tambah" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>