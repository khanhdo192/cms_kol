<?php
    session_start();

    include("db_connect.php");

    if(isset($_POST['getkol'])){
        $kol_name = $_POST['kol_name'];
        $kol_mail = $_POST['kol_mail'];
        $kol_tel = $_POST['kol_tel'];
        $kol_img = $_FILES['kol_img']['name'];
        $job_name = $_POST['job_name'];
        $kol_gender = $_POST['kol_gender'];
        $link_yt = $_POST['link_yt'];
        $link_fb = $_POST['link_fb'];
        $link_ins = $_POST['link_ins'];
        $in_fb = $_POST['in_fb'];
        $in_ins = $_POST['in_ins'];
        $in_yt = $_POST['in_yt'];
        $sow_name = $_POST['sow_name'];
        $ratecard = $_POST['ratecard'];
        $time = $_POST['time'];
        $note_txt = $_POST['note_txt'];
        

        
        $sql = "INSERT INTO kol_info (kol_name,kol_mail,kol_tel,kol_img,kol_gender,link_fb,link_ins,link_yt)
                    VALUES ('$kol_name','$kol_mail','$kol_tel','$kol_img','$kol_gender','$link_fb','$link_ins','$link_yt')";
        $query_run = mysqli_query($connection,$sql);
        $id = $connection->insert_id;

        $count = count($job_name); 
        for($i=0;$i<$count;$i++){
            $sql2 = "INSERT INTO kol_job (job_name,kol_id) VALUES ('{$job_name[$i]}','$id')";
            $query_run2 = mysqli_query($connection,$sql2);
        }
        
        $count2 = count($sow_name);
        for($i=0;$i<$count2;$i++){
            $sql3 = "INSERT INTO kol_sow (sow_name,ratecard,time,kol_id) VALUES ('{$sow_name[$i]}','{$ratecard[$i]}','{$time[$i]}','$id')";
            $query_run3 = mysqli_query($connection,$sql3);
        }
        
        $count3 = count($note_txt);
        for($i=0;$i<$count3;$i++){
            $sql4 = "INSERT INTO kol_note (note_txt,kol_id) VALUES ('{$note_txt[$i]}','$id')";
            $query_run4 = mysqli_query($connection,$sql4);
        }

        $count4 = count($in_fb);
        for($i=0;$i<$count4;$i++){
            $sql5 = "INSERT INTO post_fb (postfb_link,kol_id) VALUES ('{$in_fb[$i]}','$id')";
            $query_run5 = mysqli_query($connection,$sql5);
        }

        $count5 = count($in_ins);
        for($i=0;$i<$count5;$i++){
            $sql6 = "INSERT INTO post_ins (postins_link,kol_id) VALUES ('{$in_ins[$i]}','$id')";
            $query_run6 = mysqli_query($connection,$sql6);
        }

        $count6 = count($in_yt);
        for($i=0;$i<$count6;$i++){
            $sql7 = "INSERT INTO post_yt (postyt_link,kol_id) VALUES ('{$in_yt[$i]}','$id')";
            $query_run7 = mysqli_query($connection,$sql7);
        }
        

        if($query_run && $query_run2 && $query_run3 && $query_run4 && $query_run5 && $query_run6 && $query_run7){
            move_uploaded_file($_FILES['kol_img']['tmp_name'], "upload/".$_FILES['kol_img']['name']);
            $_SESSION['success'] = "KOL Added";
            header('Location: index.php');
        }else{
            $_SESSION['fail'] = "KOL Not Added";
            header('Location: index.php');
        }
    }
?>