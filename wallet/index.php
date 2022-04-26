<?php
// Include database connection file
require"../db-conn.php";
?>

<!DOCTYPE html>
<html>

	<head>

		<title>Dashboard || VoltagePay </title>

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="x-apple-disable-message-reformatting">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="./../img/logo.png"/>
        <link rel="stylesheet" href="../vendors/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css"  id="bootstrap-css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

        <style>

            .collapse:not(.show) {
                display: flex;
            }
            a{
                color: #ffffff;
                text-decoration: none;
            }
            a:hover{
                text-decoration: none;
                color: #ffffff;
            }
            .withdrew:before {
                content: "";
                background-color: #ff7551;
            }
            .video{
                height: 310px;
            }
        </style>

	</head>
    <body>
        <div class="container">
            <div class="sidebar">
                <div class="side-wrapper">
                    <div class="side-title">MENU</div>
                    <div class="side-menu">
                        <a class="sidebar-link discover is-active" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" id="arrow-circle-down" viewBox="0 0 24 24"><g><path d="M22.5,15.5H4.267l1.612-1.64a1.5,1.5,0,1,0-2.14-2.1L.993,14.552a3.515,3.515,0,0,0,0,4.9l2.746,2.793a1.5,1.5,0,0,0,2.14-2.1L4.267,18.5H22.5a1.5,1.5,0,0,0,0-3Z"/><path d="M1.5,8.5H19.733l-1.612,1.64a1.5,1.5,0,1,0,2.14,2.1l2.746-2.793a3.515,3.515,0,0,0,0-4.9L20.261,1.758a1.5,1.5,0,0,0-2.14,2.1L19.733,5.5H1.5a1.5,1.5,0,0,0,0,3Z"/></g></svg>
                            Exchange
                        </a>
                        <a class="sidebar-link exchange-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><g id="_01_align_center" data-name="01 align center"><path d="M15,24H9V20.487a9,9,0,0,1-2.849-1.646L3.107,20.6l-3-5.2L3.15,13.645a9.1,9.1,0,0,1,0-3.29L.107,8.6l3-5.2L6.151,5.159A9,9,0,0,1,9,3.513V0h6V3.513a9,9,0,0,1,2.849,1.646L20.893,3.4l3,5.2L20.85,10.355a9.1,9.1,0,0,1,0,3.29L23.893,15.4l-3,5.2-3.044-1.758A9,9,0,0,1,15,20.487Zm-4-2h2V18.973l.751-.194A6.984,6.984,0,0,0,16.994,16.9l.543-.553,2.623,1.515,1-1.732-2.62-1.513.206-.746a7.048,7.048,0,0,0,0-3.75l-.206-.746,2.62-1.513-1-1.732L17.537,7.649,16.994,7.1a6.984,6.984,0,0,0-3.243-1.875L13,5.027V2H11V5.027l-.751.194A6.984,6.984,0,0,0,7.006,7.1l-.543.553L3.84,6.134l-1,1.732L5.46,9.379l-.206.746a7.048,7.048,0,0,0,0,3.75l.206.746L2.84,16.134l1,1.732,2.623-1.515.543.553a6.984,6.984,0,0,0,3.243,1.875l.751.194Zm1-6a4,4,0,1,1,4-4A4,4,0,0,1,12,16Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></g></svg>
                            Settings
                        </a>
                        <a class="sidebar-link" href="#">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 8.796c0 1.256.332 1.997 1.063 2.85.553.628.73 1.435.73 2.31 0 .874-.287 1.704-.863 2.378a4.537 4.537 0 01-2.9 1.413c-1.571.134-3.143.247-4.736.247-1.595 0-3.166-.068-4.737-.247a4.532 4.532 0 01-2.9-1.413 3.616 3.616 0 01-.864-2.378c0-.875.178-1.682.73-2.31.754-.854 1.064-1.594 1.064-2.85V8.37c0-1.682.42-2.781 1.283-3.858C7.861 2.942 9.919 2 11.956 2h.09c2.08 0 4.204.987 5.466 2.625.82 1.054 1.195 2.108 1.195 3.745v.426zM9.074 20.061c0-.504.462-.734.89-.833.5-.106 3.545-.106 4.045 0 .428.099.89.33.89.833-.025.48-.306.904-.695 1.174a3.635 3.635 0 01-1.713.731 3.795 3.795 0 01-1.008 0 3.618 3.618 0 01-1.714-.732c-.39-.269-.67-.694-.695-1.173z" />
                            </svg>
                            Notifications
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="header">
                    <div class="search-bar">
                        <img src="./../img/logo.png" width="170px" height="40px" />
                    </div>
                    <div class="user-settings">
                        <div class="user-name">Omokogie</div>
                        <div class="notify">
                            <div class="notification"></div>
                            <svg viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 8.796c0 1.256.332 1.997 1.063 2.85.553.628.73 1.435.73 2.31 0 .874-.287 1.704-.863 2.378a4.537 4.537 0 01-2.9 1.413c-1.571.134-3.143.247-4.736.247-1.595 0-3.166-.068-4.737-.247a4.532 4.532 0 01-2.9-1.413 3.616 3.616 0 01-.864-2.378c0-.875.178-1.682.73-2.31.754-.854 1.064-1.594 1.064-2.85V8.37c0-1.682.42-2.781 1.283-3.858C7.861 2.942 9.919 2 11.956 2h.09c2.08 0 4.204.987 5.466 2.625.82 1.054 1.195 2.108 1.195 3.745v.426zM9.074 20.061c0-.504.462-.734.89-.833.5-.106 3.545-.106 4.045 0 .428.099.89.33.89.833-.025.48-.306.904-.695 1.174a3.635 3.635 0 01-1.713.731 3.795 3.795 0 01-1.008 0 3.618 3.618 0 01-1.714-.732c-.39-.269-.67-.694-.695-1.173z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="main-container">
                    <div class="main-blogs anim" style="--delay: 0s">
                        <div class="exchange_box">
                            <div class="form_exchange">
                                <div class="exchange">
                                    <h3>Exchange</h3>
                                </div>
                                <form method="post" action="" name="form">
                                    <div class="send_box swap">
                                        <div class="form-floating float-input">
                                            <input type="number" class="form-control send_input" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                                You send
                                            </label>
                                        </div>
                                        <div class="form-floating float-select">
                                            <select class="form-select" id="cryptoSelect">
                                            <?php
                                                $sqlGetCoins = "SELECT * FROM coins";
                                                $result = $conn->query($sqlGetCoins);
                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo '
                                                      <option value="'. $row["name"].'">'. $row["name"].'</option>
                                                    ';

                                                }
                                                } else {
                                                echo "<option> No listed coin </option>";
                                                }

                                            ?>
                                            </select>
                                            <label for="cryptoSelect">
                                                <img src="" />
                                            </label>
                                        </div>
                                    </div>

                                    <div class="rate_box">
                                        <h3>
                                            <span id="sendAmount">
                                                
                                            </span>
                                            <span id="sendCrypto">
                                                BTC
                                            </span>
                                            ~
                                            <span id="getAmount">
                                                40,000
                                            </span>
                                            <span id="getCrypto">
                                                USDT
                                            </span>
                                        </h3>
                                        <div id="swap_btn">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                    </div>
                                    <div class="get_box swap">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                                You get
                                            </label>
                                        </div>
                                        <div class="form-floating float-select">
                                            <select class="form-select" id="cryptoGet">
                                            <?php
                                                $sqlGetCoins = "SELECT * FROM coins";
                                                $result = $conn->query($sqlGetCoins);
                                                if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo '
                                                      <option value="'. $row["name"].'">'. $row["name"].'</option>
                                                    ';

                                                }
                                                } else {
                                                echo "<option> No listed coin </option>";
                                                }

                                            ?>
                                            </select>
                                            <label for="cryptoSelect">
                                                <img src="" />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="exchange_btn  address-link">
                                        Exchange
                                    </div>

                                </form>
                            </div>
                        </div>
                        
                        <!-- Paid box -->
                        <!-- <div class="paid_box">
                            <div class="form_paid">
                                <div class="paid">
                                    <div class="back">
                                        <i class="fa fa-chevron-left"></i> Back
                                    </div>
                                    <h3>Copy Address</h3>
                                </div>
                                <form method="post" action="" name="form">
                                    <div class="company_box">
                                        <div class="form-floating">
                                            <input type="number" value="12567890" disabled class="form-control" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                               Premium Rate Address (BTC)
                                            </label>
                                            <div class="copy_btn">
                                               <i class="fa fa-copy"></i> Copy address
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clock_box">
                                        <h3>3:00.00</h3>
                                        <p>
                                            You have 3 hours to send your funds otherwise the transaction
                                            will be cancelled automatically.
                                        </p>
                                    </div>
                                    <h3>
                                        Transaction details
                                    </h3>
                                    <div class="transfer_details">
                                        <div class="id_box">
                                            <div class="details">
                                                <h3>Transaction details</h3>
                                                <p>1dbdbdghdwueeueuyey6w7w7ww773636</p>
                                            </div>
                                        </div>
                                        <div class="send_box">
                                            <div class="icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                            <div class="details">
                                                <h3>You send</h3>
                                                <p>1 BTC</p>
                                            </div>
                                        </div>
                                        <div class="receive_box">
                                            <div class="icon">
                                                =
                                            </div>
                                            <div class="details">
                                                <h3>You get</h3>
                                                <p>40,000 USDT</p>
                                            </div>
                                        </div>
                                        <div class="rate_box">
                                            <div class="icon">
                                                x
                                            </div>
                                            <div class="details">
                                                <h3>Exchange rate</h3>
                                                <p>1 BTC ~ 40,000 USDT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paid_btn">
                                        Next Step
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <!-- End Paid Box -->
                    </div>
                    <div class="address-box">
                        <!-- Address box -->
                        <div class="address_box anim" style="--delay: 0s">
                            <div class="form_address">
                                <div class="address">
                                    <div class="back back1-link">
                                        <i class="fa fa-chevron-left"></i> Back
                                    </div>
                                    <h3>Enter Address</h3>
                                </div>
                                <form method="post" action="" name="form">
                                    <div class="destination_box">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                                Destination address (USDT)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="refund_box">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                                Refund address (BTC)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="notice">
                                        <h3>
                                            The refund address is needed
                                            in the event of a failed transaction.
                                        </h3>
                                    </div>
                                    <div class="transfer_details">
                                        <div class="send_box">
                                            <div class="icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                            <div class="details">
                                                <h3>You send</h3>
                                                <p>1 BTC</p>
                                            </div>
                                        </div>
                                        <div class="receive_box">
                                            <div class="icon">
                                                =
                                            </div>
                                            <div class="details">
                                                <h3>You get</h3>
                                                <p>40,000 USDT</p>
                                            </div>
                                        </div>
                                        <div class="rate_box">
                                            <div class="icon">
                                                x
                                            </div>
                                            <div class="details">
                                                <h3>Exchange rate</h3>
                                                <p>1 BTC ~ 40,000 USDT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="address_btn copy-link">
                                        Next Step
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Addres Box -->
                    </div>
                    <div class="copy-box">
                        <!-- Paid box -->
                        <div class="paid_box anim" style="--delay: 0s">
                            <div class="form_paid">
                                <div class="paid">
                                    <div class="back back2-link">
                                        <i class="fa fa-chevron-left"></i> Back
                                    </div>
                                    <h3>Copy Address</h3>
                                </div>
                                <form method="post" action="" name="form">
                                    <div class="company_box">
                                        <div class="form-floating">
                                            <input type="number" value="12567890" disabled class="form-control" name="receive" id="receive" placeholder="">
                                            <label for="receive">
                                               Premium Rate Address (BTC)
                                            </label>
                                            <div class="copy_btn">
                                               <i class="fa fa-copy"></i> Copy address
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clock_box">
                                        <h3>3:00.00</h3>
                                        <p>
                                            You have 3 hours to send your funds otherwise the transaction
                                            will be cancelled automatically.
                                        </p>
                                    </div>
                                    <h3>
                                        Transaction details
                                    </h3>
                                    <div class="transfer_details">
                                        <div class="id_box">
                                            <div class="details">
                                                <h3>Transaction details</h3>
                                                <p>1dbdbdghdwueeueuyey6w7w7ww773636</p>
                                            </div>
                                        </div>
                                        <div class="send_box">
                                            <div class="icon">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                            <div class="details">
                                                <h3>You send</h3>
                                                <p>1 BTC</p>
                                            </div>
                                        </div>
                                        <div class="receive_box">
                                            <div class="icon">
                                                =
                                            </div>
                                            <div class="details">
                                                <h3>You get</h3>
                                                <p>40,000 USDT</p>
                                            </div>
                                        </div>
                                        <div class="rate_box">
                                            <div class="icon">
                                                x
                                            </div>
                                            <div class="details">
                                                <h3>Exchange rate</h3>
                                                <p>1 BTC ~ 40,000 USDT</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paid_btn">
                                        I have paid
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Paid Box -->
                    </div>

                    <div class="exchange-box">
                        Hello
                    </div>
                    <div class="amount-box">
                        <div class="frame-signin anim" style="--delay: .1s; height: 400px;">
                            <div class="nav-signin">
                                <ul class="links">
                                    <li class="flexible-save-inactive"><a class="btn btn-save">Add to wallet </a></li>
                                </ul>
                            </div>
                            <div ng-app ng-init="checked = false">
                                <form class="form-signin save-box mt-3" action="" method="post" name="form">
                                    <label class="out-label" for="save">Amount</label>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="save" id="save" placeholder="">
                                        <label for="save">
                                        <img src="https://img.icons8.com/ios-glyphs/24/000000/naira.png" style="display:inline-block" />  NGN
                                        </label>
                                    </div>
                                    <div id="mainButton" class="text-center">
                                        <a class="btn-text" id="saveBtn">Proceed</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="stream-area">
                        <div class="video-stream">
                        <video id="my_video_1" class="video-js vjs-default-skin anim" width="640px" height="267px" controls preload="none" poster='https://images.unsplash.com/photo-1476801071117-fbc157ae3f01?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDh8fHxlbnwwfHx8&w=1000&q=80' data-setup='{ "aspectRatio":"940:620", "playbackRates": [1, 1.5, 2] }'>
                        <source src="https://player.vimeo.com/external/390402719.sd.mp4?s=20cfdb066c4253047562b65bd4e411b86a004bc5&profile_id=139&oauth2_token_id=57447761" type='video/mp4' />
                        <source src="https://player.vimeo.com/external/390402719.sd.mp4?s=20cfdb066c4253047562b65bd4e411b86a004bc5&profile_id=139&oauth2_token_id=57447761" type='video/webm' />
                        </video>
                        <div class="video-detail">
                        <div class="video-content">
                        <div class="video-p-wrapper anim" style="--delay: .1s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                            </div>
                            <div class="video-p-detail">
                            <div class="video-p-name">Andy William</div>
                            <div class="video-p-sub">1,980,893 subscribers</div>
                            </div>
                            <div class="button-wrapper">
                            <button class="like">
                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.435 2.582a1.933 1.933 0 00-1.93-.503L3.408 6.759a1.92 1.92 0 00-1.384 1.522c-.142.75.355 1.704 1.003 2.102l5.033 3.094a1.304 1.304 0 001.61-.194l5.763-5.799a.734.734 0 011.06 0c.29.292.29.765 0 1.067l-5.773 5.8c-.428.43-.508 1.1-.193 1.62l3.075 5.083c.36.604.98.946 1.66.946.08 0 .17 0 .251-.01.78-.1 1.4-.634 1.63-1.39l4.773-16.075c.21-.685.02-1.43-.48-1.943z" />
                            </svg>
                            Share
                            </button>
                            <button class="like red">
                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.5c.63 0 1.26.09 1.86.29 3.69 1.2 5.02 5.25 3.91 8.79a12.728 12.728 0 01-3.01 4.81 38.456 38.456 0 01-6.33 4.96l-.25.15-.26-.16a38.093 38.093 0 01-6.37-4.96 12.933 12.933 0 01-3.01-4.8c-1.13-3.54.2-7.59 3.93-8.81.29-.1.59-.17.89-.21h.12c.28-.04.56-.06.84-.06h.11c.63.02 1.24.13 1.83.33h.06c.04.02.07.04.09.06.22.07.43.15.63.26l.38.17c.092.05.195.125.284.19.056.04.107.077.146.1l.05.03c.085.05.175.102.25.16a6.263 6.263 0 013.85-1.3zm2.66 7.2c.41-.01.76-.34.79-.76v-.12a3.3 3.3 0 00-2.11-3.16.8.8 0 00-1.01.5c-.14.42.08.88.5 1.03.64.24 1.07.87 1.07 1.57v.03a.86.86 0 00.19.62c.14.17.35.27.57.29z" />
                            </svg>
                            Liked
                            </button>
                            </div>
                        </div>
                        <div class="video-p-title anim" style="--delay: .2s">Basic how to ride your Skateboard</div>
                        <div class="video-p-subtitle anim" style="--delay: .3s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus illum tempora consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis earum velit accusantium maiores qui sit quas, laborum voluptatibus vero quidem tempore facilis voluptate tempora deserunt! </div>
                        <div class="video-p-subtitle anim" style="--delay: .4s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus laborum qui dolorum fugiat eius accusantium repellendus illum tempora consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                        </div>
                        </div>
                        </div>
                        <div class="chat-stream">
                        <div class="chat">
                        <div class="chat-header anim">Live Chat<span><svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.212 7.762c0 2.644-2.163 4.763-4.863 4.763-2.698 0-4.863-2.119-4.863-4.763C4.486 5.12 6.651 3 9.35 3c2.7 0 4.863 2.119 4.863 4.762zM2 17.917c0-2.447 3.386-3.06 7.35-3.06 3.985 0 7.349.634 7.349 3.083 0 2.448-3.386 3.06-7.35 3.06C5.364 21 2 20.367 2 17.917zM16.173 7.85a6.368 6.368 0 01-1.137 3.646c-.075.107-.008.252.123.275.182.03.369.048.56.052 1.898.048 3.601-1.148 4.072-2.95.697-2.675-1.35-5.077-3.957-5.077a4.16 4.16 0 00-.818.082c-.036.008-.075.025-.095.055-.025.04-.007.09.019.124a6.414 6.414 0 011.233 3.793zm3.144 5.853c1.276.245 2.115.742 2.462 1.467a2.107 2.107 0 010 1.878c-.531 1.123-2.245 1.485-2.912 1.578a.207.207 0 01-.234-.232c.34-3.113-2.367-4.588-3.067-4.927-.03-.017-.036-.04-.034-.055.002-.01.015-.025.038-.028 1.515-.028 3.145.176 3.747.32z" />
                            </svg>
                            15,988 people
                        </span>
                        </div>
                        <div class="message-container">
                        <div class="message anim" style="--delay: .1s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.unsplash.com/photo-1560941001-d4b52ad00ecc?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name"> Wijaya Adabi</div>
                            <div class="msg__content video-p-sub"> Lorem ipsum clor sit, ame conse quae debitis</div>
                            </div>
                        </div>
                        <div class="message anim" style="--delay: .2s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name offline"> Johny Wise</div>
                            <div class="msg__content video-p-sub"> Suscipit eos atque voluptates labore</div>
                            </div>
                        </div>
                        <div class="message anim" style="--delay: .3s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fG1lbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name offline"> Budi Hakim</div>
                            <div class="msg__content video-p-sub">Dicta quidem sunt adipisci</div>
                            </div>
                        </div>
                        <div class="message anim" style="--delay: .4s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.pexels.com/photos/1870163/pexels-photo-1870163.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name"> Thomas Hope</div>
                            <div class="msg__content video-p-sub"> recusandae doloremque aperiam alias molestias</div>
                            </div>
                        </div>
                        <div class="message anim" style="--delay: .5s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.pexels.com/photos/1680172/pexels-photo-1680172.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name"> Gerard Will</div>
                            <div class="msg__content video-p-sub">Dicta quidem sunt adipisci</div>
                            </div>
                        </div>
                        <div class="message anim" style="--delay: .6s">
                            <div class="author-img__wrapper video-author video-p">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <path d="M20 6L9 17l-5-5" />
                            </svg>
                            <img class="author-img" src="https://images.pexels.com/photos/2889942/pexels-photo-2889942.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" />
                            </div>
                            <div class="msg-wrapper">
                            <div class="msg__name video-p-name offline">Johny Wise</div>
                            <div class="msg__content video-p-sub"> recusandae doloremque aperiam alias molestias</div>
                            </div>
                        </div>
                        </div>
                        <div class="chat-footer anim" style="--delay: .1s">
                        <input type="text" placeholder="Write your message">
                        </div>
                        </div>
                        <div class="chat-vid__container">
                        <div class="chat-vid__title anim" style="--delay: .3s">Related Videos</div>
                        <div class="chat-vid anim" style="--delay: .4s">
                        <div class="chat-vid__wrapper">
                            <img class="chat-vid__img" src="https://cdn.nohat.cc/thumb/f/720/3b55eddcfffa4e87897d.jpg" />
                            <div class="chat-vid__content">
                            <div class="chat-vid__name">Prepare for your first skateboard jump</div>
                            <div class="chat-vid__by">Jordan Wise</div>
                            <div class="chat-vid__info">125.908 views <span class="seperate"></span>2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div class="chat-vid anim" style="--delay: .5s">
                        <div class="chat-vid__wrapper">
                            <img class="chat-vid__img" src="https://iamaround.it/wp-content/uploads/2015/02/pexels-photo-4663818.jpeg" />
                            <div class="chat-vid__content">
                            <div class="chat-vid__name">Prepare for your first skateboard jump</div>
                            <div class="chat-vid__by">Jordan Wise</div>
                            <div class="chat-vid__info">125.908 views <span class="seperate"></span>2 days ago</div>
                            </div>
                        </div>
                        </div>
                        <div class="chat-vid__button anim" style="--delay: .6s">See All related videos (32)</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="../js/index.js"></script>
    <script src="../vendors/sweetalert/sweetalert.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script>
