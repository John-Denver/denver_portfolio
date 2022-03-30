<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denver</title>
    <link rel="stylesheet" href="home.css">
    <!-- <link rel="stylesheet" href="parallax.css"> -->
    
    
    <style>
 </style>
</head>
<body>

    <!-- Floating words background -->

    <style>
        
        .five {
	 background-color: orange;
}

.skilled{
    margin-left: 3%;
}
 .five .services {
	 display: flex;
	 flex-direction: row;
	 flex-wrap: wrap;
	 justify-content: space-between;
	 margin-top: 30px;
}
 .five .services .service {
	 width: 30%;
	 font-weight: 600;
  font-family: monospace;
  font-style: italic;
  font-size: 20px;
	 display: flex;
	 align-items: center;
	 margin-bottom: 50px;
}
 .five .services .service .rounded {
	 border: 1px solid #e4e4e4;
	 border-radius: 50%;
	 height: 35px;
	 width: 35px;
	 margin-right: 30px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 
    </style>
      <!-- Drawing Canvas for Stars, thanks Star Trek -->
  <canvas id="canvas"></canvas>

  <!-- About overvlay box -->
    <div id="ShipsLog">

        <label for="stars" id="star" class="leboli"># Stars</label>
        <input type="hidden" id="stars" min="10" max="100" value="50"/>
        <output for="stars">-</output>
        <br>
        
        <label for="warp" id="warps" class="leboli"> Warp</label>
        <input type="hidden" id="warp" min="1" max="9.9" value="1" step=.5/>
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

    
    <section class="home" style="border-bottom: 40px;">
        <!-- <div class="overlay"></div> -->

        <div class="decode-text">
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


          <div class="space"></div><div class="space"></div><div class="space"></div>
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
            <div class="space"></div><div class="space"></div><div class="space"></div>
            
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
                <br>
                <br>
                <br>
            <div class="">
                <a href="#" class="hireMe">Hire Me</a>
            </div>
      </div>

         
          <div class="right-image">
              <img id="miself" src="./assets/images/splashh.png" alt="Myselfs image">
          </div>
          
    </section>

    <!--Waves Container-->
    <div id="line_wave" style="color: orange; height: 150px; border-bottom: -20px;">
        <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="100" y="0" fill="orange" />
                <!-- <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" /> -->
            </g>
        </svg>
        </div>
    </div>
<!--Waves end-->

<section class="five">
  <div class="skilled">
    <p class="red" data-aos="fade-up" data-aos-duration="1500">Our services</p>
    <h2 data-aos="fade-up" data-aos-duration="1500">Not only architecture servicers,<br>we have 6 other services.</h2>
    <p data-aos="fade-up" data-aos-duration="1500">Architecture is not only about engineering, it even tends to art and aesthetics. with us, you will get a<br>residential design with an extraordinary touch of art.</p>
    
    <div class="services" data-aos="fade-up" data-aos-duration="1500">
      <div class="service">
        <div class="rounded">1</div> <div>HTML</div>
      </div>
      <div class="service">
        <div class="rounded">2</div> <div>CSS</div>
      </div>
      <div class="service">
        <div class="rounded">3</div> <div>JAVASCRIPT</div>
      </div>
      <div class="service">
        <div class="rounded">9</div> <div>BOOTSTRAP</div>
      </div>
      <div class="service">
        <div class="rounded">4</div> <div>WORDPRESS</div>
      </div>
      <div class="service">
        <div class="rounded">5</div> <div>PHP</div>
      </div>
      <div class="service">
        <div class="rounded">6</div> <div>PHOTOSHOP</div>
      </div>
      <div class="service">
        <div class="rounded">7</div> <div>PYTHON</div>
      </div>
      <div class="service">
        <div class="rounded">8</div> <div>PYTHON(DJANGO)</div>
      </div>
      <div class="service">
        <div class="rounded">10</div> <div>GIT, GITHUB</div>
      </div>
      <div class="service">
        <div class="rounded">11</div> <div>CCNA</div>
      </div>
      <div class="service">
        <div class="rounded">12</div> <div>ANDROID</div>
      </div>
    </div>
  </div>
</section>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            
        </div>
        <svg class="hidden" hidden>
        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
            <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
        </symbol>
        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
            <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
        </symbol>
        </svg>




    <div class="skills" id="skills">
        <h1 class="heading_title">Skills</h1>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 30 720 200">
        <path fill="orange" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <section class="about" id="about">
       <div class="">
            <p class="line0">&nbsp;<span>$</span>&nbsp;Hello: <span class="cursor0">_</span></p>
            <p class="line1">&nbsp;<span>$</span>&nbsp;I'm <span class="myname">Denver</span> Ogamba;<span class="cursor1">_</span></p>
            <p class="line2">&nbsp;<span>$</span>&nbsp;A creative Web <span class="myname">Developer</span>;<span class="cursor2">_</span></p>
            <p class="line3">&nbsp;<span>$</span>&nbsp;Let's work together;&nbsp;<span class="cursor3">_</span></p>
            <p class="line4">&nbsp;<span>$</span><span class="cursor4">_</span>&nbsp;</p>
            <br>
            <br>
            <br><br><br>
            <br>
            <br>
            <br>
       </div>
    </section>


<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        
    </script>


<script src="./home.js"></script>
<script src="./assets/jquery/jquery.js"></script>
</body>
</html>
