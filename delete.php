<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
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

        $id = $_GET['Id'];

        $query = "
        DELETE 
        FROM DureAuto
        WHERE id = $id
        ";

        $statement = $con->prepare($query);

        $statement->execute();

        echo "succesfully deleted the record";
        
        ?>
        <br>
        <a href="read.php">Ga terug naar de records-></a>

</body>
</html>