<?php
//include 'header.php';
//include 'nav.php';
//?>

<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=stadium', 'root', '');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

if(isset($_POST["search"])){
  $searchTerm=$_POST ["search"];
  if(preg_match("^/[A-Za-z]+/^", $_POST['search'])){
    $searchTerm=$_POST ["search"];
  if(empty($_POST ['search'])){
    echo "you did not enter search text";
  }else{
    echo  "<p>Please enter a search query</p>";
  }
    }

$stmt = $conn->prepare("SELECT * FROM customers WHERE customers.Name LIKE :searchTerm");
$stmt->bindValue(":searchTerm","%{$searchTerm}%");
$stmt->execute();
$customers = $stmt->fetchAll();

$child= "#fd7e14";
$border= "border: 2px solid #000000;";
$padding= "8px";
$backColor= "#3498db";
$color= "#000000;"


?>

<style>
<?php include 'searchupdate.css'; ?>

td, th{
    border:<?php echo $border ?>;
    padding:<?php echo $padding ?>;
}

th{
    background-color:<?php echo $backColor ?>;
    color<?php echo $color ?>;
}
tr:nth-child(even){
    background-color:<?php echo $child ?>;
}
</style>

<body>


  <?php

  echo "<table>";
  echo "<tr></tr><th>Name</th><th>Address</th><th>Post Code</th><th>Phone</th><th>Email</th></tr>";
  if ($customers) {
      foreach ($customers as $customer) {
          echo "<p>";
          echo "<a href='details.php?id={$customer['Customer_Number']}'>";
          echo "</p>";


          echo "<tr>";
          echo "<a href='details.php?id={$customer['Customer_Number']}'>";
          echo "</a>";
          echo "<td>{$customer['Name']}</td>";
          echo "<td>{$customer['Address']}</td>";
          echo "<td>{$customer['Post_Code']}</td>";
          echo "<td>{$customer['Phone']}</td>";
          echo "<td>{$customer['Email']}</td>";
          echo "</tr>";
      }
  }
  }else {
      echo "<p> </p>";
  }

  echo "</table>";



      ?>

<!--  <div class="block">-->
<!--      <div class="wrap">-->
<!--          <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">-->
<!--              <fieldset>-->
<!--                  <div class="field" >-->
<!--                      <input type="text"  placeholder="Search Concepts Here..." style="height:27px;width:500px"   id="search111" name="searching">-->
<!--                      <input type="submit"   value="Search" style="height:28px;padding-top:4px" id="button111">-->
<!--                  </div>-->
<!--              </fieldset>-->
<!--          </form>-->
<!--          <div class="clear"></div>-->
<!--      </div>-->
<!--  </div>-->

<form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

  <label for="search">Search Customers:</label>
  <input type="text" name="search" id="search" size="80"/>

<input type="submit" name="submitBtn" value="Search">
</form>

  <?php include 'footer.php';?>
</body>
</html>
