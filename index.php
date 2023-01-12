<?php 
include "config.php";
$sql = "SELECT * FROM info_pelajar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>datapelajar</title>
    <style>
        table,
        thead,
        th {
            border: black solid 1px;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }

        a {
            border-radius: 5px;
        }

        .tambah {
            background-color: lightblue;
            padding: 5px;
            color: white;
            text-decoration: none;
        }

        .padam {
            background-color: red;
            padding: 5px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>DATA PELAJAR TPP</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama pelajar</th>
                    <th>no ndp</th>
                    <th>no kp</th>
                    <th>no hp</th>
                    <th>jantina</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>

                <?php
            if ($result ->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['namapelajar']; ?></td>
                    <td><?php echo $row['nondp']; ?></td>
                    <td><?php echo $row['nokp']; ?></td>
                    <td><?php echo $row['nohp']; ?></td>
                    <td><?php echo $row['jantina']; ?></td>
                    <td><a class="tambah" href="tambahpelajar.php?id=<?php echo $row['id']; ?>">Tambah</a>&nbsp;
                        <a class="padam" href="padampelajar.php?id=<?php echo $row['id']; ?>">Padam</a>
                    </td>
                </tr>
                <?php       
                }
            }
        ?>
            </tbody>
        </table>
    </div>
</body>