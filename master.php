<?php


    if(!isset($_SESSION["username"])){
        header("Location: login.php");
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">            
            <div class="logo_name">ITAMS</div>
<!--            <i class='bx bx-menu' id="btn" ></i>-->
        </div>
        <ul class="nav-list">
            <li>
                <a href="master.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
            <a href="assets.php">
                <i class='bx bx-box'></i>
                <span class="links_name">Assets</span>
            </a>
            <span class="tooltip">Assets</span>
            </li>
            <li>
            <a href="records.php">
                <i class='bx bx-receipt'></i>
                <span class="links_name">Records</span>
            </a>
            <span class="tooltip">Records</span>
            </li>
            <li>
            <a href="account.php">
                <i class='bx bx-user' ></i>
                <span class="links_name">Account</span>
            </a>
            <span class="tooltip">Account</span>
            </li>
            <li>
            <a onClick="logoutBtn()">
                <i class='bx bx-log-out' id="log_out"></i>
                <span class="links_name">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
    
    <?php 
        include 'add_asset.php';
        include 'view_asset.php';
        include 'delete_asset_confirmation.php';
        include 'assign_asset.php';
        include 'assign_asset_record.php';
        include 'view_assigned_details.php';
        include 'return_record_details.php';
        include 'return_asset_confirmation.php';
        include 'view_asset_log.php';

    ?>


    <div class="main-content">
        <section class="section">
            
            <?php isset($page_content)? include($page_content): 'index.php';?>

        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.6/pdfobject.min.js" integrity="sha512-B+t1szGNm59mEke9jCc5nSYZTsNXIadszIDSLj79fEV87QtNGFNrD6L+kjMSmYGBLzapoiR9Okz3JJNNyS2TSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
</body>
</html>