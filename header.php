<?php 
    $page = basename($_SERVER['PHP_SELF']);
?>
    
    <!-- START PRELOADER -->
    <div class="outslider_loading">
        <div class="outslider_loader"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- START WELCOME SECTION -->
   
    <header class="header-area navbar-fixed-top">
        <div class="container custom-header">
            <div class="row">
                <div id="menuzord" class="menuzord">
                   <a href="/" class="menuzord-brand"><img src="images/Our-images/ITA-LOGO.jpg" width="100" height="60" alt="">
                    <div class="headname">Illozhithozham</div> </a>
                   <div class="header-contact">
                        <ul>
                           <li><span>Phone :</span> +91 8122331801</li>
                           <li><span>Email :</span> illozhithozhamarakattalai0110@gmail.com</li>
                        </ul>
                   </div>                 
                   <ul class="menuzord-menu menuzord-menu-bg">
                        <li  class="<?php if($page == 'index.php'){ echo 'active';}?>"><a href="/">HOME</a>
                        </li>
						 <li class="<?php if($page == 'event.php'){ echo 'active';}?>"><a href="/event">EVENT</a>
                        </li>
						<li class="<?php if($page == 'admins.php'){ echo 'active';}?>"><a href="/admins">ADMINISTRATORS</a>
                        </li>
                        <li class="<?php if($page == 'aboutus.php'){ echo 'active';}?>"><a href="/aboutus">ABOUT US</a>
                      </li>
                        <li class="<?php if($page == 'contactus.php'){ echo 'active';}?>"><a href="/contactus">CONTACT US</a>
                        </li>
						<li class="<?php if($page == 'registration.php'){ echo 'active';}?>"><a href="#" data-toggle="modal" data-target="#myModal">REGISTRATION</a>
                        </li>
                   </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- modal header  -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">REGISTRATION</h4>
        </div>
        <div class="modal-body">
        <!-- begin modal body content  -->
        <div class="container">
  <div class="panel panel-default">
    <div class="panel-heading panel-heading-nav">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active">
          <a href="#one" aria-controls="one" role="tab" data-toggle="tab">Volunteer</a>
        </li>
        <li role="presentation">
          <a href="#two" aria-controls="two" role="tab" data-toggle="tab">Sponser</a>
        </li>
      </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="one">
        <form action="volunteer.php" method="post">
            <div class="sidebar"> 
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label >First Name *</label>
                            <input class="form-control" name="txtfname" placeholder="First Name" autocomplete="off" type="First Name" required>
                        </div>
                        <div  class="col-md-6">
                            <label >Last Name *</label>
                            <input class="form-control" name="txtlname" placeholder="Last Name" autocomplete="off" type="Last Name" required>
                       </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Email Id *</label>
                            <input class="form-control" name="txtemail"  placeholder="Email Id" autocomplete="off" type="email" required>
                        </div>
                        <div  class="col-md-6">
                            <label  >Phone Number *</label>
                            <input class="form-control" name="txtphone"  placeholder="Phone Number" autocomplete="off" type="number" required>
                       </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Blood Group</label>
                            <input class="form-control" name="txtBgrp"  placeholder="Blood Group" autocomplete="off" type="First Name">
                        </div>
                        <div  class="col-md-6">
                            <label  placeholder="MM/DD/YYYY" >Date Of Birth</label>
                            <input id="datepicker" name="txtdob" class="form-control">
                       </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Gender</label>
                            <select class="form-control" name="txtgender">
                                <option value="General User">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div  class="col-md-6">
                            <label  >Marriage Status</label>
                            <select class="form-control" name="txtmarriagest">
                                <option value="Marriage Status">Marriage Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                       </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="">
                        <div class="">
                            <label  >Address</label>
                            <textarea name="txtaddress" id="textArea" cols="20" rows="5" placeholder="Address"></textarea>
                        </div>
                  </div>
                </div> 
            </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="two">
        <form action="sponser.php" method="post">
            <div class="sidebar"> 
            <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label >First Name *</label>
                            <input class="form-control" name="txtfname" placeholder="First Name" autocomplete="off" type="First Name" required>
                        </div>
                        <div  class="col-md-6">
                            <label >Last Name *</label>
                            <input class="form-control" name="txtlname" placeholder="Last Name" autocomplete="off" type="Last Name" required>
                       </div>
                  </div>
              </div>
                
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Email Id *</label>
                            <input class="form-control" name="txtemail"  placeholder="Email Id" autocomplete="off" type="email" required>
                        </div>
                        <div  class="col-md-6">
                            <label  >Phone Number *</label>
                            <input class="form-control" name="txtphone"  placeholder="Phone Number" autocomplete="off" type="number" required>
                       </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Blood Group</label>
                            <input class="form-control" name="txtBgrp"  placeholder="Blood Group" autocomplete="off" type="First Name">
                        </div>
                        <div  class="col-md-6">
                            <label  >Date Of Birth</label>
                            <input id="datepicker" name="txtdob" class="form-control">
                       </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Gender</label>
                            <select class="form-control" name="txtgender">
                                <option value="General User">Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div  class="col-md-6">
                            <label  >Marriage Status</label>
                            <select class="form-control" name="txtmarriagest">
                                <option value="General User">Marriage Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                       </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="row">
                        <div class="col-md-6">
                            <label  >Currently I'm</label>
                            <select class="form-control" name="txtim">
                                <option value="Student">Student</option>
                                <option value="Employee">Employee</option>
                            </select>
                        </div>
                        <div  class="col-md-6">
                            <label  >College or Office address</label>
                            <textarea name="txtsecaddress" id="textArea" cols="20" rows="5" placeholder="Address"></textarea>
                       </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="">
                        <div class="">
                            <label  >Address</label>
                            <textarea name="txtaddress" id="textArea" cols="20" rows="5" placeholder="Address"></textarea>
                        </div>
                  </div>
                </div> 
            </div>

              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
        <!-- end modal body content  -->
        </div>
        
      </div>

    </div>
  </div>

  <style>
    .links {
  text-align: center;
  width: 300px;
  margin-top:5%;
  margin-left:5%;
  border: 1px solid #ccc;
  border-radius: 10px;
}
.gray-button {
  text-align: center;
  background-color: #aaa;
  padding: 6px 12px 10px 12px;
  width: 160px;
  height: 33px;
  color: white;
  border-radius: 6px;
  font-size: 13px;
  font-weight: bold;
}

