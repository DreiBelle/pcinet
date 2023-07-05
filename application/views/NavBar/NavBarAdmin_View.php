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

        /* added */

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #8ecae6;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;

        }

        .dropdown:hover .dropdown-content {
            display: block;
            border-radius: 20px;
            width: fit-content;
        }

        p {
            padding: 5px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/pcinet"><img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo"></a></li>
            <div>
                <li><a href="<?php echo site_url('/Dashboard_Controller'); ?>">Dashboard</a></li>
            </div>
            <li>
                <div class="dropdown">
                    <span>Computer Service</span>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Calculate Total Price</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
                            <p>View Devices</p>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <span>Data Analytics</span>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Computer Service Report</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View HR Report</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Accounting Report</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Inventory Report</p>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <span>Human Resource</span>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Add Employee</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Update Employee</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Remove Employee</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Employee</p>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <span>Accounting</span>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Add Records</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Update Records</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Remove Records</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Records</p>
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <span>Inventory</span>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Add Items</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Update Items</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>Remove Items</p>
                        </a>
                        <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                            <p>View Items</p>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div id="User">
        <p class="User">
            User: <?php echo $user['username']; ?>
        </p>
    </div>
</body>

</html>