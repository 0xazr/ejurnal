
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
              <div id="breadcrumb">
                  <a href="/">Home</a> &gt;
                  <a href="/" class="current">Information Technology Journal</a>
               </div>
              <h2><?= $contentTitle; ?></h2>
              <div id="content">
                <div>Jurnal ini bertujuan mempublikasikan hasil penelitian di bidang Teknologi Informasi</div>
              </div>
<?= $this->endSection(); ?>