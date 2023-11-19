<?php
include "Sidebar.php";
?>

        <!-- Table Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="">
                <div class="bg-secondary text-center rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="bcamps" style="margin: auto; color:#EB1616; margin-bottom:10px;">BLOOD CAMPS</h3>
                    </div>
                    <div class="table-responsive pagination">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                            <tr class="text-white">
                                <th scope="col">Camp Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Number of Donors</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM camps WHERE status = 0";
                            $query_run = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($query_run))
                            { ?>
                                <tr>
                                    <td><?php echo $row['campname']; ?></td>
                                    <td><?php echo $row['Date']; ?></td>
                                    <td><?php echo $row['Address']; ?></td>
                                    <td><?php echo $row['City']; ?></td>
                                    <td><?php echo $row['Donors']; ?></td>
                                    <td><?php echo $row['Contact Number']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Table End -->


        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-20 text-center">
                        &copy; <a href="#">Arogini</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </div> -->
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
