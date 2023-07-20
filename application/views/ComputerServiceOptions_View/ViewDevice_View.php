<html>

<head>
    <title>View Device</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        #contents {
            margin-left: 240px;
            padding: 20px;
            margin-top: 30px;
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
            width: fit-content;
            height: fit-content;
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

        .tableshow:hover {
            background-color: lightblue;
            cursor: pointer;
        }

        body {
            color: #36454f;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>

    <button style="width: 4%; height: 8%; position: fixed; bottom: 10px; right: 10px; border-radius: 100px;"
        id="AddDeviceButton">
        <i class="fas fa-plus"></i></button>

    <div id="contents">
        <form method="get" action="<?php echo site_url('/ComputerService_Controller/ViewDevices'); ?>">
            <input style="height: 30px; width: 94.5%;" type="text" name="searchDeviceID"
                placeholder="Search by DeviceID">
            <input style="height: 30px; width: 5%; padding-left: 5px; box-sizing: border-box;" type="submit" value="S">
        </form>

        <div id="AddDeviceModal" class="modal">
            <div class="flex-center">
                <div class="modal-content">
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
                <tr style="background-color: #caf0f8; color: #36454f;">
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
                    <tr class="tableshow"
                        onclick="showModal('<?php echo $row->DeviceID; ?>', '<?php echo $row->CustomerName; ?>', '<?php echo $row->DeviceModel; ?>', '<?php echo $row->DeviceType; ?>', '<?php echo $row->OperatingSystem; ?>', '<?php echo $row->Processor; ?>', '<?php echo $row->RAM; ?>', '<?php echo $row->Storage; ?>', '<?php echo $row->Display; ?>', '<?php echo $row->DateGiven; ?>', '<?php echo $row->Status; ?>')">
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->DeviceID; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->CustomerName; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->DeviceModel; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->DeviceType; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->OperatingSystem; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->Processor; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->RAM; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->Storage; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->Display; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->DateGiven; ?>
                        </td>
                        <td style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;">
                            <?php echo $row->Status; ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div id="UpdateModal" class="modal">
        <div class="flex-center">
            <!-- Modal content -->
            <div id="UpdateModalContent" class="modal-content">

                <table style="width: 100%;">
                    <form method="post" action="<?php echo site_url('/ComputerService_Controller/UpdateDevice'); ?>">
                        <input type="hidden" id="deviceIDInput" name=deviceIDInput>
                        <tr>
                            <td colspan="2" style="text-align: center; font-size: 50px; padding-top: -50px;">Update
                                Devices</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Customer Name</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="customerNameInput" id="customerNameInput" required>
                            </td>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Device Model</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="deviceModelInput" id="deviceModelInput" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Device Type</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="deviceTypeInput" id="deviceTypeInput" required>
                            </td>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Operating System</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="operatingSystemInput" id="operatingSystemInput" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Processor</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="processorInput" id="processorInput" required>
                            </td>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">RAM</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="RAMInput" id="RAMInput" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Storage</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="storageInput" id="storageInput" required>
                            </td>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Display</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="displayInput" id="displayInput" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Date Given</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="dateGivenInput" id="dateGivenInput" required>
                            </td>
                            <td style="width: 50%;">
                                <p style="margin-bottom: -5px;">Status</p>
                                <input
                                    style="width: 95%; margin-left: 5px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                    type="text" name="statusInput" id="statusInput" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input
                                    style="width: 100%; margin-top: 5px; height: 35px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer;"
                                    type="submit" value="Update">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input
                                    style="width: 100%; margin-top: 5px; height: 35px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer;"
                                    type="submit" value="Delete" name="Delete">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input
                                    style="text-align:center ;width: 100%; margin-top: 20px; height: 35px; border-radius: 4px; border: 1px solid #ccc; background-color: #f2f2f2; color: #333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer; margin-top: 5px"
                                    type="button" value="Cancel" class="close1">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>

    <script>
        function showModal(deviceID, customerName, deviceModel, deviceType, operatingSystem, processor, RAM, storage, display, dateGiven, status) {
            var modal = document.getElementById("UpdateModal");
            var modalContent = document.getElementById("UpdateModalContent");

            var deviceIDInput = document.getElementById("deviceIDInput");
            var customerNameInput = document.getElementById("customerNameInput");
            var deviceModelInput = document.getElementById("deviceModelInput");
            var deviceTypeInput = document.getElementById("deviceTypeInput");
            var operatingSystemInput = document.getElementById("operatingSystemInput");
            var processorInput = document.getElementById("processorInput");
            var RAMInput = document.getElementById("RAMInput");
            var storageInput = document.getElementById("storageInput");
            var displayInput = document.getElementById("displayInput");
            var dateGivenInput = document.getElementById("dateGivenInput");
            var statusInput = document.getElementById("statusInput");

            deviceIDInput.value = deviceID;
            customerNameInput.value = customerName;
            deviceModelInput.value = deviceModel;
            deviceTypeInput.value = deviceType;
            operatingSystemInput.value = operatingSystem;
            processorInput.value = processor;
            RAMInput.value = RAM;
            storageInput.value = storage;
            displayInput.value = display;
            dateGivenInput.value = dateGiven;
            statusInput.value = status;

            modal.style.display = "block";
        }

        // Close the modal when the user clicks on the close button
        document.getElementsByClassName("close1")[0].onclick = function () {
            var modal = document.getElementById("UpdateModal");
            modal.style.display = "none";
        };

        document.addEventListener("DOMContentLoaded", function () {
            var button = document.getElementById("AddDeviceButton");
            var modal = document.getElementById("AddDeviceModal");
            var span = document.getElementsByClassName("close")[0];

            window.addEventListener('click', function (event) {
                if (event.target === modal) {
                    closeModal();
                }
            })

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