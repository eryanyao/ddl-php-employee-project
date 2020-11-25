<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/admin/";
include($IPATH . "nav.php");
require('includes/database.php');

$sql = "SELECT * FROM user";
$sqlReceive = "SELECT * FROM form WHERE status = 'Received'";
$sqlProcess = "SELECT * FROM form WHERE status = 'In Process'";
$sqlCompleted = "SELECT * FROM form WHERE status = 'Completed'";

$query = mysqli_query($conn, $sql);
$queryReceive = mysqli_query($conn, $sqlReceive);
$queryProcess = mysqli_query($conn, $sqlProcess);
$queryCompleted = mysqli_query($conn, $sqlCompleted);

$user = mysqli_num_rows($query);
$receive = mysqli_num_rows($queryReceive);
$process = mysqli_num_rows($queryProcess);
$complete = mysqli_num_rows($queryCompleted);

?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1><?php echo $receive; ?></h1>
        </div>
        <div class="w3-clear"></div>
        <h2>Form Received</h2>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-clock-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1><?php echo $process; ?></h1>
        </div>
        <div class="w3-clear"></div>
        <h2>Form In Process</h2>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-check w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1><?php echo $complete; ?></h1>
        </div>
        <div class="w3-clear"></div>
        <h2>Form Completed</h2>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1><?php echo $user; ?></h1>
        </div>
        <div class="w3-clear"></div>
        <h2>Users</h2>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-container">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <?php
          $query = mysqli_query($conn, "SELECT activity.id as id, activity.activity as activity,activity.dateTime as datetime,user.email as email FROM `activity` INNER JOIN `user` ON activity.user_id=user.id ORDER BY id DESC");

          while ($row = mysqli_fetch_array($query)) {
            if ($row['activity'] == "Form Submit") {
              $str = " already submit form to the system.";
              $icon = '<i class="fa fa-book w3-text-blue w3-large">';
            } else {
              $str = " already login to the system.";
              $icon = '<i class="fa fa-sign-out w3-text-blue w3-large">';
            }
            echo '<tr>
              <th>' . $icon . '</th>
              <td>' . $row['email'] . " " . $str . '</td>
              <td>' . $row['datetime'] . '</td>
              </tr>';
          };
          ?>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Countries</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>France</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Mike</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jill</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jane</span><br>
      </li>
    </ul>
  </div>
  <hr>
  <h5>History</h5>
  <?php
  $query = mysqli_query($conn, "SELECT * FROM `activity` ");
  echo '<div class="w3-container">
    <table class="w3-table w3-striped w3-white" >
      <thead>
        <tr>
          <td>ID</td>
          <td>User ID</td>
          <td>Activity</td>
          <td>Date Time</td>
          <td>Email</td>
        </tr>
      </thead>
      <tbody>';

  while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
        <th class="content">' . $row['id'] . '</th>
        <td class="content">' . $row['user_id'] . '</td>
        <td class="content">' . $row['activity'] . '</td>
        <td class="content">' . $row['dateTime'] . '</td>
        <td class="content">' . $row['email'] . '</td>
        </tr>';
  };
  echo '</tbody>
      </table>
      </div><br>';

  ?>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>