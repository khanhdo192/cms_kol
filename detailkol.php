<?php
    $sql = "SELECT kol_info.kol_id,kol_info.kol_name,kol_info.kol_img,kol_info.link_fb,kol_info.link_ins,kol_info.link_yt,kol_info.kol_tel,kol_info.kol_mail,
    kol_job.job_id,kol_job.job_name,
    kol_sow.sow_id,kol_sow.sow_name,kol_sow.ratecard,
    kol_note.note_id,kol_note.note_txt
    FROM kol_info 
    INNER JOIN kol_job ON kol_info.kol_id = kol_job.kol_id
    INNER JOIN kol_sow ON kol_info.kol_id = kol_sow.id_kol
    INNER JOIN kol_note ON kol_info.kol_id = kol_note.kol_id";
    $results = mysqli_query($connection, $sql);


?>




<div class="modal fade" id="detailKol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit KOL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>