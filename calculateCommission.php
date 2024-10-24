<?php
    $name_input    = $_POST['name_input'];
    $month_input   = $_POST['month_input'];
    $sales_amount = $_POST['sales_amt_input'];

    // Print out Header
    echo "<p><b>SALES COMMISSION</b></p>";

    // Print Data
    echo "<table>",
        "<tr>",
        "<td>Name</td>",
        "<td>  :",
        $name_input,
        "</td>",
        "</tr>",
        "<tr>",
        "<td>Month</td>",
        "<td>  :",
        $month_input,
        "</td>",
        "</tr>",
        "<tr>",
        "<td>Sales Amount</td>",
        "<td>  :",
        $sales_amount,
        "</td>",
        "</tr>";

    // Calculate Commission
    $sales_commision = 0;
    if      ($sales_amount > 7000) $sales_commision = $sales_amount * 0.10;
    else if ($sales_amount > 5000) $sales_commision = $sales_amount * 0.07;
    else if ($sales_amount > 2000) $sales_commision = $sales_amount * 0.04;
    else                           $sales_commision = $sales_amount * 0.03;

    echo "<tr>",
        "<td>Sales Commission</td>",
        "<td>  :",
        $sales_commision,
        "</td>",
        "</tr>",
        "</table>";
?>