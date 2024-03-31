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
    if ($estimatedAnnualIncome <= 11600) {
        return "10%"; 
    } elseif ($estimatedAnnualIncome >= 11601 && $estimatedAnnualIncome <= 47150) {
        return "12%"; 
    }elseif ($estimatedAnnualIncome >= 47151 && $estimatedAnnualIncome <= 100525) {
        return "22%"; 
    }elseif ($estimatedAnnualIncome >= 100526 && $estimatedAnnualIncome <= 191950) {
        return "24%";
    } elseif ($estimatedAnnualIncome >= 191951 && $estimatedAnnualIncome <= 243725) { 
        return "32%"; 
    } elseif ($estimatedAnnualIncome >= 243726 && $estimatedAnnualIncome <= 609350) {
        return "35%";
    } elseif ($estimatedAnnualIncome <= 609351) {
        return "37%";
    }
}
function calculatePercent($estimatedAnnualIncome) {
    if ($estimatedAnnualIncome <= 11600) {
        return 0.10; 
    } elseif ($estimatedAnnualIncome >= 11601 && $estimatedAnnualIncome <= 47150) {        
        return 0.12; 
    } elseif ($estimatedAnnualIncome >= 47151 && $estimatedAnnualIncome <= 100525) {
        return 0.22; 
    } elseif ($estimatedAnnualIncome >= 100526 && $estimatedAnnualIncome <= 191950) {
        return 0.24; 
    } elseif ($estimatedAnnualIncome >= 191951 && $estimatedAnnualIncome <= 243725) {
        return 0.32; 
    } elseif ($estimatedAnnualIncome >= 243726 && $estimatedAnnualIncome <= 609350) {
        return 0.35; 
    } elseif ($estimatedAnnualIncome >= 609351) {
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
