<!-- Modal -->
<div class="modal fade" id="addNewKol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm KOL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="getkol.php" method="POST" enctype="multipart/form-data">



                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Tên Kol</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="name" class="form-control" name="kol_name" placeholder="KOL name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Phone</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="tel" class="form-control" name="kol_tel" placeholder="Phone" pattern="[0-9]{1,15}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Email</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="email" class="form-control" name="kol_mail" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Address</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control" name="kol_address" placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="avatar-wrapper mt-0 mr-2">
                                    <img class="profile-pic" src="img/ava2.png" />
                                    <div class="upload-button">
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*" name="kol_img">
                                </div>        
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2">
                                        <label style="font-weight:bold;">Location</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Bắc">
                                            <label class="form-check-label">Bắc</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Trung">
                                            <label class="form-check-label">Trung</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_location" value="Nam">
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
                                        <label style="font-weight:bold;">Giới tính</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nam">
                                            <label class="form-check-label">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nữ">
                                            <label class="form-check-label">Nữ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Nhóm">
                                            <label class="form-check-label">Nhóm</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="kol_gender" value="Không rõ">
                                            <label class="form-check-label">Không rõ</label>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </div>                       
                    </div> 



                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Lĩnh vực</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control" id="jobfield" name="job_name[]">
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 mt-2">
                                        <label style="font-weight:bold;">Công ty</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <input type="text" class="form-control" id="companyfield" name="company_name[]">
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
                                    <input type="text" class="form-control" name="link_fb" placeholder="Link . . .">
                                </div>
                            </div>
                            <div class="form-group" id="postfb">
                                <label style="font-weight:bold;">Tương tác Facebook</label>
                                <input type="text" class="form-control" name="in_fb1" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_fb2" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_fb3" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_fb4" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_fb5" placeholder="Link ..." >
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                                    </div>
                                    <input type="text" class="form-control" name="link_ins" placeholder="Link . . .">
                                </div>
                            </div>
                            <div class="form-group" id="postins">
                                <label style="font-weight:bold;">Tương tác Instagram</label>
                                <input type="text" class="form-control" name="in_ins1" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_ins2" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_ins3" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_ins4" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_ins5" placeholder="Link ..." >
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                                    </div>
                                    <input type="text" class="form-control" name="link_yt" placeholder="Link . . .">
                                </div>
                            </div>
                            <div class="form-group" id="postyt">
                                <label style="font-weight:bold;">Tương tác Youtube</label>
                                <input type="text" class="form-control" name="in_yt1" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_yt2" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_yt3" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_yt4" placeholder="Link ..." >
                                <input type="text" class="form-control" name="in_yt5" placeholder="Link ..." >
                            </div>
                        </div>
                    </div>

                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group" id="curd_tablefb">
                                <label style="color:#1877F2;font-weight:bold;">Sow facebook</label>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <input type="text" class="form-control" name="sowfb_name[]" placeholder="Sow">
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="form-row"> 
                                            <div class="col-xl-10">  
                                                <input type="text" class="form-control" name="ratefb[]" placeholder="Rate card">
                                            </div>
                                            <div class="col-xl-2" style="padding-top:8px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="plusinput" id="addfb"><i class="fas fa-plus"></i> Thêm sow</span>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group" id="curd_tableins">
                                <label style="color:#d6249f;font-weight:bold;">Sow instagram</label>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <input type="text" class="form-control" name="sowins_name[]" placeholder="Sow">
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="form-row">  
                                            <div class="col-xl-10"> 
                                                <input type="text" class="form-control" name="rateins[]" placeholder="Rate card">
                                            </div>
                                            <div class="col-xl-2" style="padding-top:8px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="plusinput" id="addins"><i class="fas fa-plus"></i> Thêm sow</span>
                        </div>
                    </div>
                    
                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group" id="curd_tableyt">
                                <label style="color:#FE0000;font-weight:bold;">Sow youtube</label>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <input type="text" class="form-control" name="sowyt_name[]" placeholder="Sow">
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="form-row">  
                                            <div class="col-xl-10">  
                                                <input type="text" class="form-control" name="rateyt[]" placeholder="Rate card">
                                            </div>
                                            <div class="col-xl-2" style="padding-top:8px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="plusinput" id="addyt"><i class="fas fa-plus"></i> Thêm sow</span>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group" id="curd_tabletk">
                                <label style="color:#000;font-weight:bold;">Sow tik tok</label>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <input type="text" class="form-control" name="sowtk_name[]" placeholder="Sow">
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="form-row">   
                                            <div class="col-xl-10">
                                                <input type="text" class="form-control" name="ratetk[]" placeholder="Rate card">
                                            </div>
                                            <div class="col-xl-2" style="padding-top:8px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="plusinput" id="addtk"><i class="fas fa-plus"></i> Thêm sow</span>
                        </div>
                    </div>


                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:10px">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group" id="curd_tableoff">
                                <label style="color:#daa458;font-weight:bold;">Sow offline</label>
                                <div class="row">
                                    <div class="col-xl-7">
                                        <input type="text" class="form-control" name="sowoff_name[]" placeholder="Sow">
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="form-row"> 
                                            <div class="col-xl-10">  
                                                <input type="text" class="form-control" name="rateoff[]" placeholder="Rate card">
                                            </div>
                                            <div class="col-xl-2" style="padding-top:8px">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="plusinput" id="addoff"><i class="fas fa-plus"></i> Thêm sow</span>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group" id="noteform">
                                <label style="font-weight:bold;">Lưu ý</label>
                                <textarea rows="4" type="text" class="form-control" name="kol_note" placeholder="Note"></textarea>
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