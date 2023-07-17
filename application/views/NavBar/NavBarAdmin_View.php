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
            width: 170px;
            margin-left: 10px;
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
    </style>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/pcinet"><img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo"></a></li>
            <a style="text-decoration: none; color:black;" href="<?php echo site_url('/Dashboard_Controller'); ?>">
                <li style="border-bottom: 1px solid black; border-top: 1px solid black">Dashboard</li>
            </a>

            <a style="text-decoration: none; color:black;"
                href="<?php echo site_url('/CustomerPurchase_Controller'); ?>">
                <li style="border-bottom: 1px solid black;">Purchase</li>
            </a>

            <li class="dropdown">
                <span>Computer Service</span>
                <div class="dropdown-content">
                    <a href="<?php echo site_url('/ComputerService_Controller'); ?>">
                        <p>Calculate Total Price</p>
                    </a>
                    <a href="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
                        <p>View Devices</p>
                    </a>
                </div>
            </li>
            
            <a style="text-decoration: none; color:black;" href="<?php echo site_url('/DataAnalytics_Controller/AccountingReport'); ?>">
                <li style="border-bottom: 1px solid black;">Data Analytics</li>
            </a>

            <a style="text-decoration: none; color:black;" href="<?php echo site_url('/HumanResource_Controller'); ?>">
                <li style="border-bottom: 1px solid black;">Human Resource</li>
            </a>
            <li class="dropdown">
                <span>Accounting</span>
                <div class="dropdown-content">
                    <a href="<?php echo site_url('/Accounting_Controller/ExpensesView'); ?>">
                        <p>Expenses</p>
                    </a>
                    <a href="<?php echo site_url('/Accounting_Controller/SalesView'); ?>">
                        <p>Sales</p>
                    </a>
                    <a href="<?php echo site_url('/Accounting_Controller/PayrollView'); ?>">
                        <p>Payroll</p>
                    </a>
                </div>
            </li>
            <a style="text-decoration: none; color:black;"
                href="<?php echo site_url('/Inventory_Controller/ViewPurchase'); ?>">
                <li style="border-bottom: 1px solid black;">Inventory</li>
            </a>

            <a style="text-decoration: none; color:black;"
                href="<?php echo site_url('/Inventory_Controller/ViewPurchase'); ?>">

                <li>
                    <div style="position: fixed; bottom:0;">Log out</div>
                </li>
            </a>
        </ul>
    </div>

    <div>
        <p style="position: fixed;
            bottom: 5;
            right: 10;
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 5px;
            background-color:#caf0f8">
            User:
            <?php echo $user['username']; ?>
        </p>
    </div>
</body>

</html>