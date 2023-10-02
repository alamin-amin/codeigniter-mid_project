<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-9">
       <h1>hlw product</h1>
        </div>
    </div>
</div>
<?= $this->include('footer') ?> 
 
<?= $this->endSection() ?>