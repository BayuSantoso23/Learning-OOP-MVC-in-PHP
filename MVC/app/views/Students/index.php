<div class="container mt-3">
    <div class="row">
        <dic class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
                Add Student
            </button>
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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Add Student Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Students/add" method="POST">

            <!-- Name Form -->
            <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" 
                  id="name" name="name" placeholder="Enter name">
            </div>
            
            <!-- Age Form -->
            <div class="form-group">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" 
                  id="age" name="age" placeholder="Enter age">
            </div>

            <!-- Email Form -->
            <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" 
                  id="email" name="email" placeholder="Enter email">
            </div>

            <!-- Job Option -->
             <div class="form-group">
              <label for="job">Job</label>
              <select class="form-control" id="job" name="job">
                <option value="GoalKeeper">GoalKeeper</option>
                <option value="Barista">Barista</option>
                <option value="Battleship">Battleship</option>
                <option value="President">President</option>
                <option value="Bussinessman">Bussinessman</option>
              </select>
             </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Data</button>
          </div>
        </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-0jpkqLi6E7Q5H59j7L3s3Y1O/J+4fGHgGg0IcHKFgy3KtRUXBOoAcBRTZ11IhD14" crossorigin="anonymous"></script>

