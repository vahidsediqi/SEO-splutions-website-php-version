//  Side bar number changing on scroll

// window.addEventListener('scroll', function() {
//   document.querySelector('.active-number').innerHTML + 5 ;
// });

// $(function () {
//   $(window).on('scroll', function () {
//       if ( $(window).scrollTop() > 10 ) {
//         document.querySelector('.active-number').innerHTML ++ ;
//       }

//       else {
//         document.querySelector('.active-number').innerHTML - 1  ;
//       }
//   });
// });
 
 
$(window).scroll(function(){ 
  if ( $(window).scrollTop() > 800 &&  $(window).scrollTop() < 1100 ) {
    $("#number").text('02');
} else if ( $(window).scrollTop() < 10 ) {
  $("#number").text('01');
} else if ( $(window).scrollTop() > 1500 &&  $(window).scrollTop() < 1900 ) {
  $("#number").text('03');
}  else if ( $(window).scrollTop() > 1900 &&  $(window).scrollTop() < 2800 ) {
  $("#number").text('04');
} else if ( $(window).scrollTop() > 2800 &&  $(window).scrollTop() < 3400 ) {
  $("#number").text('05'); } 
  else if ( $(window).scrollTop() > 3700 &&  $(window).scrollTop() < 4700 ) {
    $("#number").text('06'); } 

})

 // Hero typed
 if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  // Navbar fucntions

  $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});


// Read more 


function ReadMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = `Weiterlesen <i class="fas fa-sort-down"></i>`; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = `Lese weniger <i class="fas fa-sort-up"></i>`; 
    moreText.style.display = "inline";
  }
}

document.getElementById('myBtn').addEventListener('click', ReadMore);

// 404 page

function drawVisor() {
  const canvas = document.getElementById('visor');
  const ctx = canvas.getContext('2d');
  
  ctx.beginPath();
  ctx.moveTo(5, 45);
  ctx.bezierCurveTo(15, 64, 45, 64, 55, 45);
  
  ctx.lineTo(55, 20);
  ctx.bezierCurveTo(55, 15, 50, 10, 45, 10);
  
  ctx.lineTo(15, 10);
  
  ctx.bezierCurveTo(15, 10, 5, 10, 5, 20);
  ctx.lineTo(5, 45);
  
  ctx.fillStyle = '#2f3640';
  ctx.strokeStyle = '#f5f6fa';
  ctx.fill();
  ctx.stroke();
}

const cordCanvas = document.getElementById('cord');
const ctx = cordCanvas.getContext('2d');

let y1 = 160;
let y2 = 100;
let y3 = 100;

let y1Forward = true;
let y2Forward = false;
let y3Forward = true;

function animate() {
  requestAnimationFrame(animate);
  ctx.clearRect(0, 0, innerWidth, innerHeight);
  
  ctx.beginPath();
  ctx.moveTo(130, 170);
  ctx.bezierCurveTo(250, y1, 345, y2, 400, y3);
  
  ctx.strokeStyle = 'white';
  ctx.lineWidth = 8;
  ctx.stroke();
 
  
  if (y1 === 100) {
    y1Forward = true;
  }
  
  if (y1 === 300) {
    y1Forward = false;
  }
  
  if (y2 === 100) {
    y2Forward = true;
  }
  
  if (y2 === 310) {
    y2Forward = false;
  }
  
  if (y3 === 100) {
    y3Forward = true;
  }
  
  if (y3 === 317) {
    y3Forward = false;
  }
  
  y1Forward ? y1 += 1 : y1 -= 1;
  y2Forward ? y2 += 1 : y2 -= 1;
  y3Forward ? y3 += 1 : y3 -= 1;
}

drawVisor();
animate();