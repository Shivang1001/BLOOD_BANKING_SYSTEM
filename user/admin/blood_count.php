<?php include "Sidebar.php"; ?>

        <!-- Widget Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="bg-secondary text-center rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h6 class="mb-20">Blood Count</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-bordered table-hover mb-0 col-sm-12 col-xl-6">
                            <thead>
                            <tr class="text-white">
                                <th scope="col">Blood Group</th>
                                <th scope="col">Avilable count</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $sql = "SELECT DISTINCT BloodGroup FROM becomedonor";
                            $result = mysqli_query($con, $sql);


                            while($row = mysqli_fetch_assoc($result)) {

                                $tempQuery = "SELECT COUNT(BloodGroup) AS C FROM becomedonor WHERE BloodGroup = '".$row['BloodGroup']."'";
                                $tempResult = mysqli_query($con, $tempQuery);
                                $c = mysqli_fetch_assoc($tempResult)['C'];
                                ?>
                                <tr>
                                    <script>

                                        obj.push(<?php echo json_encode($row) ?>)
                                        val.push(<?php echo json_encode($c); ?>)
                                    </script>

                                    <td><?php echo $row['BloodGroup']; ?></td>
                                    <td><?php echo $c; ?></td>

                                </tr>
                                <?php

                            }
                            ?>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <!-- Widget End -->


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
