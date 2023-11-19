<?php
include('sidebar.php')
?>

<div class="main-content">
			<div class="row ">
        	<h3 style="margin: auto; color:#EB1616;">REQUESTS</h3>
				<div class="container-fluid pt-4 px-4">
				<div class="bg-secondary text-center rounded p-5">
                <div class="table-responsive">
                  <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                            <tr class="text-white">
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Blood group</th>
                                <th scope="col">Email</th>
                                <th scope="col">Request status</th>
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
                </div>
							</div>
<div class="main-content">
			<footer class="footer">
                <div class="container-fluid">
				  <div class="row">
				  <div class="col-md-6">
                    <nav class="d-flex">
                        <ul class="m-0 p-0 text-white">
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
				 <p class="copyright d-flex justify-content-end text-black"> &copy
                        <a href="index.php" style="color: red !important;">Arogini </a> Blood Bank
                    </p>
				</div>
				  </div>
				    </div>
            </footer>

			</div>
        </div>
    </div>

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
