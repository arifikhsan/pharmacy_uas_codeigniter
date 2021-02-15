<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Edit Transaction Detail
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form action="<?= "/transactiondetails/update/" . $transactionDetail->id ?>" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">Transaction</label>
        <select value="<?= $transactionDetail->transaction_id ?>" name="transaction_id" class="form-control <?= $validation->hasError('transaction_id') ? 'is-invalid' : '' ?>">
          <?php foreach ($transactions as $transaction) : ?>
            <option value="<?= $transaction->id; ?>"><?= $transaction->id; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($validation->hasError('transaction_id')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('transaction_id') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Drug</label>
        <select value="<?= $transactionDetail->drug_id ?>" name="drug_id" class="form-control <?= $validation->hasError('drug_id') ? 'is-invalid' : '' ?>">
          <?php foreach ($drugs as $drug) : ?>
            <option value="<?= $drug->id; ?>"><?= $drug->name; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($validation->hasError('drug_id')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('drug_id') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Subtotal</label>
        <input value="<?= $transactionDetail->sub_total ?>" type="number" name="sub_total" class="form-control <?= $validation->hasError('sub_total') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('sub_total')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('sub_total') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Total</label>
        <input value="<?= $transactionDetail->total ?>" type="number" name="total" class="form-control <?= $validation->hasError('total') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('total')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('total') ?>
          </div>
        <?php endif ?>
      </div>
      <a href="/transactiondetails" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
