<style type="text/css">
html{
  scroll-behavior: smooth;
}
*{ margin:0; padding:0; box-sizing: border-box;font-family: 'Mulish', sans-serif;}
.nav_style{
  background-color:#a29bfe!important;
}
.nav_style a{ color:#fff;}

/*//main header*/
.main_header{
  height: 450px;
  width:100%;
}
.rightside h1{
  font-size: 3rem;
}
.corona_rot img{
  animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
  0% {transform: rotate(0);}
  100% {transform: rotate(360deg);}
}
.leftside img{ animation: heartbeat 5s linear infinite;}
@keyframes heartbeat {
  0% {
    transform: scale(.75);
  }
  20% {
    transform: scale(1);
  }
  40% {
    transform: scale(.75);
  }
  60% {
    transform: scale(1);
  }
  80% {
    transform: scale(.75);
  }
  100% {
    transform: scale(1);
  }
}
/*corona update*/
.corona_update{
  margin: 0 2% 8% 2%;
}
.corona_update h3{
  color: #ff7675;
}
.corona_update h1{
  font-size: 2rem;
  font-weight: bold;
  text-align:center;
  margin-left: 3%;
}
.corona_update div.inline { float:left; }


/*about setion*/
.sub_section{
  background-color: #E9FCFF;
}
/*footer*/
.footer_style{
  background-color: #a29bfe!important;
}
.footer_style p{
  margin-bottom: 0!important
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#a29bfe;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
#ftr{
  z-index:1;
  position: absolute;
}

</style>
