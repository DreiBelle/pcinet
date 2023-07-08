<html>

<head>
    <title>
        Purchase
    </title>

    <style>
        .content {
            margin-left: 240px;
            padding: 20px;
        }

        /* td {
            border: 1px solid black;
        } */

        .SelectableRow:hover {
            background-color: lightblue;
        }

        .AddItemDesign {
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

        .AddItemModalContentDesign {
            background-color: white;
            border: 1px solid #888;
            padding: 20px;
            width: fit-content;
            height: fit-content;
            border-radius: 25px;
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

    <button id="AddNewItem" style="position: fixed;
            bottom: 70;
            right: 10;
            height: 60px;
            width: 60px;
            background-color: #f1f1f1;
            border-radius: 100px;
            font-size: 30px">+</button>

    <div class="content">
        <table width="100%" style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
            <thead style="text-align: center; ">
                <tr style="background-color: #f2f2f2;">
                    <!-- <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" height="50px"
                        width="25%"> Image </th> -->
                    <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" width="20%"> Image
                    </th>
                    <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" width="20%"> ID </th>
                    <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" width="20%"> Name
                    </th>
                    <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" width="20%"> Price
                    </th>
                    <th style="padding: 10px; text-align: center; border-bottom: 1px solid #ccc;" width="20%"> Buy </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                    <tr class="SelectableRow" height="40px" style="font-size: 15px; text-align: center">
                        <td>
                            <img style="height: 100px; width:300px; object-fit: cover; border-radius: 10px; padding: 5px" src="<?php echo MAIN_BASE_URL . $item->Image; ?>">
                        </td>
                        <td>
                            <?php echo $item->ItemID; ?>
                        </td>
                        <td>
                            <?php echo $item->ItemName; ?>
                        </td>
                        <td>
                            <?php echo $item->ItemPrice; ?>
                        </td>
                        <td>
                            <a href="#"><img style="height:70; width:auto;" src="<?php echo base_url('assets/Icons/buy1.png'); ?>" alt="Logo"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- modal -->
        <div id="AddItem" class="AddItemDesign">
            <div class="flex-center">
                <!-- Modal content -->
                <div id="AddItemModalContent" class="AddItemModalContentDesign">
                    <table style="width: 100%;">
                        <form method="post" action="<?php echo site_url('/Inventory_Controller/AddItem'); ?>"
                            enctype="multipart/form-data">
                            <tr>
                                <td style="text-align: center; font-size: 50px; padding-top: -50px;" colspan="2">ADD
                                    ITEM</td>
                            </tr>
                            <tr>
                                <td style="width: 500px;" colspan="2">
                                    <p style="margin-bottom: -5px; text-align: left; margin-left: 10px">Image</p>
                                    <input
                                        style="width: 95%; margin-left: 12px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="file" name="Image" id="Image" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 500px;" colspan="2">
                                    <p style="margin-bottom: -5px; text-align: left; margin-left: 10px">Item Name</p>
                                    <input
                                        style="width: 95%; margin-left: 12px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="ItemName" id="ItemName" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 100%;" colspan="2">
                                    <p style="margin-bottom: -5px; text-align: left; margin-left: 10px">Item Price</p>
                                    <input
                                        style="width: 95%; margin-left: 12px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-family: Arial, sans-serif; font-size: 14px;"
                                        type="text" name="ItemPrice" id="ItemPrice" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                    <input style="margin: 12px; width: 90%; height: 30px;" type="submit" value="SAVE">
                                </td>
                                <td style="width: 50%;">
                                    <input style="margin: 12px; width: 90%; height: 30px;" type="button" value="Cancel"
                                        class="CloseItemModal">
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var button = document.getElementById("AddNewItem");
            var modal = document.getElementById("AddItem");
            var span = document.getElementsByClassName("CloseItemModal")[0];

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