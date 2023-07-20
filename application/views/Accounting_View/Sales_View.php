<html>

<head>
    <title>
        Sales
    </title>

    <style>
        .contents {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 50px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .SelectableRow:hover {
            background-color: lightblue;
        }

        td {
            border: 1px solid black;
        }

        .UpdateDiv {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .UpdateFormContent {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 20px;
            width: fit-content;
            height: fit-content;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php $this->load->view($navbar) ?>

    <div class="contents">
        <div name="table for showing the the employees alongside the salary">
            <table style="border-collapse: collapse; width: 100%;">
                <thead>
                    <tr>
                        <th colspan="3"
                            style="width: 33%; background-color: #caf0f8; border-bottom: 1px solid black; text-align: center; padding: 12px; font-weight: bold;">
                            SALES
                        </th>
                    </tr>
                    <tr>
                        <th
                            style="width: 33%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px; font-weight: bold;">
                            ID</th>
                        <th
                            style="width: 33%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px; font-weight: bold;">
                            Date</th>
                        <th
                            style="width: 33%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px; font-weight: bold;">
                            Total Bought</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Sales as $Sale): ?>
                        <tr class="SelectableRow" style="border: 1px solid #dddddd;">
                            <td style="text-align: left; padding: 12px;">
                                <?php echo $Sale->ID; ?>
                            </td>
                            <td style="text-align: left; padding: 12px;">
                                <?php echo $Sale->Date; ?>
                            </td>
                            <td style="text-align: left; padding: 12px;">
                                <?php echo $Sale->TotalPrice; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div name="for totaling all the audit">
            <table style="border-collapse: collapse; width: 100%; position:relative; bottom: -20px;">
                <tr style="width: 100%">
                    <td style="width: 33%;"> 
                        <p style="padding: 10px; font-size: 20px;">
                            Total Sales:
                        </p>
                    </td>
                    <td style="width: 33%;">
                       
                    </td>
                    <td style="width: 33%">
                        <p style="padding: 10px; font-size: 20px;">
                            <?php echo $Total ?>
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div name="modal to view sales" id="UpdateDiv" class="UpdateDiv">
            <div class="UpdateFormContent">
                <div id="ModalContent">
                    <table>
                        <thead>
                            <tr>
                                <th>ItemID</th>
                                <th>ItemName</th>
                                <th>ItemQuantity</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Item as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row->ItemID; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ItemName; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->ItemQuantity; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Date; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <button style="width: 100%;" onclick="closeForm()">Close</button>
            </div>
        </div>

    </div>

    <script>
        function ShowUpdateForm(ID) {
            var UpdateDiv = document.getElementById("UpdateDiv");
            UpdateDiv.style.display = "inline";

            $.post("<?php echo site_url('/Accounting_Controller/getbyid/'); ?>", {
                ItemID: ID
            },

                function (data) {
                    $("#ModalContent").html(data);
                }

            )
        }

        function closeForm() {
            var UpdateDiv = document.getElementById("UpdateDiv");
            UpdateDiv.style.display = "none";
        }
    </script>
</body>

</html>