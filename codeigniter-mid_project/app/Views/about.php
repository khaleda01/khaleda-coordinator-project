<?= $this->extend('nav') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-8">
            <h1>this is about</h1>
        </div>
        
    </div>
</div>
<?= $this->include('footer') ?>

  
<?= $this->endSection() ?>