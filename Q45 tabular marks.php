<?php

$marks = array( 
    "PS" => array(
        "physics" => 75,
        "maths" => 90,    
        "Bio" => 96,
        "ip" => 100,
        "psychology" => 80
    )
);

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks for PS</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Marks for PS</h2>
    
    <table>
        <tr>
            <th>S.NO</th>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        
        <?php
        $serial_no = 1;
        foreach ($marks['PS'] as $subject => $score) {
            echo "<tr>
                    <td>" . $serial_no++ . "</td>
                    <td>" . ucfirst($subject) . "</td>
                    <td>" . $score . "</td>
                </tr>";
        }

        $total_marks = array_sum($marks['PS']);
        $total_subj = count($marks['PS']);
        $out_of = $total_subj * 100;
        $perc = ($total_marks / $out_of) * 100;
        ?>

        <tr>
            <td colspan="2"><strong>Total Marks</strong></td>
            <td><strong><?php echo $total_marks . " / " . $out_of; ?></strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Percentage</strong></td>
            <td><strong><?php echo number_format($perc, 2); ?>%</strong></td>
        </tr>
    </table>

    <div class="footer">
        <p>This program is written by Pavni Suri-0221BCA030</p>
    </div>

</body>
</html>
