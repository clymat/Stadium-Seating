<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=stadium', 'root', '');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
$Team_ID = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM transactions
INNER JOIN customers on transactions.Customer_number = transactions.Transaction_ID
WHERE transactions.Transaction_ID = :id");
$stmt->bindValue(':id',$Team_ID);
$stmt->execute();
$transactions=$stmt->fetchAll();
$conn=NULL;
echo json_encode($transactions);

?>
