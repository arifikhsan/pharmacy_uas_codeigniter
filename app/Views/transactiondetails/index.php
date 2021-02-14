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
      Transaction Details
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/admin">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/transactiondetails/add">
      Add new
    </a>
  </div>
  <div class="mt-4 table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Transaction</th>
          <th scope="col">Drug</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Total</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($transactionDetails as $i => $transactionDetail) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $transactionDetail->transaction_id ?></td>
            <td><?= $transactionDetail->drug_name ?></td>
            <td><?= number_format($transactionDetail->sub_total) ?></td>
            <td><?= number_format($transactionDetail->total) ?></td>
            <td>
              <a class="text-white btn btn-sm btn-success" href="<?= '/transactiondetails/show/' . $transactionDetail->id ?>">
                Show
              </a>
              <a class="text-white btn btn-sm btn-info" href="<?= '/transactiondetails/edit/' . $transactionDetail->id ?>">
                Edit
              </a>
              <a class="btn btn-sm btn-danger" href="<?= '/transactiondetails/delete/' . $transactionDetail->id ?>">
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
