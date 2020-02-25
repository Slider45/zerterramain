<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="icon" href="images/plainlogo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="js/homeJS.js"></script>
  <link rel="stylesheet" type="text/css" href="sass/AboutUs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
  <title>About</title>

  <style>
    .parallax {
      /* The image used */
/*  background-image: url('images/aboutus-banner.jpeg');
*/
/* Set a specific height */
/*  min-height: 700px; */

/* Create the parallax scrolling effect */
 /* background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;*/

  height: 100%;
  width: 100%;
  margin: auto;
  background: url(images/aboutus-banner.jpeg) no-repeat 50% 50%;
  display: table;
  top: 0;
  background-size: cover;
}

.responsive {
  width: 100%;
  height: auto;
}

.gotopbtn{
  position: fixed;
  width: 50px;
  height: 50px;
  background: #a5d547;
  bottom: 40px;
  right: 50px;
  text-decoration: none;
  text-align: center;
  line-height: 50px;
  color: white;
  font-size: 22px;
  border-radius: 30px;
}

.information{
  font-size: 20px;
}

</style>


</head>
<body>

  <div class="parallax">
    <div class="container is-fixed-top">
      <h1 class="title" id="title">
       ABOUT US
     </h1>
     <h2 class="subtitle">
      <span><a class="home" href="index.php">HOME </a></span><span style="color:#fff;"></span>
      <span class="about">| ABOUT US</span>
    </h2>
  </div>
</div>
<div class="heading">
  <p>ZERTERRA</p>
  <hr class="hr">
</div>



<!-- product details -->

<div class="card">
  <div class="card-content">
    <div class="columns" id="clmns">
      <div class="column is-7">
        <p>The “ZERTERRA” project is a home appliances and composting machines as well were is included in 3RC’s process of integrated waste management. This smart bin project can turn food scraps into homemade fertilizer within 24 hours, unlike the traditional method, dairy or bio-degradable waste takes two (2) to four (4) weeks to finish the composting stages. Mixing food scraps into non-biodegradable produced a gas called methane which part of the greenhouse gases that affect our world in terms of global warming.
          <br>
          <br>
          This project fits in any household and restaurant all over the cities. For households, it helps the user to become more responsible in their leftover foods and any food scraps. Using modern technology like Arduino and Raspberry Pi the users can control and monitor the machine through their smartphones.
        </p>
      </div>
      <div class="column is-5" id="logo">
        <img src="images/smart-bin.png" alt="">
      </div>
    </div>
  </div>
</div>




<!-- zerterra team -->

<img src="images/developers/DevelopersBanner.png" alt="Developers" class="responsive" width="600" height="400">


<!-- Meet the team -->
<!-- hero2 -->
<section class="hero is-dark">
  <div class="hero-body" id="meet">
    <div class="container">
      <h1 class="title is-1">
        MEET THE TEAM
      </h1>
      <p class="subtitle has-text-centered">      
      </p>
    </div>
  </div>
</section>
<!-- -->

<div class="triangle">
</div>

