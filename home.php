<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Denver</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="projects.css">
  <link rel="stylesheet" href="footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <!-- Floating words background -->

  <!-- Drawing Canvas for Stars -->
  <canvas id="canvas"></canvas>

  <div id="ShipsLog">

    <label for="stars" id="star" class="leboli"># Stars</label>
    <input type="hidden" id="stars" min="10" max="100" value="50" />
    <output for="stars">-</output>
    <br>

    <label for="warp" id="warps" class="leboli"> Warp</label>
    <input type="hidden" id="warp" min="1" max="9.9" value="1" step=.5 />
    <output for="warp">-</output>
    <br>

    <label for="words" id="word" class="leboli">Words</label>
    <textarea class="maneno" id="words" rows=2 cols=30>HTML 5, CSS3, JS, PHP, Connect, PYTHON, DJANGO, ANDROID, PHOTOSHOP, AFTER EFFECTS, GRAPHIC DESIGN, BOOTSTRAP, JQUERY</textarea>
    <br>

    <input type="checkbox" id="engage" checked />
    <label for="engage" class="leboli">Pause</label>

  </div>

  <!-- end floating words background -->
  <nav class="nav" style="z-index: 9999;">
    <div class="container">

      <div class="logo">
        <a href="#" style="margin-left: -100%;">D</a>
      </div>

      <div class="logo2">
        <a href="#">D</a>
      </div>

      <div class="logo-two">
        <a href="#">B</a>
      </div>

      <div class="logo-twoo">
        <a href="#">B</a>
      </div>

      <div id="mainListDiv" class="main_list ">
        <ul class="navlinks ">
          <li class="" data-text="About"><a href="#">About</a></li>
          <li class="" data-text="About"><a href="#skills">Skills</a></li>
          <li class="" data-text="Portfolio"><a href="#main">Projects</a></li>
          <li class="" data-text="Contact"><a href="#contact-section">Contact</a></li>
        </ul>
      </div>
      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>


  <section class="home" style="border-bottom: 40px;" id="header">
    <!-- <div class="overlay"></div> -->

    <div class="decode-text" id="decode-text">
      <div class="text-animation" style="display:inline-block;position:relative;">I</div>
      <div class="text-animation" style="display:inline-block;position:relative;">'</div>
      <div class="text-animation" style="display:inline-block;position:relative;">M</div>

      <div class="space"></div>

      <div class="text-animation" style="display:inline-block;position:relative;">D</div>
      <div class="text-animation" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation" style="display:inline-block;position:relative;">N</div>
      <div class="text-animation" style="display:inline-block;position:relative;">V</div>
      <div class="text-animation" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation" style="display:inline-block;position:relative;">R</div>

      <div class="space"></div>

      <div class="text-animation" style="display:inline-block;position:relative;">O</div>
      <div class="text-animation" style="display:inline-block;position:relative;">G</div>
      <div class="text-animation" style="display:inline-block;position:relative;">A</div>
      <div class="text-animation" style="display:inline-block;position:relative;">M</div>
      <div class="text-animation" style="display:inline-block;position:relative;">B</div>
      <div class="text-animation" style="display:inline-block;position:relative;">A</div>
      <div class="text-animation" style="display:inline-block;position:relative;">:</div>
      <div class="space"></div><br><br>


      <div class="space"></div>
      <div class="space"></div>
      <div class="space"></div>

      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">I</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">T</div>

      <div class="space"></div>

      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">S</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">P</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">E</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">C</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">I</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">A</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">L</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">I</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">S</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">T</div>
      <div class="text-animation white" style="display:inline-block;position:relative; color: #fff;">;</div>

      <div class="space"></div><br>
      <br>

      <div class="text-animation smaller" style="display:inline-block;position:relative;">A</div>
      <div class="space"></div>


      <div class="text-animation smaller" style="display:inline-block;position:relative;">F</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">U</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">L</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">L</div>

      <div class="space"></div>

      <div class="text-animation smaller" style="display:inline-block;position:relative;">S</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">T</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">A</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">C</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">K</div>

      <div class="space"></div>

      <div class="text-animation smaller" style="display:inline-block;position:relative;">W</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">B</div>

      <div class="space"></div>

      <div class="text-animation smaller" style="display:inline-block;position:relative;">D</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">V</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">L</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">O</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">P</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">R</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">;</div>

      <br><br>
      <div class="space"></div>
      <div class="space"></div>
      <div class="space"></div>

      <div class="text-animation smaller" style="display:inline-block;position:relative;">F</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">R</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">O</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">N</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">T</div>
      <div class="space"></div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">&</div>
      <div class="space"></div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">B</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">A</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">C</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">K</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">N</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">D</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">;</div>
      <br><br>


      <!-- pYTHON DEVELOPER -->
      <div class="text-animation smaller" style="display:inline-block;position:relative;">P</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">Y</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">T</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">H</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">O</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">N</div>

      <div class="space"></div>

      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">(</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">D</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">J</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">A</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">N</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">G</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">O</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative; color: #fff;">)</div>
      <div class="space"></div>


      <div class="text-animation smaller" style="display:inline-block;position:relative;">D</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">V</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">L</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">O</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">P</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">E</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">R</div>
      <div class="text-animation smaller" style="display:inline-block;position:relative;">;</div>
      <br><br><br>

      <div class="">
        <a href="#" class="hireMe">Hire Me</a>

        <a href="#" class="hireMe">Download CV</a>
      </div>

    </div>

    <div class="right-image">
      <img id="miself" src="./assets/images/splashh.png" alt="Myselfs image">
    </div>
  </section>



  <div id="pageHr">
    <i><i>↓</i></i>
  </div>

  <!-- Skills Section -->

  <?php include 'skills.html'; ?>

  <!-- End skills section -->

  <div id="pageHr">
    <i><i></i></i>
  </div>

  <!-- PRojects Section -->
  <?php include 'projects.html'; ?>
  <!-- End projects Section -->

  <div id="pageHr">
    <i><i></i></i>
  </div>

  <!-- Contact me Section -->
  <?php include 'contact.html'; ?>

  <!-- end contact me section -->

  <div id="pageHr">
    <i><i></i></i>
  </div>

  <!-- footer section -->
  <?php include 'footer.html'; ?>
  <!-- end footer section -->

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- swiper js script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="./assets/jquery/jquery.js"></script>

  <script src="js/scripts.js"></script>

  <script src="./home.js"></script>

</body>

</html>