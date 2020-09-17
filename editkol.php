<?php 
    session_start();

    include('db_connect.php');

    if(isset($_POST['editkol'])){
        $id = $_POST['kol_id'];
        $job_id = $_POST['job_id'];
        $company_id = $_POST['company_id'];
        $note_id = $_POST['note_id'];
        $postfb_id = $_POST['postfb_id'];
        $postins_id = $_POST['postins_id'];
        $postyt_id = $_POST['postyt_id'];
        $kol_name = $_POST['kol_name'];
        $kol_mail = $_POST['kol_mail'];
        $kol_tel = $_POST['kol_tel'];
        $kol_img = $_FILES['kol_img']['name'];
        $job_name = implode(",",$_POST['job_name']);
        $kol_gender = $_POST['kol_gender'];
        $kol_location = $_POST['kol_location'];
        $kol_address = $_POST['kol_address'];
        $company_name = implode(",",$_POST['company_name']);

        $link_yt = $_POST['link_yt'];
        $link_fb = $_POST['link_fb'];
        $link_ins = $_POST['link_ins'];

        $in_fb1 = $_POST['in_fb1'];
        $in_fb2 = $_POST['in_fb2'];
        $in_fb3 = $_POST['in_fb3'];
        $in_fb4 = $_POST['in_fb4'];
        $in_fb5 = $_POST['in_fb5'];

        $in_ins1 = $_POST['in_ins1'];
        $in_ins2 = $_POST['in_ins2'];
        $in_ins3 = $_POST['in_ins3'];
        $in_ins4 = $_POST['in_ins4'];
        $in_ins5 = $_POST['in_ins5'];

        $in_yt1 = $_POST['in_yt1'];
        $in_yt2 = $_POST['in_yt2'];
        $in_yt3 = $_POST['in_yt3'];
        $in_yt4 = $_POST['in_yt4'];
        $in_yt5 = $_POST['in_yt5'];

        $sowfb_id = $_POST['sowfb_id'];
        $sowfb_name = implode(PHP_EOL,$_POST['sowfb_name']);
        $ratefb = implode(PHP_EOL,$_POST['ratefb']);

        $sowins_id = $_POST['sowins_id'];
        $sowins_name = implode(PHP_EOL,$_POST['sowins_name']);
        $rateins = implode(PHP_EOL,$_POST['rateins']);

        $sowyt_id = $_POST['sowyt_id'];
        $sowyt_name = implode(PHP_EOL,$_POST['sowyt_name']);
        $rateyt = implode(PHP_EOL,$_POST['rateyt']);

        $sowtk_id = $_POST['sowtk_id'];
        $sowtk_name = implode(PHP_EOL,$_POST['sowtk_name']);
        $ratetk = implode(PHP_EOL,$_POST['ratetk']);

        $sowoff_id = $_POST['sowoff_id'];
        $sowoff_name = implode(PHP_EOL,$_POST['sowoff_name']);
        $rateoff = implode(PHP_EOL,$_POST['rateoff']);

        $kol_note = $_POST['kol_note'];

        $sql1 = "UPDATE kol_info SET kol_name='$kol_name',kol_mail='$kol_mail',kol_tel='$kol_tel',kol_address='$kol_address',kol_location='$kol_location',kol_img='$kol_img',kol_gender='$kol_gender',link_fb='$link_fb',link_ins='$link_ins',link_yt='$link_yt',kol_note='$kol_note'
                WHERE kol_id = '$id'";
        $query1 = mysqli_query($connection,$sql1);

        $sql2 = "UPDATE kol_job SET job_name='$job_name' WHERE job_id='$job_id'";
        $query2 = mysqli_query($connection,$sql2);

        $sql3 = "UPDATE kol_company SET company_name='$company_name' WHERE company_id='$company_id'";
        $query3 = mysqli_query($connection,$sql3);
        

        $sql4 = "UPDATE kol_sowfb SET sowfb_name='$sowfb_name',ratefb='$ratefb' WHERE sowfb_id='$sowfb_id'";
        $query4 = mysqli_query($connection,$sql4);

        $sql5 = "UPDATE kol_sowins SET sowins_name='$sowins_name',rateins='$rateins' WHERE sowins_id='$sowins_id'";
        $query5 = mysqli_query($connection,$sql5);

        $sql6 = "UPDATE kol_sowyt SET sowyt_name='$sowyt_name',rateyt='$rateyt' WHERE sowyt_id='$sowyt_id'";
        $query6 = mysqli_query($connection,$sql6);

        $sql7 = "UPDATE kol_sowtk SET sowtk_name='$sowtk_name',ratetk='$ratetk' WHERE sowtk_id='$sowtk_id'";
        $query7 = mysqli_query($connection,$sql7);

        $sql8 = "UPDATE kol_sowoff SET sowoff_name='$sowoff_name',rateoff='$rateoff' WHERE sowoff_id='$sowoff_id'";
        $query8 = mysqli_query($connection,$sql8);

        
        $sql9 = "UPDATE post_fb SET postfb_link1='$in_fb1',postfb_link2='$in_fb2',postfb_link3='$in_fb3',postfb_link4='$in_fb4',postfb_link5='$in_fb5' WHERE postfb_id='$postfb_id'";
        $query9 = mysqli_query($connection,$sql9);

        $sql10 = "UPDATE post_ins SET postins_link1='$in_ins1',postins_link2='$in_ins2',postins_link3='$in_ins3',postins_link4='$in_ins4',postins_link5='$in_ins5' WHERE postins_id='$postins_id'";
        $query10 = mysqli_query($connection,$sql10);

        $sql11 = "UPDATE post_yt SET postyt_link1='$in_yt1',postyt_link2='$in_yt2',postyt_link3='$in_yt3',postyt_link4='$in_yt4',postyt_link5='$in_yt5' WHERE postyt_id='$postyt_id'";
        $query11 = mysqli_query($connection,$sql11);

        if($query1 && $query2 && $query3 && $query4 && $query5 && $query6 && $query7 && $query8 && $query9 && $query10 && $query11){
            move_uploaded_file($_FILES['kol_img']['tmp_name'], "upload/".$_FILES['kol_img']['name']);
            $_SESSION['success_edit'] = "KOL Edited";
            header('Location: index.php');
        }else{
            $_SESSION['fail_edit'] = "KOL Not Edited";
            header('Location: index.php');
        }
    }


?>