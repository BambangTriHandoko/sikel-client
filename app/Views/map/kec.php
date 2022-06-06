<?= $this->extend('Layout/Tadmin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">map</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/map/createkec" class="btn btn-primary mt-3">Tambah</a>
            <!-- <a href="/map/view" class="btn btn-primary mt-3">VIEW</a> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">namafile</th>
                        <th scope="col">nama kecamtan</th>
                        <th scope="col">warna</th>
                        <th scope="col">aksi</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php
                    foreach ($Kec as $key => $b) {
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['nama_kec']; ?></td>
                            <td>
                                <div style="color:<?= $b['warna']; ?>;"><b>WARNA</b></div>

                            </td>
                            <td><a href="/map/editkec/<?= $b['id']; ?>" class="btn btn-success">edit</a></td>
                            <td>
                                <form action="/map/deletekec/<?= $b['id']; ?>" method="POST">
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
<?= $this->endSection(); ?>