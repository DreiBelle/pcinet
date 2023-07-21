<!DOCTYPE html>
<html>

<head>
    <title>Setting</title>
    <style>
        .content {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 40px;
            margin-right: 20px;
            margin-bottom: 20px;
            padding-bottom: 100px;
        }
    </style>
</head>

<body>
    <?php $this->load->view($navbar); ?>

    <div class="content">
        <h1 style="text-align: center; padding: 10px; font-size: 30px; font-weight: bold; margin: 0;">Setting</h1>
        <table class="table-auto mt-5">
            <thead>
                <tr>
                    <th class="px-10 py-2">No</th>
                    <th class="px-10 py-2">Student Name</th>
                    <th class="px-10 py-2">URL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td class="border px-10 py-2">
                            <?php echo $record['No']; ?>
                        </td>
                        <td class="border px-10 py-2">
                            <?php echo $record['Student Name']; ?>
                        </td>
                        <td class="border px-10 py-2">
                            <?php if (!empty($record['URL'])): ?>
                                <a href="http://<?php echo $record['URL']; ?>" class="text-blue-500" target="_blank">
                                    <?php echo $record['URL']; ?>
                                </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>