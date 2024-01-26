<?php 


/*require_once('config/db.php');
$query = "select * from register";
$result = mysqli_query($con,$query);
*/

require_once 'config/db.php';
require_once 'config/functions2.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.mini.css">
  <title>USERS LIST</title>
</head>
<!-- header section start -->
<div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo1.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="admin.php">USER LIST</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="call.php">CALL REQUEST</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="subscribe.php">SUBSCRIBE REQUEST</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="admin.php"><h1 class="banner taital" style="font-size: 40px;color:white;font-weight: bold;">LETS TRAVEL TOGETHER</h1></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="admin.php">USER LIST</a></li>
                     <li><a href="call.php">CALL REQUEST</a></li>
                     <li><a href="subscribe.php">SUBSCRIBE REQUEST</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- header section end -->
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
            <a class="nav-link" href="login.php">LOG OUT</a>
              <h2 class="display-6 text-center">USERS LIST</h2>
            </div>
            <div class="card-body">
            
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
              
                                <td> Subscribed Email </td>
                      
                </tr>
                </tr>
                </tr>
                <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                      
                                    if (isset($row['Email'])) {
                                        $Email = $row['Email'];
                                    } else {
                                        $Email = "";
                                    }
                                    
                            ?>
                                    <tr>
                                       >
                                        <td><?php echo $Email ?></td>
                                      
                                    </tr>        
                            <?php 
                                    }  
                            ?>         
                
              </table>
             
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
</body>
</html>