<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Arogini Blood bank</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>A<span>rogini</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/user.jpeg)">
                </div>
                <h4>Sree Vagdevi</h4>
                <small>Admin</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <li>
                       <a href="Crequests.php">
                            <span class="las la-envelope"></span>
                            <small>Current Requests</small>
                        </a>
                    </li>
                    <li>
                       <a href="search donor.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Search Donor</small>
                        </a>
                    </li>
                    <li>
                       <a href="blood bank.php">
                            <span class="las la-shopping-cart"></span>
                            <small>Hospitals</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">


                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/user.jpeg)"></div>
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Arogini</h1>
                <small>ADMIN</small>
            </div>

             <div class="page-content">
                <div class="records table-responsive">
                    <div class="record-header">

                        <table width="100%">
                            <thead>
                                <tr>
                                    <th> BLOOD GROUP</th>
                                    <th> TOTAL COUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><center>A+</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>A-</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>B+</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>B-</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>AB+</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>AB-</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>O+</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                                <tr>
                                    <td><center>O-</center></td>
                                    <td><center>$3171</center></td>

                                </tr>
                            </tbody>
                        </table>
                     </div>
                </div>
            </div>
        <div class="chart">
          <div class="colx">
              <!-- <img src="Bar Chart Graph.png" alt=""> -->
          </div>

          <div class="colx1">
              <!-- <img src="Line Chart Graph.png" alt=""> -->
          </div>

        </div>

        </main>

    </div>

</body>
</html>
