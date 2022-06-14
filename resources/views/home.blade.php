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
      <a href="/logout" class="w3-button w3-block">Logout</a>
    </div>
   
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Matrimonial</b></h1>
    <p>Make your choice</p>
  </div>

    <!-- Grid -->
    <div class="w3-row-padding" id="about">
      <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Find Your Matches</span>
      </div>
  
      @if(isset($userArray)&& count($userArray)>0)
      @foreach($userArray as $user)
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          @if(isset($user['gender'])&& $user['gender']=="female")
          <img src="{{asset('images/female.jpg')}}"  alt="profile_image" style="width:20%">
          @endif
          @if(isset($user['gender'])&& $user['gender']=="male")
          <img src="{{asset('images/male.jpeg')}}" alt="profile_image" style="width:20%">
          @endif
          <div class="w3-container">
            <h3>
              @if(isset($user['first_name']))
              {{$user['first_name']}}
              @endif
              @if(isset($user['last_name']))
              {{$user['last_name']}}
              @endif
            </h3>
            <p class="w3-opacity">
              @if(isset($user['occupation']))
              {{$user['occupation']}}
              @endif
            </p>
            <p><a>View More</a></p>
            <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
          </div>
        </div>
      </div>
      @endforeach
      @else
      No Matches Found
      @endif
  

  
    
    </div>

<script src="{{asset('js/common.js')}}"></script>
</body>
</html>
