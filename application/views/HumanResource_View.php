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
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>
    <div id="contents">
        <table width="100%" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
            <thead style="text-align: center; ">
                <tr style="background-color: #f2f2f2;">
                    <th width="33%">ID</th>
                    <th width="33%">Username</th>
                    <th width="33%">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr class="SelectableRow" height="40px" style="font-size: 15px; text-align: center">
                        <td>
                            <?php echo $user->user_id ?>
                        </td>
                        <td>
                            <?php echo $user->username ?>
                        </td>
                        <td>
                            <?php echo $user->role ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>