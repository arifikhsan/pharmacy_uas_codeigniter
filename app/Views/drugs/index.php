<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
  <div>
    <h1>
      Drugs
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/drugs/add">
      Add new
    </a>
  </div>
  <table class="table mt-4 table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($drugs as $i => $drug) : ?>
        <tr>
          <th scope="row"><?= $i + 1 ?></th>
          <td><?= $drug->name ?></td>
          <td><?= number_format($drug->price) ?></td>
          <td>
            <a class="text-white btn btn-sm btn-info" href="<?= '/drugs/edit/' . $drug->id ?>">
              Edit
            </a>
            <a class="btn btn-sm btn-danger" href="<?= '/drugs/delete/' . $drug->id ?>">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
<?= $this->endSection() ?>
