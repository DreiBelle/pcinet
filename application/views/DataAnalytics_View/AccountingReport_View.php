<html>

<head>
    <title>Accounting Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .content {
            margin-left: 240px;
            padding-left: 20px;
            margin-top: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="content">
        <?php $this->load->view($navbar) ?>


        <div name="data analytics for sales">
            <table style="width: 95%; padding-left: 5%;">
                <tr>
                    <td colspan="2">
                        <p style="text-align: center; font-size: 20px; padding-top: 3%;">Sales Chart</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <canvas style="width: 100%;" id="salesChart"></canvas>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="text-align: center; font-size: 20px; padding-top: 3%;">Expenses Chart</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <canvas style="width: 100%;" id="expensesChart"></canvas>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: center; font-size: 20px; padding-top: 5%;">Payroll Graph</p>
                    </td>
                    <td>
                        <p style="text-align: center; font-size: 20px; padding-top: 5%;">Accounting Graph</p>
                    </td>
                </tr>
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                        <canvas id="PayrollGraph"></canvas>
                    </td>
                    <td style="width: 50%;">
                        <canvas id="OverallGraph"></canvas>
                    </td>
                </tr>
            </table>
        </div>

        <script>
            var data = <?php echo json_encode($result); ?>;

            var dates = [];
            var prices = [];
            for (var i = 0; i < data.length; i++) {
                dates.push(data[i].DATE);
                prices.push(data[i].TotalPrice);
            }

            var ctx = document.getElementById('salesChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Total Sales',
                        data: prices,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            //Expenses

            var ExpensesData = <?php echo json_encode($Expenses); ?>;

            var ExpensesNames = [];
            var totalQuantities = [];
            var totalPrices = [];
            for (var i = 0; i < ExpensesData.length; i++) {
                ExpensesNames.push(ExpensesData[i].ItemName);
                totalQuantities.push(ExpensesData[i].TotalQuantity);
                totalPrices.push(ExpensesData[i].TotalPrice);
            }

            var Expensesctx = document.getElementById('expensesChart').getContext('2d');
            var Expenseschart = new Chart(Expensesctx, {
                type: 'bar',
                data: {
                    labels: ExpensesNames,
                    datasets: [{
                        label: 'Total Restock Expenses',
                        data: totalPrices,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            //payroll

            var Payrolldata = <?php echo json_encode($Payroll); ?>;

            var employeeNames = [];
            var salaries = [];
            for (var i = 0; i < Payrolldata.length; i++) {
                employeeNames.push(Payrolldata[i].Name);
                salaries.push(Payrolldata[i].Salary);
            }


            var Payrollctx = document.getElementById('PayrollGraph').getContext('2d');
            var Payrollchart = new Chart(Payrollctx, {
                type: 'pie',
                data: {
                    labels: employeeNames,
                    datasets: [{
                        label: 'Salary',
                        data: salaries,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            //Overall

            var Overalldata = <?php echo json_encode($Overall); ?>;

            var categories = [];
            var totals = [];
            for (var i = 0; i < Overalldata.length; i++) {
                categories.push(Overalldata[i].Category);
                totals.push(Overalldata[i].Total);
            }

            var ctx = document.getElementById('OverallGraph').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Total',
                        data: totals,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        </script>
</body>

</html>