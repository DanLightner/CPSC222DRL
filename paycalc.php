<?php
    $name = "Kevin Slonka";
    $hoursWorked = 40.0;
    $hourlyPay = 54.50;
    $grossPay = $hoursWorked * $hourlyPay;
    $grossPayPerYear = $grossPay * 52;
    $federalTaxBracket = calculateFederalTaxBracket($grossPayPerYear);
    $federalTaxPercent = calculatePercent($grossPayPerYear);

    $federalTax = $federalTaxPercent;
    $stateTax = 5.5 / 100; 

    // Calculations
    $federalWithholding = $grossPay * $federalTax;
    $stateWithholding = $grossPay * $stateTax;
    $totalDeductions = $federalWithholding + $stateWithholding;
    $netPay = $grossPay - $totalDeductions;

function calculateFederalTaxBracket($estimatedAnnualIncome) {
    if ($estimatedAnnualIncome <= 11000) {
        return "10%"; 
    } elseif ($estimatedAnnualIncome <= 44725) {
        return "12%"; 
    } elseif ($estimatedAnnualIncome <= 95375) {
        return "22%"; 
    } elseif ($estimatedAnnualIncome <= 182100) {
        return "24%"; 
    } elseif ($estimatedAnnualIncome <= 231250) {
        return "32%"; 
    } elseif ($estimatedAnnualIncome <= 578125) {
        return "35%"; 
    } else {
        return "37%"; 
    }
}
function calculatePercent($estimatedAnnualIncome) {
    if ($estimatedAnnualIncome <= 11000) {
        return 0.10; 
    } elseif ($estimatedAnnualIncome <= 44725) {
        return 0.12; 
    } elseif ($estimatedAnnualIncome <= 95375) {
        return 0.22; 
    } elseif ($estimatedAnnualIncome <= 182100) {
        return 0.24; 
    } elseif ($estimatedAnnualIncome <= 231250) {
        return 0.32; 
    } elseif ($estimatedAnnualIncome <= 578125) {
        return 0.35; 
    } else {
        return 0.37; 
    }
}



?>

<html>
<head>
    <title>Payroll Calculator</title>
</head>
<body>

    <h1>Payroll Calculator</h1>
    <table border="1">
        <tr>
            <th>Employee Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Hours Worked</th>
            <td><?php echo $hoursWorked; ?></td>
        </tr>
        <tr>
            <th>Hourly Pay Rate</th>
            <td>$<?php echo number_format($hourlyPay, 2); ?></td>
        </tr>
        <tr>
            <th>Gross Pay</th>
            <td>$<?php echo number_format($grossPay, 2); ?></td>
        </tr>
        <tr>
            <th colspan="2">Deductions</th>
        </tr>
        <tr>
            <td>Federal Withholding (<?php echo $federalTaxBracket; ?>)</td>
            <td>$<?php echo number_format($federalWithholding, 2); ?></td>
        </tr>
        <tr>
            <td>State Withholding </td>
            <td>$<?php echo number_format($stateWithholding, 2); ?></td>
        </tr>
        <tr>
            <th>Total Deduction</th>
            <td>$<?php echo number_format($totalDeductions, 2); ?></td>
        </tr>
        <tr>
            <th>Net Pay</th>
            <td>$<?php echo number_format($netPay, 2); ?></td>
        </tr>
         <tr>
         <td>Tax Bracket</td>
        <td> <?php echo $federalTaxBracket; ?> </td>
        </tr>
  

 </table>
</body>
</html>
