<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <style media="screen">
    #tbval2 {
          display: none;
        }
        marquee {
        width: 100%;

        margin-left: 200px;
        background-color:#a29bfe;
        position:fixed;
        z-index: 1;
        bottom:0;

      }
    </style>
  </head>
  <body onload="fetch(),fetch2()">
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <nav class="navbar fixed-top navbar-expand-lg nav_style p-3 navbar-dark" >
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header pt-5">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="image/eksath.png" width="50%" height="70%" />
      </div>
      </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center pt-3" >
        <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="image/corona.png" width="75" height="75"/></span>na Virus </h1>
      </div>
   </div>
  </div>
</div>
<br>
<!--***** corona updates***-->
<section class="corona_update pt-5 " >
  <div>
    <h3 class="text-uppercase text-center">COVID-19 updates</h3>
  </div>
  <!--<div class="d-flex justify-content-around align-items-center container-fluid">-->
  <div class="justify-content-around align-items-center container-fluid pb-5">
    <div class="col-lg-3 col-md-6 inline ">
      <h1  class= "count " id='totid'>-</h1>
      <p align="center">Total Infected</p>
    </div>
    <div class="col-lg-3 col-md-6 inline" >
      <h1 class="count " id='actid'>-</h1>
      <p align="center">Active Cases</p>
    </div>
    <div class="col-lg-3 col-md-6 inline" >
      <h1 class="count" id='recid'>-</h1>
      <p align="center">Recovered</p>
    </div>
    <div class="col-lg-3 col-md-6 inline">
      <h1 class="count" id='dedid'>-</h1>
      <p align="center">Death</p>
    </div>
  </div>
  <div class="text-center mt-5">
    <button type="button" class="btn btn-primary btn-lg " onClick="GFG_Fun()">More Info</button>
  </div>
</section>
<img src="image/news.png" alt="Italian Trulli" width="350" height="75"style="position:fixed;z-index:2;bottom:0">
<marquee behavior="scroll"scrollamount="10" id='news'  ></marquee>
<!--***** corona updates global***-->
<section class="corona_update " id='tbval2'>
  <div class="table-responsive " >
    <table class="table table-bordered table-striped text-center" id='tbval'>
      <tr>
        <th>Country</th>
        <th>Total Confirmed</th>
        <th>Active Cases</th>
        <th>Recovered</th>
        <th>Death</th>
      </tr>
    </table>
  </div>

  </section>
<!--about-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid" >
  <div class="section_header text-center mb-5 mt-4 ">
    <h1>About COVID-19</h1>
  </div>
<div class="row pt-5 w-100 h-100">
  <div class="col-lg-6 col-md-12 col-12 pl-5 align-items-center">
    <img src="image/aboutcorona.jpg" class="img-fluid" />
  </div>
  <div class="col-lg-6 col-md-12 col-12 text-center pt-4">
    <h2>What is COVID-19(Corona-Virus)</h2>
    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.COVID-19 appeared in Wuhan, a city in China, in December 2019.</p>
    <p>Coronaviruses are a large family of viruses that are actually common throughout the world and can cause respiratory illness in people and animals. There are several known coronaviruses that infect people and usually only cause mild respiratory disease, such as the common cold. </p>
  </div>
</div>
</div>
<!--corona symptoms-->
<div class="container-container-fluid pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/cough.png" class="img-fluid" width="120" height= "120">
        <figcaption>Cough</figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/tiredness.png" class="img-fluid" width="120" height= "120">
        <figcaption>Tiredness</figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/cold.png" class="img-fluid" width="120" height= "120">
        <figcaption>Cold</figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/fever.png" class="img-fluid" width="120" height= "120">
        <figcaption>Fever</figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/runny-nose.png" class="img-fluid" width="120" height= "120">
        <figcaption>Runny Nose</figcaption>
      </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <figure class="text-center">
        <img src="image/breath.png" class="img-fluid" width="120" height= "120">
        <figcaption>Difficulty Breathing</figcaption>
      </figure>
      </div>
    </div>
  </div>
  </div>
  <!--prevention-->
  <div class="container-container-fluid sub_section pt-5 pb-5" id="preventid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>6 Steps Prevention Against Coronavirus</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/sanitize.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/socialdistance.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/mask.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Wear a mask when physical distancing is not possible.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/mouth.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Don’t touch your eyes, nose or mouth.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/stayhome.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay home and self-isolate from others if you feel unwell.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">
              <img src="image/sick.png" class="img-fluid" width="90" height= "90">
            </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>If you have a fever, cough and difficulty breathing, seek medical attention.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--contact us-->
  <div class="container-container-fluid pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Contact Us</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          <form action="" method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Email ID</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" maxlength="10" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
  Select Synptoms <br>
