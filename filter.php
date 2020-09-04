<?php
    include('db_connect.php');

    if(isset($_POST['filterbtn'])){
        $min = $_POST['min'];
        $max = $_POST['max'];


        $sql = "SELECT kol_info.kol_id,kol_info.kol_name,kol_info.kol_img,kol_info.kol_gender,kol_info.link_fb,kol_info.link_ins,kol_info.link_yt,kol_info.kol_tel,kol_info.kol_mail,
            kol_job.job_id,kol_job.job_name,
            kol_sow.sow_id,kol_sow.sow_name,kol_sow.ratecard,kol_sow.time,
            kol_note.note_id,kol_note.note_txt,
            post_fb.postfb_id,post_fb.postfb_link,
            post_ins.postins_id,post_ins.postins_link,
            post_yt.postyt_id,post_yt.postyt_link
            FROM kol_info 
            INNER JOIN kol_job ON kol_info.kol_id = kol_job.kol_id
            INNER JOIN kol_sow ON kol_info.kol_id = kol_sow.id_kol
            INNER JOIN kol_note ON kol_info.kol_id = kol_note.kol_id
            INNER JOIN post_fb ON kol_info.kol_id = post_fb.kol_id
            INNER JOIN post_ins ON kol_info.kol_id = post_ins.kol_id
            INNER JOIN post_yt ON kol_info.kol_id = post_yt.kol_id 
            WHERE kol_sow.ratecard BETWEEN '".$min."' AND '".$max."'";
    
            $results = mysqli_query($connection, $sql);
            
    }
    
?>