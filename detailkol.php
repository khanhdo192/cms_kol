<div class="modal fade" id="detailKol<?php echo $value['kol_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #35384b;">
                <h3 class="modal-title" style="color:#fff;">&nbsp&nbsp&nbsp<?php echo $value['kol_name']?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:#fff;">&times;</span>
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
                                        <i class="fas fa-envelope fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_mail']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                        <i class="fas fa-tags fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><span class="badge badge-info nametag2"><?php echo $value['kol_job']?></span></p>                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                        <i class="fas fa-location-arrow fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_location']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                        <i class="fas fa-map-marker-alt fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><?php echo $value['kol_address']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-2">
                                    <span class="d-inline-block">
                                        <i class="fas fa-building fass"></i>
                                    </span>
                                </div>
                                <div class="col-xl-10">
                                    <p class="tel-mail"><span class="badge badge-info nametag2"><?php echo $value['kol_company']?></span></p>                                   
                                </div>
                            </div>
                        </div>
                    </div>


                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:5px;margin-bottom:15px">
                    <div class="row rowdetail3">
                        <div class="col-xl-6">
                            <div class="row row-sow1">
                                <div class="col-xl-7">
                                    <p>Công việc</p>
                                </div>
                                <div class="col-xl-3">
                                    <p>Chi phí</p><a class="info-date" href="#">
                                </div>
                                <div class="col-xl-2">
                                    <a class="info-date2" href="#"><i class="fas fa-info"></i></a>
                                </div>
                            </div>
                            <hr style="border: 1px solid #e6e9ee;background-color:#e6e9ee;margin-top:-10px;">
                            <div class="allsow">
                            <div class="row">
                                <div class="col-xl-7">
                                <?php foreach($value["sowfb_name"] as $subkey => $subvalue): ?>
                                <?php $sow = explode(PHP_EOL,$subvalue['sowfb_name']);?>
                                    <?php foreach($sow as $sows): ?>
                                    <p class="pfb"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-3">
                                <?php foreach($value["sowfb_name"] as $subkey => $subvalue): ?>
                                <?php $rate = explode(PHP_EOL,$subvalue['ratefb']);?>
                                    <?php foreach($rate as $rates): ?>
                                    <p class="pfb"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                <?php foreach($value["sowins_name"] as $subkeyins => $subvalueins): ?>
                                <?php $sow = explode(PHP_EOL,$subvalueins['sowins_name']);?>
                                    <?php foreach($sow as $sows): ?>
                                    <p class="pins"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-3">
                                <?php foreach($value["sowins_name"] as $subkeyins => $subvalueins): ?>
                                <?php $rate = explode(PHP_EOL,$subvalueins['rateins']);?>
                                    <?php foreach($rate as $rates): ?>
                                    <p class="pins"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                <?php foreach($value["sowyt_name"] as $subkeyyt => $subvalueyt): ?>
                                <?php $sow = explode(PHP_EOL,$subvalueyt['sowyt_name']);?>
                                    <?php foreach($sow as $sows): ?>
                                    <p class="pyt"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-3">
                                <?php foreach($value["sowyt_name"] as $subkeyyt => $subvalueyt): ?>
                                <?php $rate = explode(PHP_EOL,$subvalueyt['rateyt']);?>
                                    <?php foreach($rate as $rates): ?>
                                    <p class="pyt"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                <?php foreach($value["sowtk_name"] as $subkeytk => $subvaluetk): ?>
                                <?php $sow = explode(PHP_EOL,$subvaluetk['sowtk_name']);?>
                                    <?php foreach($sow as $sows): ?>
                                    <p class="ptk"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-3">
                                <?php foreach($value["sowtk_name"] as $subkeytk => $subvaluetk): ?>
                                <?php $rate = explode(PHP_EOL,$subvaluetk['ratetk']);?>
                                    <?php foreach($rate as $rates): ?>
                                    <p class="ptk"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-7">
                                <?php foreach($value["sowoff_name"] as $subkeyoff => $subvalueoff): ?>
                                <?php $sow = explode(PHP_EOL,$subvalueoff['sowoff_name']);?>
                                    <?php foreach($sow as $sows): ?>
                                    <p class="poff"><?php echo $sows; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-3">
                                <?php foreach($value["sowoff_name"] as $subkeyoff => $subvalueoff): ?>
                                <?php $rate = explode(PHP_EOL,$subvalueoff['rateoff']);?>
                                    <?php foreach($rate as $rates): ?>
                                    <p class="poff"><?php echo $rates; ?></p>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                            </div>
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
                            <hr style="border: 1px solid #e6e9ee;background-color:#e6e9ee;margin-top:-10px;">
                            <div class="row row-note2">
                                <div class="col-xl-12">
                                    <p style="white-space: pre-line;font-weight: bold;" class="p-note"><?php echo $value['kol_note']; ?></p>
                                </div>
                            </div>
                        </div>    
                    </div>


                    <hr style="border: 2px solid #e6e9ee;background-color:#e6e9ee;margin-top:5px;">
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
                    <div class="row rowdetail5">
                        <div class="col-xl-4">
                            <p></p>
                        </div>
                        <div class="col-xl-2">
                            <p></p>
                        </div>
                        <div class="col-xl-2">
                            <p></p>
                        </div>
                        <div class="col-xl-2">
                            <p></p>
                        </div>
                        <div class="col-xl-2">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


