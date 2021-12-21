<?php

use CodeIgniter\Filters\CSRF;
?>
<?= $this->extend('Templates/index'); ?>
<?= $this->section('content'); ?>


<div class="container-fluid">
    <table id="dataskck" class="table table-borded" style="width:100%">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Jenis Keperluan</th>
                <th scope="col">Alamat</th>
                <th scope="col">RT</th>
                <th scope="col">RW</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($skck as $b) : ?>
                <tr>
                    <th scope="row"><?= $b['id']; ?></th>
                    <td><?= $b['nama_d']; ?></td>
                    <td> <?= $b['nama_b']; ?></td>
                    <td><?= $b['jenis_kep']; ?> </td>
                    <td> <?= $b['alamat']; ?></td>
                    <td><?= $b['rt']; ?> </td>
                    <td><?= $b['rw']; ?> </td>
                    <td><?= $b['status']; ?> </td>
                    <td>
                        <a href="/skck/ubah<?= $b['nama_d']; ?>" class="btn bg-success">Edit</a>
                        <form action="/skck/lihat/<?= $b['id']; ?>">
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
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Jenis Keperluan</th>
                <th scope="col">Alamat</th>
                <th scope="col">RT</th>
                <th scope="col">RW</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>