<!DOCTYPE html>
<html>
    <head>
        <meta  name="viewport" content="width=device-width", initial-scale="1.0">
        <title>
            FORM WEB
        </title>
        <link href="formstyle.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="favicon.ico">

    </head>
<body>
        <div class="title">
            Registration Form
        </div>
<div class="main">
    <div class="register">

    <form method="post">
        <div class="content">
        <div class="doner_text">
            <label>Donor Name: </label>

            <input type="text" size="45"
            placeholder="Enter donor name"  name="DonorName" id="DonorName">
        </div>

        <div class="doner_text">
            <div class="DOB">
            <label>DOB: </label>
            <input type="date" size="50" name= "Dateofbirth" id="Dateofbirth" class="dob">
            </div>
        </div>
        <div class="doner_text">
            <div class="BG">
            <label>Blood Group: </label>
                <select class="select"  name="BloodGroup" id="BloodGroup">
                    <option disabled selected> Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                </select>
            </div>
        </div>
        <div class="doner_text">
            <div class="adds">
            <label>Address: </label>
            <input type="text" size="20"
            placeholder="Enter donor address"  name="Address" id="Address">
            </div>
        </div>
        <div class="doner_text">
            <div class="contno">
            <label>Contact Number: </label>

             <input type="text" size="20"
                placeholder="Enter contact number" name="Contactnumber" id="Contactnumber" >
            </div>
        </div>
        <div class="doner_text">
            <div class="email">
            <label>Email ID: </label>

            <input type="text" size="30"
             placeholder="Enter email id"  name="Emailid" id="Eamilid">
            </div>
        </div>
        <div class="doner_text">
            <div class="ci">
            <label>City: </label>
                <input type="text" size="20"
                placeholder="Enter your city" name="City" id="City" >
            </div>
        </div>
        <div class="doner_text">
            <div class="state">
                <label>State: </label>
                <input type="text" size="20"
                placeholder="Enter your state" name="State" id="State" >
            </div>
        </div>
      <!--  <div class="doner_text">
            <div class="aadhar">
                <label>Aadhar Number:</label>
                <input type="text" size="20"
                placeholder="Enter aadhar number" name="Number" id="Number" >
            </div>
        </div>-->
        <div class="doner_text">
            <div class="gender">
            <label>Gender: </label>
                <div class="gndr">
                    &nbsp; &nbsp;<input type="radio" name="Gender" value = "Male" required>Male &nbsp; &nbsp; <input type="radio" name="Gender" value = "Female" required>Female &nbsp; &nbsp;
                    <input type="radio" name="Gender" value = "Other"required>Other
                </div>
            </div>
        </div>

            <div class="sub" id="container">
                <input type="submit" onclick="openPopup()" value="Submit"
                name="submit" id="submit" class="btn">
            </div>
            <div class="popup" id="popup">
              <img src="tick.png" alt="">
              <h2>Thank you!</h2>
              <p>Your details have been successfully submitted.Thank you!</p>
              <button type="button" name="button" onclick="closePopup()">OK</button>
            </div>
        
        <script type="text/javascript">
          let popup = document.getElementById("popup");
          function openPopup()
          {
              popup.classList.add("open-popup");
          }
          function closePopup()
          {
            popup.classList.remove("open-popup");
          }
        </script>

        </div> <!-- end of content -->
        </form>


    </div><!-- end of register -->
    </div><!-- end of main -->

</body>
<script src="jquery-3.6.0.min.js" charset="utf-8"></script>
<script type="text/javascript">
document.querySelector('#submit').addEventListener('click',(e)=>{
e.preventDefault();
  $.ajax({
    type: 'post',
    url: 'myform.php',
    data: $('form').serialize(),

    success: function (response){
        console.log(response);
      }
  })
})

</script>
</html>
