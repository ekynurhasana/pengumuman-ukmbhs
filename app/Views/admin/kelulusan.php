<?= $this->extend('admin/template-admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kelulusan Peserta Oprec UKM Bahasa PNUP 2021</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $p) : ?>
                            <tr>
                                <td><?= $p['no_peserta']; ?></td>
                                <td><?= $p['nim']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jurusan']; ?></td>
                                <td style="color: <?= ($p['kelulusan'] == "1") ? '#0066ff' : '#ff0000'; ?>;"><?= ($p['kelulusan'] == "1") ? 'Lulus' : 'Tidak Lulus'; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
<button type="button" class="btn btn-success swalDefaultSuccess" id="tes" hidden></button>

<?= $this->endsection(); ?>