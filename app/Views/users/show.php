<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="container my-4">
  <div>
    <h1>
      Show User
    </h1>
  </div>
  <hr><br>
  <div class="">
    <div>
      <div>
        <label class="font-weight-bold">Id</label>
        <p><?= $user->id ?></p>
      </div>
      <div>
        <label class="font-weight-bold">Username</label>
        <p><?= $user->username ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Password</label>
        <p><?= $user->password ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Created At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($user->created_at)) ?></p>
      </div>
      <div class="mt-3">
        <label class="font-weight-bold">Updated At</label>
        <p><?= date("l, M d, Y | H:i:s", strtotime($user->updated_at)) ?></p>
      </div>
      <a href="/users" class="mt-4 btn btn-secondary">Back</a>
      <a href="/users/edit/<?= $user->id ?>" class="mt-4 btn btn-info">Edit</a>
      <a href="/users/delete/<?= $user->id ?>" class="mt-4 btn btn-danger">Delete</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
