<?= $this->extend('pilih/template/index'); ?>
<?= $this->section('content'); ?>

<Br></Br>
<div class="container-fluid">
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success"><a href="/admin">Admin</a></button>
        <button type="button" class="btn btn-success"><a href="/warga">Warga</a></button>
    </div>
</div>

<?= $this->endSection(); ?>