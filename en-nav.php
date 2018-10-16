  <div class="list-header"></div>

<div class="container-fluid">
  <div class="row">
<div class="hidden-xs hidden-sm col-md-12 col-lg-12">
<div class="container">
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/logo/logo.png" style="width: 150px;"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="disable"><a href="_en/aboutus.php">About Us</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Product <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Forex</a></li>
          <li><a href="#">Commodites</a></li>
          <li><a href="#">Stodex</a></li>
        </ul>
      </li>
    
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">-------</a></li>
          <li><a href="#">-------</a></li>
          <li><a href="#">-------</a></li>
        </ul>
      </li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><button class="button-login"><a href="singup/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></button>
    </li>
    <li>
         <button class="button-login" onclick="document.getElementById('modal-wrapper').style.display='block'">
         <span class="glyphicon glyphicon-log-in"></span> Login</button>
    </li>



          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="img/flag/1en.svg" style="width:25px;"><span class="caret"></span></a>
        <ul class="dropdown-menu" style="padding-left: -20px;">
          <li><a href="#"><img src="img/flag/2id.svg" style="width: 20px;"> Indonesia</a></li>
          <li><a href="#"><img src="img/flag/3ind.svg" style="width: 20px;"> India</a></li>
          <li><a href="#"><img src="img/flag/4kr.svg" style="width: 20px;"> Korea</a></li>
          <li><a href="#"><img src="img/flag/5mm.svg" style="width: 20px;"> Burmese</a></li>
          <li><a href="#"><img src="img/flag/6ph.svg" style="width: 20px;"> Philiphina</a></li>
          <li><a href="#"><img src="img/flag/7th.svg" style="width: 20px;"> Thailand</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


  </div>
</div>
</div>
</div>


<div class="container-fluid">
<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">

<div id="mySidebar" class="sidebar">
  <div class="col-xs-10"><img src="img/logo/logo.png" class="img-responsive"></div>

  <div class="col-xs-2"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a></div>
 

     <button type="button" class=" btn-nav"><a href="#">About Us</a></button>



  <button type="button" class=" btn-nav" data-toggle="collapse" data-target="#nav-product">Product <span class="glyphicon glyphicon-menu-down"></span></button>
  <div id="nav-product" class="collapse">
    <a href="#">Forex</a>
    <a href="#">Commodities</a>
    <a href="#">Stodex</a>
  </div>


  <button type="button" class=" btn-nav" data-toggle="collapse" data-target="#nav-akun">Account  <span class="glyphicon glyphicon-menu-down"></span></button>
  <div id="nav-akun" class="collapse">
    <a href="#">-----</a>
     <a href="#">-----</a>
      <a href="#">-----</a>
  </div>

<div class="col-xs-6"> <button type="button" class=" btn-nav-user"><a href="singup/login.php">Login</a></button></div>

<div class="col-xs-6"> <button type="button" class=" btn-nav-user"><a href="singup/register.php">Register</a></button></div>

</div>








<div id="main">
    <div class="col-xs-10"><img src="img/logo/logo.png" class="img-responsive"></div>
      <div class="col-xs-2"><a href="javascript:void(0)" class="openbtn" onclick="openNav()">☰</a></div>
</div>

</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>








<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/loginpop.png" alt="Avatar" class="avatar">

      <input type="text" placeholder="Username" name="username">

      <input type="password" placeholder="Password" name="psw"> 
<br>
       <input type="checkbox">Remember me  
       <button type="submit" class="button-login-submit">Login</button>
        <a href="../forgot.php">Forgot Password ?</a>  
    </div>

  
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>