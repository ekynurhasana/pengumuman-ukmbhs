<?= $this->extend('admin/template-admin'); ?>

<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <a href="<?= base_url() ?>/Bahasa/peserta">
            <button type="button" class="btn btn-info col-2">Data Peserta</button>
        </a>
        <br><br>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Biodata</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url() ?>/Bahasa/edit" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_peserta" value="<?= $dataPeserta['id'] ?>">
                        <input type="hidden" name="no_peserta" value="<?= $dataPeserta['no_peserta'] ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaPeserta">Nama</label>
                                <input type="text" class="form-control" id="namaPeserta" name='namaPeserta' value="<?= $dataPeserta['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nimPeserta">NIM</label>
                                <input type="text" class="form-control" id="nimPeserta" name="nimPeserta" value="<?= $dataPeserta['nim']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name='jurusan' value="<?= $dataPeserta['jurusan']; ?>">
                            </div>
                            <div class="col-form-label" style="font-weight: bold;">
                                Jenis Kelamin
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="jenisKelamin" class="custom-control-input" value="Laki-laki" required <?= ($dataPeserta['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                                <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="jenisKelamin" class="custom-control-input" value="Perempuan" required <?= ($dataPeserta['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                            </div><br><br>
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Tanggal Lahir</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='tgl_lahir' data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask value="<?= $dataPeserta['tgl_lahir']; ?>" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#hapusModal">
                    Hapus Peserta
                </button><br>
            </div>
            <div class="col-md-4">
                <div class="card card-info card-row card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Nilai</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php if ($nilai != 0) : ?>
                        <form action="<?= base_url() ?>/Bahasa/editnilai" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_peserta" value="<?= $dataPeserta['id'] ?>">
                            <input type="hidden" name="id_nilai" value="<?= $nilai['id'] ?>">
                            <input type="hidden" name="no_peserta" value="<?= $dataPeserta['no_peserta'] ?>">
                            <div class="card-body">
                                <div class="card card-warning card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Tes Tulis</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nilai1">Nilai Tes Tulis</label>
                                            <input type="number" class="form-control" id="nilai1" name='nilai1' value="<?= $nilai['nilai1']; ?>" min="0" max="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-warning card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Wawancara</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nilai2">Personality</label>
                                            <input type="number" class="form-control" id="nilai2" name="nilai2" value="<?= $nilai['nilai2']; ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai3">Linguistik</label>
                                            <input type="number" class="form-control" id="nilai3" name='nilai3' value="<?= $nilai['nilai3']; ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai4">Keorganisasian</label>
                                            <input type="number" class="form-control" id="nilai4" name="nilai4" value="<?= $nilai['nilai4']; ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-block">Edit</button>
                            </div>
                        </form>
                    <?php else : ?>
                        <div class="container-fluid mt-2">
                            <div class="container alert alert-warning alert-dismissible fade show" role="alert">
                                Nilai belum diinput.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <form action="<?= base_url() ?>/Bahasa/tambahnilai" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_peserta" value="<?= $dataPeserta['id'] ?>">
                            <input type="hidden" name="no_peserta" value="<?= $dataPeserta['no_peserta'] ?>">
                            <div class="card-body">
                                <div class="card card-warning card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Tes Tulis</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nilai1">Nilai Tes Tulis</label>
                                            <input type="number" class="form-control" id="nilai1" name='nilai1' value="<?= old('nilai1'); ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-warning card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Wawancara</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nilai2">Personality</label>
                                            <input type="number" class="form-control" id="nilai2" name="nilai2" value="<?= old('nilai2'); ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai3">Linguistik</label>
                                            <input type="number" class="form-control" id="nilai3" name='nilai3' value="<?= old('nilai3'); ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai4">Keorganisasian</label>
                                            <input type="number" class="form-control" id="nilai4" name="nilai4" value="<?= old('nilai4'); ?>" min="0" max="100" minlength="1" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
                <!-- /.card -->
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title" style="font-weight: bold;">Status Kelulusan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php if ($kelulusan != 0) : ?>

                        <form action="<?= base_url() ?>/Bahasa/editkelulusan" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_peserta" value="<?= $dataPeserta['id'] ?>">
                            <input type="hidden" name="id_kelulusan" value="<?= $kelulusan['id'] ?>">
                            <input type="hidden" name="no_peserta" value="<?= $dataPeserta['no_peserta'] ?>">
                            <div class="card-body">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radioKelulusan" name="kelulusan" class="custom-control-input" value="1" required <?= ($kelulusan['kelulusan'] == "1") ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="radioKelulusan" style="color: #0099ff;">Lulus</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radioKelulusan1" name="kelulusan" class="custom-control-input" value="0" required <?= ($kelulusan['kelulusan'] == "0") ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="radioKelulusan1" style="color: #ff0000;">Tidak Lulus</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-block">Edit</button>
                            </div>
                        </form>
                    <?php else : ?>
                        <div class="container-fluid mt-2">
                            <div class="container alert alert-warning alert-dismissible fade show" role="alert">
                                Status kelulusan belum diinput.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <form action="<?= base_url() ?>/Bahasa/tambahkelulusan" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id_peserta" value="<?= $dataPeserta['id'] ?>">
                            <input type="hidden" name="no_peserta" value="<?= $dataPeserta['no_peserta'] ?>">
                            <div class="card-body">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radioKelulusan" name="kelulusan" class="custom-control-input" value="1" required>
                                    <label class="custom-control-label" for="radioKelulusan" style="color: #0099ff;">Lulus</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="radioKelulusan1" name="kelulusan" class="custom-control-input" value="0" required>
                                    <label class="custom-control-label" for="radioKelulusan1" style="color: #ff0000;">Tidak Lulus</label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel">Hapus Peserta <?= $dataPeserta['no_peserta']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="<?= base_url() ?>/Bahasa/sure/<?= $dataPeserta['no_peserta'] ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name='_method' value="DELETE">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-success swalDefaultSuccess" id="tes" hidden></button>
<!-- /.content -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            <?php if (session()->getFlashdata('pesan')) : ?>
                Toast.fire({
                    icon: 'warning',
                    title: '<?= session()->getFlashdata('pesan'); ?>'
                })
            <?php elseif (session()->getFlashdata('berhasil')) : ?>
                Toast.fire({
                    icon: 'success',
                    title: '<?= session()->getFlashdata('berhasil'); ?>'
                })
            <?php endif; ?>
        });
    });

    function klik() {
        $('#tes').trigger('click');
    }
    $(document).ready(klik);
</script>
<?= $this->endSection(); ?>