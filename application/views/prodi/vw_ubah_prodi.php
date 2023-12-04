<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama"
                                value="<?= $prodi['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" id="ruangan" class="form-control" placeholder="ruangan"
                                value="<?= $prodi['ruangan']; ?>">
                        </div>
                        <div class="form-group mt-2">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control"
                                id="jurusan" placeholder="Jurusan">
                        </div>
                        <div class="form-group mt-2">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>"
                                class="form-control" id="akreditasi" placeholder="Akreditasi">
                        </div>
                        <div class="form-group mt-2">
                            <label for="kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>"
                                class="form-control" id="kaprodi" placeholder="Nama Kaprodi">
                        </div>
                        <div class="form-group mt-2">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>"
                                class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group mt-2">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>"
                                class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                        </div>
                        <div class="form-group mt-2">
                            <img id="gambar-preview" src="<?= base_url('assets/img/prodi/') . $prodi['gambar']; ?>"
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
                                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Kembali</a>
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