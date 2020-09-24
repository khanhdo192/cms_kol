<?php
    $sql = "SELECT kol_info.kol_id,kol_info.kol_name,kol_info.kol_img,kol_info.kol_gender,kol_info.link_fb,kol_info.link_ins,kol_info.link_yt,kol_info.kol_tel,kol_info.kol_mail,kol_info.kol_note,kol_info.kol_address,kol_info.kol_location,
                --    kol_job.job_id,kol_job.job_name,
                --    kol_company.company_id,kol_company.company_name,
                   kol_sowfb.sowfb_id,kol_sowfb.sowfb_name,kol_sowfb.ratefb,
                   kol_sowins.sowins_id,kol_sowins.sowins_name,kol_sowins.rateins,
                   kol_sowyt.sowyt_id,kol_sowyt.sowyt_name,kol_sowyt.rateyt,
                   kol_sowtk.sowtk_id,kol_sowtk.sowtk_name,kol_sowtk.ratetk,
                   kol_sowoff.sowoff_id,kol_sowoff.sowoff_name,kol_sowoff.rateoff,
                   post_fb.postfb_id,post_fb.postfb_link1,post_fb.postfb_link2,post_fb.postfb_link3,post_fb.postfb_link4,post_fb.postfb_link5,
                   post_ins.postins_id,post_ins.postins_link1,post_ins.postins_link2,post_ins.postins_link3,post_ins.postins_link4,post_ins.postins_link5,
                   post_yt.postyt_id,post_yt.postyt_link1,post_yt.postyt_link2,post_yt.postyt_link3,post_yt.postyt_link4,post_yt.postyt_link5
            FROM kol_info 
            -- INNER JOIN kol_job ON kol_info.kol_id = kol_job.kol_id
            -- INNER JOIN kol_company ON kol_info.kol_id = kol_company.kol_id
            INNER JOIN kol_sowfb ON kol_info.kol_id = kol_sowfb.kol_id
            INNER JOIN kol_sowins ON kol_info.kol_id = kol_sowins.kol_id
            INNER JOIN kol_sowyt ON kol_info.kol_id = kol_sowyt.kol_id
            INNER JOIN kol_sowtk ON kol_info.kol_id = kol_sowtk.kol_id
            INNER JOIN kol_sowoff ON kol_info.kol_id = kol_sowoff.kol_id
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

        // $data[$row["kol_id"]]["job_name"][$row["job_id"]] = array(
        //     "job_name" => $row["job_name"],
        //     "job_id" => $row["job_id"],
        // );

        // $data[$row["kol_id"]]["company_name"][$row["company_id"]] = array(
        //     "company_name" => $row["company_name"],
        //     "company_id" => $row["company_id"],
        // );

        $data[$row["kol_id"]]["kol_gender"] = $row["kol_gender"];

        $data[$row["kol_id"]]["link_fb"] = $row["link_fb"];
        $data[$row["kol_id"]]["link_ins"] = $row["link_ins"];
        $data[$row["kol_id"]]["link_yt"] = $row["link_yt"];

        $data[$row["kol_id"]]["postfb_link1"][$row["postfb_id"]] = array(
            "postfb_link1" => $row["postfb_link1"],
            "postfb_link2" => $row["postfb_link2"],
            "postfb_link3" => $row["postfb_link3"],
            "postfb_link4" => $row["postfb_link4"],
            "postfb_link5" => $row["postfb_link5"],
            "postfb_id" => $row["postfb_id"],
        );
        $data[$row["kol_id"]]["postins_link1"][$row["postins_id"]] = array(
            "postins_link1" => $row["postins_link1"],
            "postins_link2" => $row["postins_link2"],
            "postins_link3" => $row["postins_link3"],
            "postins_link4" => $row["postins_link4"],
            "postins_link5" => $row["postins_link5"],
            "postins_id" => $row["postins_id"],
        );
        $data[$row["kol_id"]]["postyt_link1"][$row["postyt_id"]] = array(
            "postyt_link1" => $row["postyt_link1"],
            "postyt_link2" => $row["postyt_link2"],
            "postyt_link3" => $row["postyt_link3"],
            "postyt_link4" => $row["postyt_link4"],
            "postyt_link5" => $row["postyt_link5"],
            "postyt_id" => $row["postyt_id"],
        );
        
        $data[$row["kol_id"]]["sowfb_name"][$row["sowfb_id"]] = array(
            "sowfb_name" => $row["sowfb_name"],
            "ratefb" => $row["ratefb"],
            "sowfb_id" => $row["sowfb_id"],
        );

        $data[$row["kol_id"]]["sowins_name"][$row["sowins_id"]] = array(
            "sowins_name" => $row["sowins_name"],
            "rateins" => $row["rateins"],
            "sowins_id" => $row["sowins_id"],
        );

        $data[$row["kol_id"]]["sowyt_name"][$row["sowyt_id"]] = array(
            "sowyt_name" => $row["sowyt_name"],
            "rateyt" => $row["rateyt"],
            "sowyt_id" => $row["sowyt_id"],
        );

        $data[$row["kol_id"]]["sowtk_name"][$row["sowtk_id"]] = array(
            "sowtk_name" => $row["sowtk_name"],
            "ratetk" => $row["ratetk"],
            "sowtk_id" => $row["sowtk_id"],
        );

        $data[$row["kol_id"]]["sowoff_name"][$row["sowoff_id"]] = array(
            "sowoff_name" => $row["sowoff_name"],
            "rateoff" => $row["rateoff"],
            "sowoff_id" => $row["sowoff_id"],
        );

        $data[$row["kol_id"]]["kol_tel"] = $row["kol_tel"];

        $data[$row["kol_id"]]["kol_mail"] = $row["kol_mail"];

        $data[$row["kol_id"]]["kol_note"] = $row["kol_note"];

        $data[$row["kol_id"]]["kol_address"] = $row["kol_address"];

        $data[$row["kol_id"]]["kol_location"] = $row["kol_location"];
    }
    //print_r ($data);
?>