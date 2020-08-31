<div class="modal fade" id="editKol<?php echo $value['kol_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit KOL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editkol.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="kol_id" value="<?php echo $value['kol_id']; ?>">
                    <div class="form-group">
                        <label>Tên Kol:</label>
                        <input type="name" class="form-control" name="kol_name" placeholder="KOL name" value="<?php echo $value['kol_name']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="kol_mail" placeholder="Email" value="<?php echo $value['kol_mail']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="tel" class="form-control" name="kol_tel" placeholder="Phone" pattern="[0-9]{1,15}" value="<?php echo $value['kol_tel']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh:</label>
                        <input class="btn" type="file" name="kol_img" required>
                    </div>
                    <div class="form-group">
                        <label>Lĩnh vực:</label>
                        <input type="hidden" class="form-control" name="job_id" 
                        value="<?php foreach($value["job_name"] as $subkey2 => $subvalue2): ?>
                                <?php echo $subvalue2['job_id']?>
                                <?php endforeach; ?>">
                        <input type="text" class="form-control editjobfield" name="job_name" 
                        value="<?php foreach($value["job_name"] as $subkey2 => $subvalue2): ?>
                                <?php echo $subvalue2['job_name']?>
                                <?php endforeach; ?>">
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
                            <input type="text" class="form-control" name="link_fb" placeholder="Link . . ." value="<?php echo $value['link_fb']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btnins" type="button"><i class="fab fa-instagram"></i></button>
                            </div>
                            <input type="text" class="form-control" name="link_ins" placeholder="Link . . ." value="<?php echo $value['link_ins']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btnyt" type="button"><i class="fab fa-youtube-square"></i></button>
                            </div>
                            <input type="text" class="form-control" name="link_yt" placeholder="Link . . ." value="<?php echo $value['link_yt']?>">
                        </div>
                    </div>
                    <div class="form-group editpostfb">
                        <label>Tương tác Facebook:</label>
                        <?php foreach(array_slice($value["postfb_link"],0,1) as $subkey4 => $subvalue4): ?>
                        <input type="hidden" class="form-control" name="postfb_id[]" value="<?php echo $subvalue4['postfb_id']; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="in_fb[]" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link']; ?>">
                            <div class="input-group-append">
                                <button class="btn btnplus editfb" type="button"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach(array_slice($value["postfb_link"],1) as $subkey4 => $subvalue4): ?>
                        <input type="hidden" class="form-control" name="postfb_id[]" value="<?php echo $subvalue4['postfb_id']; ?>">
                        <div class="input-group row3<?php echo $subkey4?>">
                            <input type="text" class="form-control" name="in_fb[]" placeholder="Link ..." value="<?php echo $subvalue4['postfb_link']; ?>">
                            <div class="input-group-append">
                                <button class='btn btnminus removefbd' data-row="row3<?php echo $subkey4?>" type='button'><i class='fas fa-minus-circle'></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group editpostins">
                        <label>Tương tác Instagram:</label>
                        <?php foreach(array_slice($value["postins_link"],0,1) as $subkey5 => $subvalue5): ?>
                        <input type="hidden" class="form-control" name="postins_id[]" value="<?php echo $subvalue5['postins_id']; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="in_ins[]" placeholder="Link ..." value="<?php echo $subvalue5['postins_link']; ?>">
                            <div class="input-group-append">
                                <button class="btn btnplus editins" type="button"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach(array_slice($value["postins_link"],1) as $subkey5 => $subvalue5): ?>
                        <input type="hidden" class="form-control" name="postins_id[]" value="<?php echo $subvalue5['postins_id']; ?>">
                        <div class="input-group row4<?php echo $subkey5?>">
                            <input type="text" class="form-control" name="in_ins[]" placeholder="Link ..." value="<?php echo $subvalue5['postins_link']; ?>">
                            <div class="input-group-append">
                                <button class='btn btnminus removeinsd' data-row="row4<?php echo $subkey5?>" type='button'><i class='fas fa-minus-circle'></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group editpostyt">
                        <label>Tương tác Youtube:</label>
                        <?php foreach(array_slice($value["postyt_link"],0,1) as $subkey6 => $subvalue6): ?>
                        <input type="hidden" class="form-control" name="postyt_id[]" value="<?php echo $subvalue6['postyt_id']; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="in_yt[]" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link']; ?>">
                            <div class="input-group-append">
                                <button class="btn btnplus edityt" type="button"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach(array_slice($value["postyt_link"],1) as $subkey6 => $subvalue6): ?>
                        <input type="hidden" class="form-control" name="postyt_id[]" value="<?php echo $subvalue6['postyt_id']; ?>">
                        <div class="input-group row5<?php echo $subkey6?>">
                            <input type="text" class="form-control" name="in_yt[]" placeholder="Link ..." value="<?php echo $subvalue6['postyt_link']; ?>">
                            <div class="input-group-append">
                                <button class='btn btnminus removeytd' data-row="row5<?php echo $subkey6?>" type='button'><i class='fas fa-minus-circle'></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group editcurd_table">
                        <label for="">Scope of work & Rate card:</label>
                        <?php foreach(array_slice($value["sow_name"],0,1) as $subkey => $subvalue): ?>
                        <input type="hidden" class="form-control" name="sow_id[]" value="<?php echo $subvalue['sow_id']; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="sow_name[]" placeholder="Sow" value="<?php echo $subvalue['sow_name']; ?>">
                            <input type="text" class="form-control" name="ratecard[]" placeholder="Rate card" value="<?php echo $subvalue['ratecard']; ?>">
                            <input type="date" class="form-control" name="time[]" placeholder="" value="<?php echo $subvalue['time']; ?>">
                            <div class="input-group-append">
                                <button class="btn btnplus edit" type="button"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach(array_slice($value["sow_name"],1) as $subkey => $subvalue): ?>
                        <input type="hidden" class="form-control" name="sow_id[]" value="<?php echo $subvalue['sow_id']; ?>">
                        <div class="input-group row<?php echo $subkey?>">
                            <input type="text" class="form-control" name="sow_name[]" placeholder="Sow" value="<?php echo $subvalue['sow_name']; ?>">
                            <input type="text" class="form-control" name="ratecard[]" placeholder="Rate card" value="<?php echo $subvalue['ratecard']; ?>">
                            <input type="date" class="form-control" name="time[]" placeholder="" value="<?php echo $subvalue['time']; ?>">
                            <div class="input-group-append">
                                <button class='btn btnminus removed' data-row="row<?php echo $subkey?>" type='button'><i class='fas fa-minus-circle'></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group editnoteform">
                        <label>Lưu ý: </label>
                        <?php foreach(array_slice($value["note_txt"],0,1) as $subkey3 => $subvalue3): ?>
                        <input type="hidden" class="form-control" name="note_id[]" value="<?php echo $subvalue3['note_id']; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="note_txt[]" placeholder="Note" value="<?php echo $subvalue3['note_txt']; ?>">
                            <div class="input-group-append">
                                <button class="btn btnplus editnote" type="button"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach(array_slice($value["note_txt"],1) as $subkey3 => $subvalue3): ?>
                        <input type="hidden" class="form-control" name="note_id[]" value="<?php echo $subvalue3['note_id']; ?>">
                        <div class="input-group row2<?php echo $subkey3?>">
                            <input type="text" class="form-control" name="note_txt[]" placeholder="Note" value="<?php echo $subvalue3['note_txt']; ?>">
                            <div class="input-group-append">
                                <button class='btn btnminus removenoted' data-row="row2<?php echo $subkey3?>" type='button'><i class='fas fa-minus-circle'></i></button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="editkol">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

