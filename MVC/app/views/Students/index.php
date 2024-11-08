<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="row">
        <dic class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 addModalButton" data-toggle="modal" data-target="#formModal">
                Add Student
            </button>

            <ul class="list-group">
                <?php foreach($data['students'] as $students): ?>
                    <li class="list-group-item">
                        <?= $students['name']; ?>

                        <a href="<?= BASEURL; ?>/students/delete/<?= $students['id']; ?>" 
                          class="badge badge-danger float-right ml-2" 
                          onclick="return confirm('Are you sure to delete this?')">delete</a>

                        <a href="#" 
                          class="badge badge-success float-right ml-2 editModalButton"
                          data-toggle="modal" data-target="#formModal" 
                          data-id="<?= $students['id']; ?>">Edit</a>

                        <a href="<?= BASEURL; ?>/students/details/<?= $students['id']; ?>" 
                          class="badge badge-primary float-right ml-2">details</a>
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
          <input type="hidden" name="id" id="id">

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
                <option value="Soccer Player">Soccer Player</option>
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
