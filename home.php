<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Denver</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="skills.css">
  <link rel="stylesheet" href="projects.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
  </style>
</head>

<body>

  <!-- Floating words background -->

  <!-- Drawing Canvas for Stars, thanks Star Trek -->
  <canvas id="canvas"></canvas>

  <!-- About overvlay box -->
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
          <li class="" data-text="About"><a href="#">Skills</a></li>
          <li class="" data-text="Portfolio"><a href="#">Projects</a></li>
          <li class="" data-text="Contact"><a href="#">Contact</a></li>
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
  <section id="skills" class="skills-section">
    <div class="content-section text-center grey-overlay">
      <div class="container">
        <div class="section-title mb-100">Skills</div>
        <div class="row pt-30 pb-30">
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-solid fa-brain skills-icon mb-5"></div>
            <div class="skills-text">Creative Thinking</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa fa-code skills-icon mb-5"></div>
            <div class="skills-text">Web Design and Developemnt</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa fa-desktop skills-icon mb-5"></div>
            <div class="skills-text">Responsive Design</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-python skills-icon mb-5"></div>
            <div class="skills-text">Python(Django) Programming</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-php skills-icon mb-5"></div>
            <div class="skills-text">PHP</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-css3 skills-icon mb-5"></div>
            <div class="skills-text">CSS3</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-square-js skills-icon mb-5"></div>
            <div class="skills-text">Javascript</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa fa-database skills-icon mb-5"></div>
            <div class="skills-text">SQL</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-solid fa-compass-drafting skills-icon mb-5"></div>
            <div class="skills-text">Graphic and Motion Design</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-android skills-icon mb-5"></div>
            <div class="skills-text">Android</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-brands fa-wordpress skills-icon mb-5"></div>
            <div class="skills-text">Wordpress</div>
          </div>
          <div class="col-sm-4 col-md-3 col-lg-3">
            <div class="fa-solid fa-build skills-icon mb-5"></div>
            <div class="skills-text">Development</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- End skills section -->
  <div id="pageHr">

  </div>

  <!-- PRojects Section -->
  <div class="main" id="main">
    <div class="particles" id="particles"></div>
    <div class="control"><a class="control__item is-active" id="link-0"></a><a class="control__item" id="link-1"></a><a class="control__item" id="link-2"></a><a class="control__item" id="link-3"></a><a class="control__item" id="link-4"></a><a class="control__item" id="link-5"></a><a class="control__item" id="link-6"></a></div>
    <header class="header background" id="header"><img class="header__logo" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBB%0D%0AZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9u%0D%0AOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBT%0D%0AVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzEx%0D%0ALmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhcGFfMSIgeG1sbnM9Imh0dHA6Ly93d3cu%0D%0AdzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGlu%0D%0AayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIzMHB4IiBoZWlnaHQ9IjMwcHgiIHZpZXdCb3g9%0D%0AIjAgMCAzMCAzMCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMzAgMzAiIHhtbDpzcGFjZT0i%0D%0AcHJlc2VydmUiPg0KPHBhdGggZmlsbD0iI0Y3RjdGNyIgZD0iTTAsMHYzMGgzMFYwSDB6IE03Ljgz%0D%0AOSw0LjI0Mmw2LjEyMy0wLjAxNWMwLjU1NC0wLjAwMSwxLjM4OSwwLjIyMywxLjg2NiwwLjQ5N2w2%0D%0ALjQ1MywzLjcxNA0KCWMwLjQ3NCwwLjI3NSwwLjg2NCwwLjk0OSwwLjg2MSwxLjVsLTAuMDA4LDIu%0D%0ANzEyYy0wLjAwMywwLjU1MS0wLjM5MywwLjc3My0wLjg3LDAuNUw3LjcwNCw0Ljc0NA0KCUM3LjIy%0D%0ANyw0LjQ3LDcuMjg4LDQuMjQ0LDcuODM5LDQuMjQyeiBNMjIuMTUsMjUuNzcybC02LjE2NS0wLjAw%0D%0AM2MtMC41NTQsMC0xLjM5Mi0wLjIyNy0xLjg2Ni0wLjUwM2wtNi4zOTQtMy43MTINCgljLTAuNDc1%0D%0ALTAuMjc2LTAuODY1LTAuOTU0LTAuODY1LTEuNTAydi0yLjY4NGMwLTAuNTUxLDAuMzktMC43NzUs%0D%0AMC44NjUtMC41bDE0LjU2LDguNDA1QzIyLjc2LDI1LjU1MSwyMi43MDEsMjUuNzcyLDIyLjE1LDI1%0D%0ALjc3MnoNCgkgTTIyLjI2NywyMC42NTZsLTIuMzMsMS4zNTdjLTAuNDc1LDAuMjc5LTEuMjUyLDAu%0D%0AMjc5LTEuNzI5LDAuMDA1bC0xMC40ODItNi4wNWMtMC40NzUtMC4yNzUtMC44NjctMC45NS0wLjg3%0D%0ALTEuNWwtMC4wMTMtMi43MjENCgljMC0wLjU1MSwwLjM4NS0wLjc3NSwwLjg2Mi0wLjUwMWwxNC41%0D%0ANiw4LjQwNkMyMi43NDEsMTkuOTI2LDIyLjc0MSwyMC4zOCwyMi4yNjcsMjAuNjU2eiBNMjMuMTUy%0D%0ALDE4LjI1OA0KCWMwLDAuNTUxLTAuMzkzLDAuNzc3LTAuODcsMC41MDFMNy43MDQsMTAuMzQ3Yy0w%0D%0ALjQ3Ny0wLjI3NC0wLjQ3Ny0wLjcyNSwwLTAuOTk5bDIuMzQxLTEuMzUyYzAuNDc3LTAuMjc0LDEu%0D%0AMjU3LTAuMjc0LDEuNzMxLDANCglsMTAuNTIsNi4wNzhjMC40NzcsMC4yNzYsMC44NjQsMC45NTEs%0D%0AMC44NjEsMS41MDFMMjMuMTUyLDE4LjI1OHoiLz4NCjwvc3ZnPg0K" alt="Ícono de roa" />
      <div class="header__info">
        <h1 class="header__title">STRANGER <br>THINGS</h1>
      </div>
    </header>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Eleven</h2>
        <p class="portfolio__info">Eleven was kidnapped and raised in Hawkins National Laboratory, where she was
          experimented on for her inherited psychokinetic abilities. After escaping the lab, she was found by
          Mike, Lucas, and Dustin. Upon discovering her abilities, Mike believed that she could help find Will,
          their missing friend.</p>
      </div>
    </div>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Mike Wheeler</h2>
        <p class="portfolio__info">When Mike's best friend, Will Byers, mysteriously went missing, he and his other
          friends, Lucas and Dustin, made it their mission to find him. However, while searching for Will, they
          stumbled upon an escaped girl named Eleven instead.</p>
      </div>
    </div>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Will Byers</h2>
        <p class="portfolio__info">On the night of November 6th, 1983, Will was abducted by the Demogorgon and taken
          into an alternate dimension dubbed the Upside Down. For a week, Will evaded the creature while his
          family and friends desperately searched for him.</p>
      </div>
    </div>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Joyce Byers</h2>
        <p class="portfolio__info">The financially poor single mother of Will and Jonathan Byers, Joyce works as a
          retail clerk and relies on help from her eldest to make ends meet. After Will mysteriously disappeared,
          Joyce was certain that he was communicating with her through the lights in her house.</p>
      </div>
    </div>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Jim Hopper</h2>
        <p class="portfolio__info">Hopper was Chief of Police in the small, sleepy town of Hawkins, Indiana, where
          he used to live out a carefree existence - yet haunted by a troubled past. After the young son of an old
          friend disappeared mysteriously, Hopper's life became infinitely more complicated.</p>
      </div>
    </div>
    <div class="portfolio__item background">
      <div class="portfolio__left">
        <h2 class="portfolio__title">Demogorgon</h2>
        <p class="portfolio__info">The Demogorgon was a predatory humanoid creature that entered Hawkins, Indiana in
          November 1983. The creature originated from the parallel dimension known as the Upside Down. When
          Eleven, a psychic test subject from Hawkins National Laboratory, made interdimensional contact with it,
          a gate between dimensions opened at the lab.</p>
      </div>
    </div>
  </div>
  <!-- End projects Section -->


  <!-- End projects Section -->







  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- swiper js script -->
  <script>

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="js/scripts.js"></script>

  <!-- Function used to shrink nav bar removing paddings and adding black background -->
  <script>
    $(document).scroll(function() {
      var st = $(this).scrollTop();
      $("#header", "#canvas").css({
        "background-position-y": (-st / 20)
      })
      $("#decode-text").css({
        "top": (-st / 5),
        "bottom": (st / 5)
      })
    });
  </script>


  <script src="./home.js"></script>
  <script src="./assets/jquery/jquery.js"></script>
</body>

</html>