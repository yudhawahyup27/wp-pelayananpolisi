<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<br>
<form action="/skck/update/<?= $skck['id']; ?>" method="POST">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

<br>
<?= $this->endsection(); ?>