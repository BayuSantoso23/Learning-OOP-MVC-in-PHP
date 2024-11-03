<div class="container mt-5">
    <div class="row">
        <dic class="vol-6">
            <h3>Students List</h3>
            <?php foreach($data['students'] as $students):?>
            <ul>
                <li><?= $students['name']; ?></li>
                <li><?= $students['age']; ?></li>
                <li><?= $students['email']; ?></li>
                <li><?= $students['job']; ?></li>
            </ul>
            <?php endforeach; ?>
        </dic>
    </div>
</div>