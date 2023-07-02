<!DOCTYPE html>
<html>

<head>
    <style>
        .navbar {
            background-color: #ADD8E6;
            width: 100vw;
            position: absolute;
            padding: 2px;
            top: 0;
            left: 0;
        }

        td {
            text-align: center;
            width: 5vw;
            font-size: 20px;
        }

        .logo {
            text-align: left;
            width: 30vw;
        }

        a {
            text-decoration: none;
            color: black
        }

        img {
            width: auto;
            height: 30px;
        }

        .User {
            position: fixed;
            bottom: 0;
            left: 0;
            margin: 10px;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <table class="navbar">
        <tr>
            <td class="logo" style="padding-left: 15px">
                <a href="/pcinet"><img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo"> </a>
            </td>
            <div style="padding-right: -100px">
                <td>
                    <a href="<?php echo site_url('/ComputerService_Controller'); ?>">Computer Service</a>
                </td>
                <td>
                    <a href="<?php echo site_url('/DataAnalytics_Controller'); ?>">Data Analytics</a>
                </td>
                <td>
                    <a href="<?php echo site_url('/HumanResource_Controller'); ?>">Human Resource</a>
                </td>
                <td>
                    <a href="<?php echo site_url('/Accounting_Controller'); ?>">Accounting</a>
                </td>
                <td>
                    <a href="<?php echo site_url('/Inventory_Controller'); ?>">inventory</a>
                </td>
            </div>
        </tr>
    </table>

    <p class="User"> User:
        <?php echo $user['username']; ?>
    </p>
</body>

</html>