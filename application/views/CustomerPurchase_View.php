<html>

<head>
    <title>Customer Purchase</title>

    <style>
        .content {
            margin-left: 240px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar) ?>

    <div class="content">
        <?php foreach ($items as $item): ?>
            <div style="width: 100%;">

                <table style="width: 100%;">
                    <tr>
                        <td style="width: 30%;">
                            <div
                                style="width: 100%; border: 1px solid #ccc; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <img style="height: 100px; width: 100%; object-fit: cover; border-radius: 8px 0 0 8px; padding: 5px;"
                                    src="<?php echo MAIN_BASE_URL . $item->Image; ?>">
                            </div>
                        </td>
                        <td style="width: 70%;">
                            <div
                                style="width: 100%; border: 1px solid #ccc; border-radius: 0 8px 8px 0; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                <div style="padding: 20px;">
                                    <h3 style="font-size: 24px; margin-bottom: 10px;">Card Title</h3>
                                    <p style="font-size: 16px; color: #666; margin-bottom: 15px;">This is the description of
                                        the card.</p>
                                    <a href="#"
                                        style="display: inline-block; padding: 8px 16px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 4px; transition: background-color 0.3s ease;">Learn
                                        More</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        <?php endforeach ?>
    </div>
</body>

</html>