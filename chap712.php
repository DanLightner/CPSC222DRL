<html>
<head>
    <title>Chapters 7 & 12</title>
</head>
<body>
    <h1>Birthday Formatter</h1>
    <?php session_start(); ?>
    <?php $showForm = ($_SERVER['REQUEST_METHOD'] != 'POST' && (empty($_GET['page']) || $_GET['page'] != 1)); ?>
    <?php if ($showForm) { ?>
        <form method="post">
            <table border="1">
                <tr>
                    <td><center><b>Month</b></center></td>
                    <td><center><b>Day</b></center></td>
                    <td><center><b>Year</b></center></td>
                    <td><center><b>Hour</b></center></td>
                    <td><center><b>Minute</b></center></td>
                    <td><center><b>AM/PM</b></center></td>
                </tr>
                <tr>
                    <td>
                        <select name="month">
                            <?php
                            $allMonths = array(
                                "January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"
                            );
                            foreach ($allMonths as $month) {
                                echo "<option value='$month'>$month</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="day">
                            <?php
                            for ($day = 1; $day <= 31; $day++) {
                                echo "<option value='$day'>$day</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year">
                            <?php
                            for ($year = 2024; $year >= 1970; $year--) {
                                echo "<option value='$year'>$year</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="hour">
                            <?php
                            for ($hour = 1; $hour <= 12; $hour++) {
                                echo "<option value='$hour'>$hour</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="minute">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                $minute = ($i < 10) ? "0$i" : $i;
                                echo "<option value='$minute'>$minute</option>";
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="ampm">
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <center><input type="submit" name="submit" value="Format Date" /></center>
                    </td>
                </tr>
            </table>
        </form>
    <?php } ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formattedDate = date_create_from_format('F d, Y h:i A', "{$_POST['month']} {$_POST['day']}, {$_POST['year']} {$_POST['hour']}:{$_POST['minute']} {$_POST['ampm']}");
        $_SESSION['formattedDate'] = $formattedDate;
        echo $formattedDate->format('l F jS, Y - g:ia') . "<br><br>";
        echo "<a href='chap712.php?page=1'>Show date in ISO format</a>"; 
    } elseif (isset($_GET['page']) && $_GET['page'] == 1) {
        if (isset($_SESSION['formattedDate'])) {
            echo $_SESSION['formattedDate']->format('Y-m-d H:i:s');
        }
    }
    ?>

</body>
</html>
