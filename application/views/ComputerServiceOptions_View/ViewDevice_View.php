<html>

<head>
    <title>View Device</title>
    <style>
        #contents {
            margin-left: 200px;
            padding: 20px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, .5);

        }

        .modal-content {
            background-color: white;
            border: 1px solid #888;
            padding: 20px;
            width: 50%;
            height: 475px;
            border-radius: 25px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>
    <div id="contents">
        <button style="margin-bottom: 20px; width: 100%; height: 30px;" id="AddDeviceButton">Add Devices</button>

        <div id="AddDeviceModal" class="modal">
            <div class="flex-center">
                <div class="modal-content">
                    <!-- <span class="close">Close</span> -->
                    <form method="post" action="<?php echo site_url('/ComputerService_Controller/AddDevice'); ?>">
                        <table style="width: 100%;">
                            <tr>
                                <td colspan="2" style="text-align: center; font-size: 50px; padding-top: -50px;">Add
                                    Devices</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Customer Name</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="CustomerName" id="CustomerName" required>
                                </td>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Device Model</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="DeviceModel" id="DeviceModel" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Device Type</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="DeviceType" id="DeviceType" required>
                                </td>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Operating System</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="OperatingSystem" id="OperatingSystem" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Processor</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="Processor" id="Processor" required>
                                </td>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">RAM</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="RAM" id="RAM" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Storage</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="Storage" id="Storage" required>
                                </td>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Display</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="Display" id="Display" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Date Given</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="DateGiven" id="DateGiven" required>
                                </td>
                                <td style="width: 50%;">
                                    <p style="margin-bottom: -5px;">Status</p>
                                    <input
                                        style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="Status" id="Status" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input
                                        style="width: 100%; margin-top: 20px; height: 35px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer;"
                                        type="submit" value="Add Device">

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input
                                        style="text-align:center ;width: 100%; margin-top: 20px; height: 35px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer; margin-top: 5px"
                                        value="Cancel" class="close">
                                </td>
                            </tr>
                        </table>

                    </form>
                </div>
            </div>
        </div>

        <table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Device ID</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Customer Name</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Device Model</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Device Type</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Operating System</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Processor</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">RAM</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Storage</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Display</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Date Given</th>
            <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->DeviceID; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->CustomerName; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->DeviceModel; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->DeviceType; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->OperatingSystem; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->Processor; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->RAM; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->Storage; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->Display; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->DateGiven; ?></td>
                <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;"><?php echo $row->Status; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var button = document.getElementById("AddDeviceButton");
            var modal = document.getElementById("AddDeviceModal");
            var span = document.getElementsByClassName("close")[0];

            button.onclick = function () {
                modal.style.display = "block";
            };

            span.onclick = function () {
                modal.style.display = "none";
            };

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        });
    </script>
</body>

</html>