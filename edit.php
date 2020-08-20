<div class="modal fade" id="editKol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit KOL</h5>
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
                        <input class="btn" type="file" name="kol_img">
                    </div>
                    <div class="form-group">
                        <label>Lĩnh vực:</label>
                        <input type="text" class="form-control" id="jobfield" name="job_name[]">
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <select class="form-control" name="kol_gender">
                            <option>Unknow</option>
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
                            <input type="text" class="form-control" name="sow_name[]" placeholder="Sow">
                            <input type="text" class="form-control" name="ratecard[]" placeholder="Rate card">
                            <input type="date" class="form-control" name="time[]" placeholder="">
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