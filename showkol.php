<?php
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
            ";
    $results = mysqli_query($connection, $sql);
    
    $data = array();
    while($row = mysqli_fetch_array($results)){

        $data[$row["kol_id"]]["kol_id"] = $row["kol_id"];

        $data[$row["kol_id"]]["kol_name"] = $row["kol_name"];

        $data[$row["kol_id"]]["kol_img"] = $row["kol_img"];

        $data[$row["kol_id"]]["job_name"][$row["job_id"]] = array(
            "job_name" => $row["job_name"],
        );

        $data[$row["kol_id"]]["kol_gender"] = $row["kol_gender"];

        $data[$row["kol_id"]]["link_fb"] = $row["link_fb"];
        $data[$row["kol_id"]]["link_ins"] = $row["link_ins"];
        $data[$row["kol_id"]]["link_yt"] = $row["link_yt"];

        $data[$row["kol_id"]]["postfb_link"][$row["postfb_id"]] = array(
            "postfb_link" => $row["postfb_link"],
        );
        $data[$row["kol_id"]]["postins_link"][$row["postins_id"]] = array(
            "postins_link" => $row["postins_link"],
        );
        $data[$row["kol_id"]]["postyt_link"][$row["postyt_id"]] = array(
            "postyt_link" => $row["postyt_link"],
        );
        
        $data[$row["kol_id"]]["sow_name"][$row["sow_id"]] = array(
            "sow_name" => $row["sow_name"],
            "ratecard" => $row["ratecard"],
            "time" => $row["time"],
        );

        $data[$row["kol_id"]]["kol_tel"] = $row["kol_tel"];

        $data[$row["kol_id"]]["kol_mail"] = $row["kol_mail"];

        $data[$row["kol_id"]]["note_txt"][$row["note_id"]] = array(
            "note_txt" => $row["note_txt"],
        );
    }
    //print_r ($data);
?>