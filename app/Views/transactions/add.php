<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container">
  <div>
    <h1>
      Add New Transaction
    </h1>
  </div>
  <div class="my-4 col-md-6">
    <form action="/transactions/insert" method="post">
      <?= csrf_field() ?>
      <div class="form-group">
        <label class="form-label">User</label>
        <select <?= old('user_id') ?> name="user_id" class="form-control <?= $validation->hasError('user_id') ? 'is-invalid' : '' ?>">
          <?php foreach ($users as $user) : ?>
            <option value="<?= $user->id; ?>"><?= $user->username; ?></option>
          <?php endforeach; ?>
        </select>
        <?php if ($validation->hasError('user_id')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('user_id') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Customer Name</label>
        <input value="<?= old('customer_name') ?>" name="customer_name" class="form-control <?= $validation->hasError('customer_name') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('customer_name')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('customer_name') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Total</label>
        <input value="<?= old('total') ?>" type="number" name="total" class="form-control <?= $validation->hasError('total') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('total')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('total') ?>
          </div>
        <?php endif ?>
      </div>
      <div class="mt-3 form-group">
        <label class="form-label">Datetime</label>
        <input value="<?= old('datetime') ?>" type="datetime-local" name="datetime" class="form-control <?= $validation->hasError('datetime') ? 'is-invalid' : '' ?>">
        <?php if ($validation->hasError('datetime')) : ?>
          <div class="invalid-feedback">
            <?= $validation->getError('datetime') ?>
          </div>
        <?php endif ?>
      </div>
      <a href="/transactions" class="mt-4 btn btn-secondary">Back</a>
      <button type="submit" class="mt-4 btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
