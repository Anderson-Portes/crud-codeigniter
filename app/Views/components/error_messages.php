<?php if (session()->has('errors')) : ?>
  <div class="alert alert-danger">
    <?php foreach (session()->get('errors') as $error) : ?>
      <span class="d-block">
        <?= $error; ?>
      </span>
    <?php endforeach; ?>
  </div>
<?php endif; ?>