<?php
include "Sidebar.php";
?>

        <!-- Table Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="">
                <div class="bg-secondary text-center rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="bcamps" style="margin: auto; color:#EB1616; margin-bottom:10px;">ADD HOSPITALS</h3>
                    </div>
                    <div class="wrapper">
                        <p id="conf"></p>
                        <form action="" method="POST" id="hospitalInsert">


                            <!-- // white -->
                            <div class="" >
                                <div class="form-outline">
                                    <select name="state" id="state">
                                        <?php
                                        $sql =
                                            "SELECT DISTINCT(state) AS D FROM bloodbankdb_open_doc";
                                        $res = mysqli_query($con, $sql);

                                        while (
                                        $row = mysqli_fetch_assoc($res)
                                        ) { ?>
                                            <option value="<?php echo $row[
                                            "D"
                                            ]; ?>"><?php echo $row["D"]; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                    <label class="form-label" for="form3Examplev2">Name</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-outline">
                                    <input type="text" name="hospitalname" class="form-control form-control-lg" required />
                                    <label class="form-label" for="form3Examplev5">State</label>
                                </div>
                            </div>
                            <input type="submit" value="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" style="width: 100px; margin: auto">
                        </form>
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
    <script src="js/crequest.js"></script>
</body>

</html>