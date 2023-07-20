<html>

<head>
    <title>Customer Purchase</title>
    <style>
        .content {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 40px;
            margin-right: 20px;
            margin-bottom: 20px;
            padding-bottom: 100px;
        }

        /* td {
            border: 1px solid black;
        } */

        ::-webkit-scrollbar {
            display: none;
        }

        .paymentModal {
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

        .paymentmodal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 200px;
            text-align: center;
        }

        .payment-option {
            display: block;
            margin: 10px auto;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>
    <div class="content">
        <h1 style="text-align: center;">CHECK OUT</h1>

        <h1 style="text-align: left;">GPU</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($GPU as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">CPU</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($CPU as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">Monitor</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($Monitor as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">RAM</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($RAM as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">SSD</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($SSD as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">Keyboard</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($Keyboard as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">Mouse</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($Mouse as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <h1 style="text-align: left;">HHD</h1>
        <div style="width: 100%; overflow-x: auto;">
            <div style="display: flex; flex-wrap: nowrap;">
                <?php foreach ($HHD as $item): ?>
                    <div style="flex: 0 0 auto; width: max-content; margin-right: 20px;">
                        <table
                            style="width: 100%;border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <tr>
                                <td
                                    style="width: 300px;background: URL(<?php echo MAIN_BASE_URL . $item->Image; ?>); height: 180px; background-size: cover;">
                                </td>
                                <td style="width: 300px; margin-left: 50px;">
                                    <table style="width: 100%;">
                                        <tr>
                                            <td colspan="2">Name:
                                                <?php echo $item->ItemName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Quantity:
                                                <?php echo $item->ItemStock; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" id="Price_<?php echo $item->ItemID; ?>">Price: <?php echo $item->ItemPrice; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 60px;" colspan="2"> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 35%" type="hidden" name="ItemIDInput" id="ItemIDInput"
                                                    value="<?php echo $item->ItemID; ?>" disabled>
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <input style="width: 100%" type="submit"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>, '<?php echo $item->ItemName; ?>' , '<?php echo $item->ItemStock; ?>' )"
                                                    value="Add to Cart">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach ?> 
            </div>
        </div>

        <div id="paymentModal" class="paymentModal">
            <div class="paymentmodal-content">
                <h4>Choose Payment Method</h4>
                <button id="cashBtn" class="payment-option">Cash</button>
                <button id="bdoBtn" class="payment-option">BDO</button>
                <button id="rbbiBtn" class="payment-option">RBBI</button>
                <button id="ClsBtn" class="payment-option">Can cel</button>
            </div>
        </div>

        <div>
            <table id="cartDisplay"
                style="position: fixed; bottom: 20 ;width: 78%; background-color: #caf0f8; height: 10%; margin-right: 5%; border-radius: 10px;">
            </table>
        </div>

        <input type="hidden" id="latestid" value="<?php echo $LatestID ?>">

    </div>
    <script>
        var cartItems = [];
        var totalPrice = 0;
        
        function addToCart(itemId, itemName, MaxQuantityDatabase) {
            var quantityInput = document.getElementById('QuantityInput_' + itemId);
            var quantity = parseInt(quantityInput.value);
            var itemIdCounter = document.getElementById('latestid').value;

            if (quantityInput.value !== "") {
                var existingItemIndex = cartItems.findIndex(function (item) {
                    return item.id === itemId;
                });

                var itemPriceElement = document.getElementById('Price_' + itemId);
                var itemPrice = parseFloat(itemPriceElement.innerText.split(' ')[1]);

                var maxQuantity = MaxQuantityDatabase;

                if (quantity > maxQuantity) {
                    // Limit the quantity to the maximum available
                    quantity = maxQuantity;
                    quantityInput.value = maxQuantity;
                }

                if (existingItemIndex !== -1) {
                    cartItems[existingItemIndex].quantity += quantity;
                    cartItems[existingItemIndex].price += itemPrice * quantity;
                } else {
                    var addedItem = {
                        id: itemId,
                        name: itemName,
                        quantity: quantity,
                        price: itemPrice * quantity,
                    };
                    cartItems.push(addedItem);
                }
                updateCartDisplay();

                quantityInput.value = "";

                // Insert the item into the "sales" table
                insertSale(itemIdCounter, itemName, quantity);
            } else {
                // Handle empty quantity input
            }
        }

        function createRemoveHandler(itemId) {
            return function () {
                var removeIndex = cartItems.findIndex(function (item) {
                    return item.id === itemId;
                });

                if (removeIndex !== -1) {
                    var removedItem = cartItems.splice(removeIndex, 1)[0];
                    totalPrice -= removedItem.price;
                    updateCartDisplay();
                }
            };
        }

        function updateCartDisplay() {
            var cartDisplay = document.getElementById('cartDisplay');
            cartDisplay.innerHTML = '';

            for (var i = 0; i < cartItems.length; i++) {
                var item = cartItems[i];

                var newRow = document.createElement('tr');

                var itemIdCell = document.createElement('td');
                itemIdCell.width = '90%';
                itemIdCell.style.borderBottom = '1px solid black';
                itemIdCell.style.borderCollapse = 'collapse';
                itemIdCell.textContent = item.name;
                newRow.appendChild(itemIdCell);

                var quantityCell = document.createElement('td');
                quantityCell.textContent = item.quantity;
                quantityCell.style.borderBottom = '1px solid black';
                newRow.appendChild(quantityCell);

                var priceCell = document.createElement('td');
                priceCell.textContent = item.price.toFixed(2);
                priceCell.style.borderBottom = '1px solid black';
                newRow.appendChild(priceCell);

                var removeButton = document.createElement('td');
                var removeButtonElement = document.createElement('button');
                removeButtonElement.textContent = 'Remove';
                removeButtonElement.addEventListener('click', createRemoveHandler(item.id));
                removeButton.appendChild(removeButtonElement);
                removeButton.style.borderBottom = '1px solid black';
                newRow.appendChild(removeButton);

                cartDisplay.appendChild(newRow);
            }

            var buttonRow = document.getElementById('buttonRow');
            if (!buttonRow && cartItems.length > 0) {
                buttonRow = document.createElement('tr');
                buttonRow.id = 'buttonRow';
                var buttonCell = document.createElement('td');
                buttonCell.colSpan = 4;
                var payNowButton = document.createElement('button');
                payNowButton.innerText = 'Pay Now';
                payNowButton.style.width = "100%";
                payNowButton.addEventListener('click', calculateTotal);
                buttonCell.appendChild(payNowButton);
                buttonRow.appendChild(buttonCell);
                cartDisplay.appendChild(buttonRow);
            } else if (buttonRow && cartItems.length === 0) {
                buttonRow.parentNode.removeChild(buttonRow);
            }
        }


        function updateTotalPrice() {
            var totalDisplay = document.getElementById('totalDisplay');
            totalDisplay.textContent = totalPrice.toFixed(2);
        }

        function calculateTotal() {
            var modal = document.getElementById("paymentModal");
            modal.style.display = "block";

            var cashBtn = document.getElementById("cashBtn");
            cashBtn.addEventListener("click", function () {
                processPayment("Cash");
            });

            var bdoBtn = document.getElementById("bdoBtn");
            bdoBtn.addEventListener("click", function () {
                processPayment("BDO");
            });

            var rbbiBtn = document.getElementById("rbbiBtn");
            rbbiBtn.addEventListener("click", function () {
                processPayment("RBBI");
            });

            var ClsBtn = document.getElementById("ClsBtn");
            ClsBtn.addEventListener("click", function () {
                processPayment("ClsBtn");
            });
        }

        function processPayment(chosen) {
            var modal = document.getElementById("paymentModal");

            if (chosen == "Cash") {
                var totalPrice = 0;

                for (var i = 0; i < cartItems.length; i++) {
                    var item = cartItems[i];
                    totalPrice += item.price;

                    var itemId = item.id;
                    var quantity = item.quantity;

                    // Send an AJAX request to reduce the stock for each item
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "<?php echo site_url('/CustomerPurchase_Controller/ReduceStock'); ?>", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    var data = "ItemIDInput=" + encodeURIComponent(itemId) + "&QuantityInput=" + encodeURIComponent(quantity);
                    xhr.send(data);
                }

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo site_url('/CustomerPurchase_Controller/InsertTotalExpense'); ?>", true);
                xhr.setRequestHeader("Content-Type", "application/json");

                // Create an object with additional data
                var additionalData = {
                    totalPrice: totalPrice,
                    additionalProperty: "additional value",
                };

                // Merge additionalData with the existing data object
                var data = JSON.stringify(Object.assign({}, additionalData));

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        cartItems = [];
                        updateCartDisplay();

                        var buttonRow = document.getElementById('buttonRow');

                        location.reload();
                        if (buttonRow && buttonRow.parentNode) { // Check if buttonRow exists and its parentNode exists
                            buttonRow.parentNode.removeChild(buttonRow); // Remove the buttonRow from the DOM
                        }
                    }
                };

                xhr.send(data);
            }
            else if (chosen == "BDO") {
                console.log("this is BDO")
            }
            else if (chosen == "RBBI") {
                console.log("this is Rbbi")
            }
            else if (chosen == "ClsBtn") {
                console.log("this is Close")
                modal.style.display = "none";
            }
        }

        function insertSale(itemId, itemName, quantity) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo site_url('/CustomerPurchase_Controller/InsertSale'); ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    console.log("Response:", xhr.responseText);
                }
            };

            var data =
                "ItemID=" + encodeURIComponent(itemId) +
                "&ItemName=" + encodeURIComponent(itemName) +
                "&Quantity=" + encodeURIComponent(quantity);

            console.log("Data:", data);

            xhr.send(data);
        }

    </script>
</body>

</html>