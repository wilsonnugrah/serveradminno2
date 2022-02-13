<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Database Trucorp</title>
</head>
<body>
    <h1><b>Hello welcome to Trucorp database backup</b></h1>
    <?php
        echo "Database Trucorp";
        $link = mysqli_connect("172.18.0.2","root","1234", "backuptrucorpdb");
        if(!$link)
        {
            echo"Database tidak ada/ database tidak bisa connect";
            exit;
        }
        $res = mysqli_query($link,"SELECT * FROM users");

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            </tr>
	<?php $total = 0 ?>
        <?php
        while($row = $res->fetch_assoc()) { 
        ?>
        <tr>
            <td><?php echo $row['ID'] ?></td>
            <td><?php echo $row['Nama'] ?></td>
            <td><?php echo $row['Alamat'] ?></td>
            <td><?php echo $row['Jabatan'] ?></td>
	    <?php $total += 1 ?>
        </tr>
        <?php } ?>
    </table>
    <?php echo "Total jumlah user di Database : " $total;?>
</body>
</html>
