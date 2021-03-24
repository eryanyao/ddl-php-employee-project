<!DOCTYPE html>
<html>
<title>Enquiry Form Check</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-dark-grey">

  <?php
  $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/acc/";
  include($IPATH . "nav.php");
  ?>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-dark-grey" style="margin-left:300px;margin-top:53px;">

    <header class="w3-container" style="padding-top:22px;margin-left:30px;">
      <h5><b><i class="fa fa-book "></i> &nbsp; Enquiry Details </b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom" style="margin-left:30px;margin-right: 30px;margin-top:20px;">
      <div class="w3-container">
        <a onclick="goBack()" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Back</a>
      </div>
    </div>
    <br>


    <div class="w3-container" style="margin-right: 20px;margin-left:20px; ">

      <?php
      require 'includes/database.php';
      $query = mysqli_query($conn, "SELECT * FROM form WHERE user_id=" . $_SESSION['userId'] . " AND id=" . $_GET['id']);
      while ($row = mysqli_fetch_array($query)) {
        echo '<div class="w3-row-padding w3-margin-bottom w3-light-grey" style="width:70%;margin:0px auto;">
      <div class="w3-container w3-row-padding">
        <br>
        <h3 class="w3-center"><b>Enquiry Form #' . $row['id'] . '</b></h3>
        <p class="w3-center">Status: ' . $row['status'] . '</p>
        <br>
        <table style="width: 100%;">
          <tr>
            <td style="width:50%;">Proposed Company Name</td>
            <td>' . $row['companyName'] . '</td>
          </tr>
          <tr>
            <td>Paid Up Capital</td>
            <td>' . $row['capital'] . '</td>
          </tr>
          <tr>
            <td>Nature of Business</td>
            <td>' . $row['natureofBusiness'] . '</td>
          </tr>
        </table>
        <br><br>
      </div>

      <div class="w3-container w3-row-padding">
        <br>
        <h3><b>First Director</b></h3>
        <br>
        <table style="width: 100%;">
          <tr>
            <td style="width:50%;">First Director NRIC/Passport No</td>
            <td>' . $row['firstNRICPassportNo'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">First Director Passport Expiry Date</td>
            <td>' . $row['firstexpDate'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">First Director Date of Birth</td>
            <td>' . $row['firstDoB'] . '</td>
          </tr>
		  <tr>
		  <td style="width:50%;">First Director Gender</td>
		  <td>' . $row['firstGender'] . ' </td>
		  </tr>
		  <tr>
            <td style="width:50%;">First Director Race </td>
            <td>' . $row['firstRace'] . '</td>
			</tr>
			 <tr>
            <td style="width:50%;">First Director Nationality </td>
            <td>' . $row['firstNationality'] . '</td>
      </tr>
      <tr>
            <td style="width:50%;">First Director Residential Address  </td>
            <td>' . $row['firstAddress'] . '</td>
			</tr>
			<tr>
            <td style="width:50%;">First Director E-mail  </td>
            <td>' . $row['firstEmail'] . '</td>
			</tr>
        </table>
        <br>
    </div>
    
    <div class="w3-container w3-row-padding">
    <br>
    <h3><b>Second Director</b></h3>
    <br>
    <table style="width: 100%;">
      <tr>
        <td style="width:50%;">Second Director NRIC/Passport No</td>
        <td>' . $row['secondNRICPassportNo'] . '</td>
      </tr>
      <tr>
        <td style="width:50%;">Second Director Passport Expiry Date</td>
        <td>' . $row['secondexpDate'] . '</td>
      </tr>
      <tr>
        <td style="width:50%;">Second Director Date of Birth</td>
        <td>' . $row['secondDoB'] . '</td>
      </tr>
  <tr>
  <td style="width:50%;">Second Director Gender</td>
  <td>' . $row['secondGender'] . ' </td>
  </tr>
  <tr>
        <td style="width:50%;">Second Director Race </td>
        <td>' . $row['secondRace'] . '</td>
  </tr>
   <tr>
        <td style="width:50%;">Second Director Nationality </td>
        <td>' . $row['secondNationality'] . '</td>
  </tr>
  <tr>
        <td style="width:50%;">Second Director Residential Address  </td>
        <td>' . $row['secondAddress'] . '</td>
  </tr>
  <tr>
        <td style="width:50%;">Second Director E-mail  </td>
        <td>' . $row['secondEmail'] . '</td>
  </tr>
    </table>
    <br><br>
</div>

<div class="w3-container w3-row-padding">
<br>
<h3><b>Other Shareholders(if any)</b></h3>
<br>
<table style="width: 100%;">
  <tr>
    <td style="width:50%;">Shareholder A IC/Company No</td>
    <td>' . $row['shareAIC'] . '</td>
  </tr>
  <tr>
    <td style="width:50%;">Shareholder A Nationality</td>
    <td>' . $row['shareANationality'] . '</td>
  </tr>
  <tr>
    <td style="width:50%;">Shareholder A Race</td>
    <td>' . $row['shareARace'] . '</td>
  </tr>
<tr>
<td style="width:50%;">Shareholder A Place of Incorporation(if it is a
corporation)
</td>
<td>' . $row['shareAPlace'] . ' </td>
</tr>
<tr>
    <td style="width:50%;">Shareholder A Residential Address </td>
    <td>' . $row['shareAAddress'] . '</td>
</tr>
<tr>
    <td style="width:50%;">Shareholder A E-mail </td>
    <td>' . $row['shareAEmail'] . '</td>
</tr>
<tr>
    <td style="width:50%;">Shareholder A Contact Number</td>
    <td>' . $row['shareAContact'] . '</td>
</tr>
<tr>
    <td style="width:50%;">Shareholder A Designation(Individual)/Name of
Ocial Corporate Representative  </td>
    <td>' . $row['shareADesignation'] . '</td>
</tr>
</table>
</div>

<div class="w3-container w3-row-padding">
		<br>
    <table style="width: 100%;">
          <tr>
            <td style="width:50%;">Shareholder B IC/Company No</td>
            <td>' . $row['shareBIC'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Shareholder B Nationality</td>
            <td>' . $row['shareBNationality'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Shareholder B Race</td>
            <td>' . $row['shareBRace'] . '</td>
          </tr>
		  <tr>
		  <td style="width:50%;">Shareholder B Place of Incorporation(if it is a
corporation)
</td>
		  <td>' . $row['shareBPlace'] . ' </td>
      </tr>
      <tr>
    <td style="width:50%;">Shareholder B Residential Address </td>
    <td>' . $row['shareBAddress'] . '</td>
</tr>
		  <tr>
            <td style="width:50%;">Shareholder B E-mail </td>
            <td>' . $row['shareBEmail'] . '</td>
			</tr>
			 <tr>
            <td style="width:50%;">Shareholder B Contact Number</td>
            <td>' . $row['shareBContact'] . '</td>
			</tr>
			<tr>
            <td style="width:50%;">Shareholder B Designation(Individual)/Name of
Ocial Corporate Representative  </td>
            <td>' . $row['ShareholderBSharestakenup'] . '</td>
			</tr>
        </table>
        <br><br>
    </div>
    
    <div class="w3-container w3-row-padding">
        <br>
        <h3 ><b>Particulars next of kin</b></h3>
        <br>
        <table style="width: 100%;">
          <tr>
            <td style="width:50%;">Kin NRIC/Passport No</td>
            <td>' . $row['kinNRIC'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Kin Nationality</td>
            <td>' . $row['kinNationality'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Kin Race</td>
            <td>' . $row['kinRace'] . '</td>
          </tr>
		  <tr>
		  <td style="width:50%;">Kin E-mail</td>
		  <td>' . $row['kinEmail'] . ' </td>
		  </tr>
        </table>
        <br><br>
		</div>

    <div class="w3-container w3-row-padding">
        <br>
        <h3 style="width:100%;"><b>Opening of companys bank account after incorporation</b></h3>
        <br>
        <table style="width: 100%;">
          <tr>
            <td style="width:50%;">Name of Bank</td>
            <td>' . $row['bankName'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Bank Branch</td>
            <td>' . $row['bankBranch'] . '</td>
          </tr>
          <tr>
            <td style="width:50%;">Authorized Signatory</td>
            <td>' . $row['authorized'] . '</td>
          </tr>
		  <tr>
		  <td>Conditions of signing cheque</td>
		  <td>' . $row['conditions'] . ' </td>
		  </tr>
        </table>
        <br><br>
    </div>
    
    </div>
    
    ';
      }
      ?>


    </div>





  </div>
  </div>

  <div class="w3-main" style="margin-left:300px;margin-top:53px;">
    <footer class=" w3-black">
      <?php
      include($IPATH . "footer.php");
      ?>
    </footer>
  </div>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>

</body>

</html>