<div class="container" id="Con">
	<div class="card">
    <div class="card-content">
      <div class="columns" id="team">
        <div class="column is-5">
          <img src="images/developers/paul.png" alt="">
        </div>
        <div class="column">
          <p class="title is-5" id="name">ADREMESIN, PAUL</p>
          <p class="subtitle" id="role">JR. FRONT-END DEVELOPER</p>
          <p class="information">Hi! I am Paul, one of the back-end developer of this project. My task is to support the senior back-end developer for the development of our projects. One of my responsibilities is to develop the function of our website and the connection of the database as well. I am also collaborating with the front-end developer and other team members to establish objectives and design more functional, cohesive codes to enhance the user experience.</p>

          <p class="information" style="padding-top: 10px;">I believe that our innovation is one of the kind concepts that is why I’m very glad to be part of this project and we are work very hard to bring this impossible project into reality with the help of our mentor and advisers.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="columns" id="team">
        <div class="column is-5">
          <img src="images/developers/jigz.png" alt="">
        </div>
        <div class="column">
          <p class="title is-5" id="name">CASTRODES, JAYSON</p>
          <p class="subtitle" id="role">FULL STACK DEVELOPER</p>
          <p class="information">I am Jayson but you call me “Jigz” for short, I am the full stack developer of this project. My job is to implement and assign the task to our members which is given by the project manager. I am also helping our members to perform their task properly. As a full stack developer, I take full responsibility of the android application which is also part of this innovation.</p>

          <p class="information" style="padding-top: 10px;">As a full stack developer my job is not so easy in need to focus on our weaknesses. Our project manager and I are always thinking what is the best for this project also with the ideas and help our team members we always sure that the best will always be given to the user.</p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="columns" id="team">
        <div class="column is-5">
          <img src="images/developers/lenard2.png" alt="">
        </div>
        <div class="column">
          <p class="title is-5" id="name">JUSTIMBASTE, LENARD</p>
          <p class="subtitle" id="role">SR. FRONT-END DEVELOPER</p>
          <p class="information">My name is Lenard, the Senior front-end developer in this project. My job to monitor the task of my junior front-end developers, my responsibilities is to materialize the idea that has been given by the project manager or the full stack developer. As a senior frontend developer, I need to make sure that the website or the software are compatible with multiple browsers and multiple devices. Part of my responsibilities is to oversees the activities of the junior frontend developer teams and works closely with the business’s backend developers. The Senior Frontend Developer implements the user interface and engineers the experience of every site/software being put out by the business.</p>

          <p class="information" style="padding-top: 10px;">My overview of our project is very impressive, that why I am honored to be part of this team and giving very best to help my team members beyond my limitation.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-content">
      <div class="columns" id="team">
       <div class="column is-5">
        <img src="images/developers/eloise.png" alt="">
      </div> 
      <div class="column">
        <p class="title is-5" id="name">LAGARIO, ELLOISE</p>
        <p class="subtitle" id="role">JR. FRONT-END DEVELOPER</p>
        <p class="information">Hi! I’m Elloise, the Junior frontend developer. My development is our landing page of the homepage of this website. I am the one who is maintaining the responsive function of our website most especially in the client-side development. As per our project manager and our full stack developer my objective is designing a site is to ensure that when the users open up the site they see the information in a format that is easy to read and relevant. This is further complicated by the fact that users now use a large variety of devices with varying screen sizes and resolutions thus forcing the designer to take into consideration these aspects when designing the site. They need to ensure that their site comes up correctly in different browsers (cross-browser), different operating systems (cross-platform) and different devices (cross-device), which requires careful planning on the side of the developer.</p>

        <p class="information" style="padding-top: 10px;">In developing of this project is not easy as you can see. We spend a lot of time to develop this project and innovation but I believe that the key success is the team work and discipline with the help of my team mates and adviser.</p>
      </div>

    </div>
  </div>
</div>

<div class="card">
  <div class="card-content">
    <div class="columns" id="team">
      <div class="column is-5">
        <img src="images/developers/bernard.png" alt="">
      </div>
      <div class="column">
        <p class="title is-5" id="name">LAGUARDIA, BERNARD</p>
        <p class="subtitle" id="role">SR. BACK-END DEVELOPER</p>
        <p class="information">Hello guys! I’m Bernard of the developer of zerterra I am focusing in development in the back-end of our website both admin and client side. One my duties is to guide my junior developer their assigned task from our full stack developer or from project manager also I am developing ideas for new programs, products, or features by monitoring industry developments and trends, But in our field I personally developer the function of our website.</p>
        <p class="information" style="padding-top: 10px;">I don’t have enough knowledge in developing a website most especially in the back-end area, but I take this responsibility because I don’t want to disappoint my teammates and also, I want to improve my programming skill. I am happy to be part of this project and this team.</p>

      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-content">
    <div class="columns" id="team">
     <div class="column is-5">
      <img src="images/developers/kevin2.png" alt="">
    </div> 
    <div class="column">
      <p class="title is-5" id="name">MANLANGIT, KEVIN</p>
      <p class="subtitle" id="role">HARDWARE SPECIALIST</p>
      <p class="information">Hi! I’m kevin the hardware specialist of this project. I take this responsibility not because I am not good enough in programming, I take this position because I know my capabilities in logic circuit and this would help our projects. Unlike to the other hardware, ours are also need a programming skill mostly we used Arduino devices for the controls of our machine. Hardware specialist required logical and critical thinking to visualized the outcome of this project this also a very dangerous job because it deals the live voltage for this project.
      </p>
      <p class="information" style="padding-top: 10px;">I enjoying doing of this innovation I think it suits me because at first my strength is in the hardware part but doesn’t mean that I don’t like the programming part because if you are in this team you need to be flexible in any field just like the real world situation.</p>
    </div>

  </div>
