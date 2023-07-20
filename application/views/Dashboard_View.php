<html>

<head>
    <title>Dashboard</title>
    <style>
        #contents {
            margin-left: 240px;
            margin-top: 25px;
            /* margin-right: 20px; */
            margin-bottom: 20px;
        }

        /* td {
            border: 1px solid black;
        } */
    </style>
</head>
        
<body>
    <?php $this->load->view($navbar) ?>

    <div id="contents">
        <table style="width: 100%;">
            <tr>
                <td colspan="3"
                    style="width: 100%;height: 350px;background-image: URL(<?php echo base_url('assets/background_login.jpg'); ?>); background-size: cover; ">
                    <h1 style="text-align: center; font-size: 200px; color: white; margin-bottom: 0px;">PCINET</h1>
                </td>
            </tr>

            <tr style="padding-top: 100px;">
                <td colspan="3">
                    <div style="padding: 20px;">
                        <button style="width: 100%; height: 50px; border-radius: 100px; background-color: #caf0f8;">CHECK
                            OUT</button>
                    </div>
                </td>
            </tr>

            <tr style="width: 100%">
                <td style="width: 33%">
                    <div
                        style="position: relative; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
                        <img src="<?php echo base_url('assets/keyboard.jpg'); ?>" alt="Image description"
                            style="width: 100%; max-height: 240px; object-fit: cover; border-radius: 5px;">
                        <p
                            style="position: absolute; top: 40%; left: 55%; transform: translate(-50%, -50%); text-align: center; font-weight: bold; color: white; font-size: 30px;padding: 10px; border-radius: 5px;">
                            KEYBOARD AND MOUSE</p>
                    </div>
                </td>
                <td style="width: 33%">
                    <div
                        style="position: relative; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
                        <img src="<?php echo base_url('assets/computerparts.jpg'); ?>" alt="Image description"
                            style="width: 100%; max-height: 240px; object-fit: cover; border-radius: 5px;">
                        <p
                            style="position: absolute; top: 40%; left: 55%; transform: translate(-50%, -50%); text-align: center; font-weight: bold; color: white; font-size: 30px;padding: 10px; border-radius: 5px;">
                            COMPUTER PARTS</p>
                    </div>
                </td>
                <td style="width: 33%">
                    <div
                        style="position: relative; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
                        <img src="<?php echo base_url('assets/accesories.jpg'); ?>" alt="Image description"
                            style="width: 100%; max-height: 240px; object-fit: cover; border-radius: 5px;">
                        <p
                            style="position: absolute; top: 40%; left: 55%; transform: translate(-50%, -50%); text-align: center; font-weight: bold; color: white; font-size: 30px;padding: 10px; border-radius: 5px;">
                            ACCESORIES</p>
                    </div>
                </td>

            </tr>
        </table>
    </div>
</body>

</html>