<?php
session_start();

require 'dbconfig/config.php';

$query = "select * from insurance WHERE E_Mail= '" . $username= $_SESSION['email'] . "'";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($query_run);

$query1 = "select * from treatreq WHERE reciever= '" . $reciever= $_SESSION['to'] . "'";
$query_run1 = mysqli_query($con,$query1);
$row1 = mysqli_fetch_assoc($query_run1);

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8"/>
    <title>company profile</title>
        <link rel="stylesheet" href="css/jquery.bxslider2.css">
         <link rel="stylesheet" href="css/normalize2.css"/>
        <link rel="stylesheet" href="css/web2.css"/>
         <link rel="stylesheet" href="css/font-awesome.css"/> <!-- font awesome icons -->

         </head>
    <body>

        <!-- Start NavBar -->
        <div class="navbar">
            <div class="container">
         <div class="logo" >
        <h2>Insurancy</h2>
         </div>
           <ul class="links" >
               <li class="current"><a href="#"data-value="first" >Home</a></li>
               <li><a href="#" data-value="ser">Services</a></li>
                 <li>
                     <div class="dropdown">
                      <button class="dropbtn" >About</button>
                      <div class="dropdown-content">
                      <a href="#" data-value="Our_T">Our team</a>
                      <a href="#"  data-value="rev" >Reviews</a>
                      <a href="#" data-value="abt">About us</a>
                      </div>
                     </div>
                </li>

<!--                  <li><a href="notification.html"> Notifications</a> </li> -->
<li>
                     <div class="dropdown">
                      <button class="dropbtn" >Notifications</button>
                      <div class="dropdown-content" hidden>
                      <a href="notification.php" >you have a request</a>

                      </div>
                     </div>
                </li>

                 <li><a href="signout.php" >Sign out</a></li>
             </ul>
            <div class="clearfix"></div>
        </div>
            </div>
        <!-- End   NavBar -->

        <!-- Start header -->

        <div class="hospital_header">
       <div class="overlay">
                <ul class="bxslider">
                  <li>
                    <h2>Welcome <?php echo $row['Full_Name']; ?>

                      </h2>
                      <p>We make it simple for you, because you deserve it</p>
                    </li>
                </ul>

            </div>


        </div>


        <!-- End   header -->

        <!-- Start services -->
        <div id="ser" class="services">
        <div class="container">
        <h2 class="special-heading"> Our Services</h2>

             <div class="item">
                <i class="fa fa-link fa-3x fa-fw" ></i>
                <div class="info">
                <h3>Linking</h3>
                    <p>Easily linking any insurance company with its medical organizations <br >(hospitals, pharmacies , labs , .. ) for the acceptane of insurance approval or igonrance</p>
            </div>
            </div>

             <div class="item">
                <i class="fa fa-cloud fa-3x fa-fw" ></i>
                <div class="info">
                <h3>Cloud</h3>
                    <p>Data of insurance companies , medical organizations , and individuals are on one cloud</p>
            </div>
            </div>

             <div class="item">
                <i class="fa fa-flag fa-3x fa-fw" ></i>
                <div class="info">
                <h3>Ads</h3>
                    <p>Any medical organzation or insurance comapnies can add their advertisments in our site </p>
            </div>
            </div>

             <div class="item">
                <i class="fa fa-address-book-o fa-3x fa-fw" ></i>
                <div class="info">
                <h3>Log</h3>
                    <p>Log for patients or individuals with all their operations in the insured medical organizations  </p>
            </div>
            </div>
            <div class="clearfix"></div>
            </div>
        </div>

        <div class="container">
        <hr class="seperator">
        </div>

        <div id="Our_T" class="our_team">
        <div class="container">
            <div class="box">
         <h2 class="team-heading"> Our Team </h2>
          <p>our team consisted of the insurance companies who have already connected on our system <br>
                and some of them are unicare , globalmed , Arope and Alico</p>
            </div>
            <div class="box">
            <img src="images/unicare.png" alt="Unicare" />
            </div>
             <div class="box">
            <img src="images/globalmed.png" alt="GLobalMed" />
            </div>
             <div class="box">
             <img src="images/Alico.png" alt="Alico" />
            </div>
             <div class="box">
            <img src="images/arope.png" alt="Arope" />
            </div>
            <div class="clearfix"></div>
            </div>
        </div>


        <!-- End services -->

        <!-- start reviews -->
        <div id="rev" class="review">
        <div class="Rev-overlay">
        <div class="container">
          <h2> Our clients reviews</h2>
            <div class="slider">
                <div class="active">
           <q>Hello , this is very good website and i loved its idea , go on and im waiting more perfect work from you</q>
            <p>Ashely</p>
                </div>


                <div>
           <q>Hello , perfect work and helpful idea</q>
            <p>Adam</p>
                </div>

                 <div>
           <q>This a great work</q>
            <p>Mohamed</p>
                </div>

                </div>
                </div>
                </div>
                </div>

         <!-- end reviews -->




           <!-- start about us -->
    <div id="abt" class="about_us">
    <div class="container">
        <h2 class="about-heading"> About us</h2>


        <div class="features text-center">

  <div class="divwrapper">

  <div class="abu">
    <p2><span>I</span>nsurancy </p2></div>
     <div class="fo"></div>
