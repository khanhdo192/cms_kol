<?php
    session_start();

    include("db_connect.php");

    if(isset($_POST['getkol'])){
        $kol_name = $_POST['kol_name'];
        $kol_mail = $_POST['kol_mail'];
        $kol_tel = $_POST['kol_tel'];
        $kol_address = $_POST['kol_address'];
        $kol_location = $_POST['kol_location'];
        $kol_img = $_FILES['kol_img']['name'];
        $company_name = $_POST['company_name'];
        $job_name = $_POST['job_name'];
        $kol_gender = $_POST['kol_gender'];
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

        $sowfb_name = implode(PHP_EOL,$_POST['sowfb_name']);
        $ratefb = implode(PHP_EOL,$_POST['ratefb']);

        $sowins_name = implode(PHP_EOL,$_POST['sowins_name']);
        $rateins = implode(PHP_EOL,$_POST['rateins']);

        $sowyt_name = implode(PHP_EOL,$_POST['sowyt_name']);
        $rateyt = implode(PHP_EOL,$_POST['rateyt']);

        $sowtk_name = implode(PHP_EOL,$_POST['sowtk_name']);
        $ratetk = implode(PHP_EOL,$_POST['ratetk']);

        $sowoff_name = implode(PHP_EOL,$_POST['sowoff_name']);
        $rateoff = implode(PHP_EOL,$_POST['rateoff']);

        $kol_note = $_POST['kol_note'];
        
        $sql1 = "INSERT INTO kol_info (kol_name,kol_mail,kol_tel,kol_address,kol_location,kol_img,kol_gender,link_fb,link_ins,link_yt,kol_note,kol_job,kol_company)
                    VALUES ('$kol_name','$kol_mail','$kol_tel','$kol_address','$kol_location','$kol_img','$kol_gender','$link_fb','$link_ins','$link_yt','$kol_note','$job_name','$company_name')";
        $query_run1 = mysqli_query($connection,$sql1);
        $id = $connection->insert_id;

    
        // $sql2 = "INSERT INTO kol_job (job_name,kol_id) VALUES ('$job_name','$id')";
        // $query_run2 = mysqli_query($connection,$sql2);

        // $sql3 = "INSERT INTO kol_company (company_name,kol_id) VALUES ('$company_name','$id')";
        // $query_run3 = mysqli_query($connection,$sql3);
        
        
        $sql4 = "INSERT INTO kol_sowfb (sowfb_name,ratefb,kol_id) VALUES ('$sowfb_name','$ratefb','$id')";
        $query_run4 = mysqli_query($connection,$sql4);

        $sql5 = "INSERT INTO kol_sowins (sowins_name,rateins,kol_id) VALUES ('$sowins_name','$rateins','$id')";
        $query_run5 = mysqli_query($connection,$sql5);

        $sql6 = "INSERT INTO kol_sowyt (sowyt_name,rateyt,kol_id) VALUES ('$sowyt_name','$rateyt','$id')";
        $query_run6 = mysqli_query($connection,$sql6);

        $sql7= "INSERT INTO kol_sowtk (sowtk_name,ratetk,kol_id) VALUES ('$sowtk_name','$ratetk','$id')";
        $query_run7 = mysqli_query($connection,$sql7);

        $sql8 = "INSERT INTO kol_sowoff (sowoff_name,rateoff,kol_id) VALUES ('$sowoff_name','$rateoff','$id')";
        $query_run8 = mysqli_query($connection,$sql8);

        $sql9 = "INSERT INTO post_fb (postfb_link1,postfb_link2,postfb_link3,postfb_link4,postfb_link5,kol_id) VALUES ('$in_fb1','$in_fb2','$in_fb3','$in_fb4','$in_fb5','$id')";
        $query_run9 = mysqli_query($connection,$sql9);
        
        $sql10 = "INSERT INTO post_ins (postins_link1,postins_link2,postins_link3,postins_link4,postins_link5,kol_id) VALUES ('$in_ins1','$in_ins2','$in_ins3','$in_ins4','$in_ins5','$id')";
        $query_run10 = mysqli_query($connection,$sql10);

        $sql11 = "INSERT INTO post_yt (postyt_link1,postyt_link2,postyt_link3,postyt_link4,postyt_link5,kol_id) VALUES ('$in_yt1','$in_yt2','$in_yt3','$in_yt4','$in_yt5','$id')";
        $query_run11 = mysqli_query($connection,$sql11);
        

        if($query_run1 && $query_run4 && $query_run5 && $query_run6 && $query_run7 && $query_run8 && $query_run9 && $query_run10 && $query_run11){
            move_uploaded_file($_FILES['kol_img']['tmp_name'], "upload/".$_FILES['kol_img']['name']);
            $_SESSION['success'] = "KOL Added";
            header('Location: index.php');
        }else{
            $_SESSION['fail'] = "KOL Not Added";
            header('Location: index.php');
        }
    }
?>