<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Delete Transaction Detail
    </h1>
    <p class="mt-3">Are you sure?</p>
  </div>
  <div class="my-4 col-md-6">
    <a href="/transactiondetails" class="mt-4 btn btn-secondary">Back</a>
    <a href="/transactiondetails/destroy/<?= $transactionDetail->id ?>" class="mt-4 btn btn-danger">Destroy</a>
  </div>
</div>
<?= $this->endSection() ?>
