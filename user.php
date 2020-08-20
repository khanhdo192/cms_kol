<?php
    include('db_connect.php');
    include('header.php');
    include('sidebar.php');
    include('topbar.php');
    include('getuser.php');
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Kols Manager</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="username" class="form-control" name="username" aria-describedby="" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <select class="form-control" name="role">
                    <option>Admin</option>
                    <option>Employee</option>
                    <option>User</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="getuser">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Add New User
  </button>


</div>
<?php
    include('footer.php');
    include('js.php');
?>