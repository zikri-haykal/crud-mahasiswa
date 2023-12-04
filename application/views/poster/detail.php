<section class="section">
    <div class="row">
        <!-- Card untuk gambar poster -->
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="<?= base_url('assets/img/poster/') . $poster['gambar'] ?>" class="card-img-top"
                    alt="Gambar Poster">
            </div>
        </div>
        <!-- Card untuk keterangan -->
        <div class="col-md-6">
            <div class="card mb-3" style="max-height: 100%; overflow-y: auto;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $poster['acara']; ?>
                        <span>
                            |
                            <?= $poster['alamat']; ?>
                        </span>
                    </h5>
                    <p class="card-text">
                        <!-- List group With Icons -->
                    <ul class="list-group">
                        <li class="list-group-item"><i class="bi bi-people text-success me-1"></i>
                            <?= $poster['peserta']; ?> Peserta
                        </li>
                        <li class="list-group-item"><i class="bi bi-calendar-date me-1 text-primary"></i>
                            <?= date("l, F, Y", strtotime($poster['tanggal'])); ?>
                        </li>
                        <li class="list-group-item"><i class="bi bi-currency-dollar me-1 text-success"></i>
                            <?= number_format($poster['biaya'], 0, ',', '.'); ?>,-
                        </li>
                        <li class="list-group-item"><i class="bi bi-telephone me-1 text-primary"></i></i>
                            <?= $poster['no_hp']; ?> -
                            <?= $poster['cp']; ?>
                        </li>
                        <li class=" list-group-item"><i class="bi bi-info-circle text-primary me-1"></i></i>
                            <?= $poster['keterangan']; ?>
                        </li>
                    </ul>
                    <!-- End List group With Icons -->
                    <div class="col text-md-end">
                        <a href="<?= base_url('Poster'); ?>" class="btn btn-danger mt-2">Kembali</a>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4">Jumlah Peserta</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $poster['peserta']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Acara</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $poster['tanggal']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Biaya Pendaftaran</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">Rp
                            <?= number_format($poster['biaya'], 0, ',', '.'); ?>,-
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Ingin Tanya Lebih Detail?</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $poster['cp']; ?> - (
                            <?= $poster['no_hp']; ?>)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Keterangan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $poster['keterangan']; ?>
                        </div>
                    </div> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>