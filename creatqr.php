<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	   <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ويب سايت براءة الذمة</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
  <!-- End header -->
  
  

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
			
          <a class="navbar-brand" href="index.html" >_______________________________________تسجيل حضور الموظفين ________________________________</a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <? @session_start();
				
				 if (isset($_SESSION['username']))  { ?> 
			   <li><a href="logout.php">تسجيل الخروج</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">لوحة التحكم <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
             
				  <li><a href="emp.php">اضافة موظفين</a></li> 
                    <li><a href="register.html">اضافة مستخدم</a></li> 
                         
              </ul>
            </li>
             
              <li><a href="view.php">عرض الحضور </a></li>
			   <li><a href="readQR.php">تسجيل الحضور</a></li>
			  
            <? 
				
				 
				 }
			  else
			  { ?>
				  
				  <li><a href="login.html">تسجيل الدخول</a></li>
			  
			 <? }
				 ?>
           
         
		
                  
         
	
           
			     <li class="active"><a href="index.php">الرئيسية</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
       
      </div>     
    </nav>
  </section>
  <!DOCTYPE html>
<html lang="en">
<head>

  <title>QR Code with Number</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body dir="rtl">
  <h1>توليد الباركود للموظف</h1>
  <label for="numberInput">ادخل الرقم الوظيفي:</label>
  <input type="number" id="numberInput" placeholder="Enter a number">
  <button id="generateBtn">انشاء الباركود</button>

  <div id="qrcode" align="center" style="margin-top: 20px;"></div>

  <script>
    // Reference the necessary DOM elements
    const numberInput = document.getElementById('numberInput');
    const generateBtn = document.getElementById('generateBtn');
    const qrcodeDiv = document.getElementById('qrcode');

    // Function to generate QR code
    generateBtn.addEventListener('click', () => {
      // Clear any previous QR code
      qrcodeDiv.innerHTML = '';

      // Get the number from the input
      const number = numberInput.value;

      if (!number) {
        alert('Please enter a number.');
        return;
      }

      // Generate QR code with the number
      const qrCode = new QRCode(qrcodeDiv, {
        text: number,
        width: 200, // QR code width
        height: 200, // QR code height
        colorDark: '#000000', // QR code color
        colorLight: '#ffffff', // QR code background
        correctLevel: QRCode.CorrectLevel.H // Error correction level
      });
    });
  </script>
</body>
</html>

  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  </body>
</html>
