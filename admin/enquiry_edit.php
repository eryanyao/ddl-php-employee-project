<!DOCTYPE html>
<html>
<title>User Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    table {
        border-collapse: collapse;
    }

    table,
    thead,
    tr,
    th,
    td {
        border: 2px solid black;
    }

    .content {
        padding-left: 5px;
    }

    input.input-company {
        height: 40px;
    }

    input {
        outline: none;
        border: none;
    }

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .wrap-input {
        width: 100%;
        position: relative;
        border: 1px solid #e6e6e6;
        border-radius: 10px;
        padding: 10px 10px 7px 12px;
        margin-bottom: 22px;
    }

    .wrap-inputphoto {
        width: 100%;
        position: relative;
        border: 1px solid #e6e6e6;
        border-radius: 13px;
        padding: 10px 30px 9px 22px;
        margin-bottom: 20px;

    }

    .input {
        display: block;
        width: 80%;
        background: transparent;
        font-family: courier new;
        font-size: 18px;
        color: #555555;
        line-height: 1.0;
        padding-right: 12px;
    }

    .input2 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: courier new;
        font-size: 18px;
        color: #555555;
        line-height: 4.7;
        padding-right: 15px;
    }

    .label-red span {
        color: red
    }

    .short-wrap-input {
        width: calc((100% - 50px) / 2);
    }

    .select {
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        appearance: menulist;
        box-sizing: border-box;
        align-items: center;
        white-space: pre;
        -webkit-rtl-ordering: logical;
        background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
        cursor: default;
        margin: -3em;
        font: 1000 13.3333px courier new;


    }

    .option {
        font-weight: normal;
        display: block;
        white-space: pre;
        min-height: 1.2em;
        padding: 0px 2px 1px;
    }

    .btn-block {
        margin-top: 10px;
        text-align: center;
    }

    button {
        width: 150px;
        padding: 10px;
        border: 2px solid black;
        background: transparent;
        font-size: 30px;
        color: black;
        cursor: pointer;
        display: inline-block;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
        text-transform: uppercase;
    }

    button:hover {
        background-color: black;
        color: white;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .bg1 {
        background-color: #f7f7f7;
    }
</style>

<body>
    <?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/admin/";
    include($IPATH . "nav.php");
    ?>
    <div class="w3-main" style="margin-left:330px;margin-top:53px;">

        <!-- Header -->

        <header class="w3-container" style="padding-top:22px">
            <h5><b><i class="fa fa-book "></i> Enquiry Form</b></h5>
        </header>
        <?php
        require('includes/database.php');
        if (isset($_POST['update'])) {
            $companyName = $_POST['company_name'];
            $capital = $_POST['paid_capital'];
            $natureofBusiness = $_POST['business_nature'];
            $busAdd = $_POST['business_address'];
            $firstName = $_POST['firstdiretor_name'];
            $firstNRICPassportNo = $_POST['firstdiretor_ic'];
            $firstexpDate =  $_POST['firstdiretor_passportexp']['0'];
            $firstDoB = $_POST['firstdiretor_birth'];
            $firstGender = $_POST['firstdiretor_gender'];
            $firstRace = $_POST['firstdiretor_race'];
            $firstNationality = $_POST['firstdiretor_nationality'];
            $firstAddress = $_POST['firstdiretor_address'];
            $firstEmail = $_POST['firstdiretor_email'];
            $secondName = $_POST['seconddirector_name'];
            $secondNRICPassportNo = $_POST['seconddirector_ic'];
            $secondexpDate = $_POST['seconddirector_passportexp'];
            $secondDoB = $_POST['seconddirector_birth'];
            $secondGender = $_POST['seconddirector_gender'];
            $secondRace = $_POST['seconddirector_race'];
            $secondNationality = $_POST['seconddirector_nationality'];
            $secondAddress = $_POST['seconddirector_address'];
            $secondEmail = $_POST['seconddirector_email'];
            $shareAName = $_POST['sharea_name'];
            $shareAIC = $_POST['sharea_ic'];
            $shareANationality = $_POST['sharea_nationality'];
            $shareARace = $_POST['sharea_race'];
            $shareAPlace = $_POST['sharea_placeofincorporation'];
            $shareAAddress = $_POST['sharea_address'];
            $shareAEmail = $_POST['sharea_email'];
            $shareAContact = $_POST['sharea_contactnum'];
            $shareADesignation = $_POST['sharea_designation'];
            $shareBName = $_POST['shareb_name'];
            $shareBIC = $_POST['shareb_ic'];
            $shareBNationality = $_POST['shareb_nationality'];
            $shareBRace = $_POST['shareb_race'];
            $shareBPlace = $_POST['shareb_placeofincorporation'];
            $shareBAddress = $_POST['shareb_address'];
            $shareBEmail = $_POST['shareb_email'];
            $shareBContact = $_POST['shareb_contactnum'];
            $ShareholderBSharestakenup = $_POST['shareb_designation'];
            $kinName = $_POST['kin_name'];
            $kinNRIC = $_POST['kin_ic'];
            $kinNationality = $_POST['kin_nationality'];
            $kinRace = $_POST['kin_race'];
            $kinAddress = $_POST['kin_address'];
            $kinEmail = $_POST['kin_email'];
            $bankName = $_POST['company_bank_name'];
            $bankBranch = $_POST['company_bank_branch'];
            $authorized = $_POST['company_authorized_sign'];
            $conditions = $_POST['company_sign_condition'];

            $sql = mysqli_query($conn, "UPDATE form SET 
            companyName='$companyName',
            capital='$capital',
            natureofBusiness='$natureofBusiness',
            busAdd='$busAdd',
            firstName='$firstName',
            firstNRICPassportNo='$firstNRICPassportNo',
            firstexpDate='$firstexpDate',
            firstDoB=' $firstDoB',
            firstGender='$firstGender',firstRace='$firstRace',firstNationality='$firstNationality',firstAddress=' $firstAddress',firstEmail=$firstEmai'',secondName=' $secondName',secondNRICPassportNo='$secondNRICPassportNo',secondexpDate='$secondexpDate',secondDoB='$secondDoB',secondGender=' $secondGender',secondRace='$secondRace',secondNationality='$secondNationality',secondAddress='$secondAddress',secondEmail='$secondEmail',shareAName='$shareAName',shareAIC='$shareAIC',shareANationality='$shareANationality',shareARace='$shareARace',shareAPlace='$shareAPlace',shareAAddress='$shareAAddress',	shareAEmail='$shareAEmail',shareAContact='$shareAContact',shareADesignation='$shareADesignation',shareBName='$shareBName',shareBIC='$shareBIC',shareBNationality='$shareBNationality',shareBRace='$shareBRace',shareBPlace='$shareBPlace',shareBAddress='$shareBAddress',shareBEmail='$shareBEmail',shareBContact='$shareBContact',ShareholderBSharestakenup='$ShareholderBSharestakenup',kinName='$kinName',kinNRIC='$kinNRIC',kinNationality='$kinNationality',kinRace='$kinRace',kinAddress='$kinAddress',kinEmail='$kinEmail',bankName='$bankName',bankBranch='$bankBranch',authorized='$authorized',conditions='$conditions'
             WHERE id='{$_POST['id']}'");
             
             header("Location: enquiry_edit.php?update=success");
             exit();
        }

        

        $query = mysqli_query($conn, "SELECT * FROM form WHERE id='{$_REQUEST['id']}' ");

        while ($row = mysqli_fetch_array($query)) {
            $companyName = $row['companyName'];
            $capital = $row['capital'];
            $natureofBusiness = $row['natureofBusiness'];
            $busAdd = $row['busAdd'];
            $firstName = $row['firstName'];
            $firstNRICPassportNo = $row['firstNRICPassportNo'];
            $firstexpDate = $row['firstexpDate'];
            $firstDoB = $row['firstDoB'];
            $firstGender = $row['firstGender'];
            $firstRace = $row['firstRace'];
            $firstNationality = $row['firstNationality'];
            $firstAddress = $row['firstAddress'];
            $firstEmail = $row['firstEmail'];
            $firstShares = $row['firstShares'];
            $secondName = $row['secondName'];
            $secondNRICPassportNo = $row['secondNRICPassportNo'];
            $secondexpDate = $row['secondexpDate'];
            $secondDoB = $row['secondDoB'];
            $secondGender = $row['secondGender'];
            $secondRace = $row['secondRace'];
            $secondNationality = $row['secondNationality'];
            $secondAddress = $row['secondAddress'];
            $secondEmail = $row['secondEmail'];
            $secondShares = $row['secondShares'];
            $shareAName = $row['shareAName'];
            $shareAIC = $row['shareAIC'];
            $shareANationality = $row['shareANationality'];
            $shareARace = $row['shareARace'];
            $shareAPlace = $row['shareAPlace'];
            $shareAAddress = $row['shareAAddress'];
            $shareAEmail = $row['shareAEmail'];
            $shareAContact = $row['shareAContact'];
            $shareADesignation = $row['shareADesignation'];
            $shareAShares = $row['shareAShares'];
            $shareBName = $row['shareBName'];
            $shareBIC = $row['shareBIC'];
            $shareBNationality = $row['shareBNationality'];
            $shareBRace = $row['shareBRace'];
            $shareBPlace = $row['shareBPlace'];
            $shareBAddress = $row['shareBAddress'];
            $shareBEmail = $row['shareBEmail'];
            $shareBContact = $row['shareBContact'];
            $shareBShares = $row['shareBShares'];
            $kinName = $row['kinName'];
            $kinNRIC = $row['kinNRIC'];
            $kinNationality = $row['kinNationality'];
            $kinRace = $row['kinRace'];
            $kinAddress = $row['kinAddress'];
            $kinEmail = $row['kinEmail'];
            $bankName = $row['bankName'];
            $bankBranch = $row['bankBranch'];
            $authorized = $row['authorized'];
            $conditions = $row['conditions'];
        }
        ?>

<?php 
              if(isset($_GET['update'])){
                if($_GET['update'] == "success"){ ?>
                <script>
                  swal({
                    title: "Information Updated",
                    text: "Contact information update successfully.",
                    icon: "success",
                    button: "OK!",
                  });
                </script>
              <?php
                }
              }
        
             ?>

 <div class="w3-container">
        <button onclick="goBack()" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Back</button>
    </div>

        <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">

            <div class="w3-container">
                <h2 class="w3-text-black"><strong>Edit Form</strong></h2>

                <div class="form-container">
                    <!--form container-->
                    <div class="wrap-form">
                        <!--form content-->
                        <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?sn=<?php echo $_REQUEST['id']; ?>">
                            <!--form content-->
                            <div class="wrap-input bg1  label-red">
                                <label for="label"> Proposed Company Name<span>*</span></label>
                                <input class="input" type="text" name="company_name" value="<?php echo $companyName; ?>">
                            </div>
                            <div class="wrap-input bg1  short-wrap-input label-red">
                                <label for="label"> Paid Up Capital<span>*</span></label>
                                <input class="input" type="text" name="paid_capital" value="<?php echo $capital; ?>">
                            </div>
                            <div class="wrap-input bg1  short-wrap-input label-red">
                                <label for="label"> Nature of Business<span>*</span></label>
                                <input class="input" type="text" name="business_nature" value="<?php echo $natureofBusiness; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label"> Business Address/Service Address <span>*</span></label>
                                <input class="input" type="text" name="business_address" value="<?php echo $busAdd; ?>">
                            </div>
                            <span class="title">
                                <hr>
                                First Director
                            </span>
                            <span class="title2">
                                A.
                            </span>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Full Name:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_name" value="<?php echo $firstName; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">NRIC/Passport No:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_ic" value="<?php echo $firstNRICPassportNo; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Passport Expiry Date:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_passportexp" value="<?php echo $firstexpDate; ?>">
                            </div>
                            <div class="wrap-input bg1 short-wrap-input label-red">
                                <label for="label">Date of Birth:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_birth" value="<?php echo $firstDoB; ?>">
                            </div>
                            <div class="wrap-input bg1 short-wrap-input label-red">
                                <label for="label">Gender<span>*</span> </label><br>
                                <input class="input" type="text" name="firstdiretor_gender" value="<?php echo $firstGender; ?>">
                            </div>
                            <div class="wrap-input bg1 short-wrap-input label-red">
                                <label for="label">Nationality:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_nationality" value="<?php echo $firstNationality; ?>">
                            </div>
                            <div class="wrap-input bg1  short-wrap-input label-red">
                                <label for="label">Race<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_race" value="<?php echo $firstRace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Residential Address:<span>*</span></label>
                                <input class="input2" type="text" name="firstdiretor_address" value="<?php echo $firstAddress; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">E-mail:<span>*</span></label>
                                <input class="input" type="text" name="firstdiretor_email" value="<?php echo $firstEmail; ?>">
                            </div>
                            <div class="wrap-inputphoto bg1  label-red ">
                                <form enctype="multipart/form-data">
                                    <label for="label">Shares taken up:<span>*</span></label><br>
                                    <input class="input" type="text" name="firstdiretor_shares" value="<?php echo $firstShares; ?>">
                                </form>
                            </div>
                            <span class="title">
                                <hr>
                                Second Director
                            </span>
                            <span class="title2">
                                B.
                            </span>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">Full Name:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_name" value="<?php echo $secondName; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">NRIC/Passport No:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_ic" value="<?php echo $secondNRICPassportNo; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red">
                                <label for="label">Passport Expiry Date:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_passportexp" value="<?php echo $secondexpDate; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red">
                                <label for="label">Date of Birth:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_birth" value="<?php echo $secondDoB; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red">
                                <label for="label">Gender<span>*</span></label><br>
                                <input class="input" type="text" name="seconddirector_gender" value="<?php echo $secondGender; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red">
                                <label for="label">Nationality:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_nationality" value="<?php echo $secondNationality; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red">
                                <label for="label">Race<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_race" value="<?php echo $secondRace; ?>">
                            </div>
                            <div class="wrap-input bg1 label-red ">
                                <label for="label">Residential Address/Registered Address<span>*</span></label>
                                <input class="input2" type="text" name="seconddirector_address" value="<?php echo $secondAddress; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">E-mail:<span>*</span></label>
                                <input class="input" type="text" name="seconddirector_email" value="<?php echo $secondEmail; ?>">
                            </div>
                            <div class="wrap-inputphoto bg1  label-red ">
                                <form enctype="multipart/form-data">
                                    <label for="label">Shares taken up:<span>*</span></label><br>
                                    <input class="input2" type="text" name="seconddirector_shares" value="<?php echo $secondShares; ?>">
                                </form>
                            </div>
                            <span class="title">
                                <!-- Fifth section -->
                                <hr>
                                Other Shareholders(if any)
                            </span>
                            <span class="title2">
                                A.
                            </span>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Full Name:<span>*</span></label>
                                <input class="input" type="text" name="sharea_name" value="<?php echo $shareAName; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">IC No/Company No:<span>*</span></label>
                                <input class="input" type="text" name="sharea_ic" value="<?php echo $shareAIC; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Nationality:<span>*</span></label>
                                <input class="input" type="text" name="sharea_nationality" value="<?php echo $shareANationality; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Race<span>*</span></label>
                                <input class="input" type="text" name="sharea_race" value="<?php echo $shareARace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">Place of Incorporation(If it is a corporation)<span>*</span></label>
                                <input class="input" type="text" name="sharea_placeofincorporation" value="<?php echo $shareAPlace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Residential Address/Registered Address<span>*</span></label>
                                <input class="input2" type="text" name="sharea_address" value="<?php echo $shareAAddress; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red" <label for="label">E-mail:<span>*</span></label>
                                <input class="input" type="text" name="sharea_email" value="<?php echo $shareAEmail; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Contact No:<span>*</span></label>
                                <input class="input" type="text" name="sharea_contactnum" value="<?php echo $shareAContact; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Designation (Individual) /Name of Official Corporate Representative<span>*</span></label>
                                <input class="input" type="text" name="sharea_designation" value="<?php echo $shareADesignation; ?>">
                            </div>
                            <div class="wrap-inputphoto bg1  label-red">
                                <form enctype="multipart/form-data">
                                    <label for="label">Shares taken up:<span>*</span></label><br>
                                    <input class="input" type="text" name="sharea_shares" value="<?php echo $shareAShares; ?>">
                                </form>
                            </div>
                            <span class="title2">
                                B.
                            </span>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Full Name:<span>*</span></label>
                                <input class="input" type="text" name="shareb_name" placeholder="Enter name" value="<?php echo $shareBName; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">IC No/Company No:<span>*</span></label>
                                <input class="input" type="text" name="shareb_ic" placeholder="Enter IC/Company No" value="<?php echo $shareBIC; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Nationality:<span>*</span></label>
                                <input class="input" type="text" name="shareb_nationality" placeholder="Enter Nationality" value="<?php echo $shareBNationality; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Race<span>*</span></label>
                                <input class="input" type="text" name="shareb_race" placeholder="Enter race" value="<?php echo $shareBRace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">Place of Incorporation(If it is a corporation)<span>*</span></label>
                                <input class="input" type="text" name="shareb_placeofincorporation" placeholder="Enter place of incorporation" value="<?php echo $shareBPlace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Residential Address/Registered Address<span>*</span></label>
                                <input class="input2" type="text" name="shareb_address" placeholder="Enter residential address" value="<?php echo $shareBAddress; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red" <label for="label">E-mail:<span>*</span></label>
                                <input class="input" type="text" name="shareb_email" placeholder="Enter Email" value="<?php echo $shareBEmail; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Contact No:<span>*</span></label>
                                <input class="input" type="text" name="shareb_contactnum" placeholder="Enter contact number" value="<?php echo $shareBContact; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Designation (Individual) /Name of Official Corporate Representative<span>*</span></label>
                                <input class="input" type="text" name="shareb_designation" placeholder="Enter Designation name" value="<?php echo $ShareholderBSharestakenup; ?>">
                            </div>
                            <div class="wrap-inputphoto bg1  label-red">
                                <form action="" enctype="multipart/form-data">
                                    <label for="label">Shares taken up:<span>*</span></label><br>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </form>
                            </div>

                            <span class="title">
                                <hr>
                                Particulars next of kin

                            </span>

                            <div class="wrap-input bg1  label-red">
                                <label for="label">Full Name:<span>*</span></label>
                                <input class="input" type="text" name="kin_name" placeholder="Enter name" value="<?php echo $kinName; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red ">
                                <label for="label">NRIC/Passport No:<span>*</span></label>
                                <input class="input" type="text" name="kin_ic" placeholder="Enter NRIC/Passport No" value="<?php echo  $kinNRIC; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Nationality:<span>*</span></label>
                                <input class="input" type="text" name="kin_nationality" placeholder="Enter Nationality" value="<?php echo $kinNationality; ?>">
                            </div>
                            <div class="wrap-input bg1   label-red">
                                <label for="label">Race<span>*</span></label>
                                <input class="input" type="text" name="kin_race" placeholder="Enter race" value="<?php echo $kinRace; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">Residential Address/Registered Address<span>*</span></label>
                                <input class="input2" type="text" name="kin_address" placeholder="Enter residential address" value="<?php echo $kinAddress; ?>">
                            </div>
                            <div class="wrap-input bg1  label-red">
                                <label for="label">E-mail:<span>*</span></label>
                                <input class="input" type="text" name="kin_email" placeholder="Enter Email" value="<?php echo $kinEmail; ?>">
                            </div>
                            <span class="title">
                                <hr>
                                Opening of company's bank account after incorporation
                            </span>
                            <div class="wrap-input bg1 validate-input label-red" data-validate="Enter bank name>
		  <label for =" label">Name of Bank<span>*</span></label>
                                <input class="input" type="text" name="company_bank_name" placeholder="Enter bank name" value="<?php echo $bankName; ?>">
                            </div>
                            <div class="wrap-input bg1 validate-input label-red" data-validate="Enter bank branch>
		  <label for =" label">Bank Branch<span>*</span></label>
                                <input class="input" type="text" name="company_bank_branch" placeholder="Enter bank branch" value="<?php echo $bankBranch; ?>">
                            </div>
                            <div class="wrap-input bg1 validate-input label-red">
                                <label for="label">Authorised Signatory<span>*</span></label>
                                <input class="input" type="text" name="company_authorized_sign" placeholder="Enter authorised signatory" value="<?php echo $authorized; ?>">
                            </div>
                            <div class="wrap-input bg1 validate-input label-red ">
                                <label for="label">Conditions of signing cheque<span>*</span></label>
                                <input class="input" type="text" name="company_sign_condition" placeholder="Enter conditions" value="<?php echo $conditions; ?>">
                            </div>
                            <div class="btn-block">
                                <button type="submit" name="update" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
        </div>

    </div>

</body>

<script>
    function goBack() {
        window.history.back();
    }
</script>