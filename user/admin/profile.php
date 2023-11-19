<?php
include "Sidebar.php";
?>

            <div class="container-fluid pt-4 px-4">
                  <div class="bg-secondary rounded h-100 p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="bcamps" style="margin: auto; color:#EB1616; margin-bottom:10px;">MY PROFILE</h3>
                    </div>
                    <?php
                     ?>
                    <div class="align-items-center justify-content-between">
                        <img src="<?php  {echo $_SESSION['img'];} ?>" alt="" style="width: 200px; height: 140px; margin-left:auto !important;">
                    </div>

                    <?php
                    $user = $_SESSION['username'];
                    $sql="SELECT * from signup where username = '".$user."';";
                    $run = $con->query($sql);

                    $row = mysqli_fetch_assoc($run);
                    ?>

                      <h5><span style="color: #EB1616;">USERNAME:</span> <?php echo $row['username']; ?></h5>
                      <h5><span style="color: #EB1616;">FIRSTNAME:</span> <?php echo $row['first_name']; ?></h5>
                      <h5><span style="color: #EB1616;">LASTNAME:</span> <?php echo $row['last_name']; ?></h5>
                      <h5><span style="color: #EB1616;">EMAIL:</span> <?php echo $row['emailid']; ?></h5>
                      <h5><span style="color: #EB1616;">ADDRESS:</span> <?php echo $row['address']; ?></h5>
                      <h5><span style="color: #EB1616;">CITY:</span> <?php echo $row['city']; ?></h5>
                      <h5><span style="color: #EB1616;">ZIPCODE:</span> <?php echo $row['zipcode']; ?></h5>
                      <h5><span style="color: #EB1616;">COUNTRY:</span> <?php echo $row['country']; ?></h5>
                      <button type="button" style="border-radius: 10px; margin: auto;">Edit</button>
                      <button type="button">Change Password</button>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-20 text-center">
                            &copy; <a href="#">Arogini</a>, All Right Reserved.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
