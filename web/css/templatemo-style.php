<?php

header('content-type: text/css'); // ON INDIQUE QU'IL S'AGIT DE CSS
ob_start('ob_gzhandler');
header('Cache-Control: max-age=31536000, must-revalidate');


require_once('../../controller/Controller.php');

$arrayNameViewImg = ['home', 'aboutme', 'experiences', 'education', 'testimonial', 'contact'];
$controller = new Controller(); // ON INSTANCIE LE CONTROLLEUR

foreach($arrayNameViewImg as $nameViewImg) {
  ${'img'.$nameViewImg} = $controller->sendImg($nameViewImg); // VARIABLE DYNAMIQUE APPELANT SENDIMG
}

?>

/*

Stimulus Template

http://www.templatemo.com/tm-498-stimulus

*/

body {
	background: #ffffff;
    font-family: 'Source Sans Pro', sans-serif;
    font-style: normal;
	font-weight: 300;
    overflow-x: hidden;
}

html,body {
  width: 100%;
  height: 100%;
}


/*---------------------------------------
    Typorgraphy
-----------------------------------------*/

h1,h2,h3,h4,h5,h6 {
  font-style: normal;
  font-weight: 300;
}

h1,h2,h3 {
  font-weight: 300;
}

h1 {
  font-size: 42px;
  padding-bottom: 14px;
  margin-bottom: 0px;
}

h2 {
  font-size: 42px;
  line-height: 52px;
  margin-top: 0px;
}

h3 {
  font-size: 26px;
  line-height: 32px;
  padding-bottom: 6px;
}

h4 {
  color: #999;
  font-size: 12px;
  font-weight: normal;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding-top: 6px;
}

h5 {
  color: #666666;
}

strong {
  color: #232B2B;
  font-weight: normal;
}

p {
    color: #888;
    font-size: 16px;
    font-weight: 300;
    line-height: 28px;
    letter-spacing: 0.2px;
}

.section-btn {
  background-color: transparent;
  border: 3px solid #232B2B;
  border-radius: 100px;
  color: #232B2B;
  font-size: 13px;
  font-weight: bold;
  letter-spacing: 1.6px;
  padding: 12px 36px;
  margin-top: 42px;
  transition: all 0.4s ease-in-out;
  text-transform: uppercase;
}

.section-btn:hover {
  background: #E3AE57;
  border-color: transparent;
  color: #ffffff;
}

.btn-success:focus {
  background-color: #000;
  border-color: transparent;
}

.parallax-section {
  background-attachment: fixed !important;
  background-size: cover !important;
}

.section-title {
  position: relative;
  padding-bottom: 22px;
}

#about,
#service,
#experience,
#education,
#contact {
  position: relative;
}

#home .container,
#about .container,
#experience .container,
#service .container,
#education .container,
#contact .container {
  width: 100%;
  padding: 0;
  margin: 0;
}

#experience .experience-thumb,
#education .education-thumb  {
  padding: 22px 42px 42px 42px;
}

#service,
#quotes,
footer {
  text-align: center;
}

#experience,
#education {
  background: #E9724C;
}

