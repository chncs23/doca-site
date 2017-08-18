	<?php  
    function active_menu($link_chk,$default_active=0){  
        if($default_active==1){  
            return ($_SERVER['REQUEST_URI']==$link_chk || $_SERVER['QUERY_STRING']=="")?"_active":"";  
        }else{  
            return ($_SERVER['REQUEST_URI']==$link_chk)?"_active":"";  
        }  
    }  
    ?>  
        <a class="css_menu<?=active_menu("/edit-fft.php?menu=1")?>" href="edit-fft.php" ><span class="style18">ข้อความด่วน</span></a>
        <a class="css_menu<?=active_menu("/edit-activity.php?menu=2")?>" href="edit-activity.php"><span class="style18">ข่าวกิจกรรม</span></a>  
        <a class="css_menu<?=active_menu("/edit-announcement.php?menu=3")?>" href="edit-announcement.php"><span class="style18">ข่าวประชาสัมพัน</span></a>
        <a class="css_menu<?=active_menu("/edit-announcement.php?menu=4")?>" href="edit-announcement.php"><span class="style18">ข่าวประกาศ</span></a>        <a class="css_menu<?=active_menu("/edit-journal.php?menu=5")?>" href="edit-journal.php"><span class="style18">DocaJournal</span></a> 
        <a class="css_menu<?=active_menu("/edit-channel.php?menu=6")?>" href="edit-channel.php"><span class="style18">DocaChannel</span></a>  
        <a class="css_menu<?=active_menu("/edit-leftmenu.php?menu=7")?>" href="edit-leftmenu.php"><span class="style18">เมนูซ้าย</span></a>  
        <a class="css_menu<?=active_menu("/edit-externalURL.php?menu=8")?>" href="edit-externalURL.php"><span class="style18">Linkหน่วยงานอื่น</span></a>