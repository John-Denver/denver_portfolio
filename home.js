$('.navTrigger').click(function () {
  $(this).toggleClass('active');
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();

});

// background floating words

const random = Math.random;
    const floor = Math.floor;
    const abs = Math.abs;
    const PI2X = Math.PI * 2;

    const mainElement = document.querySelector('main');
    const hideTextButton = document.querySelector('#hideText');
    const hideTextLabel = document.querySelector('label[for="hideText"]');
    const starsInput = document.querySelector('#stars');
    const starsOutput = document.querySelector('output[for="stars"]');
    const warpInput = document.querySelector('#warp');
    const warpOutput = document.querySelector('output[for="warp"]');
    const wordsInput = document.querySelector('#words');
    const engageInput = document.querySelector('#engage');
    const canvas = document.querySelector('canvas');
    const context = canvas.getContext('2d');

    let width, height;
    const getWindowSize = ()=>{
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', getWindowSize);
    getWindowSize();


    let stars;
    const updateStars = ()=>{ stars = Number(starsOutput.value = starsInput.value) }
    starsInput.addEventListener('input', updateStars);
    updateStars();


    let warp;
    const updateWarp = ()=>{ warp = Number(warpOutput.value = warpInput.value )}
    warpInput.addEventListener('input', updateWarp);
    updateWarp();


    let words;
    const updateWords = ()=>{ words = [...wordsInput.value.split(",")] }
    wordsInput.addEventListener('input', updateWords);
    updateWords();


    let engage;
    const updateEngage = function() { engage = engageInput.checked; }
    engageInput.addEventListener('input', updateEngage);
    updateEngage();


    class Star {
        
    
        constructor(){
        this.x = floor(random() * width);
        this.y = floor(random() * height);
        this.z = floor(random() * 11 + 1);
        this.word = null;
        this.randomWord();
        this.c = 0;
        this.brightness = Math.min(255,floor(this.z * 90 + 50));
        this.radius = Math.max(1, floor(this.z / 4) + .5)
        }
    
        move(){
        this.x += floor(1.25 * (warp + this.z - 10)) + 1
        
        if (this.x > width * 1.25){ 
            this.x = -this.radius * 2;
            this.y = random() * height;
            this.randomWord();
        }
        }
    
        randomWord(){
        let i = words.length;
        let j = floor(2 * stars * random());
        this.word = (j < i) ? j : -5;
        
        }
    
        draw(){
        let x = this.x, y = this.y, z = this.z; 
        let radius = this.radius;
        let brightness = this.brightness;
        let tailSize = 2 +  2 ** warp;
        
        if (this.word > -1 && warp < 2){
            
            context.moveTo(x + 4, y + 1);
            context.arc(x-1, y + 1, 6, 0 , Math.PI * 2)
            context.strokeStyle = 'green';
            context.moveTo(x-7, y-7);
            context.lineTo(x-16, y-16);
            context.lineTo(x-24, y-16);
            context.stroke();
            context.font = (6 + this.z * 2) + 'px roboto';
            context.textAlign = 'right';
            context.fillStyle = 'yellow';
            context.fillText(words[this.word], x-27, y - 16 + this.z);
        }
        
        while (tailSize > 0 && brightness > 15){
            let hex = brightness.toString(16);
            context.beginPath();
            context.moveTo(x, y);
            context.lineTo(x, y+ radius + .5);
            context.strokeStyle = '#' + hex + hex + hex;
            context.stroke();
            x -= 1;
            tailSize -= 1;
            brightness -= (11-warp);
        }
    }
    
    }


    let starz = [];
    for (let i = 0; i < 100; i++){
    starz.push(new Star());
    }


    const drawStars = () => {
    context.clearRect(0,0,width,height);
    let i = 0;
    while (i < stars) starz[i++].draw();
    }


    const moveStars = ()=> {
    let i = 0;
    while (i < stars) starz[i++].move();
    }


    const drawAnimation = ()=>{
    drawStars();
    if (engage){
        moveStars();  
        requestAnimationFrame(drawAnimation);
    }
    
    }


    engageInput.addEventListener('input', drawAnimation);
    drawAnimation();
    console.log('ok');


    // end background floating words


    // nav background change on scroll

    $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
          $('.nav').addClass('affix');
          console.log("OK");
      } else {
          $('.nav').removeClass('affix');
      }
  });
  $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
          $('.logo2').addClass('blacked').removeClass('logo2');
          console.log("OK");
      } else {
          $('.blacked').removeClass('blacked').addClass('logo2');
      }
  });
  $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
          $('.logo-twoo').addClass('blackeed').removeClass('logo-twoo');
          console.log("OK");
      } else {
          $('.blackeed').removeClass('blackeed').addClass('logo-twoo');
      }
  });

  $(window).scroll(function() {
      if ($(document).scrollTop() > 100) {
          $('.logo').addClass('whited').removeClass('logo');
          console.log("OK");
      } else {
          $('.whited').removeClass('whited').addClass('logo');
      }
  });

    // end nav background change on scroll

    // hacker style text decoding .js

    
    function decodeText(){
      var text = document.getElementsByClassName('decode-text')[0];
      var state = [];
      for(var i = 0, j = text.children.length; i < j; i++ ){
          text.children[i].classList.remove('state-1','state-2','state-3');
          state[i] = i;
      }
      var shuffled = shuffle(state);
   
      for(var i = 0, j = shuffled.length; i < j; i++ ){
          var child = text.children[shuffled[i]];
          classes = child.classList;
  
          // fire the first one at random times
          var state1Time = Math.round( Math.random() * (2000 - 300) ) + 50;
          if(classes.contains('text-animation')){ 
              setTimeout(firstStages.bind(null, child), state1Time);
          }
      }
  }
      function firstStages(child){
      if( child.classList.contains('state-2') ){   
          child.classList.add('state-3');
      } else if( child.classList.contains('state-1') ){
          child.classList.add('state-2')
      } else if( !child.classList.contains('state-1') ){
          child.classList.add('state-1');
          setTimeout(secondStages.bind(null, child), 100);
      }    
  }
  function secondStages(child){
      if( child.classList.contains('state-1') ){
          child.classList.add('state-2')
          setTimeout(thirdStages.bind(null, child), 100);
      } 
      else if( !child.classList.contains('state-1') )
      {
          child.classList.add('state-1')
      }
  }
      function thirdStages(child){
      if( child.classList.contains('state-2') ){
          child.classList.add('state-3')
      }
  
  }
  
      function shuffle(array) {
      var currentIndex = array.length, temporaryValue, randomIndex;
  
      while (0 !== currentIndex) {
          // Pick a remaining element...
          randomIndex = Math.floor(Math.random() * currentIndex);
          currentIndex -= 1;
  
          // And swap it with the current element.
          temporaryValue = array[currentIndex];
          array[currentIndex] = array[randomIndex];
          array[randomIndex] = temporaryValue;
      }
      return array;
  }
  
  
  decodeText();
  setInterval(function(){ decodeText(); }, 20000);


  // end hacker style decoding


