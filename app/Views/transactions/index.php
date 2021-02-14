<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('message'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
  <?php endif; ?>
  <div>
    <h1>
      Transactions
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/transactions/add">
      Add new
    </a>
  </div>
  <div class="mt-4 table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Admin</th>
          <th scope="col">Customer</th>
          <th scope="col">Total</th>
          <th scope="col" class="d-none d-lg-block">Datetime</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($transactions as $i => $transaction) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $transaction->user_username ?></td>
            <td><?= $transaction->customer_name ?></td>
            <td><?= number_format($transaction->total) ?></td>
            <td class="d-none d-lg-block"><?= date("l, M d, Y | H:i:s", strtotime($transaction->datetime)) ?></td>
            <td>
              <a class="text-white btn btn-sm btn-success" href="<?= '/transactions/show/' . $transaction->id ?>">
                Show
              </a>
              <a class="text-white btn btn-sm btn-info" href="<?= '/transactions/edit/' . $transaction->id ?>">
                Edit
              </a>
              <a class="btn btn-sm btn-danger" href="<?= '/transactions/delete/' . $transaction->id ?>">
                Delete
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection() ?>
