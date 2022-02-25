

<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all books
$query = "SELECT * FROM books";
$resultset = $conn->query($query);
$books = $resultset->fetchAll();
$conn=NULL;
?>

<?php

$child= "#fd7e14";
$border= "border: 2px solid #000000;";
$padding= "8px";
$backColor= "#3498db";
$color= "#000000;"

 ?>







 <!DOCTYPE HTML>
 <html>
 <head>
 <title>Books Database</title>
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <link rel="stylesheet" href="../../PhpstormProjects/Stadium-Seats/css/style.css" media="screen">
<style>
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

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Database for most books" />
<meta name="keywords" content="Books| books search| ISBN| Book database" />

<title>Design</title>

<!-- Favicon -->
<link rel="icon"  type="image/png" href="/favicon.png" />
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>



</head>


<body>

<h1>Books Database Diagrams</h1>

<p><a href="index.php"><<< BACK </a></p>

<!-- <p><a href="http://localhost:8080/web/images/andy-hertzfeld.jpg"><<< Relational Diagrams</a></p> -->





<!-- // Dispaly Diagrams -->
<?php

echo '<img src="images/Books_Relational_Diagram.png" />';

?>
<article class="bookstable">
  <div class="container">
  <div class="table">
  <div class="col l6">





<!-- // Dispaly All Books -->

<h1>Books in Database</h1>

<?php
echo "<table>";
echo "<tr><th>book_id</th><th>title</th><th>isbn</th><th>published_date</th><th>publisher_id</th><tr>";
foreach ($books as $book)
{
echo "<tr>";
echo "<td>{$book['book_id']}</td>";
echo "<td>{$book['title']}</td>";
echo "<td>{$book['isbn']}</td>";
echo "<td>{$book['published_date']}</td>";
echo "<td>{$book['publisher_id']}</td>";
echo "</tr>";
}

echo "</table>";
?>






<!-- // Display All Authors -->
<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all publishers
$query = "SELECT * FROM authors";
$resultset = $conn->query($query);
$authors = $resultset->fetchAll();
$conn=NULL;
?>

<h1>Authors in Database</h1>

<?php
echo "<table>";
echo "<tr><th>author_id</th><th>first_name</th><th>middle_name</th><th>last_name</th><th>image</th><tr>";
foreach ($authors as $author)
{
echo "<tr>";
echo "<td>{$author['author_id']}</td>";
echo "<td>{$author['first_name']}</td>";
echo "<td>{$author['middle_name']}</td>";
echo "<td>{$author['last_name']}</td>";
echo "<td>{$author['image']}</td>";
echo "</tr>";
}

echo "</table>";
?>




<!-- // Display All Categories -->
<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all publishers
$query = "SELECT * FROM categories";
$resultset = $conn->query($query);
$categories = $resultset->fetchAll();
$conn=NULL;
?>

<h1>Categories in Database</h1>


<?php
echo "<table>";
echo "<tr><th>category_id</th><th>name</th><th>description</th><tr>";
foreach ($categories as $category)
{
echo "<tr>";
echo "<td>{$category['category_id']}</td>";
echo "<td>{$category['name']}</td>";
echo "<td>{$category['description']}</td>";
echo "</tr>";
}

echo "</table>";
?>



<!-- // Display All Publishers -->
<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all publishers
$query = "SELECT * FROM publishers";
$resultset = $conn->query($query);
$publishers = $resultset->fetchAll();
$conn=NULL;
?>


<h1>Publishers in Database</h1>

<?php
echo "<table>";
echo "<tr><th>publisher_id</th><th>name</th<tr>";
foreach ($publishers as $publisher)
{

  echo "<tr>";
  echo "<td>{$publisher['publisher_id']}</td>";
  echo "<td>{$publisher['name']}</td>";
  echo "</tr>";
  }

  echo "</table>";
  ?>







<!-- // Display All Book Categories -->
<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all publishers
$query = "SELECT * FROM book_categories";
$resultset = $conn->query($query);
$book_categories = $resultset->fetchAll();
$conn=NULL;
?>

<h1>Book Categories in Database</h1>


<?php
echo "<table>";
echo "<tr><th>book_id</th><th>category_id</th><tr>";
foreach ($book_categories as $book_category)
{
echo "<tr>";
echo "<td>{$book_category['book_id']}</td>";
echo "<td>{$book_category['category_id']}</td>";
echo "</tr>";
}

echo "</table>";
?>




<!-- // Display All Book Authors -->
<?php
// Connect to the database
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1860854', 'u1860854', '21may80');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
//select all publishers
$query = "SELECT * FROM book_authors";
$resultset = $conn->query($query);
$book_authors = $resultset->fetchAll();
$conn=NULL;
?>


<h1>Book Authors in Database</h1>


<?php
echo "<table>";
echo "<tr><th>book_id</th><th>author_id</th><tr>";
foreach ($book_authors as $book_author)
{
echo "<tr>";
echo "<td>{$book_author['book_id']}</td>";
echo "<td>{$book_author['author_id']}</td>";
echo "</tr>";
}

echo "</table>";
?>


<fieldset>
  <h1>Resource statement</h1>
<p>Descriptions of categories taken from Glad Readers Website (<a href="https://gladreaders.com/types-or-genres-of-books/#textbook">https://gladreaders.com/types-or-genres-of-books/#textbook</a>)</p>

</fieldset>










</div>
</div>


</article>



</body>

</html>
