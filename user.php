<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true) {
  header("location: login.php");
  exit;
}
include 'dbconnect/_dbconnect.php';


if ($_SESSION['gender'] == 'Female') {
  $imgsrc = 'user/female.jpg'; // Change this to the actual path of your female image
} else if ($_SESSION['gender'] == 'Male') {
  $imgsrc = 'user/male.jpg';
}

$numsql = "SELECT number FROM users WHERE emailid ='$_SESSION[emailid]'";
$numresult = mysqli_query($conn, $numsql);
$row = mysqli_fetch_assoc($numresult);
$_SESSION['number'] = $row['number'];

$error = false;
$sql = "SELECT address,city,state,zipcode FROM customer_orders WHERE email ='$_SESSION[emailid]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['address'] = $row['address'];
  $_SESSION['city'] = $row['city'];
  $_SESSION['state'] = $row['state'];
  $_SESSION['zipcode'] = $row['zipcode'];
} else {
  $error = true;
}

// $error = false;
// $sql = "SELECT name, emailid, number FROM users WHERE emailid ='$_SESSION[emailid]'";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//   $row = mysqli_fetch_assoc($result); // Fetch the row
//   $_SESSION["number"] = $row["number"]; // Store number in session
//   // $_SESSION["address"] = $row["address"]; // Store email in session
//   // $_SESSION["city"] = $row["city"]; // Store email in session
//   // $_SESSION["state"] = $row["state"]; // Store email in session
//   // $_SESSION["zipcode"] = $row["zipcode"]; // Store email in session

// } else {
//   // echo "No rows returned from the database query.";
//   $error = true;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Quest ✈️ | User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <?php
  include ("loading.php");

  include ("navbar.php");
  ?>
  <style>
    .hidden {
      position: relative;
      background: linear-gradient(100deg, #e9f8e9, #a1b6b0);
    }
  </style>
  <br>
  <br>

  <div class="container">
    <div class="main-body">
      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center m-5">
                <img src="<?php echo $imgsrc; ?>" alt="Admin" class="rounded-circle" width="220">
                <div class="mt-3 m-4">
                  <h4><?php echo $_SESSION['name'] ?></h4>
                  <p class="text-secondary mb-1"></p>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">

              <div id="profile">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['name'] ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['emailid'] ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Mobile</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <?php
                      if ($_SESSION['number'] === '') {
                        echo 'Mobile number not found';
                      } else {
                        echo $_SESSION['number'];
                      }
                     ?>
                  </div>
                </div>
                <button class=" my-4 w-50 btn btn-success btn-lg" id="updateBtn">Update Information</button>
              </div>

              <div id="editProfile" style="display: none;">
                <form action="update_user.php" class="needs-validation" method="post" novalidate>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="name" minlength="3" value="<?php echo $_SESSION['name']; ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="email" name="email" minlength="3" value="<?php echo $_SESSION['emailid']; ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="number" minlength="10" maxlength="10"
                        value="<?php echo $_SESSION['number']; ?>">
                      <div class="invalid-feedback">
                        Please enter a valid phone number.
                      </div>
                    </div>

                  </div>
                  <hr>

                  <button class=" my-4 w-50 btn btn-success btn-lg" id="updateBtn">Update Information</button>
                  <p class="text-danger">After update you have to login again.</p>
                </form>
              </div>
              <script>
                (function () {
                  'use strict'

                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.querySelectorAll('.needs-validation')

                  // Loop over them and prevent submission
                  Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                      form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                          event.preventDefault()
                          event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                      }, false)
                    })
                })()
              </script>
              <script>
                document.getElementById("updateBtn").addEventListener("click", function () {
                  document.getElementById("profile").style.display = "none";
                  document.getElementById("editProfile").style.display = "block";
                });
              </script>

              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php
                  if ($error == true) {
                    echo "Address Not Found:";
                  } else {
                    echo $_SESSION['address'];
                  }
                  ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">City</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php if ($error == true) {
                    echo "City Not Found:";
                  } else {
                    echo $_SESSION['city'];
                  } ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">State</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php if ($error == true) {
                    echo "State Not Found:";
                  } else {
                    echo $_SESSION['state'];
                  } ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">postal code</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <?php if ($error == true) {
                    echo "Postal Code Not Found:";
                  } else {
                    echo $_SESSION['zipcode'];
                  } ?>
                </div>
              </div>
              <hr>
            </div>
          </div>






        </div>

      </div>

    </div>
  </div>

  <style>
    .card {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }

    .h-100 {
      height: 100% !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }
  </style>


  <?php
  include ("footer.php");
  ?>
</body>

</html>