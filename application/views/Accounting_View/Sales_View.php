<html>

<head>
    <title>
        Sales
    </title>

    <style>
        .contents {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 20px;
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
                        <th style="width: 33%">
                            ID
                        </th>
                        <th style="width: 33%">
                            Date
                        </th>
                        <th style="width: 33%">
                            Total Bought
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Sales as $Sale): ?>
                        <tr class="SelectableRow">
                            <td>
                                <?php echo $Sale->ID; ?>
                            </td>
                            <td>
                                <?php echo $Sale->Date; ?>
                            </td>
                            <td>
                                <?php echo $Sale->TotalPrice; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div name="for totaling all the audit">
            <table style="border-collapse: collapse; width: 71%; position: fixed; bottom: 10px;">
                <tr>
                    <td>
                        <h3 style="padding-top: 20px;">
                            Total Sales:
                        </h3>
                    </td>
                    <td>
                        <h3 style="padding-top: 20px;">
                            <?php echo $Total ?>
                        </h3>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>