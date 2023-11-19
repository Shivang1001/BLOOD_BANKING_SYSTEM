<?php
    include('Sidebar.php')
?>
<script type="text/javascript">
    let obj = [];
    let val = []
</script>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Donors registered today</p>
                                <h6 class="mb-0"><?php
                                $sql8 = "SELECT count(*) FROM becomedonor where dt=CURDATE() ";
                                $r8 = $con->query($sql8);

                                while($row8 = mysqli_fetch_array($r8))
                                {
                                  echo $row8['count(*)'];
                                  echo "<br />";
                                }
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Donors Registered</p>
                                <h6 class="mb-0"><?php
                                $sql6 = "SELECT count(*) FROM becomedonor ";
                                $r6 = $con->query($sql6);

                                while($row6 = mysqli_fetch_array($r6))
                                {
                                  echo $row6['count(*)'];
                                  echo "<br />";
                                }
                                ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Requestors registered today</p>
                                <h6 class="mb-0"><?php
                                $sql9 = "SELECT count(*) FROM requestblood where dt=CURDATE() ";
                                $r9 = $con->query($sql9);

                                while($row9 = mysqli_fetch_array($r9))
                                {
                                  echo $row9['count(*)'];
                                  echo "<br />";
                                }
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total requesters registered</p>
                                <h6 class="mb-0"><?php
                                $sql7 = "SELECT count(*) FROM requestblood ";
                                $r7 = $con->query($sql7);

                                while($row7 = mysqli_fetch_array($r7))
                                {
                                  echo $row7['count(*)'];
                                  echo "<br />";
                                }
                                ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                  <!-- <div class="container-fluid pt-4 px-4"> -->
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
                  <!-- </div> -->

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4 bloodcountchart">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Blood Count</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="myChart"></canvas>

                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Donors</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="requestblood"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Current Requests</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive pagination">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">Blood Group</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <script>
                                let reqbloodgroup = []
                                let reqbloodgroupcount = []
                              </script>
                              <?php
                                  $sql = "SELECT * FROM requestblood WHERE status = 0 LIMIT ".(3*$_GET['page']).",3";
                                      $query_run = mysqli_query($con, $sql);


                                  $f = "SELECT BloodGroup, COUNT(*) AS C FROM requestblood WHERE status = 0 GROUP by BloodGroup";
                                  $query_f = mysqli_query($con, $f);


                                  while($row = mysqli_fetch_assoc($query_run))
                                  {

                                          ?>

                                          <tr>
                                              <td><?php echo $row['RequiredDate']; ?></td>
                                              <td><?php echo $row['PatientName']; ?></td>
                                              <td><?php echo $row['BloodGroup']; ?></td>
                                              <td><?php echo $row['PhoneNumber']; ?></td>
                                              <td><?php echo $row['City']; ?></td>
                                              <td><button class="btn-danger" onClick="fun(<?php echo $row['id']?>)">Detail</button></td>
                                          </tr>
                                          <?php
                                  }
                               ?>

                               <?php
                                while($row = mysqli_fetch_assoc($query_f)) {
                               ?>


                               <script>
                                 reqbloodgroup.push(<?php echo json_encode($row) ?>)
                               </script>

                             <?php } ?>

                                </tr>
                            </tbody>

                        </table>
                        <?php
                          $s = "SELECT COUNT(*) FROM requestblood WHERE status = 0";
                          $res = mysqli_query($con , $s);
                          $row = mysqli_fetch_assoc($res);

                          for($i=0;$i<$row['COUNT(*)']/3;$i++){
                        ?>

                        <a href="http://localhost/shivang/user/admin/index.php?page=<?php echo $i; ?>"><?php echo $i+1 ?></a>
                        <?php } ?>
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

    </div>

<div id="popup">

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
    <!--<script src="https://raw.githubusercontent.com/chartjs/Chart.js/master/docs/scripts/utils.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<script type="text/javascript">
let ctx = document.querySelector('#myChart')
let requestblood = document.querySelector('#requestblood')

let colors = ['rgb(199, 0, 57)',
'rgb(54, 162, 235)',
'rgb(0,91,65)',
'rgb(192, 127, 0)',
'rgb(251, 161, 183)',
'rgb(8, 2, 163)',
'rgb(245, 247, 248)',
'rgb(249, 148, 23)'
]

const data = {
  labels: obj.map(e => e.BloodGroup),
  datasets: [{
    label: 'Blood Count',
    data: val,
    backgroundColor: colors,
    hoverOffset: 4
  }]
};
const config = {
type: 'doughnut',
data: data,
};

new Chart(ctx, {

  type: 'doughnut',
  data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });


  const bardata = {
    labels: reqbloodgroup.map(e => e.BloodGroup),
    datasets: [{
      label: 'My First Dataset',
      data: reqbloodgroup.map(e => e.C),
      backgroundColor: colors,
      hoverOffset: 4
    }]
  };

new Chart(requestblood, {

    type: 'pie',
    data: bardata,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>
</html>
