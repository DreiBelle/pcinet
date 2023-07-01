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

        img{
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
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="/pcinet"><img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo"></a></li>
            <div><li><a href="<?php echo site_url('/ComputerService_Controller'); ?>">Computer Service</a></li></div>
            <li><a href="<?php echo site_url('/DataAnalytics_Controller'); ?>">Data Analytics</a></li>
            <li><a href="<?php echo site_url('/HumanResource_Controller'); ?>">Human Resource</a></li>
            <li><a href="<?php echo site_url('/Accounting_Controller'); ?>">Accounting</a></li>
            <li><a href="<?php echo site_url('/Inventory_Controller'); ?>">Inventory</a></li>
        </ul>
    </div>

    <div class="dropdown">
        <span>Hover over me</span>
        <div class="dropdown-content">
            <a href="#">Option 1</a>
            <a href="#">Option 2</a>
            <a href="#">Option 3</a>
        </div>
    </div>

    <div id="User">
        <p class="User"><?php echo $user['username']; ?></p>
    </div>
</body>
</html>
