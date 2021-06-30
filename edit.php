<div class="modal fade" id="editKol<?php echo $value['kol_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update KOL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editkol.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" class="form-control" name="kol_id" value="<?php echo $value['kol_id']; ?>">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Tên Kol</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="name" class="form-control inputform" name="kol_name" placeholder="KOL name" value="<?php echo $value['kol_name']?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Phone</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="tel" class="form-control inputform" name="kol_tel" placeholder="Phone" pattern="[0-9]{1,15}" value="<?php echo $value['kol_tel']?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Email</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="email" class="form-control inputform" name="kol_mail" placeholder="Email" value="<?php echo $value['kol_mail']?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Address</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control inputform" name="kol_address" placeholder="Address" value="<?php echo $value['kol_address']?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="avatar-wrapper2 mt-0 mr-2">
                                    <img class="profile-pic2" src="upload/<?php echo $value['kol_img']?>" />
                                    <div class="upload-button2">
                                        
                                    </div>
                                </div>
                                <input class="btn file-upload2" type="file" accept="image/*" name="kol_img" required>        
                            </div>
                        </div>
                    </div>






                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2">
                                        <label style="font-weight:bold;color:#000;">Location</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Bắc" <?php echo ($value['kol_location']=='Bắc')?'checked':'' ?>>
                                            <label class="form-check-label">Bắc</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Trung" <?php echo ($value['kol_location']=='Trung')?'checked':'' ?>>
                                            <label class="form-check-label">Trung</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Nam" <?php echo ($value['kol_location']=='Nam')?'checked':'' ?>>
                                            <label class="form-check-label">Nam</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2">
                                        <label style="font-weight:bold;color:#000;">Giới tính</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nam" <?php echo ($value['kol_gender']=='Nam')?'checked':'' ?>>
                                            <label class="form-check-label">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nữ" <?php echo ($value['kol_gender']=='Nữ')?'checked':'' ?>>
                                            <label class="form-check-label">Nữ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nhóm" <?php echo ($value['kol_gender']=='Nhóm')?'checked':'' ?>>
                                            <label class="form-check-label">Nhóm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Không rõ" <?php echo ($value['kol_gender']=='Không rõ')?'checked':'' ?>>
                                            <label class="form-check-label">Không rõ</label>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </div>                       
                    </div>


                    <input type="hidden" class="form-control" name="job_id" >
                    <input type="hidden" class="form-control" name="company_id" >
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Lĩnh vực</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control editjobfield inputform" name="job_name" value="<?php echo $value['kol_job']?>">
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;color:#000;">Công ty</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control editcompanyfield inputform" name="company_name" value="<?php echo $value['kol_company']?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:5px;margin-bottom:25px">
                    
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btnfb" type="button"><i class="fab fa-facebook-square"></i></button>
                                    </div>
                                    <input type="text" class="form-control inputform" name="link_fb" placeholder="Link . . ." value="<?php echo $value['link_fb']?>">
                                </div>
                            </div>
                            <div class="form-group" id="postfb">
                                <label style="font-weight:bold;color:#000;">Tương tác Facebook</label>
                                <?php foreach($value["postfb_link1"] as $subkey4 => $subvalue4): ?>
                                <input type="hidden" class="form-control" name="postfb_id" value="<?php echo $subvalue4['postfb_id']; ?>">
                                <input type="text" class="form-control inputform" name="in_fb1" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link1'] ?>">
                                <input type="text" class="form-control inputform" name="in_fb2" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link2'] ?>">
                                <input type="text" class="form-control inputform" name="in_fb3" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link3'] ?>">
                                <input type="text" class="form-control inputform" name="in_fb4" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link4'] ?>">
                                <input type="text" class="form-control inputform" name="in_fb5" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link5'] ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                                    </div>
                                    <input type="text" class="form-control inputform" name="link_ins" placeholder="Link . . ." value="<?php echo $value['link_ins']?>">
                                </div>
                            </div>
                            <div class="form-group" id="postins">
                                <label style="font-weight:bold;color:#000;">Tương tác Instagram</label>
                                <?php foreach($value["postins_link1"] as $subkey5 => $subvalue5): ?>
                                <input type="hidden" class="form-control" name="postins_id" value="<?php echo $subvalue5['postins_id']; ?>">                      
                                <input type="text" class="form-control inputform" name="in_ins1" placeholder="Link ..." value="<?php echo $subvalue5['postins_link1']; ?>">
                                <input type="text" class="form-control inputform" name="in_ins2" placeholder="Link ..." value="<?php echo $subvalue5['postins_link2']; ?>">
                                <input type="text" class="form-control inputform" name="in_ins3" placeholder="Link ..." value="<?php echo $subvalue5['postins_link3']; ?>">
                                <input type="text" class="form-control inputform" name="in_ins4" placeholder="Link ..." value="<?php echo $subvalue5['postins_link4']; ?>">
                                <input type="text" class="form-control inputform" name="in_ins5" placeholder="Link ..." value="<?php echo $subvalue5['postins_link5']; ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                                    </div>
                                    <input type="text" class="form-control inputform" name="link_yt" placeholder="Link . . ." value="<?php echo $value['link_yt']?>">
                                </div>
                            </div>
                            <div class="form-group" id="postyt">
                                <label style="font-weight:bold;color:#000;">Tương tác Youtube</label>
                                <?php foreach($value["postyt_link1"] as $subkey6 => $subvalue6): ?>
                                <input type="hidden" class="form-control" name="postyt_id" value="<?php echo $subvalue6['postyt_id']; ?>">                        
                                <input type="text" class="form-control inputform" name="in_yt1" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link1']; ?>">
                                <input type="text" class="form-control inputform" name="in_yt2" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link2']; ?>">
                                <input type="text" class="form-control inputform" name="in_yt3" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link3']; ?>">
                                <input type="text" class="form-control inputform" name="in_yt4" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link4']; ?>">
                                <input type="text" class="form-control inputform" name="in_yt5" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link5']; ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group editcurd_tablefb" id="mylist">
                                <label style="color:#1877F2;font-weight:bold;">Sow Facebook</label>
                                <?php foreach($value["sowfb_name"] as $subkey => $subvalue): ?>
                                <input type="hidden" class="form-control" name="sowfb_id" value="<?php echo $subvalue['sowfb_id']; ?>">
                                <?php $sown = explode(PHP_EOL,$subvalue['sowfb_name']);
                                $rate = explode(PHP_EOL,$subvalue['ratefb']);
                                $count = 1;$count2 = 1; ?>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <?php foreach($sown as $sowns):
                                            $count2--; ?>
                                        <input type="text" class="form-control row<?php echo $count2?> inputform" name="sowfb_name[]" placeholder="Sow" value="<?php echo $sowns; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xl-5">
                                        <?php foreach($rate as $rates):
                                        $count--; ?>
                                        <div class="form-row">
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control row<?php echo $count?> inputform" name="ratefb[]" placeholder="Ratecard" value="<?php echo $rates; ?>">  
                                            </div>
                                            <div class="col-xl-2">
                                                <span class="minusinput removefb row<?php echo $count?>" data-row="row<?php echo $count?>"><i style="margin-top:10px;" class="fas fa-times"></i></span>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="plusinput editfb"><i class="fas fa-plus"></i> Thêm</span>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group editcurd_tableins">
                                <label style="color:#d6249f;font-weight:bold;">Sow Instagram</label>
                                <?php foreach($value["sowins_name"] as $subkeyins => $subvalueins): ?>
                                <input type="hidden" class="form-control" name="sowins_id" value="<?php echo $subvalueins['sowins_id']; ?>">
                                <?php $sown = explode(PHP_EOL,$subvalueins['sowins_name']);
                                $rate = explode(PHP_EOL,$subvalueins['rateins']);
                                $count = 1;$count2 = 1; ?>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <?php foreach($sown as $sowns):
                                            $count2--; ?>
                                        <input type="text" class="form-control row2<?php echo $count2?> inputform" name="sowins_name[]" placeholder="Sow" value="<?php echo $sowns; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xl-5">
                                        <?php foreach($rate as $rates):
                                        $count--; ?>
                                        <div class="form-row">
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control row2<?php echo $count?> inputform" name="rateins[]" placeholder="Ratecard" value="<?php echo $rates; ?>">  
                                            </div>
                                            <div class="col-xl-2">
                                                <span class="minusinput removeins row2<?php echo $count?>" data-row="row2<?php echo $count?>"><i style="margin-top:10px;" class="fas fa-times"></i></span>
                                            </div>
                                            <!-- <div class="input-group-append">                                   
                                                <button class="btn btnminus removeins row2<?php echo $count?>" data-row="row2<?php echo $count?>" type="button"><i class='fas fa-minus-circle'></i></button>
                                            </div> -->
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="plusinput editins"><i class="fas fa-plus"></i> Thêm</span>
                            <!-- <button class="btn btnplus editins" type="button"><i class="fas fa-plus-circle"></i></button> -->
                        </div>
                    </div>



                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group editcurd_tableyt">
                                <label style="color:#FE0000;font-weight:bold;">Sow Youtube</label>
                                <?php foreach($value["sowyt_name"] as $subkeyyt => $subvalueyt): ?>
                                <input type="hidden" class="form-control" name="sowyt_id" value="<?php echo $subvalueyt['sowyt_id']; ?>">
                                <?php $sown = explode(PHP_EOL,$subvalueyt['sowyt_name']);
                                $rate = explode(PHP_EOL,$subvalueyt['rateyt']);
                                $count = 1;$count2 = 1; ?>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <?php foreach($sown as $sowns):
                                            $count2--; ?>
                                        <input type="text" class="form-control row3<?php echo $count2?> inputform" name="sowyt_name[]" placeholder="Sow" value="<?php echo $sowns; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xl-5">
                                        <?php foreach($rate as $rates):
                                        $count--; ?>
                                        <div class="form-row">
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control row3<?php echo $count?> inputform" name="rateyt[]" placeholder="Ratecard" value="<?php echo $rates; ?>">
                                            </div>  
                                            <div class="col-xl-2">
                                                <span class="minusinput removeyt row3<?php echo $count?>" data-row="row3<?php echo $count?>"><i style="margin-top:10px;" class="fas fa-times"></i></span>
                                            </div>
                                            <!-- <div class="input-group-append">                                   
                                                <button class="btn btnminus removeyt row3<?php echo $count?>" data-row="row3<?php echo $count?>" type="button"><i class='fas fa-minus-circle'></i></button>
                                            </div> -->
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="plusinput edityt"><i class="fas fa-plus"></i> Thêm</span>
                            <!-- <button class="btn btnplus edityt" type="button"><i class="fas fa-plus-circle"></i></button> -->
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group editcurd_tabletk">
                                <label style="color:#000;font-weight:bold;">Sow TikTok</label>
                                <?php foreach($value["sowtk_name"] as $subkeytk => $subvaluetk): ?>
                                <input type="hidden" class="form-control" name="sowtk_id" value="<?php echo $subvaluetk['sowtk_id']; ?>">
                                <?php $sown = explode(PHP_EOL,$subvaluetk['sowtk_name']);
                                $rate = explode(PHP_EOL,$subvaluetk['ratetk']);
                                $count = 1;$count2 = 1; ?>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <?php foreach($sown as $sowns):
                                            $count2--; ?>
                                        <input type="text" class="form-control row4<?php echo $count2?> inputform" name="sowtk_name[]" placeholder="Sow" value="<?php echo $sowns; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xl-5">
                                        <?php foreach($rate as $rates):
                                        $count--; ?>
                                        <div class="form-row">
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control row4<?php echo $count?> inputform" name="ratetk[]" placeholder="Ratecard" value="<?php echo $rates; ?>"> 
                                            </div>
                                            <div class="col-xl-2">
                                                <span class="minusinput removetk row4<?php echo $count?>" data-row="row4<?php echo $count?>"><i style="margin-top:10px;" class="fas fa-times"></i></span>
                                            </div> 
                                            <!-- <div class="input-group-append">                                   
                                                <button class="btn btnminus removetk row4<?php echo $count?>" data-row="row4<?php echo $count?>" type="button"><i class='fas fa-minus-circle'></i></button>
                                            </div> -->
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="plusinput edittk"><i class="fas fa-plus"></i> Thêm</span>
                            <!-- <button class="btn btnplus edittk" type="button"><i class="fas fa-plus-circle"></i></button> -->
                        </div>
                    </div>


                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group editcurd_tableoff">
                                <label style="color:#daa458;font-weight:bold;">Sow Offline</label>
                                <?php foreach($value["sowoff_name"] as $subkeyoff => $subvalueoff): ?>
                                <input type="hidden" class="form-control" name="sowoff_id" value="<?php echo $subvalueoff['sowoff_id']; ?>">
                                <?php $sown = explode(PHP_EOL,$subvalueoff['sowoff_name']);
                                $rate = explode(PHP_EOL,$subvalueoff['rateoff']);
                                $count = 1;$count2 = 1; ?>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <?php foreach($sown as $sowns):
                                            $count2--; ?>
                                        <input type="text" class="form-control row5<?php echo $count2?> inputform" name="sowoff_name[]" placeholder="Sow" value="<?php echo $sowns; ?>">
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xl-5">
                                        <?php foreach($rate as $rates):
                                        $count--; ?>
                                        <div class="form-row">
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control row5<?php echo $count?> inputform" name="rateoff[]" placeholder="Ratecard" value="<?php echo $rates; ?>"> 
                                            </div> 
                                            <div class="col-xl-2">
                                                <span class="minusinput removeoff row5<?php echo $count?>" data-row="row5<?php echo $count?>"><i style="margin-top:10px;" class="fas fa-times"></i></span>
                                            </div>
                                            <!-- <div class="input-group-append">                                   
                                                <button class="btn btnminus removeoff row5<?php echo $count?>" data-row="row5<?php echo $count?>" type="button"><i class='fas fa-minus-circle'></i></button>
                                            </div> -->
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="plusinput editoff"><i class="fas fa-plus"></i> Thêm</span>
                            <!-- <button class="btn btnplus editoff" type="button"><i class="fas fa-plus-circle"></i></button> -->
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group editnoteform">
                                <label style="font-weight:bold;color:#000;">Note</label>
                                <textarea type="text" class="form-control inputform" rows="4" name="kol_note" placeholder="Note"><?php echo $value['kol_note']; ?></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!--button type="submit" class="btn btn-info" name="editkol">Save</button-->
                        <button type="submit" class="btn btn-info" name="editkol">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

