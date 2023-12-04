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
                    <a href="<?= base_url('Prodi/tambah') ?>" class="btn btn-outline-success"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: 1rem;">Tambah
                        Prodi</a>
                </div>
                <div class="table-responsive">
                    <!-- Table with stripped rows -->
                    <table class="table datatable table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Ruangan</th>
                                <th>Jurusan</th>
                                <th>Akreditasi</th>
                                <th>Nama Kaprodi</th>
                                <th>Tahun Berdiri</th>
                                <th>Output Lulusan</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($prodi as $us): ?>
                                <tr>
                                    <td>
                                        <?= $us['nama']; ?>
                                    </td>
                                    <td>
                                        <?= $us['ruangan']; ?>
                                    </td>
                                    <td>
                                        <?= $us['jurusan']; ?>
                                    </td>
                                    <td>
                                        <?= $us['akreditasi']; ?>
                                    </td>
                                    <td>
                                        <?= $us['nama_kaprodi']; ?>
                                    </td>
                                    <td>
                                        <?= $us['tahun_berdiri']; ?>
                                    </td>
                                    <td>
                                        <?= $us['output_lulusan']; ?>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/img/prodi/') . $us['gambar']; ?>" alt="Gambar Prodi"
                                            class="img-thumbnail" style="width:100px;">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-primary"
                                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                                        <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger"
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