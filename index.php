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
                <h3 class="m-0 font-weight-bold text-dark mt-4">Quản lý KOL</h3>
            </div>
            <!-- Button Add Kol -->
            <div class="col-sm-4">
                <button type="button" class="btn btn-info btn-add" data-toggle="modal" data-target="#addNewKol">
                    <i class="fas fa-podcast"></i>
                    <p class="btnmodal">KOL</p>
                </button>
                <?php include("formaddkol.php"); ?>

            <!-- Button Add Contract -->
                <button type="button" class="btn btn-info btn-contract" data-toggle="modal" data-target="#addNewContract">
                    <i class="fas fa-file-contract"></i>
                    <p class="btnmodal">Contact</p>
                </button>
                <?php include("formcontractkol.php"); ?>
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
            <div class="card mb-4 cardtable">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="input-group">
                                    <input type="text" id="searchbox" class="form-control" placeholder="Tìm kiếm Kol theo tên, ảnh hưởng, sow ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-info btnsearch" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row float-right">
                                <label style="color:#000;font-weight:bold;padding-right:15px;padding-top:5px;">Platform</label>
                                <button style="margin-right:8px;" id="fbshow" class="btn btnfb" type="button"><i class="fab fa-facebook-square"></i></button>
                                <button style="margin-right:8px;" id="inshow" class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                                <button style="margin-right:8px;" id="ytshow" class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                                <button style="margin-right:8px;" id="tkshow" class="btn btntk" type="button"><i class="fab fa-tiktok"></i></button>
                                <button style="margin-right:8px;" id="otshow" class="btn btnot" type="button"><i class="fas fa-video"></i></button>
                                <select style="margin-right:12px;width:100px;font-weight:bold;" class="form-control" id="exportLink">
                                    <option>Export</option>
                                    <option id="pdf">PDF</option>
                                    <option id="excel">Excel</option>                                     
                                </select>
                         
                                </div>
                            </div>
                        </div>
                        <div style="padding-left:10px;font-weight:bold;">
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
                </div>
                <table class="table tablekol" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Avatar</th>
                        <th>Tên+Lĩnh vực</th>
                        <th>Gender</th>

                        <th class="tdkol">Followers</th>
                        <th class="tdkol">Engagement</th>
                        <th>Sow Facebook</th>
                        <th>Ratecard</th>

                        <th class="tdkol">Followers</th>
                        <th class="tdkol">Engagement</th>
                        <th>Sow Instagram</th>
                        <th>Ratecard</th>

                        <th class="tdkol">Followers</th>
                        <th class="tdkol">Engagement</th>
                        <th>Sow Youtube</th>
                        <th>Ratecard</th>

                        <th class="tdkol">Followers</th>
                        <th class="tdkol">Engagement</th>
                        <th>Sow TikTok</th>
                        <th>Ratecard</th>

                        <th class="tdkol">Followers</th>
                        <th class="tdkol">Engagement</th>
                        <th>Sow Offline</th>
                        <th>Ratecard</th>

                        <th>Contact</th>
                        <th>Location</th>
                        <th>Note</th>
                        <th></th>
                        <th>Company</th>
                    </tr>
                    </thead>
                    <tbody id="dataTable2">
                    <?php include('showkol.php'); ?>
                    <?php foreach($data as $value): ?>
                    <tr>
                        <td></td>
                        <td>
                            <div class="row">
                            <div class="col-xl-12 col-sm-12">
                                    <img class="rounded" src="upload/<?php echo $value['kol_img']; ?>" alt="kol image" width="45px" height="45px">
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="row name-job">
                                <div class="col-xl-12 col-sm-12">
                                    <p class="nametag"><?php echo $value['kol_name'];?></p>
                                    <span class="badge badge-info tags"><?php echo $value['kol_job'];?></span>                                      
                                </div>
                            </div>                                   
                        </td>
                        <td>
                            <p style="color:#000;" class="note"><i class="fas fa-male"></i><i class="fas fa-female"></i><?php echo $value['kol_gender']; ?></p>
                        </td>
                        <td>
                            <div class="row platform">
                                <div class="col-xl-12">
                                    <p class="api-pf"><?php echo $value['kol_id'];?></p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="api-pf2">100</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                        <?php foreach($value["sowfb_name"] as $subkey => $subvalue): ?>
                        <?php $sow = array_slice(explode(PHP_EOL,$subvalue['sowfb_name']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($sow as $sows): ?>
                                    <p style="color:#000;margin-bottom:2px;"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                        <?php foreach($value["sowfb_name"] as $subkey => $subvalue): ?>
                        <?php $rate = array_slice(explode(PHP_EOL,$subvalue['ratefb']),0,3);?>
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($rate as $rates): ?>
                                    <p style="color:#000;font-weight:bold;margin-bottom:2px;"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                            <div class="row platform">
                                <div class="col-xl-12">
                                    <p class="api-pf">36</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="api-pf2">20798</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                        <?php foreach($value["sowins_name"] as $subkeyins => $subvalueins): ?>
                        <?php $sow = array_slice(explode(PHP_EOL,$subvalueins['sowins_name']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($sow as $sows): ?>
                                    <p style="color:#000;margin-bottom:2px;"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                        <?php foreach($value["sowins_name"] as $subkeyins => $subvalueins): ?>
                        <?php $rate = array_slice(explode(PHP_EOL,$subvalueins['rateins']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($rate as $rates): ?>
                                    <p style="color:#000;font-weight:bold;margin-bottom:2px;"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                            <div class="row platform">
                                <div class="col-xl-12">
                                    <p class="api-pf">1000</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="api-pf2">50123</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                        <?php foreach($value["sowyt_name"] as $subkeyyt => $subvalueyt): ?>
                        <?php $sow = array_slice(explode(PHP_EOL,$subvalueyt['sowyt_name']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($sow as $sows): ?>
                                    <p style="color:#000;margin-bottom:2px;"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                        <?php foreach($value["sowyt_name"] as $subkeyyt => $subvalueyt): ?>
                        <?php $rate = array_slice(explode(PHP_EOL,$subvalueyt['rateyt']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($rate as $rates): ?>
                                    <p style="color:#000;font-weight:bold;margin-bottom:2px;"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                            <div class="row platform">
                                <div class="col-xl-12">
                                    <p class="api-pf">No data</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="api-pf2">No data</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                        <?php foreach($value["sowtk_name"] as $subkeytk => $subvaluetk): ?>
                        <?php $sow = array_slice(explode(PHP_EOL,$subvaluetk['sowtk_name']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($sow as $sows): ?>
                                    <p style="color:#000;margin-bottom:2px;"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                        <?php foreach($value["sowtk_name"] as $subkeytk => $subvaluetk): ?>
                        <?php $rate = array_slice(explode(PHP_EOL,$subvaluetk['ratetk']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($rate as $rates): ?>
                                    <p style="color:#000;font-weight:bold;margin-bottom:2px;"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                            <div class="row platform">
                                <div class="col-xl-12">
                                    <p class="api-pf">No data</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-xl-12">
                                    <p class="api-pf2">No data</p>
                                    
                                </div>
                            </div>
                        </td>
                        <td>
                        <?php foreach($value["sowoff_name"] as $subkeyoff => $subvalueoff): ?>
                        <?php $sow = array_slice(explode(PHP_EOL,$subvalueoff['sowoff_name']),0,3);?>   
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($sow as $sows): ?>
                                    <p style="color:#000;margin-bottom:2px;"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </td>
                        <td>
                        <?php foreach($value["sowoff_name"] as $subkeyoff => $subvalueoff): ?>
                        <?php $rate = array_slice(explode(PHP_EOL,$subvalueoff['rateoff']),0,3);?>     
                            <div class="row sow-rate">
                                <div class="col-xl-12">
                                    <?php foreach($rate as $rates): ?>
                                    <p style="color:#000;font-weight:bold;margin-bottom:2px;"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
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
                            <p style="color:#000;" class="note"><?php echo $value['kol_location']?></p>
                        </td>
                        <td>
                            <div class="row note">
                                <div class="col-xl-12">
                                    <p style="color:#000;white-space: pre-line;"><?php echo $value['kol_note']?></p>
                                </div>
                            </div>
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

                                            <a class="dropdown-item" target="_blank" href="#">
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
                            <?php 
                                include('edit.php');
                                include('detailkol.php'); 
                            ?>
                        </td>
                        <td>
                            <div class="row note">
                                <div class="col-xl-12">
                                    <p style="color:#000;white-space: pre-line;"><?php echo $value['kol_company']?></p>
                                </div>
                            </div>
                        </td>
                    </tr>
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
        <form action="filter.php" id="filterForm">
        <div class="row rowfilter1">
            <div class="col-xl-9">
                <p class="p-filter"><i class="fas fa-filter"></i>&nbsp&nbspBộ lọc tìm kiếm</p>
            </div>
            <div class="col-xl-3">
                <button class="btn btnrefresh" type="button"><i class="fas fa-redo-alt"></i></button>
            </div>
        </div>
        <div class="container-fuild boxfilter">
            <div class="form-group">
                <label class="p-filter">Lĩnh vực</label>
                <input style="font-size:12px;" type="text" class="form-control" id="searchjob" name="searchByJob" placeholder="Lĩnh vực">    
                <!-- <select style="font-size:12px;" class="form-control" id="filterjob">
                    <option value="">All</option>
                    <option value="Actor">Actor</option>
                    <option value="Singer">Singer</option>
                    <option value="Influencer">Influencer</option>
                    <option value="Youtuber">Youtuber</option>
                    <option value="Family">Family</option>
                    <option value="Player">Player</option>
                </select> -->
            </div>
            <div class="form-group">
                <label class="p-filter">Công ty</label>
                <input style="font-size:12px;" type="text" class="form-control" id="searchcompany" name="searchByCompany" placeholder="Công ty">
            </div>
        </div>
        <div class="container-fuild boxfilter">
            <div class="form-group">
                <label class="p-filter">Ảnh hưởng&ensp;</label><label class="labelfilter">(x1.000 người)</label>
                <div class="row pf1">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minfb1" name="minfb1" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxfb1" name="maxfb1" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf2" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minins1" name="minins1" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxins1" name="maxins1" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf3" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minyt1" name="minyt1" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxyt1" name="maxyt1" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf4" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="mintk1" name="mintk1" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxtk1" name="maxtk1" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf5" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minoff1" name="minoff1" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxoff1" name="maxoff1" class="form-control" placeholder="Đến">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="p-filter">Tương tác&ensp;</label><label class="labelfilter">(x1.000 đơn vị)</label>
                <div class="row pf1">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minfb2" name="minfb2" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxfb2" name="maxfb2" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf2" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minins2" name="minins2" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxins2" name="maxins2" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf3" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minyt2" name="minyt2" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxyt2" name="maxyt2" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf4" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="mintk2" name="mintk2" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxtk2" name="maxtk2" class="form-control" placeholder="Đến">
                    </div>
                </div>
                <div class="row pf5" style="display:none;">
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="minoff2" name="minoff2" class="form-control" placeholder="Từ">
                    </div>
                    <div class="col">
                        <input style="font-size:10px;" type="text" id="maxoff2" name="maxoff2" class="form-control" placeholder="Đến">
                    </div>
                </div>
            </div>
            
            <!-- <div class="form-group">
                <div class="input-group justify-content-center">
                    <button type="submit" class="btn btn-info btngo" name="filterbtn">Áp dụng</button>
                </div>
            </div> -->
        </div>
        <div class="container-fuild boxfilter">
            <div class="form-group">
                <label class="p-filter">Location</label>
                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input filterlocation" type="checkbox" name="kol_location" value="Bắc">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio1">Bắc</label>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input filterlocation" type="checkbox" name="kol_location" value="Trung">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio2">Trung</label>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input filterlocation" type="checkbox" name="kol_location" value="Nam">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio1">Nam</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
            <label class="p-filter">Gender</label>
                <div class="row">
                    <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="kol_gender" value="Nam">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio1">Nam</label>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="kol_gender" value="Nữ">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio2">Nữ</label>
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="kol_gender" value="Nhóm">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio1">Nhóm</label>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="kol_gender" value="Không rõ">
                        <label class="form-check-label labelfilter p-checkbox" for="inlineRadio2">Không rõ</label>
                    </div>
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
