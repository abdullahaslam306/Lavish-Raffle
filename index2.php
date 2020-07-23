<?php 
include('SimpleXLSX.php');
$filename=""; $productName=""; $mytitle=""; $winner="";$imgContent="";$image="";
$imageName="";
if(isset($_POST['add']))
{ $imageName="";
$filename=""; $productName=""; $mytitle=""; $winner="";$imgContent="";
 extract($_POST);
  $filename=$_FILES['excel']['name'];
$mytitle=$title;
$check = getimagesize($_FILES["img"]["tmp_name"]);
$imageName=$_FILES['img']['name'];
    if($check!== false)
    {
      $image = $_FILES['img']['tmp_name'];
    
        $imgContent = addslashes(file_get_contents($image));
     
    }



$namesArr=array();
if ( $xlsx = SimpleXLSX::parse($filename) ) {

$i=0;
foreach( $xlsx->rows() as $r ) {

  $namesArr[$i]=implode('</td><td>', $r );
  $i++;
  }
      
  
  $randIndex = array_rand($namesArr);

$winner=$namesArr[$randIndex];


}else{
  echo"<h1>Error! FILE NOT OPENING</h1>";
} 







?><!DOCTYPE html>
<html>
<head>
	<title>Lavish Raffle</title>
    <link rel="icon" href="logo1.jpg" type="image/gif" sizes="50x50">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style type="text/css">
body {
  margin: 0% auto;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  
  font-family: 'Anonymous Pro', monospace;
  text-align: center;
  background-color: #000000;
}
h1 {
  font-size: 5vw;
  color: white;
}
h1:before {
  content: attr(data-before);
  word-break: break-all;
  opacity: 0.5;
}
h1:after {
  content: attr(data-after);
  word-break: break-all;
  opacity: 0.5;
}
.button {
  padding: 20px 40px;
  font: inherit;
  color: #140d09;
  background-color: #c1bba0;
  opacity: 0;
  transform: translate3d(0, 50px, 0);
  transition: all 0.3s cubic-bezier(0, 1, 0, 1);
  cursor: pointer;
}
.button.show {
  opacity: 1;
  transform: translate3d(0, 30px, 0);
}
.fade-in {
  letter-spacing: 2px;
  animation: fadeIn ease 10s;
  -webkit-animation: fadeIn ease 10s;
  -moz-animation: fadeIn ease 10s;
  -o-animation: fadeIn ease 10s;
  -ms-animation: fadeIn ease 10s;
}
@keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
}
</style>

<body onload="init('<?php echo $winner; ?>')">


<div style="position:relative">
  <div style="position:absolute; z-index: 1000;">
     
<canvas id="canvas"></canvas>        
  </div>
</div>
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" ><img src="logo1.jpg" style="width: 100%; height:250px ;  align-self: center
"></div>
<div class="col-md-4"></div>
</div>
<div class="row" style="margin-top: 2%;">
<div class="col-md-4"></div>
<div class="col-md-4">
  <img src="<?php echo"images/$imageName"; ?>" width="250px" height="300px">
  </div>
  <div class="col-md-4">

</div>
</div>
<div class="row" style="margin-top: 2%;">
<div class="col-md-12"><h3 style="color: white; text-align: center; font-family: 'Anonymous Pro', monospace; font-weight: bold"> <?php 
echo strtoupper($mytitle); ?></h3></div>

</div>




<script type="text/javascript"> </script>
 <br>
<div class="row" id='roller' >
  <div class="col-md-12" style="background-color: white;">

	<h1 id="winnerName" style="color:black;">Example</h1>


</div>
</div>












<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript">
  var dictionary = "ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFG".split('');
//0123456789qwertyuiopasdfghjklzxcvbnm!?></\a`~+*=@#$%
var el = document.querySelector('h1');
var btn = document.querySelector('.button');

var ran = function() {
 return Math.floor(Math.random() * dictionary.length)
}

var ranString = function(amt) {
  var string = '';
  for(var i = 0; i < amt; i++) {
    string += dictionary[ran()];
  }
  return string;
}

var init = function(str) {
  var count =15;
  var delay = 50;
  

  el.innerHTML = '';
  
  var gen = setInterval(function() {
    el.setAttribute('data-before', ranString(count));
   el.setAttribute('data-after', ranString(count));
    if(delay > 0) {
      delay--;
    }
    else {
      if(count < str.length) {
         el.classList.add("fade-in");

        el.innerHTML += str[str.length - count-1];
      }
      count--;
      if(count === -1) {
        clearInterval(gen);
        showButton();

loop();
loop();
      }
    }
  }, 150);
}

var showButton = function() {
  

}

 var a=document.getElementById('winnerName').innerHTML;


function fun()
{
  alert('sdads');
}



  const canvasEl = document.querySelector('#canvas');

const w = canvasEl.width = window.innerWidth;
const h = canvasEl.height = window.innerHeight-40;

function loop() {
  requestAnimationFrame(loop);
  ctx.clearRect(0,0,w,h);
  
  confs.forEach((conf) => {
    conf.update();
    conf.draw();
  })
}
function Confetti () {
  //construct confetti
  const colours = ['#fde132', '#009bde', '#ff6b00'];
  
  this.x = Math.round(Math.random() * w);
  this.y = Math.round(Math.random() * h)-(h/2);
  this.rotation = Math.random()*360;

  const size = Math.random()*(w/60);
  this.size = size < 15 ? 15 : size;

  this.color = colours[Math.floor(colours.length * Math.random())];

  this.speed = this.size/9;
  
  this.opacity = Math.random();

  this.shiftDirection = Math.random() > 0.5 ? 1 : -1;
}

Confetti.prototype.border = function() {
  if (this.y >= h) {
    this.y = h;
  }
}

Confetti.prototype.update = function() {
  this.y += this.speed;
  
  if (this.y <= h) {
    this.x += this.shiftDirection/2;
    this.rotation += this.shiftDirection*this.speed/100;
  }

  if (this.y > h) this.border();
};

Confetti.prototype.draw = function() {
  ctx.beginPath();
  ctx.arc(this.x, this.y, this.size, this.rotation, this.rotation+(Math.PI/2));
  ctx.lineTo(this.x, this.y);
  ctx.closePath();
  ctx.globalAlpha = this.opacity;
  ctx.fillStyle = this.color;
  ctx.fill();
};

const ctx = canvasEl.getContext('2d');
const confNum = Math.floor(w / 2);
const confs = new Array(confNum).fill().map(_ => new Confetti());

</script>
</body>
</html>
<?php }else{
  header("location:menu.php?er=Enter Data First ");
} ?>