/* modal details */
.modal-dialog{
  position: relative;
  display: table; /* This is important */
  width: auto;
  min-width: 500px; 
/*   overflow-y: scroll; */
  overflow-x: auto;
}

/* Get rid of the background fade */
modal-backdrop {
  opacity:0;
}

/* Vertical scroll bar part 1 */

/* .modal-dialog{ */
/*   overflow-y: initial !important; */
/* } */

/* Vertical scroll bar part 2 */


.ball {
    display: inline-block;
    width: 100%;
    height: 100%;
    margin: 0;
    border-radius: 50%;
    position: relative;
    background-color: blue;
  /*   background: url(http://hop.ie/balls/images/tennisball.png) no-repeat; */
    background-size: 100%;
}
.ball:before {
    content: "";
    position: absolute;
    top: 1%;
    left: 5%;
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: radial-gradient(circle at 50% 0px, #ffffff, rgba(255, 255, 255, 0) 58%);
    -webkit-filter: blur(5px);
    z-index: 2;
}
.ball:after {
    content: "";
    position: absolute;
    border-radius: 100%;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: radial-gradient(circle at 40% 30%, rgba(245, 237, 48, 0), rgba(200, 190, 20, 0.2) 50%, #575300 100%);
}
.ball .shadow {
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1) 40%, rgba(0, 0, 0, 0) 50%);
    -webkit-transform: rotateX(90deg) translateZ(-160px);
    transform: rotateX(90deg) translateZ(-160px);
    z-index: 1; }
.stage {
    width: 200px;
    height: 200px;
    display: inline-block;
    margin: 20px;
    -webkit-perspective: 1200px;
    -moz-perspective: 1200px;
    -ms-perspective: 1200px;
    -o-perspective: 1200px;
    perspective: 1200px;
    -webkit-perspective-origin: 50% 50%;
    -moz-perspective-origin: 50% 50%;
    -ms-perspective-origin: 50% 50%;
    -o-perspective-origin: 50% 50%;
    perspective-origin: 50% 50%;
}

.ui-widget-header .ui-icon{
    content: "\F284";
}

/* tab style  */
.panel-heading-nav {
  border-bottom: 0;
  padding: 10px 0 0;
}

.panel-heading-nav .nav {
  padding-left: 10px;
  padding-right: 10px;
}

.modal-body .panel-default>.panel-heading{
    background-color: transparent !important;
    border-color: transparent !important;
}
.modal-body .nav-tabs>li.active>a{
    border: transparent !important;
    color: #000;
    font-weight: bold;
    background-color: #efd6b4;
    
}
.nav-tabs>li{
    width: 50%;
}
.nav-tabs>li>a{
    color: #000;
    text-align: center;
    background-color: #f2d0d0;
}
#textArea{
    width: 100%;
    /* height: 34px; */
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group select.form-control{
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    height: unset !important;
}
.ui-datepicker table{
    margin-top: 15px;
}
.ui-corner-all{
    width: 40%;
}

@media (max-width:480px) {
    .modal-content{
    max-width: 320px;
}
}
  </style>
<script>
        <!-- Using latest jQuery, and jQuery UI -->
 $(function() {
$( "#datepicker" ).datepicker();
});

    </script>