<div class="pp">
    <p3> an approval system as website connect between insurance company and medical organization
         through this system Dr.will a detaliled diagnosis to accommodate the patient's crtitical condition,
         Where the items specified by insurance company will be clear to medical organization.
         through one click handle between insurance companies and medical organiztion wil be automatic </p3></div>

<div class="box_about">
<img src="images/Health.jpg">
<h5>Health</h5>
<p4>Helping you bridge gaps in your health care coverage during times of transition</p4>
</div>
<div class="box_about">
<img src="images/Medicaid.jpg">
<h5>Medicare</h5>
<p4>Find a health insurance plan that fits the needs of you and your family</p4>
</div>
<div class="box_about">
<img src="images/Medicare.jpg">
<h5>Advantages</h5>
<p4>Reduce budget for insurance companies.patient service and speed of treatment.<br>maintain the right of medical organiztions
     from loss.</p4>
</div>
<div class="box_about">
<img src="images/Vision-Insurance.jpg">
<h5>Vision</h5>
<p4>Decrease the paperwork.save time and effort for the patient,<br>Medical organiztions and the insurance company</p4>
</div>
</div>
</div>

<!--start artical-->

<article>
<section>

    <div class="values">
      <h7>Our Values</h7>
      <img src="images/customer-first.png">
      <ol>
        <li>Customers first</li>
        <li>Deliver promises</li>
        <li>Think ahead</li>
        <li>Value people</li>
      </ol>
    </div>
  </section>

</article>

<div class="gap">
  <div class="gap1">
    <img src="images/pin-jakarta1.png"></div>
  <div class="gap2">
    <img src="images/pin-ecuador.png"></div>
    <div class="gap3">
    <img src="images/pin-shanghai.png"></div>
  <div class="gap4">
    <img src="images/pin-london.png"></div>
    <div class="gap5">
    <img src="images/pin-beijing.png"></div>
  <div class="gap6">
    <img src="images/pin-hong-kong.png">
    <img src="images/pin-miami.png">
  </div></div>



<!--End artical-->







        </div>
        </div>


        <!--start asidebar-->

        <aside>
          <section>

            <div class="insur">
              <h6><span2>I</span2>nsurancy</h6>
              <p7>an approval system as website connect between<br>insurance company and medical organization<br>
                 through this system..</p7>
            </div>
            <div class="useful">
              <h3>useful Links</h3>
              <ul>
                <li class="current"><a href="#"data-value="first" >Home</a></li>
                 <li><a href="#" data-value="ser">Services</a></li>
                 <a href="#" data-value="abt">About us</a>
                <li><a href="Log in.html" >Login</a></li>
              </ul>
            </div>
            <div class="contact">
              <h4>Contact Us</h4>
              <p6>25,lorernlis street, orange<br> califomia, us<br> phone:800 123 3456<br> Fax:800 123 3456<br>
                Email: <span1>insurance@gmail.com</span1></p6>
            </div>


          </section>
        </aside>



        <!--End asidebar-->
      <!-- end about us -->

      <!-- Start Footer -->
                  <footer>
      <footer>

                    <div class="imgfo">
                         <img src="images/fb.png">
                         <img src="images/twitter.png">
                         <img src="images/Linkedin.png">
                         <img src="images/i.png">
                     </div>
                     </footer>
      <p5>Copy right 2017 &copy; All rights reserved to .. </p5></footer>
                 <!-- End footer -->



                 <!-- End footer -->
         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/jquery.bxslider.min.js"></script>
         <script src="js/custom.js"></script>

         <script src="js/jquery-3.2.1.min.js"></script>
         <script src="js/jquery.bxslider.min.js"></script>
         <script src="js/custom.js"></script>

    </body>
</html>
