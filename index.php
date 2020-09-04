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
                        <h1 class="m-0 font-weight-bold text-dark">Quản lý KOL</h1>
                        <p></p>
                    </div>
                    <!-- Button Add Kol -->
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info btn-add" data-toggle="modal" data-target="#addNewKol">
                            <i class="fas fa-podcast"></i>
                            <p class="btnmodal">KOL</p>
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
                                                <label>Phone:</label>
                                                <input type="tel" class="form-control" name="kol_tel" placeholder="Phone" pattern="[0-9]{1,15}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="kol_mail" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Hình ảnh:</label>
                                                <input class="btn" type="file" onchange="readURL(this);" name="kol_img" required>
                                                <img id="imgCurrent" src="#" width="80px" height="auto">
                                            </div>
                                            <div class="form-group">
                                                <label>Lĩnh vực:</label>
                                                <input type="text" class="form-control" id="jobfield" name="job_name[]">
                                            </div>
                                            <div class="form-group">
                                                <label>Giới tính:</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kol_gender" value="Nam">
                                                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kol_gender" value="Nữ">
                                                    <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kol_gender" value="Nhóm">
                                                    <label class="form-check-label" for="inlineRadio1">Nhóm</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kol_gender" value="Không rõ">
                                                    <label class="form-check-label" for="inlineRadio2">Không rõ</label>
                                                </div>
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
                                                <button type="submit" class="btn btn-info" name="getkol">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Button Add Contract -->
                        <button type="button" class="btn btn-info btn-contract" data-toggle="modal" data-target="#addNewContract">
                            <i class="fas fa-file-contract"></i>
                            <p class="btnmodal">Hợp đồng</p>
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
                                                <button type="submit" class="btn btn-info" name="getuser">Save</button>
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
                    <div class="card mb-4 cardtable">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table tablekol" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="input-group">
                                                <input type="text" id="searchbox" class="form-control" placeholder="Tìm kiếm Kol theo tên, ảnh hưởng, sow ...">
                                                <div class="input-group-append">
                                                    <button class="btn btn-info btnsearch" type="button"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <label style="color:#000;font-weight:bold;padding-left:20px;padding-right:10px;">Platform</label>
                                            <button style="margin-right:10px;" id="fbshow" class="btn btnfb" type="button"><i class="fab fa-facebook-square"></i></button>
                                            <button style="margin-right:10px;" id="inshow" class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                                            <button style="margin-right:10px;" id="ytshow" class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                                        </div>
                                    </div>
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
                            <tr>
                                <th>Tên+Lĩnh vực</th>
                                <th class="tdkol">Ảnh hưởng</th>
                                <th class="tdkol" data-sortable="false">Tương tác</th>
                                <th data-sortable="false">Chi phí</th>
                                <th data-sortable="false">Liên hệ</th>
                                <th data-sortable="false">Lưu ý</th>
                                <th data-sortable="false"></th>
                            </tr>
                            </thead>
                            <tbody id="dataTable2">
                            <?php include('showkol.php'); ?>
                            <?php foreach($data as $value): ?>
                            <tr>
                                <td>
                                    <div class="row name-job">
                                        <div class="col-xl-3 col-sm-12">
                                            <img class="rounded" src="upload/<?php echo $value['kol_img']; ?>" alt="kol image" width="55px" height="55px">
                                        </div>
                                        <div class="col-xl-9 col-sm-12">
                                            <p class="nametag"><?php echo $value['kol_name']; ?>
                                            <span class="d-inline-block kolgender" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $value['kol_gender']; ?>">
                                            <i class="fas fa-male"></i><i class="fas fa-female"></i>
                                            </span></p>
                                            <?php foreach(array_slice($value["job_name"],0,1) as $subkey2 => $subvalue2): ?>
                                            <span class="badge badge-success tagging"><?php echo $subvalue2['job_name']?></span>
                                            <?php endforeach; ?>                                       
                                        </div>
                                    </div>                                   
                                </td>
                                <td>
                                    <div class="row platform pf1">
                                        <div class="col-xl-12">
                                            <p class="api-pf"><a target="_blank" href="<?php echo $value['link_fb']; ?>"><img class="iconpng" src="img/fb.png" alt="" width="15px" height="15px"></a>100.000.000</p>
                                            <p class="api-date">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                    <div class="row platform pf2" style="display:none;">
                                        <div class="col-xl-12">
                                            <p class="api-pf"><a target="_blank" href="<?php echo $value['link_ins']; ?>"><img class="iconpng" src="img/insta.png" alt="" width="15px" height="15px"></a>36.000.000</p>
                                            <p class="api-date">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                    <div class="row platform pf3" style="display:none;">
                                        <div class="col-xl-12">
                                            <p class="api-pf"><a target="_blank" href="<?php echo $value['link_yt']; ?>"><img class="iconpng" src="img/yt.png" alt="" width="15px" height="15px"></a>1.000.000</p>
                                            <p class="api-date">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row pf1">
                                        <div class="col-xl-12">
                                            <p class="api-pf2">38.532</p>
                                            <p class="api-date2">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                    <div class="row pf2" style="display:none;">
                                        <div class="col-xl-12">
                                            <p class="api-pf2">20.798</p>
                                            <p class="api-date2">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                    <div class="row pf3" style="display:none;">
                                        <div class="col-xl-12">
                                            <p class="api-pf2">50.123</p>
                                            <p class="api-date2">(03 Aug 2020)</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php foreach(array_slice($value["sow_name"],0,3) as $subkey => $subvalue): ?>
                                    <div class="row sow-rate">
                                        <div class="col-xl-8 padding-0">
                                            <p style="color:#000;"><?php echo $subvalue['sow_name']; ?></p>
                                        </div>
                                        <div class="col-xl-4 padding-0">
                                            <p style="color:#000;font-weight:bold;"><?php echo $subvalue['ratecard']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </td>
                                <td>
                                    <div class="row social">
                                        <div class="col-xl-6">
                                        <span class="d-inline-block" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $value['kol_tel']; ?>">
                                            <i class="fas fa-phone-alt fass"></i>
                                        </span>
                                        </div>
                                        <div class="col-xl-6">
                                        <span class="d-inline-block" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $value['kol_mail']; ?>">
                                            <i class="fas fa-envelope fass"></i>
                                        </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <?php foreach(array_slice($value["note_txt"],0,3) as $subkey3 => $subvalue3): ?>
                                    <div class="row note">
                                        <div class="col-xl-12">
                                            <p style="color:#000;"><?php echo $subvalue3['note_txt']?></p>
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
                <div class="row rowfilter1">
                    <div class="col-xl-9">
                        <p class="p-filter"><i class="fas fa-filter"></i>&nbsp&nbspBộ lọc tìm kiếm</p>
                    </div>
                    <div class="col-xl-3">
                        <button class="btn btnrefresh" type="button"><i class="fas fa-redo-alt"></i></button>
                    </div>
                </div>
                <form action="filter.php" id="filterForm">
                <div class="container-fuild boxfilter">
                    <div class="form-group">
                        <label class="p-filter">Lĩnh vực</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchjob" name="searchByJob" placeholder="Lĩnh vực">
                            <div class="input-group-append">
                                <button class="btn btn-info btnsearch" id="" type="button"><i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fuild boxfilter">
                    <div class="form-group">
                        <label class="p-filter">Ảnh hưởng&ensp;</label><label class="labelfilter">(x1.000 người)</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" id="min" name="min" class="form-control" placeholder="Từ">
                            </div>
                            <div class="col">
                                <input type="text" id="max" name="max" class="form-control" placeholder="Đến">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="p-filter">Tương tác&ensp;</label><label class="labelfilter">(x1.000 đơn vị)</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Từ">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Đến">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="p-filter">Khoảng giá&ensp;</label><label class="labelfilter">(x1.000 vnđ)</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Từ">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Đến">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group justify-content-center">
                            <button type="submit" class="btn btn-info btngo" name="filterbtn">Áp dụng</button>
                        </div>
                    </div>
                </div>
                <div class="container-fuild boxfilter">
                    <div class="row">
                        <div class="col-xl-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kol_gender" value="Nam">
                            <label class="form-check-label labelfilter p-filter" for="inlineRadio1">Nam</label>
                        </div>
                        </div>
                        <div class="col-xl-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kol_gender" value="Nữ">
                            <label class="form-check-label labelfilter p-filter" for="inlineRadio2">Nữ</label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xl-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kol_gender" value="Nhóm">
                            <label class="form-check-label labelfilter p-filter" for="inlineRadio1">Nhóm</label>
                        </div>
                        </div>
                        <div class="col-xl-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kol_gender" value="Không rõ">
                            <label class="form-check-label labelfilter p-filter" for="inlineRadio2">Không rõ</label>
                        </div>
                        </div>
                    </div>
                </div>
                </form>



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
