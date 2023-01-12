<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
    <table>
        <tr>
            <th>Merk</th>
            <th>Model</th>
            <th>Topsnelheid</th>
            <th>Prijs</th>
            <th>Delete</th>
        </tr>
        <?php 

        $con_strng = "mysql:host=localhost;dbname=php-pdo-crud-toets;charset=UTF8";


        try {
            $con = new PDO($con_strng, 'root', '');
            if(!$con) {
                echo 'Internal connection error occurred';
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        $query = "
        SELECT *
        FROM DureAuto
        ORDER BY Prijs DESC
        ";

        $statement = $con->prepare($query);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $data) {
            echo "
            <tr>
                <td>$data->Merk</td>
                <td>$data->Model</td>
                <td>$data->Topsnelheid</td>
                <td>$data->Prijs</td>
                <td>
                    delete x
                </td>
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>