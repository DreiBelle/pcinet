<html>

<head>
    <title>Human Resource Management</title>
    <style>
        #contents {
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

        .AddForm {
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

        .AddFormContent {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 20px;
            width: fit-content;
            height: fit-content;
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

    <div id="contents">


        <div name="hovering button">
            <button style="position: fixed; bottom: 60; right: 10;" onclick="ShowAddForm()">
                ADD
            </button>
        </div>

        <div name="modal for adding an employee" id="AddForm" class="AddForm">
            <div class="AddFormContent">
                <table>
                    <form method="post" action="<?php echo site_url('HumanResource_Controller/AddEmployee'); ?>">
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                Hire An Employee
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="Name">Name</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input style="width: 100%;" type="text" placeholder="Enter Name" name="Name" id="Name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Department">Department</label>
                            </td>
                            <td>
                                <label for="Position">Position</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Department" name="Department" id="Department">
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Position" name="Position" id="Position">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="HireDate">Hire Date</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input style="width: 100%;" type="text" placeholder="Enter Hire Date" name="HireDate"
                                    id="HireDate">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input style="width:100%;" type="submit" value="add">
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td colspan="2">
                            <button onclick="closeForm()">close</button>
                        </td>
                    </tr>
                </table>

            </div>
        </div>

        <div name="employee table">
            <table style="border-collapse: collapse; width: 100%; cursor: pointer;">
                <thead>
                    <tr>
                        <th style="width: 20%">
                            Employee ID
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 20%">
                            Department
                        </th>
                        <th style="width: 20%">
                            Position
                        </th>
                        <th style="width: 20%">
                            Hire Date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Employees as $Employee): ?>
                        <tr class="SelectableRow"
                            onclick="ShowUpdateForm('<?php echo $Employee->Employee_ID; ?>','<?php echo $Employee->Name; ?>','<?php echo $Employee->Department; ?>','<?php echo $Employee->Position; ?>', '<?php echo $Employee->Hire_Date; ?>')">
                            <td>
                                <?php echo $Employee->Employee_ID; ?>
                            </td>
                            <td>
                                <?php echo $Employee->Name; ?>
                            </td>
                            <td>
                                <?php echo $Employee->Department; ?>
                            </td>
                            <td>
                                <?php echo $Employee->Position; ?>
                            </td>
                            <td>
                                <?php echo $Employee->Hire_Date; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div name="modal for updating an employee" id="UpdateDiv" class="UpdateDiv">
            <div class="UpdateFormContent">
                <table>
                    <form method="post" action="<?php echo site_url('HumanResource_Controller/UpdateEmployee'); ?>"
                        id="UpdateForm">
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                Update An Employee
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="Name">Name</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="ID" value="">
                                <input style="width: 100%;" type="text" placeholder="Enter Name" name="Name"
                                    id="EditName" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="Department">Department</label>
                            </td>
                            <td>
                                <label for="Position">Position</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Enter Department" name="Department" id="EditDepartment"
                                    value="">
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Position" name="Position" id="EditPosition"
                                    value="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="HireDate">Hire Date</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input style="width: 100%;" type="text" placeholder="Enter Hire Date" name="HireDate"
                                    id="EditHireDate" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input style="width:50%;" type="submit" value="save">
                            </td>
                            <td>
                                <input style="width:50%;" type="submit" value="Delete" name="Delete">
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
        function ShowAddForm() {
            var AddForm = document.getElementById("AddForm");
            AddForm.style.display = "block";
        }

        function ShowUpdateForm(ID, Name, Department, Position, HireDate) {
            var UpdateForm = document.getElementById("UpdateForm");
            var UpdateDiv = document.getElementById("UpdateDiv")
            UpdateDiv.style.display = "block";
            UpdateForm.elements["ID"].value = ID;
            UpdateForm.elements["Name"].value = Name;
            UpdateForm.elements["Department"].value = Department;
            UpdateForm.elements["Position"].value = Position;
            UpdateForm.elements["HireDate"].value = HireDate;
        }

        function closeForm() {
            var AddForm = document.getElementById("AddForm");
            AddForm.style.display = "none";
            var UpdateDiv = document.getElementById("UpdateDiv")
            UpdateDiv.style.display = "none";
        }
    </script>
</body>

</html>