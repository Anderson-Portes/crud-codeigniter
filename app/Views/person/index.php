<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
  <div class="col-11 p-0">
    <div class="card">
      <div class="card-header">
        <h5>Person List</h5>
        <a href="<?= base_url('/person/new') ?>" class="btn btn-sm btn-primary">
          <i class="bi bi-plus-circle me-2"></i>Add New Person
        </a>
      </div>
      <div class="card-body table-resposive">
        <?= $this->include('components/success_message'); ?>
        <table class="table table-hover table-borderless">
          <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Company</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <?php if (!empty($people)) : ?>
              <?php foreach ($people as $person) : ?>
                <tr>
                  <td>
                    <?= $person['id'] ?>
                  </td>
                  <td>
                    <?= $person['name'] ?>
                  </td>
                  <td>
                    <?= $person['email'] ?>
                  </td>
                  <td>
                    <?= $person['phone'] ?>
                  </td>
                  <td>
                    <?= $person['address'] ?>
                  </td>
                  <td>
                    <?= $person['company'] ?>
                  </td>
                  <td>
                    <a href="<?= base_url('/person/' . $person['id'] . '/edit') ?>" class="btn btn-sm btn-outline-success">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="<?= base_url('/person/' . $person['id']) ?>" method="post">
                      <input hidden name="_method" value="DELETE">
                      <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Do  you want to delete this person?')">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="7">No people avaliable...</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>