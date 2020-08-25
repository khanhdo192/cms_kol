<?php
    include('db_connect.php');
    if(isset($_POST["kol_id"])){
        $output = "";
        $sql2 = "SELECT kol_info.kol_id,kol_info.kol_name,kol_info.kol_img,kol_info.link_fb,kol_info.link_ins,kol_info.link_yt,kol_info.kol_tel,kol_info.kol_mail,
        kol_job.job_id,kol_job.job_name,
        kol_sow.sow_id,kol_sow.sow_name,kol_sow.ratecard,
        kol_note.note_id,kol_note.note_txt
        FROM kol_info 
        INNER JOIN kol_job ON kol_info.kol_id = kol_job.kol_id WHERE kol_info.kol_id = '".$_POST["kol_id"]."'
        INNER JOIN kol_sow ON kol_info.kol_id = kol_sow.id_kol WHERE kol_info.kol_id = '".$_POST["kol_id"]."'
        INNER JOIN kol_note ON kol_info.kol_id = kol_note.kol_id WHERE kol_info.kol_id = '".$_POST["kol_id"]."'";
        $results2 = mysqli_query($connection, $sql2);

        
    }
?>


