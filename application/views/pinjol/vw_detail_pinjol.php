<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $judul; ?>
                    </h5>
                    <h2 class="card-title">
                        <?= $Pinjol['nama_lengkap']; ?>
                    </h2>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?= $Pinjol['email']; ?>
                    </h6>
                    <div class="row">
                        <div class="col-md-4">alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $Pinjol['alamat']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">NIK</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $Pinjol['nik']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Besar Pinjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $Pinjol['besar_pinjaman']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Durasi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $Pinjol['durasi']; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $Pinjol['no_hp']; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('Pinjol') ?>" class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>