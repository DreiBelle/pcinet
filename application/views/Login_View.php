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
        }

        form {
            width: 350px;   
            height: 300px;
            padding: 20px;
            position: relative;
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
            background-color: lightblue;
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
        <p style="text-align: center; font-size: 30px">LOGIN</p>
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <input style="width: 100%; margin-top: 20px;" type="submit" value="Login">
    </form>
</body>

</html>