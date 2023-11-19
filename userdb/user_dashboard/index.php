
<?php
    require_once('sidebar.php')
?>
	<div class="main-content">
		<div class="row">
                            <div class="col">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">health_and_safety</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Donors</strong></p>
                                    <h3 class="card-title" style="color: red;">20</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        DONATE BLOOD
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-50"></div>
                          <div class="col">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                    <span class="material-icons">medication</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Requests</strong></p>
                                    <h3 class="card-title" style="color: red;">7</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        SAVE LIFES
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


		<div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
              <h5 style="color: #EB1616;">CURRENT REQUESTS</h5>
            <div class="table-responsive">
              <table class="table text-center table-bordered table-hover mb-0">
                        <thead>
                        <tr>
                            <th scope="col" class="temp">Date</th>
                            <th scope="col" class="temp">Name</th>
                            <th scope="col" class="temp">Blood group</th>
                            <th scope="col" class="temp">Email</th>
                            <th scope="col" class="temp">Contact Number</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-white">
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                        </tr>
                        <tr class="text-white">
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                                <td>abc</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
          </div>
        </div>



				<footer class="footer" style="margin-top: 10px;">
          <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6" style="color: white;">
                    <nav class="d-flex">
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
