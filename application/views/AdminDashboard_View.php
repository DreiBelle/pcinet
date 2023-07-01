<!DOCTYPE html>
<html>

<head>
    <style>
        .navbar {
            background-color: #ADD8E6;
            width: 100vw;
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
        }

        td {
            text-align: center;
            width: 6vw;
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

        img{
            width: auto;
            height: 30px;
        }
    </style>
</head>

<body>
    <table class="navbar">
        <tr>
            <td class="logo">
                <img src="<?php echo base_url('assets/pcinet_logo.png'); ?>" alt="Logo">
            </td>
            <div class="mainNavbar">
                <td>
                    <a href="">Computer Service</a>
                </td>
                <td>
                    <a href="">Data Analytics</a>
                </td>
                <td>
                    <a href="">Human Resource</a>
                </td>
                <td>
                    <a href="">Accounting</a>
                </td>
                <td>
                    <a href="">inventory</a>
                </td>
            </div>
        </tr>
    </table>
</body>

</html>