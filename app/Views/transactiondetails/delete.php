<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Delete Transaction
    </h1>
    <p class="mt-3">Are you sure?</p>
  </div>
  <div class="my-4 col-md-6">
    <a href="/transactions" class="mt-4 btn btn-secondary">Back</a>
    <a href="/transactions/destroy/<?= $transaction->id ?>" class="mt-4 btn btn-danger">Destroy</a>
  </div>
</div>
<?= $this->endSection() ?>
