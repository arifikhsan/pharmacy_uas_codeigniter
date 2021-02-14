<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container my-4">
  <div>
    <h1>
      Show Transaction
    </h1>
  </div>
  <hr><br>
  <div class="">
    <div>
      <div>
        <label class="font-weight-bold">Id</label>
        <p><?= $transaction->id ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Admin</label>
        <p><?= $transaction->user_username ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Customer</label>
        <p><?= $transaction->customer_name ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Total</label>
        <p><?= $transaction->total ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Datetime</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($transaction->datetime)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Created At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($transaction->created_at)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Updated At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($transaction->updated_at)) ?></p>
      </div>
      <a href="/transactions" class="mt-4 btn btn-secondary">Back</a>
      <a href="/transactions/edit/<?= $transaction->id ?>" class="mt-4 btn btn-info">Edit</a>
      <a href="/transactions/delete/<?= $transaction->id ?>" class="mt-4 btn btn-danger">Delete</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