.background-image {
    background-position: 50% 50% !important;
    background-size: cover !important;
    width: 100%;
    height: 100%;
    min-height: 75vh;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

.color-white {
  color: #ffffff;
}

.color-yellow {
  color: #E3AE57;
}

.bg-yellow {
  background: #E3AE57;
}

.bg-white {
  background: #ffffff;
}

.bg-dark {
  background: #161616;
}



/*---------------------------------------
    General
-----------------------------------------*/

html{
  -webkit-font-smoothing: antialiased;
}

a {
  color: #E3AE57;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  text-decoration: none !important;
}
a:hover, a:active, a:focus {
  color: #E3AE57;
  outline: none;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



/*---------------------------------------
    Preloader section
-----------------------------------------*/

.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 99999;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
  background: none repeat scroll 0 0 #ffffff;
}

.spinner {
  border: 1px solid transparent;
  border-radius: 5px;
  position: relative;
}

.spinner:before {
  content: '';
  box-sizing: border-box;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 30px;
  height: 30px;
  margin-top: -10px;
  margin-left: -10px;
  border-radius: 50%;
  border: 2px solid #E3AE57;
  border-top-color: #f9f9f9;
  animation: spinner .6s linear infinite;
}

@-webkit-@keyframes spinner {
  to {transform: rotate(360deg);}
}

@keyframes spinner {
  to {transform: rotate(360deg);}
}



/*---------------------------------------
    Navigation section
-----------------------------------------*/

.custom-navbar {
    margin-bottom: 0;
    background-color: #ffffff;
}

.custom-navbar .navbar-brand {
    color: #333;
	text-shadow: 1px 1px #fff;
    font-weight: bold;
    font-size: 24px;
    line-height: 35px;
    letter-spacing: 1px;
}

.custom-navbar .nav li a {
    color: #666;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    line-height: 40px;
    transition: all 0.4s ease-in-out;
}

.custom-navbar .nav li a:hover {
    background: transparent;
    color: #E3AE57;
}

.custom-navbar .navbar-nav > li > a:hover,
.custom-navbar .navbar-nav > li > a:focus {
  background-color: transparent;
}

.custom-navbar .nav li.active > a {
    background-color: transparent;
    color: #E3AE57;
}

.custom-navbar .navbar-toggle {
    border: none;
    padding-top: 10px;
}

.custom-navbar .navbar-toggle {
    background-color: transparent;
}

.custom-navbar .navbar-toggle .icon-bar {
    background: #E3AE57;
    border-color: transparent;
}

@media(min-width:768px) {
    .custom-navbar {
        padding: 12px 0;
        border-bottom: 0;
        background: 0 0;
    }
    .custom-navbar.top-nav-collapse {
        background: #ffffff;
        box-shadow: 0px 2px 8px 0px rgba(50, 50, 50, 0.08);
        padding: 0;
    }

}



/*---------------------------------------
    Home section
-----------------------------------------*/

#home h1 {
  padding-bottom: 18px;
}

#home .col-md-6 {
  background: #f1e2d7;
/* light blue color: #c3eafd; */
  padding-right: 0;
  padding-left: 0;
}

#home .home-img {
  background: url('<?php echo $imghome["img"]; ?>') no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  width: 100%;
  height: 100vh;
}

#home .home-thumb {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  height: 100vh;
  padding: 0 45px 0 45px;
}



/*---------------------------------------
   About section
-----------------------------------------*/

#about .about-img {
    background: url('<?php echo $imgaboutme["img"]; ?>') no-repeat;
}

#about .about-thumb,
#about .skill-thumb {
  padding: 22px 32px 32px 32px;
}

#about .progress {
  background: #ffffff;
  border-radius: 0px;
  box-shadow: none;
  height: 2px;
}

#about .progress-bar-primary {
  background: #232B2B;
}

#about strong,
#about span {
  font-weight: bold;
  display: inline-block;
  padding-bottom: 8px;
}



/*---------------------------------------
    Service section
-----------------------------------------*/

#service {
  background: #E9724C;
}

#service p {
  font-size: 18px;
  line-height: 30px;
}

#service .service-thumb {
  padding: 52px 22px 52px 22px;
}

#service .service-thumb .fa {
  font-size: 42px;
  padding-bottom: 22px;
}



/*---------------------------------------
    Experience section
-----------------------------------------*/

#experience .experience-img {
  background: url('<?php echo $imgexperiences["img"]; ?>') no-repeat;
}

#experience .media-heading {
  margin-bottom: 0px;
}

#experience .media .fa {
  font-size: 42px;
  margin-right: 14px;
}

#experience small {
  color: #633;
  font-weight: bold;
}

/*---------------------------------------
    Education section
-----------------------------------------*/

#education {
  background: #E3AE57;
}

#education .education-img {
  background: url('<?php echo $imgeducation["img"]; ?>') no-repeat;
}

#education .media-heading {
  margin-bottom: 0px;
}

#education .media .fa {
  font-size: 42px;
  margin-right: 14px;
}

#education small {
  color: #886D1E;
  font-weight: bold;
}



/*---------------------------------------
   Quotes section
-----------------------------------------*/

#quotes {
    background: url('<?php echo $imgtestimonial["img"]; ?>') 50% 0 repeat-y fixed;
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    position: relative;
    padding: 100px 0px;
}

#quotes .overlay {
    background: #121212;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    opacity: 0.7;
}

#quotes .fa {
  font-size: 42px;
  margin-top: 32px;
  margin-bottom: 22px;
}

