<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            </div>
        <div class="col-md-10">
            <h1 class="mt-2"> data batas wilayah Sawah</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/sawah/create" class="btn btn-primary mt-3">Tambah</a>
            <!-- <a href="/kelurahan/view" class="btn btn-primary mt-3">VIEW</a> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">namafile</th>
                        <th scope="col">warna</th>
                        <th scope="col">aksi</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php
                    foreach ($sawah as $key => $b) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $b['nama']; ?></td>
                            <td>
                                <div style="color:<?= $b['warna']; ?>;"><b>WARNA</b></div>

                            </td>
                            <td><a href="/sawah/edit/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
                            <td>
                                <form action="/sawah/delete/<?= $b['id']; ?>" method="POST">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus? ');">hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<?= $this->endSection(); ?>