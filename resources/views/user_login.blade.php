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
      <a href="/" class="w3-button w3-block">Home</a>
    </div>
    
    <div class="w3-col s3">
        <a href="/user-login" class="w3-button w3-block">Login</a>
      </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Matrimonial</b></h1>
    <p>Make your choice</p>
  </div>


  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Login</span>
  </div>

  <form class="w3-container" action="{{route('login-user')}}" method="POST">
          @csrf
              <div class="w3-section">
                <label>Email</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
              </div>
              <div class="w3-section">
                <label>Password</label>
                <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="password" required>
              </div>
              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <a href="{{ url('/login/google') }}" class="btn btn-google-plus">Sign In with Google</a>
                     
                </div>
            </div><br>
             
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>
</div>
<script src="{{asset('js/common.js')}}"></script>
</body>
</html>
