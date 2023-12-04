<section class="section">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $kategori; ?> <span>| Card</span>
                </h5>
                <div class="mt-3">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="mt-3">
                    <a href="<?= base_url('Poster/create') ?>" class="btn btn-outline-success"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">Tambah
                        Poster</a>
                </div>
                <div class="row mt-2">
                    <?php foreach ($poster as $p): ?>
                        <div class="col-md-3">
                            <div class="card mt-2" style="width: 18rem;">
                                <img src="<?= base_url('assets/img/poster/') . $p['gambar']; ?>" class="card-img-top"
                                    alt="Gambar Poster" style="width: 280px; height: 405px;">
                                <div class="card-body">
                                    <h5 class="card-title mt-0">
                                        <?= $p['acara']; ?>
                                    </h5>
                                    <a href="<?= base_url('Poster/detail/') . $p['id']; ?>" class="btn btn-primary me-1"><i
                                            class="bi bi-list"></i></a>
                                    <a href="<?= base_url('Poster/update/') . $p['id']; ?>" class="btn btn-warning me-1"><i
                                            class="bi bi-pen"></i></a>
                                    <a href="<?= base_url('Poster/delete/') . $p['id']; ?>" class="btn btn-danger me-1"><i
                                            class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

</main><!-- End #main -->