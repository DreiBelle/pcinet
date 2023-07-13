<html>

<head>
    <title>Dashboard</title>
    <style>
        #contents {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        td {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>

    <div id="contents">
        <table style="width: 100%;">
            <tr>
                <td
                    style="width: 100%;height: 350px;background-image: URL(<?php echo base_url('assets/background_login.jpg'); ?>); ">
                        <h1 style="text-align: center; font-size: 35px; color: white;">PCINET</h1>
                </td>
            </tr>
            <tr>
                <td style="margin-bottom: 50px;">
                    <button style="width: 100%;">this will be the button</button>
                </td>
            </tr>
            <tr>
                <td
                    style="width: 100%;height: 100px;background-image: URL(<?php echo base_url('assets/background_login.jpg'); ?>); padding-top: 50px">
                </td>
            </tr>
        </table>
    </div>
</body>

</html>