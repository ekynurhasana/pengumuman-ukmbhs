<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div class="pagination-centered mt-5 mb-5">
    <div id="index-form" class="index-form">
        <form action="<?= base_url() ?>/Home/status" method="post" enctype="multipart/form-data" class="index-form-content" id="index-form-form">
            <?= csrf_field() ?>
            <div class="index-form-content-logo">
                <img src="<?= base_url('/'); ?>/user/images/Poltek-UKM.png" class="index-form-content-logo-snmptn" alt="Logo">
            </div>
            <h4 class="index-form-content-title">OPEN RECRUITMENT UKM BAHASA PNUP 2021</h4>
            <span class="index-form-content-subtitle">Masukkan Nomor Registrasi dan Tanggal Lahir.</span>
            <div class="index-form-content-form">
                <div class="index-form-content-form-field">
                    <span class="index-form-content-form-field-caption">Nomor Pendaftaran</span>
                    <input class="index-form-content-form-field-input" name="no_peserta" id="index-form-registration-number" type="tel" placeholder="BHS-001" maxlength="7" value="BHS-001">
                </div>
                <div class="index-form-content-form-field">
                    <span class="index-form-content-form-field-caption">Tanggal Lahir</span>
                    <div class="index-form-content-form-field-group">
                        <input class="index-form-content-form-field-group-input" type="tel" placeholder="Tanggal" id="index-form-birthday-day" name="tanggal" maxlength="2">
                        <span class="index-form-content-form-field-group-separator">/</span>
                        <input class="index-form-content-form-field-group-input" type="tel" placeholder="Bulan" id="index-form-birthday-month" name="bulan" maxlength="2">
                        <span class="index-form-content-form-field-group-separator">/</span>
                        <input class="index-form-content-form-field-group-input" type="tel" placeholder="Tahun" id="index-form-birthday-year" name="tahun" maxlength="4">
                    </div>
                </div>
            </div>
            <span class="index-form-content-alert" id="index-form-alert"></span>
            <div class="index-form-content-footer">
                <input type="submit" class="index-form-content-footer-submit" id="index-form-submit" value="LIHAT HASIL SELEKSI">
            </div>
        </form>
        <div class="index-form-border"></div>
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