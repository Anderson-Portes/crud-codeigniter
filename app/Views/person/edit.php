<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-11 p-0">
    <div class="card">
      <div class="card-header">
        <h5>Edit Person</h5>
        <a href="<?= base_url('/person') ?>" class="btn btn-sm btn-primary">
          <i class="bi bi-arrow-left me-2"></i>Back to List
        </a>
      </div>
      <div class="card-body">
        <form action="<?= base_url('/person/' . $person['id']) ?>" method="post">
          <?= $this->include('components/error_messages'); ?>
          <?= $this->include('components/success_message'); ?>
          <input hidden name="_method" value="PUT">
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= old('name') ?? $person['name'] ?>">
            <label for="name">Name</label>
          </div>
          <div class="form-floating mb-2">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?= old('email') ?? $person['email'] ?>">
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?= old('phone') ?? $person['phone'] ?>">
            <label for="phone">Phone</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?= old('address') ?? $person['address'] ?>">
            <label for="address">Address</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="company" placeholder="Company" name="company" value="<?= old('company') ?? $person['company'] ?>">
            <label for="company">Company</label>
          </div>
          <button class="btn btn-sm btn-primary">
            <i class="bi bi-save me-2"></i>Salvar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>