<html>

<head>
    <title>
        Expense
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
            <table style="border-collapse: collapse; width: 100%; cursor: pointer;">
                <thead>
                    <tr>
                        <th style="width: 16.66%">
                            Item ID
                        </th>
                        <th style="width: 16.66%">
                            Name
                        </th>
                        <th style="width: 16.66%">
                            Bought Stocks
                        </th>
                        <th style="width: 16.66%">
                            Total Stocks
                        </th>
                        <th style="width: 16.66%">
                            Price
                        </th>
                        <th style="width: 16.66%">
                            Bought Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Items as $Item): ?>
                        <tr class="SelectableRow">
                            <td>
                                <?php echo $Item->ItemID; ?>
                            </td>
                            <td>
                                <?php echo $Item->ItemName; ?>
                            </td>
                            <td>
                                <?php echo $Item->Quantity; ?>
                            </td>
                            <td>
                                <?php echo $Item->TotalStock; ?>
                            </td>
                            <td>
                                <?php echo $Item->Price; ?>
                            </td>
                            <td>
                                <?php echo $Item->Date; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div name=" modal for updating an employee" id="UpdateDiv" class="UpdateDiv">
            <div class="UpdateFormContent">
                <table>
                    <form method="post" action="<?php echo site_url('Accounting_Controller/AddSalary'); ?>"
                        id="UpdateForm">
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                Add Salary
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="Name">Name</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="Employee_ID" value="">
                                <input style="width: 100%;" type="text" name="Name" id="EditName" value="" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Salary">Salary</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Salary" name="Salary" id="EditSalary" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="PayDate">Pay Date</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input style="width: 100%;" type="text" placeholder="Enter Pay Date" name="PayDate"
                                    id="EditPayDate" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input style="width:50%;" type="submit" value="save">
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td colspan="2">
                            <button style="" onclick="closeForm()">close</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <script>
        function ShowUpdateForm(ID, Name, Quantity, Stocks, Date) {
            var UpdateForm = document.getElementById("UpdateForm");
            var UpdateDiv = document.getElementById("UpdateDiv")
            UpdateDiv.style.display = "block";
            UpdateForm.elements["Employee_ID"].value = Employee_ID;
            UpdateForm.elements["Name"].value = Name;
            UpdateForm.elements["Salary"].value = Salary;
            UpdateForm.elements["PayDate"].value = Pay_Date;
        }

        function closeForm() {
            var UpdateDiv = document.getElementById("UpdateDiv")
            UpdateDiv.style.display = "none";
        }
    </script>
</body>

</html>