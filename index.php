<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--ICONS LINK-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!--BOOTSTRAP LINK-->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- LINK FOR AOS-->
    <link rel="stylesheet" href="aos.css">
    <script src="aos.js"></script>

    <!--MAIN.CSS LINK-->
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>

  <!--SOCIAL MEDIA BAR-->
    <div class="above">
      <a href="#instagram"><span class="fab fa-instagram"></span>
      <a href="#facebook"><span class="fab fa-facebook-f"></span>
      <a href="#twitter"><span class="fab fa-twitter"></span>
    </div>

    <!--NAVIGATION BAR-->
    <div class="header">
      <a href="#default" class="logo">Universal College of Engineering</a>
      <div class="header-right">
        <a class="active" href="#home">Home</a>
        <a class="seminar" href="seminar.php">Seminar</a>
        <a class="apply" href="apply.php">Apply</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
      </div>
    </div>

    <!--WALLPAPER-->
    <div class="wallpaper" style="position: relative;">
    <img
      class="fill"
      src="wallpaper.jpg"
      alt="office"
      style="width: 100%; height: auto; z-index: -1; position: relative"
    />
    <div class="overlay">
      Get ready for industry
      <p style="font-size: 24px;font-weight: 500;"> Get adequate training for company from industry experts </p>
    </div>
    </div>
    <br />

    <!--CARDS-->
    <div class="row" style="margin: -30px 30px 0px 30px; z-index: 3">
      <div class="column">
        <div class="card" style="background-color: #00334e">
          <span class="far fa-building"></span>
          <h3>45</h3>
          <p>Companies</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #145374">
          <span class="fas fa-user-tie"></span>
          <h3>2000+</h3>
          <p>Students</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #00334e">
          <span class="fas fa-headset"></span>
          <h3>300+</h3>
          <p>Seminar</p>
        </div>
      </div>

      <div class="column">
        <div class="card" style="background-color: #145374">
          <span class="far fa-clipboard"></span>
          <h3>3000+</h3>
          <p>Applicants</p>
        </div>
      </div>
    </div>
    <br /><br />


    <!--ABOUT US -->
    <div data-aos="fade-up">
    <div class="container" id="aboutus">
      <h1 class="element">ABOUT US</h1>
      <br />
      <div class="row">
        <div class="col-md-6">
          <img src="induction.jpg" alt="Induction" style="width: 100%" />
        </div>

        <div class="col-md-6" id="aboutustxt">
          The Training and Placement (T&P) department is located at Universal
          College of Engineering, Kaman-Vasai. The T&P department centrally
          handles placement for the students graduating in engineering programs.
          The T&P department provides complete support to the visiting companies
          at every stage of the placement process and arranging for
          pre-placement talks, online tests, written tests, interviews and group
          discussions are made as per the requirements.
          <br />We welcome all aspirants to create an incredible legacy in the
          field of Computer, Civil, Electronics, Information Technology and
          Electronics and Telecommunication Engineering. <br /><br />
          <button class="btn btn-light">
            Read More <span class="fa fa-angle-right"></span>
          </button>
        </div>
      </div>
</div>
</div>
<br><br>
      <!--PROMINENT RECRUTIERS-->

      <div data-aos="fade-up">
      <div class="container" id="aboutus">
      <h1 class="element">OUR PROMINENT RECRUTIERS</h1>
      <br />
      <div class="row">
        <div class="col-md-6" id="aboutustxt">
          UCOE has an enviable record in placement of students. The institute
          has been accredited by major companies like Infosys, Tata Consultancy
          Services, Accenture, iGate and Tech-Mahindra etc.<br /><br>
          At present more than 45 companies are visiting for campus recruitment
          every year and almost all eligible students are placed through campus.
          Special efforts are also taken to place the noneligible students.
<br><br>
          <button class="btn btn-primary" style="background-color: #145374;">Apply for Company</button>
        </div>

        <div class="col-md-6">
          <img id="myImg" src="company1.jpg"/>
        </div>
      </div>
    </div>
</div>

<!-- The Modal to open up an image-->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


<!--JS CODE TO OPEN UP MODAL-->
<script>
var modal = document.getElementById("myModal");

var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}
</script>
  

<br><br>

<!--PREVIOUS YEAR REPORTS-->
<div data-aos="fade-up">
<h1 class="element">PREVIOUS YEAR REPORTS</h1>
<div class="slideshow-container">

<div class="mySlides ">
  <div class="numbertext">1 / 4</div>
  <img src="g1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">2 / 4</div>
  <img src="g2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">3 / 4</div>
  <img src="g3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides ">
  <div class="numbertext">4 / 4</div>
  <img src="g4.jpg" style="width:100%">
  <div class="text"></div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>


<!--JS CODE FOR SLIDESHOW-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//SCROLLING JS 
AOS.init();
</script>


</body>
</html>
