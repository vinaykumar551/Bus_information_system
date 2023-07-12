<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Sri vasavi Bus Information System</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css1/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css1/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css1/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
           background-color: #d96459;
           color: white;
        } 
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>    
    <!-- Modernizer for Portfolio -->
    <script src="js1/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<body class="host_version"> 
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index1.html">
					<img src="nav1.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index1.html">Home</a></li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Login </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="home.html">Admin</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="zt.html">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>BusInfo
                        </span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color:red;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color:white;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color:white;}
</style>
<body>

<button class="tablink" onclick="openPage('Home', this, 'black')">Search By bus number</button>
<button class="tablink" onclick="openPage('News', this, 'black')" id="defaultOpen">Search by village name</button>

<div id="Home" class="tabcontent" align="center">
  <div class="contactbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contacttitlepage">
                    <h2>Bus Stops</h2>
                </div>
            </div>
        </div>
    </div>

  </div>
<section class="banner_section">
        <div class="banner-main">
            
        <div class="container">
                <form action="" method="POST">
                    <input type="text" name="bus_id" placeholder="enter the bus number">
                    <input type="submit" name="search" value="search">
                </form>
                <table>
                    <tr>

                        <th>STOP NAME </th>
                        <th>ARRIVAL TIME </th>
                        <th>DEPARTURE TIME </th>
                        <th>DRIVER NAME </th>
                        <th>DRIVER NUMBER </th>
                    </tr> </br>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'bustransport');
                if(isset($_POST['search']))
                {
                    $bus_id = $_POST['bus_id'];
                    $query = "SELECT distinct r.stop, r.arrival_time,r.departure_time,d.D_Name,d.phone FROM `route` r,`driver` d where r.bus_number='$bus_id' && d.D_no='$bus_id' ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tr>
                            <td> <?php echo $row['stop']; ?> </td>
                            <td> <?php echo $row['arrival_time']; ?> </td>
                            <td> <?php echo $row['departure_time']; ?> </td>
                            <td> <?php echo $row['D_Name']; ?> </td>
                            <td> <?php echo $row['phone']; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </table>
            </div>
        </div>

    </section>
</div>
<div class="contactbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contacttitlepage">
                    <h2>Buses</h2>
                </div>
            </div>
        </div>
    </div>

  </div>
<section class="banner_section">
        <div class="banner-main">
            
        <div class="container">
                <form action="" method="POST" align="center">
                    <input type="text" name="stop" placeholder="enter the village name">
                    <input type="submit" name="search" value="search">
                </form>
                <table>
                    <tr>

                        <th>BUS NUMBER </th>
                        <th>ARRIVAL TIME </th>
                        <th>DEPARTURE TIME </th>
                        <th>DRIVER NAME </th>
                        <th>DRIVER NUMBER </th>
                    </tr> </br>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,'bustransport');
                if(isset($_POST['search']))
                {
                    $stop = $_POST['stop'];
                    $query = "SELECT  r.bus_number, r.arrival_time,r.departure_time,d.D_Name,d.phone FROM `route` r,`driver` d where r.stop='$stop' && d.D_no=r.bus_number ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tr>
                            <td> <?php echo $row['bus_number']; ?> </td>
                            <td> <?php echo $row['arrival_time']; ?> </td>
                            <td> <?php echo $row['departure_time']; ?> </td>
                            <td> <?php echo $row['D_Name']; ?> </td>
                            <td> <?php echo $row['phone']; ?> </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </table>

            </div>
        </div>

    </section>
</div>
<div id="News" class="tabcontent">
</div>
    
</div>


<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js1/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js1/custom.js"></script>

</body>
</html>