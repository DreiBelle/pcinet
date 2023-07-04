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
            display: none;
        }

        .modal-content {
            background-color: white;
            border: 1px solid #888;
            padding: 20px;
            width: 50%;
            height: 50%;
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

        .flex-center{
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
        <button id="AddDeviceButton">Add Devices</button>

        <div id="AddDeviceModal" class="modal">
            <div class="flex-center">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form method="post" action="<?php echo site_url('/ComputerService_Controller/AddDevice'); ?>">
                        <input type="text" name="DeviceID" id="DeviceID" required>
                        <input type="submit" value="Add Device">
                    </form>
                </div>
            </div>
        </div>
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