<?php 
require 'includes/database.php';
require 'session.php';
$formID = $_POST['formID'];
$id = $_POST['userID'];
$ip = $_POST['ip'];
$submissionID = $_POST['submission_id'];
$companyName = $_POST['company_name'];
$capital = $_POST['paid_capital'];
$natureofBusiness = $_POST['business_nature'];
$busAdd = $_POST['business_address'];
$firstName = $_POST['firstdiretor_name'];
$firstNRICPassportNo = $_POST['firstdiretor_ic'];
$firstexpDate =  sprintf("%02d/%02d/%04d",$_POST['firstdiretor_passportexp']['0'],$_POST['firstdiretor_passportexp']['1'],$_POST['firstdiretor_passportexp']['2']);
$firstDoB = sprintf("%02d/%02d/%04d",$_POST['firstdiretor_birth']['0'],$_POST['firstdiretor_birth']['1'],$_POST['firstdiretor_birth']['2']);
$firstGender = $_POST['firstdiretor_gender'];
$firstRace = $_POST['firstdiretor_race'];
$firstNationality = $_POST['firstdiretor_nationality'];
$firstAddress = $_POST['firstdiretor_address'];
$firstEmail = $_POST['firstdiretor_email'];
$secondName = $_POST['seconddirector_name'];
$secondNRICPassportNo = $_POST['seconddirector_ic'];
$secondexpDate = sprintf("%02d/%02d/%04d",$_POST['seconddirector_passportexp']['0'],$_POST['seconddirector_passportexp']['1'],$_POST['seconddirector_passportexp']['2']);
$secondDoB = sprintf("%02d/%02d/%04d",$_POST['seconddirector_birth']['0'], $_POST['seconddirector_birth']['1'], $_POST['seconddirector_birth']['2']);
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
$shareAContact = $_POST['sharea_contactnum']['0'];
$shareADesignation = $_POST['sharea_designation'];
$shareBName = $_POST['shareb_name'];
$shareBIC = $_POST['shareb_ic'];
$shareBNationality = $_POST['shareb_nationality'];
$shareBRace = $_POST['shareb_race'];
$shareBPlace = $_POST['shareb_placeofincorporation'];
$shareBAddress = $_POST['shareb_address'];
$shareBEmail = $_POST['shareb_email'];
$shareBContact = $_POST['shareb_contactnum']['0'];
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
$firstShares = $_POST['firstdirector31']['0'];
$secondShares = $_POST['second44']['0'];
$shareAShares = $_POST['shareholdera58']['0'];
$shareBShares = $_POST['shareholderb71']['0'];

$sql = "INSERT INTO form (user_id,form_id,ip,submissionID,companyName,capital,natureofBusiness,busAdd,firstName,firstNRICPassportNo,firstexpDate,firstDoB,firstGender,firstRace,firstNationality,firstAddress,firstEmail,secondName,secondNRICPassportNo,secondexpDate,secondDoB,secondGender,secondRace,secondNationality,secondAddress,secondEmail,shareAName,shareAIC,shareANationality,shareARace,shareAPlace,shareAAddress,	shareAEmail,shareAContact,shareADesignation,shareBName,shareBIC,shareBNationality,shareBRace,shareBPlace,shareBAddress,shareBEmail,shareBContact,ShareholderBSharestakenup,kinName,kinNRIC,kinNationality,kinRace,kinAddress,kinEmail,bankName,bankBranch,authorized,conditions,firstShares,secondShares,shareAShares,shareBShares) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo("Error description: " . $mysqli -> error);
    header("Location: enquiry_view.php?status=sqlerror");
    exit();
} else {
    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
        $id,
        $formID,
        $ip,
        $submissionID,
        $companyName,
        $capital,
        $natureofBusiness,
        $busAdd,
        $firstName,
        $firstNRICPassportNo,
        $firstexpDate,
        $firstDoB,
        $firstGender,
        $firstRace,
        $firstNationality,
        $firstAddress,
        $firstEmail,
        $secondName,
        $secondNRICPassportNo,
        $secondexpDate,
        $secondDoB,
        $secondGender,
        $secondRace,
        $secondNationality,
        $secondAddress,
        $secondEmail,
        $shareAName,
        $shareAIC,
        $shareANationality,
        $shareARace,
        $shareAPlace,
        $shareAAddress,
        $shareAEmail,
        $shareAContact,
        $shareADesignation,
        $shareBName,
        $shareBIC,
        $shareBNationality,
        $shareBRace,
        $shareBPlace,
        $shareBAddress,
        $shareBEmail,
        $shareBContact,
        $ShareholderBSharestakenup,
        $kinName,
        $kinNRIC,
        $kinNationality,
        $kinRace,
        $kinAddress,
        $kinEmail,
        $bankName,
        $bankBranch,
        $authorized,
        $conditions,
        $firstShares,
        $secondShares,
        $shareAShares,
        $shareBShares
    );

    mysqli_stmt_execute($stmt);

    header("Location: enquiry_view.php?status=success");
    exit();
}

?>