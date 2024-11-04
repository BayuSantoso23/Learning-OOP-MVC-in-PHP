<div class="container mt-5">
    <div class="row">
        <dic class="vol-6">
            <h3>Students List</h3>
            <ul class="list-group">
                <?php foreach($data['students'] as $students):?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $students['name']; ?>
                        <a href="<?= BASEURL; ?>/students/details/<?= $students['id']; ?>" 
                        class="badge badge-primary ">details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </dic>
    </div>
</div>