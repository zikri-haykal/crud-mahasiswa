<section class="section">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $kategori; ?> <span>| Table</span>
                </h5>
                <div class="mt-3">
                    <a href="<?= base_url('Pinjol/tambah') ?>" class="btn btn-outline-success"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">Tambah
                        Pinjol</a>
                </div>
                <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Besar Pinjaman</th>
                                <th scope="col">Durasi@Hari</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($Pinjol as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>.
                                    </td>
                                    <td>
                                        <?= $us['nik']; ?>
                                    </td>
                                    <td>
                                        <?= $us['nama_lengkap']; ?>
                                    </td>
                                    <td>
                                        <?= $us['alamat']; ?>
                                    </td>
                                    <td>
                                        <?= $us['no_hp']; ?>
                                    </td>
                                    <td>
                                        <?= $us['email']; ?>
                                    </td>
                                    <td>
                                        Rp
                                        <?= number_format($us['besar_pinjaman'], 0, ',', '.'); ?>,-
                                    </td>
                                    <td>
                                        <?= $us['durasi']; ?> Hari
                                    </td>
                                    <td>
                                        <a href="<?= base_url('Pinjol/detail/') . $us['id']; ?>" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Detail</a>
                                        <a href="<?= base_url('Pinjol/edit/') . $us['id']; ?>" class="btn btn-warning"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                                        <a href="<?= base_url('Pinjol/hapus/') . $us['id']; ?>" class="btn btn-danger"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>

</main><!-- End #main -->