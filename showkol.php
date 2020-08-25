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
    
    $data = array();
    while($row = mysqli_fetch_array($results)){

        $data[$row["kol_id"]]["kol_id"] = $row["kol_id"];

        $data[$row["kol_id"]]["kol_name"] = $row["kol_name"];

        $data[$row["kol_id"]]["kol_img"] = $row["kol_img"];

        $data[$row["kol_id"]]["job_name"][$row["job_id"]] = array(
            "job_name" => $row["job_name"],
        );

        $data[$row["kol_id"]]["link_fb"] = $row["link_fb"];
        $data[$row["kol_id"]]["link_ins"] = $row["link_ins"];
        $data[$row["kol_id"]]["link_yt"] = $row["link_yt"];
        
        $data[$row["kol_id"]]["sow_name"][$row["sow_id"]] = array(
            "sow_name" => $row["sow_name"],
            "ratecard" => $row["ratecard"],
        );

        $data[$row["kol_id"]]["kol_tel"] = $row["kol_tel"];

        $data[$row["kol_id"]]["kol_mail"] = $row["kol_mail"];

        $data[$row["kol_id"]]["note_txt"][$row["note_id"]] = array(
            "note_txt" => $row["note_txt"],
        );
    }
    // print_r ($data);
?>