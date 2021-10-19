<?= $this->extend('admin/template-admin'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="container alert alert-warning alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('berhasil')) : ?>
            <div class="container alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('berhasil'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pendaftar Peserta Oprec UKM Bahasa PNUP 2021</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <button type="button" class="btn btn-block bg-gradient-primary col-3" data-toggle="modal" data-target="#modalTambah      "><i class="fas fa-plus-square"></i> Tambah Peserta</button><br>
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $p) : ?>
                            <tr onclick="document.location = '<?= base_url('/'); ?>/Bahasa/detail/<?= $p['no_peserta']; ?>';">
                                <td><?= $p['no_peserta']; ?></td>
                                <td><?= $p['nim']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['jurusan']; ?></td>
                                <td>
                                    <a href="<?= base_url() ?>/Bahasa/detail/<?= $p['no_peserta'] ?>">
                                        <button type="button" class="btn btn-info col-12">Detail</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No. Peserta</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/Bahasa/tambah" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="namaProduk">No Peserta</label>
                        <input type="text" class="form-control" id="noPeserta" name="noPeserta" placeholder="BHS-001" value="<?= old('noPeserta'); ?>" required>
                    </div>
                    <div class=" form-group">
                        <label for="hargProduk">Nama Peserta</label>
                        <input type="text" class="form-control" id="namaPeserta" name="namaPeserta" placeholder="Eky A N" value="<?= old('namaPeserta'); ?>" required>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="statusProduk">NIM</label>
                            <input type="text" maxlength="8" class="form-control" id="nimPeserta" name="nimPeserta" placeholder="42518035" value="<?= old('nimPeserta'); ?>" required>
                        </div>
                        <div class=" form-group col-md-6">
                            <div class="form-group">
                                <label>Minimal</label>
                                <select class="form-control" name="jurusanPeserta">
                                    <option>Administrasi Niaga</option>
                                    <option>Akuntansi</option>
                                    <option selected>Teknik Elektro</option>
                                    <option>Teknik Mesin</option>
                                    <option>Teknik Kimia</option>
                                    <option>Teknik Sipil</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-form-label" style="font-weight: bold;">
                        Jenis Kelamin
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="jenisKelamin" class="custom-control-input" value="Laki-laki" required>
                        <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="jenisKelamin" class="custom-control-input" value="Perempuan" required>
                        <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                    </div><br><br>
                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                        <label>Tanggal Lahir</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" name='tgl_lahir' data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask value="<?= old('tgl_lahir'); ?>" required>
                        </div>
                        <!-- /.input group -->
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        </form>
    </div>
</div>
<button type="button" class="btn btn-success swalDefaultSuccess" id="tes" hidden></button>

<?= $this->endsection(); ?>
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
<?= $this->endsection(); ?>