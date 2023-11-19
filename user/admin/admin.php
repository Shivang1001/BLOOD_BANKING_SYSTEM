<?php include "Sidebar.php"  ?>



<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="bg-secondary rounded h-100 p-4 ">
      <h3 class="mb-5 text-center" style="font-size: 40px" style="color: #EB1616">ADD ADMIN</h3>

<div class="wrapper">
  <form action="add_admin.php" method="POST" enctype="multipart/form-data">
    <section class="h-50 h-custom gradient-custom-2 rounded overflow-auto">

   <!-- // white -->
  <div class="row g-0">
    <div class="col-lg-6">
      <div class="p-5" style="color: #EB1616">

                  <h3 class="fw-normal mb-5" style="color: #EB1616";>General Infomation</h3>
          <div class="row">
              <div class="col-md-6 mb-4 pb-2" >
                  <div class="form-outline">
                      <input type="file" name="files" class="form-control form-control-lg temp" style="color: #000000" required/>
                      <label class="form-label" for="form3Examplev2">Upload Profile Photo</label>
                  </div>
              </div>
          </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2" >
                      <div class="form-outline">
                        <input type="text" name="fname" class="form-control form-control-lg temp" style="color: #000000" required/>
                        <label class="form-label" for="form3Examplev2">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="lname" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev3">Last name</label>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="emailid" class="form-control form-control-lg temp" required />
                        <label class="form-label" for="form3Examplev5">Email ID</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="username" class="form-control form-control-lg temp" required />
                        <label class="form-label" for="form3Examplev5">Username</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="password" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev5">Password</label>
                      </div>
                  </div>
                  <div class="row mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" name="cpassword" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplev5">Confirm Password</label>
                      </div>
                  </div>
                </div>
              </div>

              <!-- // lal -->
              <div class="col-lg-6 bg-indigo" style="color: #EB1616";>
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #EB1616";>Contact Details</h3>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="address" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea2">Address</label>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="info" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="code" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="city" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea5">City</label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" name="country" class="form-control form-control-lg temp" required/>
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>
                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" name="number" class="form-control form-control-lg temp" required/>
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>
              </div>
                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="" class="text-white"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div>
      <input type="submit" value="submit" name="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">
      </div>
    </div>
  </div>
</form>
</section>
</div>


</div>
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
        <!-- Content End -->


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
