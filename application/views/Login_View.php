<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('<?php echo base_url('assets/background_login.jpg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 98vh;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: -10;
            left: -8;
            right: -8;
            bottom: -10;
            background-image: url('<?php echo base_url('assets/background_login.jpg'); ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            filter: blur(10px);
            /* Apply a blur effect */
            z-index: -1;
        }


        form {
            width: 600px;
            height: 300px;
            padding: 20px;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            border-radius: 10px;
        }

        form::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: lightblue;
            border-radius: 10px;
            opacity: .8;
            z-index: -1;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 50px;
            border: 1px solid #72A0C1;
        }

        input[type="submit"]:hover {
            background-color: #89CFF0;
        }
    </style>
</head>

<body>
    <form method="post" action="<?php echo site_url('/Login_Controller/authenticate'); ?>">
        <!-- <p style="text-align: center; font-size: 30px">LOGIN</p>
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <input style="width: 100%; margin-top: 20px;" type="submit" value="Login"> -->

        <table
            style="width: 640px; height: 340px; margin-left: -20px; margin-top: -20px; border-radius: 5px;">
            <tr>
                <td>
                    <img style="margin: -2.6px; height: 339px; width: 315px; border-radius: 5px 0px 0px 5px ; object-fit: cover;"
                        src="<?php echo base_url('assets/background_login.jpg'); ?>" alt="">
                </td>

                <td style="text-align: center; width: 50%; padding: 15px">
                    <h1>PCI NET</h1>
                    <input type="text" id="username" name="username" placeholder="Username">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <input style="width: 100%; margin-top: 20px;" type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>