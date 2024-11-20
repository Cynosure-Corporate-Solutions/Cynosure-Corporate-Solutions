<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-image: url('/images/gigjob image.png'); 
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow:hidden;
    }
    .hang{
    
       z-index:1000;
       margin-bottom:50px;
       margin-left:20px;
       margin-bottom: 580px;
      
    }
    .hang img{
  
    position:relative;
    z-index:1000;
    }
    .move{
      
       z-index:1000;
       margin-bottom:50px;
       margin-left:20px;  
       margin-bottom: 580px;
    }
    .move img{
       
    position:relative;
    z-index:1000;
    margin-left:270px;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 80%; 
      max-width: 1200px;
       
    }

    .login-container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      width: 390px;
      height: 500px; 
      padding: 20px;
      text-align: center;
      position: absolute;
      padding-top:50px;
     
    }

    .login-container img {
      width: 170px;
      margin-bottom: 20px;
      margin-right: 170px;
     
    }

    h3 {
      margin-bottom: 20px;
      font-size: 18px;
      font-weight: 500;
    }

    .form-group {
      text-align: left;
      margin-bottom: 15px;
      position: relative;
    }

    .form-group label {
      display: block;
      margin-bottom: 10px;
      position: absolute;
      z-index: 1000;
      background-color: white;
      margin-left: 20px;
      margin-top: -15px;
      padding: 5px;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 15px;
      border: 1px solid black;
      border-radius: 10px;
      font-size: 12px;
      position: relative;
    }

    .password-container {
      position: relative;
      width: 100%;
    }

    .password-container input {
      padding-right: 40px; 
    }

    .password-container .eye-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #666;
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .options input[type="checkbox"] {
      margin-right: 5px;
    }

    .options a {
      color: #007bff;
      text-decoration: none;
    }

    .options a:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      background-color: #13a4d6;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 4px;
      font-weight:bold;
    }

    #text-container {
      flex: 1;
      text-align: center;
      margin-left: 100px;
    }

    #text {
      font-size: 35px; 
      font-weight: bold;
      color: white;
      border-bottom: 2px solid #fff; 
      padding-bottom: 10px;
    }

    #wording {
      text-align: left;
      font-weight: 600;
    }
      /* Mobile responsiveness */
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 100%;
        justify-content: center;
        align-items: center;
      }

      .login-container {
        width: 90%;
        padding: 20px;
        height: auto;
        box-shadow: none;
      }

      #text-container {
        margin-left: 0;
        margin-top: 30px;
        text-align: center;
      }
 
      #text {
        font-size: 25px;
        border-bottom: none;
      }

      .move img,
      .hang img {
        display: none; 
      }
    }

    @media (max-width: 480px) {
      .login-container {
        width: 90%;
        padding: 15px;
      }

      .login-btn {
        padding: 10px;
        font-size: 14px;
      }

      #text {
        font-size: 22px;
      }
      body {
      background-image: url('/images/gigjob image.png'); 
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      /*overflow:hidden;*/
      margin-bottom:450px;
    
    }
   }

    
   
  </style>
</head>
<body>
  
  <div class="container">
 
   <div class="hang"> <img src="/images/hang image.png" alt="Logo"> </div>
     <div class="move"> <img src="/images/hang image.png" alt="Logo"> </div>
    <div class="login-container">
      <img src="/gig_jobs/cyno image.png" alt="Logo"> 
      <h4 id="wording">Login to your gigjobs employee account</h4>
      <br><br>
      <form id="loginForm">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter Your Name" required>
        </div>
        <br>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="password-container">
            <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
            <i class="fas fa-eye eye-icon" onclick="togglePasswordVisibility()"></i>
          </div>
        </div>
        <br>
        <!--<div class="options">-->
        <!--  <label><input type="checkbox" name="remember"> Remember me</label>-->
        <!--  <a href="#">Forgot Password?</a>-->
        <!--</div>-->

        <button type="submit" class="login-btn">Log In</button>
      </form>
    </div>

    <div id="text-container">
      <div id="text">Connecting Talent with Opportunity</div>
    </div>
  </div>

  <script>
  
  
    $(document).ready(function() {
            $("#loginForm").on("submit", function(event) {
                event.preventDefault();

              
                $.ajax({
                    url: 'emplogin_ajax.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response === "success") {
                            window.location.href = 'emp_dashboard.php';
                        } else {
                            alert(response);
                        }
                    }
                });
            });
        });
  
  
  
  
  
    
    function togglePasswordVisibility() {
      const passwordField = document.getElementById('password');
      const eyeIcon = document.querySelector('.eye-icon');
    
      
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    }
  </script>

</body>
</html>
