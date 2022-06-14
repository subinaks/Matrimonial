<!DOCTYPE html>
<html>
<title>Matrimony</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.column {
  float: left;
  width: 50%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Register</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Matrimonial</b></h1>
    <p>Make your choice</p>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="/w3images/coffee.jpg" style="width:100%">
      <div class="w3-display-topleft w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Lorem ipsum</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="/w3images/workbench.jpg" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Klorim tipsum</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="/w3images/sound.jpg" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Register</span>
  </div>

  <form class="w3-container"  id="registerForm">
            <h3>Basic Information</h3>
            <div class="w3-section">
                <label>Fisrt Name</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
              </div>
              <div class="w3-section">
                <label>Last Name</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
              </div>
              <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
              </div>
              <div class="w3-section">
                <label>Password</label>
                <input class="w3-input w3-border w3-hover-border-black" type="password" style="width:100%;" name="Subject" required>
              </div>
              <div class="w3-section">
                <label>Date of Birth</label>
                <input id="datepicker" class="w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
            </div>
              <div class="w3-section">
                <label>Gender</label>&nbsp;
                <input class=" w3-border w3-hover-border-black" type="radio" name="gender" value="male"> Male
                <input class=" w3-border w3-hover-border-black" type="radio" name="gender" value="female"> Female
              </div>
              <div class="w3-section">
                <label>Annual Income</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
              </div>
              <div class="w3-section">
                <label>Occupation</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Private job">Private job</option>
                    <option value="Government Job">Government Job</option>
                    <option value="Business">Business</option>
                  </select> 
            </div>
              <div class="w3-section">
                <label>Family Type</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Joint family">Joint family</option>
                    <option value="Nuclear family">Nuclear family</option>
                  </select> 
              </div>
              <div class="w3-section">
                <label>Manglik</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
              </div>
              <h3>Partner Preference</h3>
              <div class="w3-section">
                <label>Expected Income</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                <div id="slider-range"></div> 
            </div>
            <div class="w3-section">
                <label>Occupation</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Private job">Private job</option>
                    <option value="Government Job">Government Job</option>
                    <option value="Business">Business</option>
                  </select> 
            </div>
              <div class="w3-section">
                <label>Family Type</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Joint family">Joint family</option>
                    <option value="Nuclear family">Nuclear family</option>
                  </select> 
              </div>
              <div class="w3-section">
                <label>Manglik</label>
                <select class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="cars" id="cars">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
              </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Footer</h4>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<script src="{{asset('js/common.js')}}"></script>
</body>
</html>
