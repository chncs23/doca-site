<link href="https://fonts.googleapis.com/css?family=Taviraj:400,500,600" rel="stylesheet">

<style>

@media (min-width: 768px) {
  .navbar .navbar-nav {
    display: inline-block;
    float: none;
    margin-bottom: 0;
  }

  .navbar .navbar-collapse {
    text-align: center;
  }

  .navbar-header {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: -60px;
  }

  .dropdown-submenu {
    position: relative;
  }

  .navbar { margin-bottom: 0 }
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}

</style>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">หน้าหลัก</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับหน่วย
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="doca_history.php">ประวัติหน่วย</a></li>
            <li><a href="doca_commander.php">ทำเนียบผู้บังคับบัญชา</a></li>
            <li><a href="doca_formercommander.php">อดีตผู้บังคับบัญชา</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">โครงสร้างหน่วย
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">สำนักจิตวิทยา</a>
              <ul class="dropdown-menu">
                <li><a href="dep_psycho.php">กองปฏิบัติการจิตวิทยา</a></li>
                <li><a href="dep_masses.php">กองกิจการมวลชน</a></li>
                <li><a href="dep_pr.php">กองประชาสัมพันธ์</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">สำนักกิจการพลเรือน</a>
              <ul class="dropdown-menu">
                <li><a href="dep_civil_affair.php">กองกิจการพลเรือน</a></li>
                <li><a href="dep_development.php">กองกิจการพัฒนา</a></li>
                <li><a href="dep_disaster.php">กองบรรเทาสาธารณะภัย</a></li>
              </ul>
            </li>
            <li><a href="dep_administration.php">กองธุรการ</a></li>
            <li><a href="dep_planning.php">กองนโยบายและแผน</a></li>
            <li><a href="dep_it.php">กองสารสนเทศ</a></li>
            <li><a href="dep_budget.php">กองโครงการและงบประมาณ</a></li>
            <li><a href="http://e-civil.rta.mi.th/">โรงเรียนกิจการพลเรือน</a></li>
          </ul>
        </li>
        <li><a href="doca_mission.php">ภารกิจหน่วย</a></li>
        <li><a href="doca_king.php">กร.ทบ. กับการเทิดพระเกียรติ</a></li>
      </ul>
    </div>
  </div>
</nav>
