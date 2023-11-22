<?php
    include('sidebar.php')
?>

<div class="main-content">
  <div class="row">
    <h3 style="margin: auto; color:#EB1616;">REGISTER FOR BLOOD CAMP</h3>
  </div>
  <div style="margin-top: 10px;">
    <form action="camp_details.php" method="post">
          <div class="form first">
            <div class="container-fluid">
    					<div class="bg-secondary rounded p-2">
                <div class="details personal">
                  <span class="title" style="color: #fff;">Personal Details</span>

                  <div class="fields">
                      <div class="input-field">
                          <label style="color: #fff !important;">Full Name</label>
                          <input type="text" placeholder="Enter your name" required>
                      </div>

                      <div class="input-field">
                          <label>Mobile Number</label>
                          <input type="number" placeholder="Enter mobile number" required>
                      </div>

                      <div class="input-field">
                          <label>Email</label>
                          <input type="text" placeholder="Enter your email" required>
                      </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="container-fluid" style="margin-top: 5px;">
            <div class="bg-secondary rounded p-2">
              <div class="details ID" style="margin-top: 10px;">
                  <span class="title" style="color: #fff;">Camp Details</span>

                  <div class="fields">
                      <div class="input-field">
                          <label>Name</label>
                          <input type="text" placeholder="Enter camp name" required>
                      </div>

                      <div class="input-field">
                          <label>Number of donors</label>
                          <input type="number" placeholder="Enter number of donors" required>
                      </div>

                      <div class="input-field">
                          <label>Date</label>
                          <input type="date" placeholder="Enter date" required>
                      </div>

                      <div class="input-field">
                          <label>Refreshment</label>
                          <select required>
                              <option disabled selected>Select</option>
                              <option>Yes</option>
                              <option>No</option>
                          </select>
                      </div>

                      <div class="input-field">
                          <label>Abc</label>
                          <input type="text" placeholder="Enter abc" required>
                      </div>
                  </div>
              </div>
          </div>
        </div>

            <div class="container-fluid" style="margin-top: 5px;">
              <div class="bg-secondary rounded p-2">
                <div class="details address" style="margin-top: 10px;">
                  <span class="title" style="color: #fff;">Address Details</span>

                  <div class="fields">
                      <div class="input-field">
                          <label>Address</label>
                          <input type="text" placeholder="Enter address" required>
                      </div>

                      <div class="input-field">
                          <label>City</label>
                          <input type="text" placeholder="Enter city" required>
                      </div>

                      <div class="input-field">
                          <label>State</label>
                          <input type="text" placeholder="Enter your state" required>
                      </div>

                      <div class="input-field">
                          <label>Pin code</label>
                          <input type="text" placeholder="Enter your pincode" required>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="buttons" style="margin-top: 5px;">
              <button class="sumbit" style="margin: auto; border-radius: 15px;">
                    <span class="btnText" style="text-align: center;">Submit</span>
                    <i class="uil uil-navigator"></i>
              </button>
            </div>
              </div>
          </div>
      </form>
    </div>

<div class = "main-content">
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

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/script.js"></script>
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
