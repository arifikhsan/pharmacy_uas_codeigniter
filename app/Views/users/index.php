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
      Users
    </h1>
    <a class="mt-2 btn btn-sm btn-secondary" href="/admin">
      Back
    </a>
    <a class="mt-2 text-white btn btn-sm btn-info" href="/users/add">
      Add new
    </a>
  </div>
  <div class="mt-4 table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($users as $i => $user) : ?>
          <tr>
            <th scope="row"><?= $i + 1 ?></th>
            <td><?= $user->username ?></td>
            <td><?= $user->password ?></td>
            <td>
              <a class="text-white btn btn-sm btn-success" href="<?= '/users/show/' . $user->id ?>">
                Show
              </a>
              <a class="text-white btn btn-sm btn-info" href="<?= '/users/edit/' . $user->id ?>">
                Edit
              </a>
              <a class="btn btn-sm btn-danger" href="<?= '/users/delete/' . $user->id ?>">
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
