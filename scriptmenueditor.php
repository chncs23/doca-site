	<?php
    function active_menu($link_chk,$default_active=0){
        if($default_active==1){
            return ($_SERVER['REQUEST_URI']==$link_chk || $_SERVER['QUERY_STRING']=="")?"_active":"";
        }else{
            return ($_SERVER['REQUEST_URI']==$link_chk)?"_active":"";
        }
    }
    ?>
        <a class="css_menu<?=active_menu("/manage-fft.php?menu=1")?>" href="manage-fft.php" ><span class="style18">ข้อความด่วน</span></a>
        <a class="css_menu<?=active_menu("/manage-activity.php?menu=2")?>" href="manage-activity.php"><span class="style18">ข่าวกิจกรรม</span></a>
        <a class="css_menu<?=active_menu("/manage-activity.php?menu=3")?>" href="manage-announcement.php"><span class="style18">ข่าวประชาสัมพันธ์</span></a>
				<a class="css_menu<?=active_menu("/manage-journal.php?menu=5")?>" href="manage-journal.php"><span class="style18">DocaJournal</span></a>
        <a class="css_menu<?=active_menu("/manage-channel.php?menu=6")?>" href="manage-channel.php"><span class="style18">DocaChannel</span></a>
        <a class="css_menu<?=active_menu("/manage-custom-menu.php?menu=7")?>" href="manage-custom-menu.php"><span class="style18">เมนูซ้าย</span></a>
        <a class="css_menu<?=active_menu("/manage-external-url.php?menu=8")?>" href="manage-external-url.php"><span class="style18">URL หน่วยงานอื่น</span></a>
