<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan</title>

    <style>
        table {
            border-collapse: collapse;
            }
        table, td, th{ 
            border: 1px solid black;
            }
     </style>   

</head>
<body>
        <h1> <?php echo "Laporan $title"?> </h1>
        <table>
            <tr>
                <th> NO </th>
                <th> Kolom1 </th>
                <th> Kolom2 </th>
            </tr>    
            <?php $number=1; foreach($data as $row) {?>
            <tr> 
                <td> <?php echo $number++ ?> </td>
                <td> <?php echo $row['kolom1'] ?> </td>
                <td> <?php echo $row['kolom2'] ?></td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>