#quotes p {
  padding-top: 32px;
}


/*---------------------------------------
    Contact section
-----------------------------------------*/

#contact {
  background: #E9724C;
}

#contact .contact-form,
#contact .contact-thumb {
  padding: 22px 32px 22px 32px;
  min-height: 75vh;
}

#contact .contact-img {
  background: url('<?php echo $imgcontact["img"]; ?>') no-repeat;
  min-height: 75vh
}

#contact .contact-info {
  padding-top: 6px;
  padding-bottom: 6px;
}

#contact .form-control::-moz-placeholder{color:#ffffff;opacity:1}
#contact .form-control:-ms-input-placeholder{color:#ffffff}
#contact .form-control::-webkit-input-placeholder{color:#ffffff}

#contact .form-control {
  background: transparent;
  border: none;
  border-bottom: 1px solid #E3AE57;
  border-radius: 0px;
  box-shadow: none;
  color: #ffffff;
  font-size: 18px;
  margin-top: 10px;
  margin-bottom: 25px;
  transition: all 0.4s ease-in-out;
}

#contact .form-control:focus {
  border-bottom-color: #ffffff;
}

#contact input {
  height: 45px;
}

#contact input[type="submit"] {
  background: #ffffff;
  border: 2px solid transparent;
  border-radius: 40px;
  color: #161616;
  padding-bottom: 10px;
}

#contact input[type="submit"]:hover {
  background: transparent;
  border-color: #ffffff;
  color: #ffffff;
}

#contact .fa {
  padding-right: 10px;
}



/*---------------------------------------
   Footer section
-----------------------------------------*/

footer {
    padding: 140px 0px;
}



/*---------------------------------------
   Social icon
-----------------------------------------*/

.social-icon {
    position: relative;
    padding: 0;
    margin: 0;
    text-align: center;
}

.social-icon li {
    display: inline-block;
    list-style: none;
}

.social-icon li a {
    border: 2px solid transparent;
    color: #999;
    border-radius: 100px;
    cursor: pointer;
    font-size: 16px;
    text-decoration: none;
    transition: all 0.4s ease-in-out;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    vertical-align: middle;
    position: relative;
    margin: 22px 4px 10px 4px;
}

.social-icon li a:hover {
    background: #E3AE57;
    border-color: #ffffff;
    color: #ffffff;
    transform: scale(1.1);
}

/*---------------------------------------
  Admin
-----------------------------------------*/

#admin {
  padding: 2%;
}

#admin > form > input {
  display: block;
  margin: 1%;
}

#menuAdmin {
  display: flex;
  justify-content: space-around;
  width: 100%;
}

#formAdmin {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  width: 100%;
  padding: 2% 8%;
}

#formAdmin > div {
  display: flex;
  width: 100%;
  justify-content: space-between;
  align-items: center;
}

#formAdmin > div > p {
  margin: 1%;
  min-width: 120px;
  text-transform: uppercase;
}

#formAdmin > div > input[type=text] {
  margin: 1%;
  flex: 1;
}

#formAdmin > div > input[type=submit] {
  width: 10%;
  height: 80%;
}


/*---------------------------------------
   Mobile Responsive
-----------------------------------------*/

@media only screen and (max-width: 580px) {
  h1 {
    font-size: 32px;
  }

  h2 {
    font-size: 28px;
    line-height: inherit;
  }

  h3 {
    font-size: 22px;
    line-height: inherit;
  }
}

@media only screen and (max-width: 767px) {
  .custom-navbar .navbar-brand {
    line-height: 18px;
  }

  #home .home-thumb {
    height: auto;
    padding-top: 32px;
    padding-bottom: 12px;
  }

  #home .container,
  #about .container,
  #experience .container,
  #service .container,
  #education .container,
  #contact .container {
    padding-right: 15px;
    padding-left: 15px;
  }

  #about .col-md-3,
  #experience .col-md-6,
  #education .col-md-6,
  #contact .col-md-3 {
    padding: 0;
    margin: 0;
  }

  .background-image {
    position: relative;
    min-height: 65vh;
  }
}

@media only screen and (max-width: 1024px) {
  .section-title {
    padding-bottom: 12px;
  }

  footer {
    padding: 40px 0;
  }
}
