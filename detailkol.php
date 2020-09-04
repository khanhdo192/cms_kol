<div class="modal fade" id="detailKol<?php echo $value['kol_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">&nbsp&nbsp&nbsp<?php echo $value['kol_name']?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="kol-detail">
                <div class="container">
                    <div class="row rowdetail1">
                        <div class="col-xl-3 kol-ava">
                            <img class="kol-img" src="upload/<?php echo $value['kol_img']; ?>" alt="" width="200px" height="200px">
                        </div>
                        <div class="col-xl-3 mr-2 social-box">
                            <div class="row">
                                <div class="col-xl-12 follow">
                                    <a class="social-icon" target="_blank" href="<?php echo $value['link_fb']; ?>"><img class="iconpng" src="img/fb.png" alt="" width="30px" height="30px"></a>
                                    <p class="api-fb">2.5m</p>
                                    <p class="api-follow">FOLLOWERS</p>
                                    <a class="info-date" href="#"><i class="fas fa-info"></i></a>
                                    <hr style="border: 1px solid #bbc6c8; background-color:#bbc6c8;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <p class="api-num">207k</p>
                                    <p class="api-active">LIKES</p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="api-num">1.4k</p>
                                    <p class="api-active">COMMENTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mr-2 social-box">
                        <div class="row">
                                <div class="col-xl-12 follow">
                                    <a class="social-icon" target="_blank" href="<?php echo $value['link_ins']; ?>"><img class="iconpng" src="img/insta.png" alt="" width="30px" height="30px"></a>
                                    <p class="api-fb">2.5m</p>
                                    <p class="api-follow">FOLLOWERS</p>
                                    <a class="info-date" href="#"><i class="fas fa-info"></i></a>
                                    <hr style="border: 1px solid #bbc6c8;background-color:#bbc6c8;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <p class="api-num">207k</p>
                                    <p class="api-active">LIKES</p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="api-num">1.4k</p>
                                    <p class="api-active">COMMENTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mr-2 social-box">
                        <div class="row">
                                <div class="col-xl-12 follow">
                                    <a class="social-icon" target="_blank" href="<?php echo $value['link_yt']; ?>"><img class="iconpng" src="img/yt.png" alt="" width="30px" height="30px"></a>
                                    <p class="api-fb">2.5m</p>
                                    <p class="api-follow">FOLLOWERS</p>
                                    <a class="info-date" href="#"><i class="fas fa-info"></i></a>
                                    <hr style="border: 1px solid #bbc6c8;background-color:#bbc6c8;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <p class="api-num">207k</p>
                                    <p class="api-active">LIKES</p>
                                </div>
                                <div class="col-xl-6">
                                    <p class="api-num">1.4k</p>
                                    <p class="api-active">COMMENTS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rowdetail2">
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block" style="padding-left:8px;">
                                        <i class="fas fa-male"></i><i class="fas fa-female"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_gender']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                        <i class="fas fa-phone-alt fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_tel']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                    <i class="fas fa-envelope fass"></i><p>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_mail']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <?php foreach($value["job_name"] as $subkey2 => $subvalue2): ?>
                            <span class="badge badge-success nametag2"><?php echo $subvalue2['job_name']?></span><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row rowdetail3">
                        <div class="col-xl-6">
                            <div class="row row-sow1">
                                <div class="col-xl-8">
                                    <p>Công việc</p>
                                </div>
                                <div class="col-xl-2">
                                    <p>Chi phí</p><a class="info-date" href="#">
                                </div>
                                <div class="col-xl-2">
                                    <a class="info-date2" href="#"><i class="fas fa-info"></i></a>
                                </div>
                            </div>
                            <?php foreach($value["sow_name"] as $subkey => $subvalue): ?>
                            <div class="row row-sow2">
                                <div class="col-xl-8">
                                    <p><?php echo $subvalue['sow_name']?></p>
                                </div>
                                <div class="col-xl-4">
                                    <p><?php echo $subvalue['ratecard']?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-xl-1"></div>
                        <div class="col-xl-5">
                            <div class="row row-note1">
                                <div class="col-xl-8">
                                    <p>Lưu ý</p>
                                </div>
                                <div class="col-xl-4">
                                    <a class="info-date2" href="#"><i class="fas fa-info"></i></a>
                                </div>
                            </div>
                            <div class="row row-note2">
                                <div class="col-xl-12">
                                    <?php foreach($value["note_txt"] as $subkey3 => $subvalue3): ?>
                                    <p class="p-note"><?php echo $subvalue3['note_txt']; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row rowdetail4">
                        <div class="col-xl-4">
                            <p>Hợp đồng liên quan</p>
                        </div>
                        <div class="col-xl-2">
                            <p>Khách hàng</p>
                        </div>
                        <div class="col-xl-2">
                            <p>Giá trị</p>
                        </div>
                        <div class="col-xl-2">
                            <p>Thời hạn</p>
                        </div>
                        <div class="col-xl-2">
                            <p>Phụ trách</p>
                        </div>
                    </div>
                    <hr style="border: 1px solid #bbc6c8;background-color:#bbc6c8;margin-top:-10px">
                    <div class="row rowdetail5">
                        <div class="col-xl-4">
                            <p>Tết Trung Thu Bread n Tea</p>
                        </div>
                        <div class="col-xl-2">
                            <p>Bread n Tea</p>
                        </div>
                        <div class="col-xl-2">
                            <p>720M</p>
                        </div>
                        <div class="col-xl-2">
                            <p>1-8-2000</p>
                        </div>
                        <div class="col-xl-2">
                            <img class="kol-img" src="upload/<?php echo $value['kol_img']; ?>" alt="" width="30px" height="30px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


