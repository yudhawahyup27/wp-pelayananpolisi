<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>
<br>
<div class="card">
    <div class="card-body">
        <form action="/kehilangan/update/<?= $kehilangan['id']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="mb-3 row">
                <label for="namadepan" class="col-sm-2 col-form-label">Nama Pelapor </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control " id="nama_pel" name="nama_d" autofocus value=" <?= old('nama_pel'); ?>" aria-describedby="nama_d">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namabelakang" class="col-sm-2 col-form-label">kasus</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control " id="kasus" name="kasus" autofocus value=" <?= old('kasus'); ?>" aria-describedby="nama_b">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control " id="alamat" name="alamat" autofocus value=" <?= old('alamat'); ?>" aria-describedby="alamat">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
<br>
<?= $this->endsection(); ?>