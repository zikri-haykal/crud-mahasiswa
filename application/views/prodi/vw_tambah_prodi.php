<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <?= $judul; ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Prodi/tambah') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Prodi"
                                value="<?= set_value('nama') ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="ruangan">Ruangan</label>
                            <input type="number" name="ruangan" id="ruangan" class="form-control" placeholder="Ruangan"
                                value="<?= set_value('ruangan') ?>">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Jurusan"
                                value="<?= set_value('jurusan') ?>">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="akreditasi">Akreditasi</label>
                            <select name="akreditasi" id="akreditasi" class="form-control"
                                value="<?= set_value('akreditasi') ?>">
                                <option value="">Pilih Akreditasi</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                            <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" id="kaprodi" class="form-control"
                                placeholder="Nama Kaprodi" value="<?= set_value('nama_kaprodi') ?>">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" id="tahun_berdiri" class="form-control"
                                placeholder="Tahun Berdiri" value="<?= set_value('tahun_bediri') ?>">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group mt-2">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" id="output_lulusan" class="form-control"
                                placeholder="Output Lulusan" value="<?= set_value('output_lulusan') ?>">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Kembali</a>
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