<?= $this->extend('admin/template-admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Nilai Tes Peserta Oprec UKM Bahasa PNUP 2021</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tes Tulis</th>
                            <th>Tes Wawancara</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nilai as $n) : ?>
                            <tr onclick="document.location = '<?= base_url('/'); ?>/Bahasa/detail/<?= $n['no_peserta']; ?>';">
                                <td><?= $n['no_peserta']; ?></td>
                                <td><?= $n['nim']; ?></td>
                                <td><?= $n['nama']; ?></td>
                                <td><?= $n['nilai1']; ?></td>
                                <td>
                                    <?php
                                    $rata = ($n['nilai2'] + $n['nilai3'] + $n['nilai4']) / 3;
                                    echo round($rata, 2);
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tes Tulis</th>
                            <th>Tes Wawancara</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>

<?= $this->endsection(); ?>