$('.send_input').on( "keyup", function( event ) {


});


        $(function () {
            $(".sidebar-link").click(function () {
            $(".sidebar-link").removeClass("is-active");
            $(this).addClass("is-active");
            });
        });

        $(window)
            .resize(function () {
                if ($(window).width() > 1090) {
                $(".sidebar").removeClass("collapse");
                } else {
                $(".sidebar").addClass("collapse");
                }
            })
        .resize();

        const allVideos = document.querySelectorAll(".video");

        allVideos.forEach((v) => {
            v.addEventListener("mouseover", () => {
                const video = v.querySelector("video");
                video.play();
            });
            v.addEventListener("mouseleave", () => {
                const video = v.querySelector("video");
                video.pause();
            });
        });

        $(function () {
            
            $(".logo, .logo-expand, .discover").on("click", function (e) {
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-exchange");
                $(".main-container").removeClass("show-address");
                $(".main-container").removeClass("show-copy");
                $(".main-container").removeClass("show-amount");
                $(".main-container").scrollTop(0);
            });
            $(".back1-link").on("click", function (e) {
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-exchange");
                $(".main-container").removeClass("show-copy");
                $(".main-container").removeClass("show-address");
                $(".main-container").removeClass("show-amount");
                $(".main-container").scrollTop(0);
            });
            // Remove copy box link script
            $(".back2-link").on("click", function (e) {
                $(".main-container").addClass("show-address");
                $(".main-container").scrollTop(0);
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-copy");
                $(".main-container").removeClass("show-amount");
            });
            $(".trending").on("click", function (e) {
                $(".main-container").addClass("show");
                $(".main-container").removeClass("show-exchange");
                $(".main-container").removeClass("show-amount");
                $(".main-container").scrollTop(0);
                $(".sidebar-link").removeClass("is-active");
                $(".trending").addClass("is-active");
            });
            // Exchange link script
            $(".exchange-link").on("click", function (e) {
                $(".main-container").addClass("show-exchange");
                $(".main-container").scrollTop(0);
                $(".sidebar-link").removeClass("is-active");
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-amount");
                $(".exchange-link").addClass("is-active");
                $(".frame-signin").css("height", "");
            });
            // Address link script
            $(".address-link").on("click", function (e) {
                $(".main-container").addClass("show-address");
                $(".main-container").scrollTop(0);
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-copy");
                $(".main-container").removeClass("show-amount");
            });
            // Copy link script
            $(".copy-link").on("click", function (e) {
                $(".main-container").addClass("show-copy");
                $(".main-container").scrollTop(0);
                $(".main-container").removeClass("show");
                $(".main-container").removeClass("show-exchange");
                $(".main-container").removeClass("show-address");
                $(".main-container").removeClass("show-amount");
            });
            // Exchange link script
            // $(".address-link").on("click", function (e) {
            //     $(".main-container").addClass("show-exchange");
            //     $(".main-container").scrollTop(0);
            //     $(".sidebar-link").removeClass("is-active");
            //     $(".main-container").removeClass("show");
            //     $(".main-container").removeClass("show-amount");
            //     $(".exchange-link").addClass("is-active");
            //     $(".frame-signin").css("height", "");
            // });
            // Add link script
            $(".add-link").on("click", function (e) {
                $(".main-container").addClass("show-amount");
                $(".main-container").scrollTop(0);
                $(".sidebar-link").removeClass("is-active");
                $(".main-container").removeClass("show");
                $(".add-link").addClass("is-active");
                // flexible save form script
                $(".save-box").css("display", "");
                $(".frame-signin").css("height", "400");
                $(".frame-signin").removeClass("frame-long");
                $(".flexible-save-inactive").addClass("flexible-save-active");
            });

            $(".video").click(function () {
                var source = $(this).find("source").attr("src");
                var title = $(this).find(".video-name").text();
                var person = $(this).find(".video-by").text();
                var img = $(this).find(".author-img").attr("src");
                $(".video-stream video").stop();
                $(".video-stream source").attr("src", source);
                $(".video-stream video").load();
                $(".video-p-title").text(title);
                $(".video-p-name").text(person);
                $(".video-detail .author-img").attr("src", img);
            });
        });

        
      $(document).ready(function(){

        // Getting ratebox values
        // Getting send price and coin
        let sendPrice;
        let getPrice;
        var coin = $('#cryptoSelect option:selected').val();
        $("#sendCrypto").html(coin);
        $.ajax({
            url: "getPrice.php",
            method:"POST",
            data:{coin:coin},
            success: function(data){
                sendPrice = data;
                $("#sendAmount").html("1");
            }
        });
        
        // Getting get price and coin
        var getCoin = $('#cryptoGet option:selected').val();
        $("#getCrypto").html(getCoin.toLocaleString());
        $.ajax({
            url: "getPrice.php",
            method:"POST",
            data:{coin:getCoin},
            success: function(data){
                getPrice = sendPrice / data;
                $("#getAmount").html(getPrice.toLocaleString());
            }
        });

        $("#cryptoSelect").change(function(){
            var coin = $('#cryptoSelect option:selected').val();
            $("#sendCrypto").html(coin);
            $.ajax({
                url: "getPrice.php",
                method:"POST",
                data:{coin:coin},
                success: function(data){
                    sendPrice = data;
                    $("#sendAmount").html("1");
                    // Getting get price and coin
                    var getCoin = $('#cryptoGet option:selected').val();
                    $("#getCrypto").html(getCoin.toLocaleString());
                    $.ajax({
                        url: "getPrice.php",
                        method:"POST",
                        data:{coin:getCoin},
                        success: function(data){
                            getPrice = sendPrice / data;
                            $("#getAmount").html(getPrice.toLocaleString());
                        }
                    });
                }
            });
        });

        $("#cryptoGet").change(function(){
            var coin = $('#cryptoGet option:selected').val();
            $("#getCrypto").html(coin);
            $.ajax({
                url: "getPrice.php",
                method:"POST",
                data:{coin:coin},
                success: function(data){
                    getPrice = data;
                    // $("#getAmount").html(data);
                    var sendCoin = $('#cryptoSelect option:selected').val();
                    $("#sendCrypto").html(sendCoin.toLocaleString());
                    $.ajax({
                        url: "getPrice.php",
                        method:"POST",
                        data:{coin:sendCoin},
                        success: function(data){
                            sendPrice = data;
                            getPrice = sendPrice / getPrice;
                            $("#getAmount").html(getPrice.toLocaleString());
                        }
                    });
                }
            });
        });
      });

    </script>

    
</html>