<html>

<head>
    <title>Customer Purchase</title>
    <style>
        .content {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
        }

        td {
            border: 1px solid black;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>
    <div class="content">
        <h1 style="text-align: center;">Products</h1>
        <h1 style="text-align: left;">Monitors</h1>
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
                                            <td style="padding-top: 60px;" colspan="2">
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <button style="width: 100%"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>)">Add to Cart</button>
                                            </td>
                                        </tr>
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
                                            <td style="padding-top: 60px;" colspan="2">
                                        <tr>
                                            <td style="width: 70%">
                                                <input style="width: 100%" type="number" placeholder="Enter Quantity"
                                                    name="QuantityInput" id="QuantityInput_<?php echo $item->ItemID; ?>">
                                            </td>
                                            <td style="width: 30%">
                                                <button style="width: 100%"
                                                    onclick="addToCart(<?php echo $item->ItemID; ?>)">Add to Cart</button>
                                            </td>
                                        </tr>
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
                style="position: fixed; bottom: 20 ;width: 71%; background-color: #E2DFD2; height: 10%; margin-right: 5%;">
            </table>
        </div>
    </div>
    <script>
        var cartItems = [];
        var totalPrice = 0;

        function addToCart(itemId) {
            var quantityInput = document.getElementById('QuantityInput_' + itemId);
            var quantity = parseInt(quantityInput.value);

            var existingItemIndex = cartItems.findIndex(function (item) {
                return item.id === itemId;
            });

            var itemPriceElement = document.getElementById('Price_' + itemId);
            var itemPrice = parseFloat(itemPriceElement.innerText.split(' ')[1]);

            if (existingItemIndex !== -1) {
                cartItems[existingItemIndex].quantity += quantity;
                cartItems[existingItemIndex].price += itemPrice * quantity;
            } else {
                var addedItem = {
                    id: itemId,
                    quantity: quantity,
                    price: itemPrice * quantity
                };
                cartItems.push(addedItem);
            }
0
            updateCartDisplay();
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
                itemIdCell.textContent = item.id;
                newRow.appendChild(itemIdCell);

                var quantityCell = document.createElement('td');
                quantityCell.textContent = item.quantity;
                newRow.appendChild(quantityCell);

                var priceCell = document.createElement('td');
                priceCell.textContent = item.price.toFixed(2);
                newRow.appendChild(priceCell);

                var removeButton = document.createElement('button');
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', createRemoveHandler(item.id));
                newRow.appendChild(removeButton);

                // var button = document.createElement('button');
                // button.innerText = 'Calculate Total Price';
                // button.addEventListener('click', calculateTotal);
                // newRow.appendChild(button)

                cartDisplay.appendChild(newRow);
                // Append the button to the cartDisplay element
                // cartDisplay.parentNode.appendChild(button);
            }

            var button = document.createElement('button');
            button.innerText = 'Calculate Total Price';
            button.addEventListener('click', calculateTotal);
            newRow.appendChild(button)

        }

        function updateTotalPrice() {
            var totalDisplay = document.getElementById('totalDisplay');
            totalDisplay.textContent = totalPrice.toFixed(2);
        }

        function calculateTotal() {
            var totalPrice = 0;

            for (var i = 0; i < cartItems.length; i++) {
                totalPrice += cartItems[i].price;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo site_url('/CustomerPurchase_Controller/InsertTotalExpense'); ?>", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            var data = JSON.stringify({ totalPrice: totalPrice });
            xhr.send(data);

            cartItems = [];
            updateCartDisplay();
        }
    </script>
</body>

</html>