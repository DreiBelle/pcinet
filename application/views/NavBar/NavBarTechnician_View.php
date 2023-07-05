<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #navbar {
            background-color: #219ebc;
            width: 200px;
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
            width: 150px;
        }

        #User {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 5px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: #f1f1f1;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/pcinet"><img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo"></a></li>
            <div>
                <li>
                    <a href="<?php echo site_url('/Dashboard_Controller'); ?>">
                        <p style="padding-bottom: -25px">Dashboard</p>
                    </a>
                </li>
            </div>
            <div>
                <li>
                    <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                        <p style="padding-bottom: -25px" >Calculate Total Price</p>
                    </a>
                </li>
            </div>
            <div onclick="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
                <li>
                    <a href="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
                        <p style="padding-bottom: -25px" >View Devices</p>
                    </a>
                </li>
            </div>
        </ul>
    </div>

    <div id="User">
        <p class="User">
                User: <?php echo $user['username']; ?>
        </p>
    </div>
</body>

</html>