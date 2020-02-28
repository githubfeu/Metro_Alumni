<?php 
include 'connect.php';

$stid = $_POST['stid'];

$query = "SELECT * FROM tbl_allforone WHERE stid = '$stid' ";
$query_run = mysqli_query($connection, $query);
$row = mysqli_fetch_row($query_run);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CMT Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="A new design system for developing with less effort."
    />
    <meta name="author" content="BootstrapBay" />

    <link href="assets/img/cmt-icon.png" rel="icon" type="image/png" />

    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/lazy.css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.0/css/all.css"
      integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body class="index">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img
            src="assets/img/cmt-icon.png"
            alt="Example Navbar 1"
            class="mr-2"
            height="60"
          />
          CMT Alumni
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown-7"
          aria-controls="navbarNavDropdown-7"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
          <ul class="navbar-nav">
            <!-- <li class="nav-item dropdown mx-2">
              <a
                class="nav-link"
                href="#"
                id="nav-inner-primary_dropdown_1"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Home</a
              >
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="nav-inner-primary_dropdown_1"
              >
                <a
                  class="dropdown-item"
                  href="documentation/getting_started.html"
                  target="_blank"
                  >Getting Started</a
                >
                <a
                  class="dropdown-item"
                  href="documentation/alerts.html"
                  target="_blank"
                  >Core Elements</a
                >
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown mx-2">
              <a class="nav-link" href="#" id="nav-inner-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Examples</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-primary_dropdown_1">
                <a class="dropdown-item" href="register.html" target="_blank">Register</a>
                <a class="dropdown-item" href="profile.html" target="_blank">Profile</a>
                <a class="dropdown-item" href="landing.html" target="_blank">Landing</a>
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div class="page-hero bg-info text-white" id="banner">
      <div class="bubbles d-none d-md-block">
        <!-- 				bubbles -->
        <!-- <div class="bubble bubble-1 rotate-bubble bg-warning"></div>
      <div class="bubble bubble-2 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-3 bubble-top-right bg-warning rotate-bubble"></div>
      <div class="bubble bubble-4 bubble-top-left bg-info rotate-bubble"></div>
      <div class="bubble bubble-5 bg-info rotate-bubble"></div>
      <div class="bubble bubble-6 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-7 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-8 bubble-top-left bg-success rotate-bubble"></div>
      <div class="bubble bubble-9 bg-warning rotate-bubble"></div>
      <div class="bubble bubble-10 bg-danger rotate-bubble"></div>
      <div class="bubble bubble-11 bubble-bottom-right bg-info rotate-bubble"></div>
      <div class="bubble bubble-12 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-13 bubble-top-left bg-success rotate-bubble"></div> -->
        <!--         circles -->
        <div class="circle circle-1 bg-light rotate-circle"></div>
        <div class="circle circle-2 bg-success rotate-circle"></div>
        <div class="circle circle-3 bg-danger rotate-circle"></div>
        <div class="circle circle-4 bg-info rotate-circle"></div>
        <div class="circle circle-5 bg-success rotate-circle"></div>
        <div class="circle circle-6 bg-info rotate-circle"></div>
        <div class="circle circle-7 bg-warning rotate-circle"></div>
        <div class="circle circle-8 bg-white rotate-circle"></div>
        <div class="circle circle-9 bg-warning rotate-circle"></div>
        <div class="circle circle-10 bg-danger rotate-circle"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8  offset-lg-2 text-center">
            <div class="title">
              <h3 class="display-3 text-white">CMT Alumni</h3>
              <h4 class="text-white">ระบบศิษย์เก่า CMT</h4>
            </div>
            <div class="credits"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="intro bg-light">
      <div class="container">
        <!-- <div class="row">
        <div class="form-group mr-auto ml-auto col-md-5 text-center">
          <form action="" method="post">
            <input type="text" class="form-control" id="inputSearch" placeholder="กรอกรหัสนักศึกษา">
            <small id="searchHelp" class="form-text text-info">สามารถค้นได้จาก ชื่อ,ชื่อเล่น,และรหัสนักศึกษา</small>
            <button class="btn btn-info mt-1 btn-pill">ค้นหา</button>
          </form>
        </div>
    </div> -->

        <div class="row">
          <!-- <div class="col-md-2"></div> -->
          <div
            class="col-md-8 offset-md-2"
            style="transform: translate(0, -30%);"
          >
            <div class="component">
              <div class="card" style="border-radius: 14px;">
                <div class="card-body col-md-8 offset-md-2">
                  <?php if (mysqli_num_rows($query_run) > 0) { ?>
                  <?php if (empty($row[2])) { ?>
                    <form action="saveStudentData.php" method="post">
                  <?php } else {?>
                    <form action="alreadySave.php" method="post">
                  <?php } ?>
                    <div class="page-header mb-3 pt-3">
                      <h3 id="colours">กรุณากรอกข้อมูลนักศึกษา</h3>
                    </div>
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="stid"
                      name="stid"
                      placeholder="รหัสนักศึกษา"
                      readonly="readonly"
                      value="<?php echo $row[0] ?>"
                    />
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="stclass"
                      name="stclass"
                      placeholder="แผนกวิชา"
                      readonly="readonly"
                      value="<?php echo $row[5] ?>"
                    />
                    <div class="form-group">
                      <select class="custom-select" name="pname">
                        <option value="" disabled selected>คำนำหน้า</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                      </select>
                    </div>
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="name"
                      name="name"
                      placeholder="ชื่อ"
                    />
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="lname"
                      name="lname"
                      placeholder="สกุล"
                    />
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="nickname"
                      name="nickname"
                      placeholder="ชื่อเล่น"
                    />
                    <input name="birthdate" placeholder="วัน/เดือน/ปีเกิด" class="form-control mb-3" type="text" onfocus="(this.type='date')" id="date">
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="tel"
                      name="tel"
                      placeholder="เบอร์โทรศัพท์"
                    />
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="address"
                      name="address"
                      placeholder="ที่อยู่"
                    />
                    <small id="searchHelp" class="form-text text-danger mt-3"
                      >** กรุณาตรวจสอบข้อมูลให้ถูกต้องก่อนกดปุ่มยืนยัน</small
                    >
                    <button
                      class="btn btn-info mt-1 btn-pill col-md-4 offset-md-4"
                    >
                      ยืนยัน
                    </button>
                  </form>

                  <?php } else { ?>
                    <div class="card-body col-md-10 offset-md-1">
                        <div class="page-header mb-3 pt-3">
                          <h4 id="colours" class="text-danger">ไม่พบข้อมูล กรุณาลองใหม่อีกครั้ง</h3>
                          <a
                          class="btn btn-info mt-1 btn-pill col-md-4 offset-md-4 mt-3 text-light" href="addStudentId.php"
                        >
                          ค้นหารหัส
                        </a>
                      </div>
                    </div>
                  <?php } ?>

                  <div class="card-footer">
                    <!-- <a href="#a" class="btn btn-primary">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Card info -->

    <!-- -->

    <footer class="footer-1 bg-light text-dark">
      <div class="container">
        <div
          class="d-flex flex-column flex-md-row justify-content-between align-items-center"
        >
          <div class="links">
            <ul
              class="footer-menu list-unstyled d-flex flex-row text-center text-md-left"
            >
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
            </ul>
          </div>
          <div class="social mt-4 mt-md-0"></div>
        </div>
        <div class="copyright text-center">
          <hr />
          <p class="small">
            &copy; 2019
            <span class="text-danger"><i class="fas fa-like"></i></span> by Us
          </p>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- optional plugins -->
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="./assets/js/lazy.js"></script>
  </body>
</html>
