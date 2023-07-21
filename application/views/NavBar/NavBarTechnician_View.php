<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Mulish', sans-serif;
        }

        #navbar {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            background-color: #caf0f8;
            width: 240px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            overflow: auto;
        }

        #navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #navbar li {
            padding: 15px;
        }

        #navbar li:hover {
            background-color: #bde0fe;
        }

        #navbar li a {
            color: black;
            text-decoration: none;
        }

        #content {
            margin-left: 200px;
            padding: 20px;
        }

        img {
            height: auto;
            width: 200px;
            margin-left: 0px;
        }

        /* added */

        .dropdown {
            position: relative;
            display: inline-block;
            width: 87%;
            border-bottom: 1px solid black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #8ecae6;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            padding-left: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            border-radius: 10px;
            width: 200px;
        }

        p {
            padding-left: 5px;
            font-size: 16px;
            text-align: left;
            margin-left: -10px;
        }

        .dropdown span i {
            margin-right: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div id="navbar">
        <ul>
            <div style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;">
                <img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo">
            </div>
            <a style="text-decoration: none; color:black;" href="<?php echo site_url('/Dashboard_Controller'); ?>">
                <li style="border-bottom: 1px solid black; border-top: 1px solid black"><i
                        class="fas fa-tachometer-alt"></i> Dashboard</li>
            </a>

            <a style="text-decoration: none; color:black;"
                href="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
                <li style="border-bottom: 1px solid black;"><i class="fas fa-cogs"></i> View Devices</li>
            </a>

            <a style="text-decoration: none; color:black;"
                href="<?php echo site_url('/Inventory_Controller/ViewPurchase'); ?>">
                <li style="border-bottom: 1px solid black;"><i class="fas fa-boxes"></i> Inventory</li>
            </a>

            <a style="text-decoration: none; color:black;" href="<?php echo site_url('/Login_Controller'); ?>">
                <li style="border-bottom: 1px solid black;"><i class="fas fa-sign-out-alt"></i> Logout</li>
            </a>
        </ul>
    </div>

    <div>
        <p style="position: fixed;
            top: 0;
            left: 240;
            width: 82.6%;
            padding: 5px;
            background-color:#caf0f8;
            margin: 0px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;">
            <?php echo $user['username']; ?>

        </p>
    </div>
</body>

</html>