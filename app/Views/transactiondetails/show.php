<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container my-4">
  <div>
    <h1>
      Show Transaction Detail
    </h1>
  </div>
  <hr><br>
  <div class="">
    <div>
      <div>
        <label class="font-weight-bold">Id</label>
        <p><?= $transactionDetail->id ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Admin</label>
        <p><?= $transactionDetail->transaction_id ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Drug name</label>
        <p><?= $transactionDetail->drug_name ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Subtotal</label>
        <p><?= $transactionDetail->sub_total ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Total</label>
        <p><?= $transactionDetail->total ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Created At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($transactionDetail->created_at)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Updated At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($transactionDetail->updated_at)) ?></p>
      </div>
      <a href="/transactiondetails" class="mt-4 btn btn-secondary">Back</a>
      <a href="/transactiondetails/edit/<?= $transactionDetail->id ?>" class="mt-4 btn btn-info">Edit</a>
      <a href="/transactiondetails/delete/<?= $transactionDetail->id ?>" class="mt-4 btn btn-danger">Delete</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
