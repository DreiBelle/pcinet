<html>

<head>
    <title>Customer Purchase</title>
    <style>
        .content {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        /* td {
            border: 1px solid black;
        } */

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>
    <div class="content">
        <h1 style="text-align: center;">Products</h1>

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
        <!-- wag -->
        <div>
            <table id="cartDisplay"
                style="position: fixed; bottom: 20 ;width: 71%; background-color: #caf0f8; height: 10%; margin-right: 5%;">
            </table>
        </div>
    </div>
    <script>
        var cartItems = [];
        var totalPrice = 0;

        function addToCart(itemId, itemName, MaxQuantityDatabase) {
            var quantityInput = document.getElementById('QuantityInput_' + itemId);
            var quantity = parseInt(quantityInput.value);

            if(quantityInput.value !== "") {
                var existingItemIndex = cartItems.findIndex(function (item) {
                return item.id === itemId;
            });

            var itemPriceElement = document.getElementById('Price_' + itemId);
            var itemPrice = parseFloat(itemPriceElement.innerText.split(' ')[1]);

            var maxQuantity = MaxQuantityDatabase

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
                    price: itemPrice * quantity
                };
                cartItems.push(addedItem);
            }
            updateCartDisplay();

            quantityInput.value = "";
            }
            else
            {

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
            var totalPrice = 0;

            for (var i = 0; i < cartItems.length; i++) {
                totalPrice += cartItems[i].price;

                var itemId = cartItems[i].id;
                var quantity = cartItems[i].quantity;

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
    </script>
</body>

</html>