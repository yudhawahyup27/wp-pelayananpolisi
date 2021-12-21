<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <p>Informasi Keperluan Pembuatan SKCK dan Tingkat Kewenangan Kesatuan Wilayah
                <br><br>
            <h2>MABES POLRI</h2><br>
            - Warga Negara Indonesia<br>
            - Fotokopi KTP dengan menunjukan KTP asli.<br>
            - Fotokopi Paspor.<br>
            - Fotokopi akte lahir (surat kenal lahir, ijasah, surat nikah).<br>
            - Dokumen Sidik Jari dan rumus sidik jari.<br>
            - Fotokopi kartu indentitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.<br>
            - Warga Negara Asing<br>
            - Surat permohonan dari sponsor, perusahaan, atau lembaga yang memperkejakan, menggunakan, atau yang bertanggung jawab pada WNA.
            - Fotokopi KTP dan Surat Nikah Apabila Sponsor dari Suami/Istri warga Negara Indonesia (WNI)<br>
            - Fotokopi Paspor.<br>
            - Fotokopi kartu ijin Tinggal Terbatas (KITAS) atau kartu ijin tinggal tetap (KITAP)<br>
            - Fotokopi IMTA dari KEMANAKER RI<br>
            - Fotokopi Surat Tanda Melapor (STM) dari kepolisian<br>
            - Dokumen Sidik Jari dan rumus sidik jari.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang kuning, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.<br>
            <br>
            <H2>POLDA</H2><br>
            - Warga Negara Indonesia<br>
            - Fotokopi KTP dengan menunjukan KTP asli.<br>
            - Fotokopi Paspor.<br>
            - Fotokopi akre lahir ( surat kenal lahir, ijasah, surat nikah)<br>
            - Dokumen Sidik Jari dan rumus sidik jari<br>
            - Fotokopi kartu indentitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh. <br>
            - Warga Negara Asing<br>
            - Surat permohonan dari sponsor, perusahaan, atau lembaga yang memperkejakan, menggunakan, atau yang bertanggung jawab pada WNA.<br>
            - Fotokopi KTP dan Surat Nikah Apabila Sponsor dari Suami/Istri warga Negara Indonesia (WNI)<br>
            - Fotokopi Paspor.<br>
            - Fotokopi kartu ijin Tinggal Terbatas (KITAS) atau kartu ijin tinggal tetap (KITAP)<br>
            - Fotokopi IMTA dari KEMANAKER RI<br>
            - Fotokopi Surat Tanda Melapor (STM) dari kepolisian<br>
            - Dokumen Sidik Jari dan rumus sidik jari.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang kuning, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.
            <br><br>
            <h2>POLRES</h2><br>
            - Warga Negara Indonesia<br>
            - Fotokopi KTP dengan menunjukan KTP asli<br>
            - Fotokopi akre lahir ( surat kenal lahir, ijasah, surat nikah)<br>
            - Dokumen Sidik Jari /rumus sidik jari<br>
            - Fotokopi kartu indentitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.
            <br> <br>
            <h2>POLSEK</h2> <br>
            - Warga Negara Indonesia<br>
            - Fotokopi KTP dengan menunjukan KTP asli<br>
            - Fotokopi akre lahir ( surat kenal lahir, ijasah, surat nikah)<br>
            - Dokumen Sidik Jari<br>
            - Fotokopi kartu indentitas lain bagi yang belum memenuhi syarat untuk mendapatkan KTP.<br>
            - Pas foto berwarna ukuran 4 x 6 sebanyak 6 (enam) lembar dengan latar belakang merah, foto berpakaian sopan dan berkerah, Foto tidak menggunakan aksesoris wajah, tampak muka, dan bagi pemohon yang mengenakan jilbab, pas foto harus tampak muka secara utuh.
            <br>
            </p>
        </div>
    </div>
    <br><br>
    <form action="/skck/save" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3 row">
            <label for="namadepan" class="col-sm-2 col-form-label">Nama Depan </label>
            <div class="col-sm-10">
                <input type="text" class="form-control " id="nama_d" name="nama_d" autofocus value=" <?= old('nama_d'); ?>" aria-describedby="nama_d">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="namabelakang" class="col-sm-2 col-form-label">Nama Belakang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control " id="nama_b" name="nama_b" autofocus value=" <?= old('nama_b'); ?>" aria-describedby="nama_b">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control " id="alamat" name="alamat" autofocus value=" <?= old('alamat'); ?>" aria-describedby="alamat">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="RT" class="col-sm-2 col-form-label">RT</label>
                <input type="text" class="form-control " id="rt" name="rt" placeholder="rt" autofocus value=" <?= old('rt'); ?>" aria-describedby="penulis">
            </div>
            <div class="col">
                <label for="RW" class="col-sm-2 col-form-label">RW</label>
                <input type="text" class="form-control " id="rw" name="rw" placeholder="rw" autofocus value=" <?= old('rw'); ?>" aria-describedby="penulis">
            </div>
        </div>
        <br>

        <div class="col">
            <label for="RW" class="col-sm-2 col-form-label">Keperluan</label>
            <input type="text" class="form-control " id="jenis_kep" name="rw" placeholder="rw" autofocus value=" <?= old('jenis_kep'); ?>" aria-describedby="jenis_kep">
        </div>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?= $this->endSection(); ?>