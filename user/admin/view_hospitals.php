<?php
include "Sidebar.php";
?>

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="bg-secondary text-center rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="bcamps" style="margin: auto; color:#EB1616; margin-bottom:10px;">BLOOD BANKS</h3>
                    </div>
                    <form id="register" method="GET" action="">
                    <div class="doner_text">
                            <label>State </label>
                          <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter State">
                        </div>
                            <div class="sub">
                                <id="container">
                                <input type="submit"  value="Search" name="submit" id="submit" class="temp">
                            </div>
                        <input type="hidden"  value="0" name="page">

                    </form>
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Blood bank Number</th>
                                <th>Address</th>
                                <th>State</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['search']))
                                {
                                    $filtervalues = $_GET['search'];

                                    $n = "SELECT COUNT(*) FROM bloodbankdb_open_doc WHERE State LIKE '%$filtervalues%'";
                                    $query_run = mysqli_query($con, $n);

                                    $nums = mysqli_fetch_assoc($query_run);
                                    $query = "SELECT * FROM bloodbankdb_open_doc WHERE State LIKE '%$filtervalues%' LIMIT ".($_GET['page']*10).",10";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['bbnumber']; ?></td>
                                                <td><?= $items['Address']; ?></td>
                                                <td><?= $items['State']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                  }
                            ?>
                        </tbody>

                    </table>

                  </div>
                    <div>
                        <?php

                        if(isset($nums)) {
                        for($i=0;$i<$nums['COUNT(*)']/10;$i++){
                            ?>



                            <a href="http://localhost/shivang/user/admin/view_hospitals.php?search=<?php echo $_GET['search']."&submit=Search&page=".$i+1 ?>" ><?php echo $i+1; ?></a>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-20 text-center">
                            &copy; <a href="#">Arogini</a>, All Right Reserved.
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
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
