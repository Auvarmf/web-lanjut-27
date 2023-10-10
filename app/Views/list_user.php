<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
    <h2 class="text-center"><b>Data User</b></h2>
    <a class="btn btn-primary" href="<?= base_url('/user/create') ?>">Tambah Data</a>
    <table class="table table-striped table-hover mt-3 text-center">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($users as $user) {
            ?>
                <tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $user['nama'] ?>
                    </td>
                    <td>
                        <?= $user['npm'] ?>
                    </td>
                    <td>
                        <?= $user['nama_kelas'] ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                        <button type="button" class="btn btn-warning"><img src="<?= base_url("assets/svg/edit.svg"); ?>" alt="" style="width:23px; height:23px;"></button>
                        <button type="button" class="btn btn-danger"><img src="<?= base_url("assets/svg/hapus.svg"); ?>" alt="" style="width:23px; height:23px;"></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>