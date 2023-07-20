<html>

<head>
    <title>
        Expense
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
</head>

<body>
    <?php $this->load->view($navbar) ?>

    <div class="contents">
        <div name="table for showing the the employees alongside the salary">
                <table style="border-collapse: collapse; width: 100%;">
                    <thead>
                        <tr>
                            <th colspan="6"
                                style="width: 16.66%; background-color: #caf0f8; border-bottom: 1px solid black; text-align: center; padding: 12px;">
                                EXPENSES</th>
                        </tr>
                        <tr>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Item ID
                            </th>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Name
                            </th>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Bought Stocks
                            </th>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Total Stocks
                            </th>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Price
                            </th>
                            <th
                                style="width: 16.66%; background-color: #caf0f8; border: 1px solid #dddddd; text-align: left; padding: 12px;">
                                Bought Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Items as $Item): ?>
                            <tr class="SelectableRow" style="border: 1px solid #dddddd;">
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->ItemID; ?>
                                </td>
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->ItemName; ?>
                                </td>
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->Quantity; ?>
                                </td>
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->TotalStock; ?>
                                </td>
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->Price; ?>
                                </td>
                                <td style="text-align: left; padding: 12px;">
                                    <?php echo $Item->Date; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>

</html>