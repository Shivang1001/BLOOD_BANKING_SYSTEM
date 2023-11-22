<?php
include('sidebar.php')
?>


<div class="main-content">
<div class="row">
            <h3 style="margin: auto; color:#EB1616;">BLOOD BANKS</h3>
</div>
<div class="row">
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-5">

            <form id="register" method="GET" action="">
                <div class="doner_text">
                    <label class="text-white">STATE</label>
                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter State">
                </div>
                <div class="sub" style="margin-top: 5px;">
                    <id="container">
                    <input type="submit"  value="Search" name="submit" id="submit" class="temp" style="border-radius: 10px;">
                </div>
                <input type="hidden"  value="0" name="page">
            </form>
          <div class="table-responsive">
            <table class="table table-bordered" style="margin-top: 8px;">
                <thead>
                    <tr class="text-white">
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
                        $query = "SELECT * FROM bloodbankdb_open_doc WHERE State LIKE '%$filtervalues%'";

                        $query_run = mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                <tr class="text-white">
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
                            <tr class="text-white">
                                <td colspan = '4'>No Record found</td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="main-content">
<footer class="footer">
                <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6">
                    <nav class="d-flex" style="color: white;">
                        <ul class="m-0 p-0">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
				<div class="col-md-6">
				 <p class="copyright d-flex justify-content-end"> &copy
                        <a href="index.php" style="color: red;">Arogini </a> Blood Bank
                    </p>
				</div>
				  </div>
				    </div>
            </footer>
				</div>
    </div>
</div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>


  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });

			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
</script>
</body>
</html>
