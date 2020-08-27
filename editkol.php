<?php 
    session_start();

    include('db_connect.php');

    if(isset($_POST['editkol'])){
        $id = $_POST['kol_id'];
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

        $sql = "UPDATE kol_info SET kol_name='$kol_name',kol_mail='$kol_mail',kol_tel='$kol_tel',kol_img='$kol_img',kol_gender='$kol_gender',link_fb='$link_fb',link_ins='$link_ins',link_yt='$link_yt'
                WHERE kol_id = '$id'";
        $query = mysqli_query($connection,$sql);

        $count = count($job_name); 
        for($i=0;$i<$count;$i++){
            $sql2 = "UPDATE kol_job SET job_name='$job_name[$i]' WHERE kol_id = '$id'";
            $query2 = mysqli_query($connection,$sql2);
        }

        $count2 = count($sow_name);
        for($i=0;$i<$count2;$i++){
            $sql3 = "UPDATE kol_sow SET sow_name='$sow_name[$i]',ratecard='$ratecard[$i]',time='$time[$i]' WHERE id_kol='$id'";
            $query3 = mysqli_query($connection,$sql3);
        }

        $count3 = count($note_txt);
        for($i=0;$i<$count3;$i++){
            $sql4 = "UPDATE kol_note SET note_txt='$note_txt[$i]' WHERE kol_id='$id'";
            $query4 = mysqli_query($connection,$sql4);
        }

        $count4 = count($in_fb);
        for($i=0;$i<$count4;$i++){
            $sql5 = "UPDATE post_fb SET postfb_link='$in_fb[$i]' WHERE kol_id='$id'";
            $query5 = mysqli_query($connection,$sql5);
        }

        $count5 = count($in_ins);
        for($i=0;$i<$count5;$i++){
            $sql6 = "UPDATE post_ins SET postins_link='$in_ins[$i]' WHERE kol_id='$id'";
            $query6 = mysqli_query($connection,$sql6);
        }

        $count6 = count($in_yt);
        for($i=0;$i<$count6;$i++){
            $sql7 = "UPDATE post_yt SET postyt_link='$in_yt[$i]' WHERE kol_id='$id'";
            $query7 = mysqli_query($connection,$sql7);
        }

        if($query && $query2 && $query3 && $query4 && $query5 && $query6 && $query7){
            move_uploaded_file($_FILES['kol_img']['tmp_name'], "upload/".$_FILES['kol_img']['name']);
            $_SESSION['success_edit'] = "KOL Edited";
            header('Location: index.php');
        }else{
            $_SESSION['fail_edit'] = "KOL Not Edited";
            header('Location: index.php');
        }
    }


?>