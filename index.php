<?php
    session_start();
    include('header.php');
    include('db_connect.php');
    include('sidebar.php');
    include('topbar.php');
?>
        <!-- Begin Page Content -->
        <div class="page-content">
            <!-- Nav Page -->
            <div class="container-fluid nav-page">
                <div class="row toptable">
                    <div class="col-sm-8">
                        <p></p>
                        <h1 class="m-0 font-weight-bold text-dark">KOL MANAGER</h1>
                        <p></p>
                    </div>
                    <!-- Button Add Kol -->
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-success btn-add" data-toggle="modal" data-target="#addNewKol">
                            <i class="fas fa-podcast"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addNewKol" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">New KOL</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="getkol.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Tên Kol:</label>
                                                <input type="name" class="form-control" name="kol_name" placeholder="KOL name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="kol_mail" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input type="tel" class="form-control" name="kol_tel" placeholder="Phone" pattern="[0-9]{1,15}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Hình ảnh:</label>
                                                <input class="btn" type="file" name="kol_img" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Lĩnh vực:</label>
                                                <input type="text" class="form-control" id="jobfield" name="job_name[]">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới tính:</label>
                                                <select class="form-control" name="kol_gender" required>
                                                    <option value="">Unknow</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Group</option>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <label>Nền tảng:</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btnfb" type="button"><i class="fab fa-facebook-square"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control" name="link_fb" placeholder="Link . . .">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control" name="link_ins" placeholder="Link . . .">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control" name="link_yt" placeholder="Link . . .">
                                                </div>
                                            </div>
                                            <div class="form-group" id="postfb">
                                                <label>Tương tác Facebook:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="in_fb[]" placeholder="Link ..." >
                                                    <div class="input-group-append">
                                                        <button class="btn btnplus" id="addfb" type="button"><i class="fas fa-plus-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="postins">
                                                <label>Tương tác Instagram:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="in_ins[]" placeholder="Link ..." >
                                                    <div class="input-group-append">
                                                        <button class="btn btnplus" id="addins" type="button"><i class="fas fa-plus-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="postyt">
                                                <label>Tương tác Youtube:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="in_yt[]" placeholder="Link ..." >
                                                    <div class="input-group-append">
                                                        <button class="btn btnplus" id="addyt" type="button"><i class="fas fa-plus-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="curd_table">
                                                <label for="">Scope of work & Rate card:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="sow_name[]" placeholder="Sow" required>
                                                    <input type="text" class="form-control" name="ratecard[]" placeholder="Rate card" required>
                                                    <input type="date" class="form-control" name="time[]" placeholder="" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btnplus" id="add" type="button"><i class="fas fa-plus-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group" id="noteform">
                                                <label>Lưu ý: </label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="note_txt[]" placeholder="Note">
                                                    <div class="input-group-append">
                                                        <button class="btn btnplus" id="addnote" type="button"><i class="fas fa-plus-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="getkol">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Button Add Contract -->
                        <button type="button" class="btn btn-primary btn-contract" data-toggle="modal" data-target="#addNewContract">
                            <i class="fas fa-file-contract"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="addNewContract" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                <button type="submit" class="btn btn-primary" name="getuser">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Page -->

            <!-- Main Screen -->
            <div class="row">
              <div class="col-sm-10 main-screen">
                <!-- Begin Page Content -->
                <div class="container-fluid main-table">
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Info of KOL</h6>
                        <?php
                            if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                                echo '<p> '.$_SESSION['success'].' </p>';
                                unset($_SESSION['success']);
                            }
                            if(isset($_SESSION['fail']) && $_SESSION['fail'] !=''){
                                echo '<p> '.$_SESSION['fail'].' </p>';
                                unset($_SESSION['fail']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['success_edit']) && $_SESSION['success_edit'] !=''){
                                echo '<p> '.$_SESSION['success_edit'].' </p>';
                                unset($_SESSION['success_edit']);
                            }
                            if(isset($_SESSION['fail_edit']) && $_SESSION['fail_edit'] !=''){
                                echo '<p> '.$_SESSION['fail_edit'].' </p>';
                                unset($_SESSION['fail_edit']);
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Tên+Lĩnh vực</th>
                                <th>Platform social</th>
                                <th>Scope of work</th>
                                <th>Liên hệ</th>
                                <th>Lưu ý</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php include('showkol.php'); ?>
                            <?php foreach($data as $value): ?>
                            <tr>
                                <td>
                                    <div class="row name-job">
                                        <div class="col-xl-4">
                                            <img class="kol-img" src="upload/<?php echo $value['kol_img']; ?>" alt="" width="55px" height="55px">
                                        </div>
                                        <div class="col-xl-8">
                                            <p class="nametag"><?php echo $value['kol_name']; ?></p>
                                            <?php foreach(array_slice($value["job_name"],0,1) as $subkey2 => $subvalue2): ?>
                                            <span class="badge badge-success nametag"><?php echo $subvalue2['job_name']?></span><br>
                                            <?php endforeach; ?>                                       
                                        </div>
                                    </div>                                   
                                </td>
                                <td>
                                    <div class="row platform">
                                        <div class="col-xl-3">
                                            <a href="<?php echo $value['link_fb']; ?>"><img class="iconpng" src="img/fb.png" alt="" width="11px" height="11px"></a><br>
                                        </div>
                                        <div class="col-xl-9">
                                            <p class="api-pf">100 M</p>
                                        </div>
                                    </div>
                                    <div class="row platform">
                                        <div class="col-xl-3">
                                            <a href="<?php echo $value['link_ins']; ?>"><img class="iconpng" src="img/insta.png" alt="" width="11px" height="11px"></a><br>
                                        </div>
                                        <div class="col-xl-9">
                                            <p class="api-pf">36 M</p>
                                        </div>
                                    </div>
                                    <div class="row platform">
                                        <div class="col-xl-3">
                                            <a href="<?php echo $value['link_yt']; ?>"><img class="iconpng" src="img/yt.png" alt="" width="11px" height="11px"></a>
                                        </div>
                                        <div class="col-xl-9">
                                            <p class="api-pf">1 M</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php foreach(array_slice($value["sow_name"],0,3) as $subkey => $subvalue): ?>
                                    <div class="row sow-rate">
                                        <div class="col-xl-8">
                                            <p><?php echo $subvalue['sow_name']; ?></p>
                                        </div>
                                        <div class="col-xl-4">
                                            <p><?php echo $subvalue['ratecard']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </td>
                                <td>
                                    <div class="row social">
                                        <div class="col-xl-6">
                                        <span class="d-inline-block" data-toggle="popover" data-placement="bottom" data-content="<?php echo $value['kol_tel']; ?>">
                                            <i class="fas fa-phone-alt fass"></i>
                                        </span>
                                        </div>
                                        <div class="col-xl-6">
                                        <span class="d-inline-block" data-toggle="popover" data-placement="bottom" data-content="<?php echo $value['kol_mail']; ?>">
                                            <i class="fas fa-envelope fass"></i>
                                        </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php foreach(array_slice($value["note_txt"],0,3) as $subkey3 => $subvalue3): ?>
                                    <div class="row note">
                                        <div class="col-xl-12">
                                            <p><?php echo $subvalue3['note_txt']?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <ul class="navbar-nav ml-auto">
                                                <li class="nav-item dropdown no-arrow mx-1">
                                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-h"></i>
                                                    </a>
                                                    <!-- Dropdown - Alerts -->
                                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#editKol<?php echo $value['kol_id']; ?>">
                                                        Edit Kol
                                                    </button>
                                                    <button type="button" class="btn btn-primary dropdown-item view-data" data-toggle="modal" data-target="#detailKol<?php echo $value['kol_id']; ?>">
                                                        Detail Kol
                                                    </button>
                                                    
                                                    <a class="dropdown-item" href="#">
                                                        <div>Download Kol</div>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div>Kol's contract</div>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <div>Delete Kol</div>
                                                    </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php 
                                include('detailkol.php');
                                include('edit.php'); 
                            ?>
                            <?php endforeach; ?>          
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>

                    </div>
                    <!-- /.container-fluid -->

              </div>
              <!-- End Main Screen -->

              <!-- Filter Screen -->
              <div class="col-sm-2 filter-screen">
                
              </div>
              <!-- End Filter Screen -->
            </div>
        </div>
        <!-- End of container-fluid -->
        
    <?php
        include('js.php');
        include('footer.php');
    ?>
</body>

</html>
