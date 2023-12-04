<?php
$timestamp = time();
$date = date("Y-m-d", $timestamp);
?>
<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Poster/create') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                            <label for="acara">Judul Acara</label>
                            <input type="text" name="acara" id="acara" class="form-control" placeholder="Judul acara"
                                value="<?= set_value('acara') ?>">
                            <?= form_error('acara', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="peserta">Jumlah Peserta</label>
                            <input type="text" name="peserta" id="peserta" class="form-control"
                                placeholder="Jumlah Peserta" value="<?= set_value('peserta') ?>">
                            <?= form_error('peserta', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="tanggal">Tanggal Acara</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                placeholder="Tanggal Acara" value="<?= $date;
                                set_value('tanggal') ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="biaya">Biaya Pendaftaran</label>
                            <input type="text" name="biaya" id="biaya" class="form-control" placeholder="Biaya Acara"
                                value="<?= set_value('biaya') ?>">
                            <?= form_error('biaya', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="cp">Contact Person</label>
                            <input type="text" name="cp" id="cp" class="form-control" placeholder="Contact Person"
                                value="<?= set_value('cp') ?>">
                            <?= form_error('cp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control"
                                placeholder="No HP Contact Person" value="<?= set_value('no_hp') ?>">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Acara"
                                value="<?= set_value('alamat') ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="keterangan">Keterangan Acara</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control"
                                placeholder="Asal Sekolah" value="<?= set_value('keterangan') ?>">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" name="gambar" id="gambar" class="custom-file-input form-control"
                                    placeholder="Gambar">
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