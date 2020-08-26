<?php 
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
    }


?>