<?php
$servername = "localhost";
$username = "root";
$password = "master12!";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEN|PERSONAL PAGE</title>
    <meta name="description" content="Benson, Nguru, Mburu,  Designer, Developer,coder,Android,Js" />
    <meta name="keywords" content="Benson, Nguru, Mburu,  Designer, Developer,coder,Android,Js,Web Design" />
    <meta name="author" content="PORTFOLIO" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/set2.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <script type="text/javascript" src="js/materialize.js"></script>
    <link rel="stylesheet" href="css/main.css">

</head>

<body>
  
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <div class="container">
            <div class="row">
                <h1 class="main-title">ARE YOU LOOKING FOR A WORLD CLASS <span class="thin">DEV?</span></h1>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="side" title="ABOUT ME">
        <div class="pull-out-head">
            <div class="hdr-pll-out">
                BENSON MBURU
            </div>
            <p class="my-text">
                Are you looking for an awesome developer?
                <br> i create algorithims that will run on anything

            </p>
            <hr>
            <div class="btn-a ">HIRE ME</div>
            <p style="text-align:center;font-size:20px;">
                Or call me
                <br>0721799582
            </p>
            <hr>
            <div class="hdr-pll-out" style="color:#05260F;text-align:center;padding-top:10px;margin-bottom:20px;">
                I DEVLOPE FOR HUMANS
            </div>
        </div>


    </div>


   
   <div class="about-me-large">
       <div class="container">
           <div class="row">
               <div class="about-me col s3">
                  <div class="about-head">
                    
                     <p>CROSS PLATFORM DEV</p>
                      
                  </div>
                  <div class="about-body">
                       <i class="fa fa-random fa-2x"></i>
                       <p style="text-align: justify;">
                           I write algorithims that can run on different platforms , differnt enviroments and still
                                deliver the same 100% efficient output
                       </p>
                  </div>
                  
                   
                   
               </div>
                 <div class="about-me col s3" style="margin-left:12.5%">
                    <div class="about-head">
                    
                     <p>  Timely  Delivery</p>
                      
                  </div>
                  <div class="about-body">
                       <i class="fa fa-clock-o fa-2x"></i>
                         <p style="text-align: justify;">
                         Each project i undergo has a project matrix comming up with a project log frame and objectively verifiable idicators to give clients a good enough estimate and deliver.
                       </p>
                  </div>
                  
                   
               </div>
                 <div class="about-me col s3" style="float:right">
                    <div class="about-head">
                    
                     <p> User Oriented</p>
                      
                  </div>
                  <div class="about-body">
                       <i class="fa fa-user fa-2x"></i>
                   <p style="text-align: justify;">
                           In developing my apps, users come first, such i develop apps
                                that have a good User interface and boost user exirience in your app to have them comming back for more
                       </p>
                  </div>
                 
                   
               </div>
           </div>
       </div>
   </div>
   
     
    <div class="content">
    
        <div class="grid">
        <?Php 
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
?>
         
            <figure class="effect-phoebe">
                      <img src="img/<?php echo $row['project-screen'];?>" alt="" />
                <figcaption>
                    <h2> <span><?php echo $row['project_name'];?></span></h2>
                    <p> 
                        <a href="<?php echo $row['link'];?>"><i class="fa fa-eye fa-2x"></i></a>
                         <a href="<?php echo $row['github_fork'];?>"><i class="fa fa-code-fork fa-2x"></i></a>
                        <a href="<?php echo $row['github_link'];?>"><i class="fa fa-github fa-2x"></i></a>
                       
                                     </p>
                                      
                  </figcaption>
               
              </figure>
           <?php 
                                             }
} else {
     echo "0 results";
}

$conn->close();
?>
<!--
            <figure class="effect-phoebe">
                <img src="img/7.jpg" alt="img07" />
                <figcaption>
                    <h2>Plain <span>Phoebe</span></h2>
                    <p>
                        <a href="#"><i class="fa fa-fw fa-user"></i></a>
                        <a href="#"><i class="fa fa-fw fa-heart"></i></a>
                        <a href="#"><i class="fa fa-fw fa-cog"></i></a>
                    </p>
                </figcaption>
-->
                <!---------------------------------->
<!--
            </figure>
               <figure class="effect-phoebe">
                <img src="img/7.jpg" alt="img07" />
                <figcaption>
                    <h2>Movie <span>Store</span></h2>
                    <p>
                        <a href="#"><i class="fa fa-fw fa-user"></i></a>
                        <a href="#"><i class="fa fa-fw fa-heart"></i></a>
                        <a href="#"><i class="fa fa-fw fa-cog"></i></a>
                    </p>
                </figcaption>
            </figure>
-->
            <!------------------------------------------------------------------->
            
              <!---------------------------------->
<!--
            </figure>
               <figure class="effect-phoebe">
                <img src="img/afc.png" alt="img07" />
                <figcaption>
                    <h2>AFC <span>LEOPARDS</span></h2>
                    <p>
    <a href="portfolio/Afc/index.html"><i class="fa fa-eye"></i></a>
    <a href="https://github.com/Quantumke/AFC-leopards-landingpage-Foundation#fork-destination-box"><i class="fa fa-code-fork"></i>
</i></a>
    <a href="https://github.com/Quantumke/AFC-leopards-landingpage-Foundation"><i class="fa fa-github"></i></a>
</p>
                </figcaption>
            </figure>
-->
            <!------------------------------------------------------------------->
              <!---------------------------------->
<!--
            </figure>
               <figure class="effect-phoebe">
                <img src="img/batsvssup.png" alt="BATMANVSSUP" />
                <figcaption>
                    <h2>BATMAN VS <span>SUPERMAN</span></h2>
                    <p>
        <a href="portfolio/batmanvsauperman/index.html"><i class="fa fa-eye"></i></a>
        <a href="https://github.com/Quantumke/superman-vs-batman-website-hype#fork-destination-box"><i class="fa fa-code-fork"></i>
</i></a>
                        <a href="https://github.com/Quantumke/superman-vs-batman-website-hype"><i class="fa fa-github"></i></a>
                    </p>
                </figcaption>
            </figure>
-->
            <!------------------------------------------------------------------->
        </div> 
        
          
    
   
        </div>

 



    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/rAF.js"></script>
    <script src="js/demo-1.js"></script>
    <script>
       
			[].slice.call(document.querySelectorAll('a[href="#"')).forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidecontent.js"></script>
    <script type="text/javascript">
        $(".side").sidecontent();
    </script>
</body>

</html>