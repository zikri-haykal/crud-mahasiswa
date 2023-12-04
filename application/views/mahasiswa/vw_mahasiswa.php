<section class="section">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $kategori; ?> <span>| Table</span>
                </h5>
                <div class="mt-3">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="mt-3">
                    <a href="<?= base_url('Mahasiswa/tambah') ?>" class="btn btn-outline-success"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">Tambah
                        Mahasiswa</a>
                </div>
                <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Email</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $us): ?>
                                <tr>
                                    <td>
                                        <?= $i; ?>.
                                    </td>
                                    <td>
                                        <?= $us['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $us['nim']; ?>
                                    </td>
                                    <td>
                                        <?= $us['email']; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Detail</a>
                                        <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                                        <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger"
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