//   skill section 

var swiper = new Swiper('.product-slider', {
    spaceBetween: 30,
    effect: 'fade',
    // initialSlide: 2,
    loop: false,
    navigation: {
        nextEl: '.next',
        prevEl: '.prev'
    },
    // mousewheel: {
    //     // invert: false
    // },
    on: {
        init: function(){
            var index = this.activeIndex;

            var target = $('.product-slider__item').eq(index).data('target');

            console.log(target);

            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');
        }
    }

});

swiper.on('slideChange', function () {
    var index = this.activeIndex;

    var target = $('.product-slider__item').eq(index).data('target');

    console.log(target);

    $('.product-img__item').removeClass('active');
    $('.product-img__item#'+ target).addClass('active');

    if(swiper.isEnd) {
        $('.prev').removeClass('disabled');
        $('.next').addClass('disabled');
    } else {
        $('.next').removeClass('disabled');
    }

    if(swiper.isBeginning) {
        $('.prev').addClass('disabled');
    } else {
        $('.prev').removeClass('disabled');
    }
});

$(".js-fav").on("click", function() {
    $(this).find('.heart').toggleClass("is-active");
});


$(document).scroll(function() {
    var st = $(this).scrollTop();
    $("#header").css({
      "background-position-y": (-st/20)
    })
    $("#headerc").css({
      "top": (-st/5),
      "bottom": (st/5)
    })
  });

// end skill section

// project section javascript
/*Variables*/
var container = document.body;
var con = 0;
var link = document.getElementsByClassName("control__item");
var b = document.getElementsByClassName("background");
var particles = document.getElementById("particles");

/*Funciones*/
function createParticle(event) {
    var np = document.documentElement.clientWidth / 40;
    particles.innerHTML = "";
    for (var i = 0; i < np; i++) {
        var w = document.documentElement.clientWidth;
        var h = document.documentElement.clientHeight;
        var rndw = Math.floor(Math.random() * w) + 1;
        var rndh = Math.floor(Math.random() * h) + 1;
        var widthpt = Math.floor(Math.random() * 6) + 3;
        var opty = Math.floor(Math.random() * 5) + 2;
        var anima = Math.floor(Math.random() * 12) + 8;

        var div = document.createElement("div");
        div.classList.add("particle");
        div.style.marginLeft = rndw + "px";
        div.style.marginTop = rndh + "px";
        div.style.width = widthpt + "px";
        div.style.height = widthpt + "px";
        div.style.opacity = opty;
        div.style.animation = "move " + anima + "s ease-in infinite ";
        particles.appendChild(div);
    }
}
function removeBg(event) {
    for (var i = 0; i < b.length; i++) {
        b[i].classList.remove("bg-active");
    }
}
function getActive(event) {
    for (var i = 0; i < link.length; i++) {
        link[i].classList.remove("is-active");
    }
}
function getBg(event) {
    var id = this.id.split("link-").join("");
    getActive();
    this.classList.add("is-active");
    removeBg()
    b[id].classList.add("bg-active");
    con = id;
}
function myWheel() {
    var y = event.deltaY;
    var x = event.keyCode;

    if (y > 0 || x == 40) {
        if (con < 6) {
            con++;
            removeBg()
            b[con].classList.add("bg-active");
            getActive();
            link[con].classList.add("is-active");
        }
    }
    if (y < 0 || x == 38) {
        if (con > 0) {
            con--;
            removeBg()
            b[con].classList.add("bg-active");
            getActive();
            link[con].classList.add("is-active");
        }
    }
}
/*Main function*/
function main(event) {
    for (var i = 0; i < link.length; i++) {
        link[i].addEventListener("click", getBg);
    }
    createParticle();
}
/*Listener*/
window.addEventListener("resize", createParticle);
window.addEventListener("load", main);
container.addEventListener("wheel", myWheel);
container.addEventListener("keydown", myWheel);



// end project section javascript