<div class="form-check-inline mt-1">
      <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="checkbox1" name="coronasym[]" value="cold">Cold
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="checkbox2" name="coronasym[]" value="fever">Fever
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="checkbox3" name="coronasym[]" value="Difficulty in breathing">Difficulty in breathing
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="checkbox4" name="coronasym[]" value="tired">Feeling Week
      </label>
    </div>
    <div class="form-group mt-3">
    <label for="exampleFormControlTextarea1">Comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='msg'></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
      </div>
    </div>
    </div>


<!--footer-->
<footer class="mt-5" >
  <div id="ftr"class="footer_style text-white text-center container-fluid" >
    <p>&#169; by Veerendra </p>
  </div>
</footer>
<script type="text/javascript">

  //Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function fetch(){
  $.get("https://covid-19.dataflowkit.com/v1",
  function(data){
    //console.log(data.length)
    var tbval=document.getElementById('tbval');
    document.getElementById('totid').innerHTML=data[0]['Total Cases_text'];
    document.getElementById('actid').innerHTML=data[0]['Active Cases_text'];
    document.getElementById('recid').innerHTML=data[0]['Total Recovered_text'];
    document.getElementById('dedid').innerHTML=data[0]['Total Deaths_text'];
    $('.count').counterUp({delay:10,time:3000})
      for(var i=1;i<220;i++)
      {
        var x=tbval.insertRow();
        x.insertCell(0);
        tbval.rows[i].cells[0].innerHTML=data[i]['Country_text'];
        tbval.rows[i].cells[0].style.background='#7a4a91';
        tbval.rows[i].cells[0].style.color='#fff';
        x.insertCell(1);
        tbval.rows[i].cells[1].innerHTML=data[i]['Total Cases_text'];
        tbval.rows[i].cells[1].style.background='#4bb7d8';
        x.insertCell(2);
        tbval.rows[i].cells[2].innerHTML=data[i]['Active Cases_text'];
        tbval.rows[i].cells[2].style.background='#a29bfe';
        x.insertCell(3);
        tbval.rows[i].cells[3].innerHTML=data[i]['Total Recovered_text'];
        tbval.rows[i].cells[3].style.background='#f36e23';
        tbval.rows[i].cells[3].style.color='green';
        x.insertCell(4);
        tbval.rows[i].cells[4].innerHTML=data[i]['Total Deaths_text'];
        tbval.rows[i].cells[4].style.background='#4bb7d8';
        tbval.rows[i].cells[4].style.color='red';


      }

  }
)
}
function GFG_Fun() {
            $("#" + 'tbval2').toggle();
        }
        function fetch2(){
          $.get("http://newsapi.org/v2/top-headlines?country=in&q=covid&apiKey=a14a241cce274fac90dc9673cb0c66a8",
          function(data){
            //console.log(data.length)
            var tbval=document.getElementById('news');
              for(var i=0;i<data.articles.length;i++)
              {

                tbval.innerHTML+=(i+1)+"."+data.articles[i].title+"&nbsp;&nbsp;&nbsp;";}

            }
          )
          }




</script>

  </body>
</html>

<?php

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];
  $chk="";
  foreach ($symp as $chk1) {
    $chk.=$chk1.",";
  }
  $insertquery="insert into details( name, email,	mobile, symp,	msg)values('$name','$email','$mobile','$chk','$msg')";
  include'dbcon.php';
  $query=mysqli_query($con,$insertquery);

  if($con){
    ?>
    <script>
      alert("Thank You");

    </script>
    <?php
  }else{
    ?><script>
      alert("error");
    </script>
    <?php
  }
}

 ?>
