<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div id="index-accepted" class="index-accepted">
    <div class="index-accepted-header">
        <img src="<?= base_url('/'); ?>/user/images/Poltek-UKM.png" alt="Logo" class="index-accepted-header-icon">
        <div class="index-accepted-header-title">
            <h1 class="index-accepted-header-title-text">SELAMAT! ANDA DINYATAKAN LULUS DAN BERHAK MENGIKUTI TAHAP SELANJUTNYA</h1>
            <h1 class="index-accepted-header-title-sub">Sampai ketemu di <span style="font-weight: bold;">Leadership Training 2021</span> UKM Bahasa PNUP👋</h1>
        </div>
    </div>
    <div class="index-accepted-content">
        <div class="index-accepted-content-upper">
            <div class="index-accepted-content-upper-bio">
                <span class="index-accepted-content-upper-bio-nisn" id="index-accepted-nisn">NIM <?= $peserta['nim']; ?> - NOREG <?= $peserta['no_peserta']; ?></span>
                <span class="index-accepted-content-upper-bio-name" id="index-accepted-name"><?= $peserta['nama']; ?></span>
            </div>
        </div>
        <div class="index-accepted-content-lower">
            <div class="index-accepted-content-lower-column index-accepted-content-lower-column-25">
                <div class="index-accepted-content-lower-column-field">
                    <span class="index-accepted-content-lower-column-field-caption">Tanggal Lahir</span>
                    <span class="index-accepted-content-lower-column-field-value" id="index-accepted-birthday"><?= $peserta['tgl_lahir']; ?></span>
                </div>
            </div>
            <div class="index-accepted-content-lower-column index-accepted-content-lower-column-25">
                <div class="index-accepted-content-lower-column-field">
                    <span class="index-accepted-content-lower-column-field-caption">Jurusan</span>
                    <span class="index-accepted-content-lower-column-field-value" id="index-accepted-regency"><?= $peserta['jurusan']; ?></span>
                </div>
            </div>
            <div class="index-accepted-content-lower-column index-accepted-content-lower-column-50">
                <div class="index-accepted-content-lower-column-note">
                    <span class="index-accepted-content-lower-column-note-title">Silakan lakukan pendaftaran ulang.</span>
                    <span class="index-accepted-content-lower-column-note-subtitle">Informasi terkait tahap selanjutnya silahkan menghubungi kontak person pada link berikut :</span>
                    <a href="http://bit.ly/3uK08XW" target="_blank" class="index-accepted-content-lower-column-note-link" id="index-accepted-link">http://bit.ly/3uK08XW</a>
                </div>
            </div>
        </div>
    </div>
    <div class="index-accepted-footer">
        <p class="index-accepted-footer-paragraph">Status penerimaan anda sebagai anggota UKM Bahasa PNUP ditetapkan setelah anda mengikuti tahap selanjutnya hingga selesai. Setelah mengikuti seluruh proses, anda dapat mengikuti pengukuhan sebagai anggota UKM Bahasa PNUP secara resmi.</p>
    </div>
</div>
<?= $this->endSection(); ?>