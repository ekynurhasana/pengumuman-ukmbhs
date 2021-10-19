<?= $this->extend('user/template'); ?>
<?= $this->section('content'); ?>
<div id="index-rejected" class="index-rejected">
    <div class="index-rejected-header">
        <img src="<?= base_url('/'); ?>/user/images/Poltek-UKM.png" alt="Logo" class="index-rejected-header-icon">
        <div class="header-title">
            <h1 class="index-rejected-header-title-text">ANDA DINYATAKAN TIDAK LULUS SELEKSI OPREC UKM BAHASA PNUP 2021</h1>
            <span class="index-rejected-header-title-sub">Never give up! Pemenang bukan orang yang tidak pernah gagal, tetapi orang yang tidak pernah berhenti berusaha. Sampai bertemu di OPREC tahun depan 👋🏻</span>
        </div>
    </div>
    <div class="index-rejected-content">
        <div class="index-rejected-content-upper">
            <div class="index-rejected-content-upper-bio">
                <span class="index-rejected-content-upper-bio-nisn" id="index-rejected-nisn">NIM <?= $peserta['nim']; ?> - NOREG <?= $peserta['no_peserta']; ?></span>
                <span class="index-rejected-content-upper-bio-name" id="index-rejected-name"><?= $peserta['nama']; ?></span>
            </div>
        </div>
        <div class="index-rejected-content-lower">
            <div class="index-rejected-content-lower-column index-rejected-content-lower-column-25">
                <div class="index-rejected-content-lower-column-field">
                    <span class="index-rejected-content-lower-column-field-caption">Tanggal Lahir</span>
                    <span class="index-rejected-content-lower-column-field-value" id="index-rejected-birthday"><?= $peserta['tgl_lahir']; ?></span>
                </div>
            </div>
            <div class="index-rejected-content-lower-column index-rejected-content-lower-column-25">
                <div class="index-rejected-content-lower-column-field">
                    <span class="index-rejected-content-lower-column-field-caption">Jurusan</span>
                    <span class="index-rejected-content-lower-column-field-value" id="index-rejected-regency"><?= $peserta['jurusan']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>