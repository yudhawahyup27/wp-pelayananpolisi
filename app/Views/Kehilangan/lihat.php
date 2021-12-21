<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>


<div class="container-fluid">
    <table id="dataskehilangan" class="table table-borded" style="width:100%">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelapor</th>
                <th scope="col">Kasus</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kehilangan as $b) : ?>
                <tr>
                    <th scope="row"><?= $b['id']; ?></th>
                    <td><?= $b['nama_pel']; ?></td>
                    <td><?= $b['kasus']; ?> </td>
                    <td> <?= $b['alamat']; ?></td>
                    <td>
                        <a href="/kehilangan/ubah/<?= $b['nama_pel']; ?>" class="btn bg-success">Edit</a>
                        <form action="/kehilangan/lihat/<?= $b['id']; ?>">
                            <?= csrf_field(); ?>
                            <input type="hidden" value="DELETE" name="_method">
                            <button type="submit" class="btn btn-warning" onclick="return confirm('apakah yakin dihapus data tidak bisa kembali');"> Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelapor</th>
                <th scope="col">Kasus</th>
                <th scope="col">Alamat</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>