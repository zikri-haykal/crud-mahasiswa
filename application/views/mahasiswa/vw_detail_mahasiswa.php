<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $judul; ?>
                    </h5>
                    <h2 class="card-title">
                        <?= $mahasiswa['nama']; ?>
                    </h2>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?= $mahasiswa['email']; ?>
                    </h6>
                    <div class="row">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['nim']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['jenis_kelamin']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['prodi']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['asal_sekolah']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['no_hp']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $mahasiswa['alamat']; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>