</div>
</div>

<div class="card">
  <div class="card-content">
    <div class="columns" id="team">
      <div class="column is-5">
        <img src="images/developers/chacha2.png" alt="">
      </div>
      <div class="column">
        <p class="title is-5" id="name">ROM,CHARLOTTE</p>
        <p class="subtitle" id="role">DATABASE MANAGER</p>
        <p class="information">Hello guys! I’m charlotte, they call me chacha. I am the QA or Quality Assurance of this project. My responsibilities are implementing tests, debugging and defining corrective actions. You will also review system requirements and track quality assurance metrics also I need to stay up-to-date with new testing tools and test strategies. Work with the full stack developer for the development of this project.
        </p>
        <p class="information" style="padding-top: 10px;">I accept this position not because I know everything it is because I need to learn more from my teammates. Not because I am the QA doesn’t mean that I need to ask for the perfection of this project it means that I need to motivate them if they need. I trust my teammates decision and ability when it comes to decision making.</p>

      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-content">
    <div class="columns" id="team">
      <div class="column is-5">
        <br>
        <br>


        <img src="images/developers/siomai.png" alt="">
      </div>
      <div class="column">
        <p class="title is-5" id="name">SALCEDO, PAUL ANTHONY</p>
        <p class="subtitle" id="role">PROJECT MANAGER</p>
        <p class="information">Hello there! I am the Project Manager of this team and my name is Paul Salcedo. My duties and responsibilities in this project are to think and design what is the best for this innovation, from front-end to back-end development. Unlike in the real-world scenario, the project manager is the one who is implementing what is the client wants. In this project part of my responsibilities is to create a plan and set a deadline in every project. Part of these responsibilities I must attentive to details. Meaning, I am the brain of this project if I fail my fellow teammates also fail. 
        </p>
        <p class="information" style="padding-top: 10px;">I am honored for being a project manager. Yes! It’s not easy but I have to do it not only for myself but also for my teammates. Like I always say “Don’t let them believe that you can’t do it, instead show them that you can do it out of your abilities”. I am so proud of this team we are not a perfect team but I can say that we can do everything with the help of every member.</p>

      </div>

    </div>
  </div>
</div>

</div>

<!-- FOOTER  -->
<footer class="footer-distributed">

  <div class="footer-left">
    <img src="images/weblogo.png">
    <p class="footer-links">
    	<a href="index.php">HOME | </a>
      <a href="ContactUs.php">CONTACT US | </a>
      <a href="AboutUs.php">ABOUT US </a>
    </p>

    <p class="footer-company-name">© 2019 ZerterraPh</p>
  </div>

  <div class="footer-center">
    <div>
     <i class="fa fa-map-marker"></i>
     <p><span>UCC CONG. RD.. CALOOCAN CITY</p>
     </div>

     <div>
      <i class="fa fa-phone"></i>
      <p><span> (+63) 995 495 0384 |  (+63) 906 593 9808</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#"><span>support@zerterra.com</a></p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>Zerterra</span>
          Zerterra is a home-made organic fertilizer maker made from food scrap.
        </p>
        <div class="footer-icons">
          <a href="https://www.facebook.com/zerterra"><i class="facebook">
            <img src="images\icon\fbIconWhite.png" alt="facebook">
          </i></a>
          <a href="https://twitter.com/Zerterra1"><i class="twitter">
            <img src="images\icon\twitterIconWhite.png" alt="twitter">
          </i></a>
          <a href="#"><i class="instagram">
            <img src="images\icon\igIconWhite.png" alt="instagram">
          </i></a>
          <a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="gplus">
            <img src="images\icon\GPlusIconWhite.png" alt="gplus">
          </i></a>
        </div>
      </div>
    </footer>
    <!-- -->

    <script type="text/javascript">
      $(document).ready(function(){
        $('.gotopbtn').fadeOut();
        $(window).scroll(function(){
          if($(this).scrollTop() > 200){
            $('.gotopbtn').fadeIn();
          } else{
            $('.gotopbtn').fadeOut();
          }
        });

        $("#gotopbtn").click(function(){
          $('html').animate({scrollTop : 0}, 5000);
        });
      });

    </script>
    <a class="gotopbtn" id="goTop" href="#"> <i class="fa fa-arrow-up"></i> </a>

    <script type="text/javascript" src="dist/js/modal-fx.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

  </body>
  </html>
