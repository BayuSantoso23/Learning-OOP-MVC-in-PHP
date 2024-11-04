<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['students']['name']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['students']['age']; ?></h6>
        <p class="card-text"><?= $data['students']['email']; ?></p>
        <p class="card-text"><?= $data['students']['job']; ?></p>
        <a href="<?= BASEURL; ?>/students" class="card-link">Return</a>
    </div>
    </div>
</div>