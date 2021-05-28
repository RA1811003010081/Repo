<?php

require_once('fun.php');

if(PostSet() and !empty($_POST))
{
    $student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"];
    $year = $_POST["year"];
    $book_id = $_POST["book_id"];
    $book_name = $_POST["book_name"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $cost = $_POST["cost"];
    $booking_date = $_POST["booking_date"];
    $renewal_date = $_POST["renewal_date"];
   

}
else
{
    $student_id = "";
    $student_name = "" ;
    $year = "";
    $book_id = "";
    $book_name = "";
    $author = "";
    $publisher = "" ;
    $cost = "";
    $booking_date = "" ;
    $renewal_date = "" ;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>DBMS Project</title>
    <style>
        .display
        {
            margin-left: auto;
            margin-right: auto;
            background-color: white;
            padding-left:0em;
            padding-right:0em;
        }
        .display tr
        {
            background-color:lightsalmon;
            

        }
        .display td
        {
            background-color: blanchedalmond;
            width: 1em;
        }
        .error
        {
            background-color:lightcoral;
        }
        .success
        {
            background-color:red;

        }
    </style>
</head>
<body>
    
</body>
<h1>LIBRARY MANAGEMENT SYSTEM</h1>

<form method = "POST">
    <table>
        <tr>
            <td>
                <label for="student_id">Student ID</label>

            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="student_id" size="40" id="student_id" value="<?=htmlentities($student_id)?>">

            </td>
        </tr>
        <tr>
            <td>
                <label for="student_name">Student Name</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="student_name" size="40" id="student_name" value="<?=htmlentities($student_name)?>">
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="year">Year</label>

            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="year" size="40" id="year" value="<?=htmlentities($year)?>">

            </td>
        </tr>
        <tr>
            <td>
                <label for="book_id">BookID</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="book_id" size="40" id="book_id" value="<?=htmlentities($book_id)?>">
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="book_name">Book Name</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="book_name" size="40" id="book_name" value="<?=htmlentities($book_name)?>">
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="author">Author</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="author" size="40" id="author" value="<?=htmlentities($author)?>">

            </td>
        </tr>
        <tr>
            <td>
                <label for="publisher">Publisher</label>
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="publisher" size="40" id="publisher" value="<?=htmlentities($publisher)?>">

            </td>
        </tr>
        <tr>
            <td>
                <label for="cost">Cost</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="cost" size="40" id="cost" value="<?=htmlentities($cost)?>">

            </td>
        </tr>
        <tr>
            <td>
                <label for="booking_date">Booking Date</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="date" name="booking_date" size="40" id="booking_date" value="<?=htmlentities($booking_date)?>">
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="renewal_date">Renewal Date</label>
                
            </td>
            <td>
                :
            </td>
            <td>
                <input type="date" name="renewal_date" size="40" id="renewal_date" value="<?=htmlentities($renewal_date)?>">
                
            </td>
        </tr>
    </table>
   
     
  <p class="press">
      <input type="submit" name = "submit" class="submit">
      <button name="display">Display</button>
      
  </p>
</form>
</html>



<?php


$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=dbmsproject', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST["display"]))
{
    print_r('<table class="display">');
    print_r('<tr>');
    print_r('<th>ID</th>
    <th>Name</th>
    <th>Year</th>
    <th>Book ID</th>
    <th>Book Name</th>
    <th>Author</th>
    <th>Publisher</th>
    <th>Cost</th>
    <th>Booking Date</th>
    <th>Renewal Date</th>');
    print_r('</tr>');
    foreach ($pdo->query("SELECT * from student") as $row) {
        print_r('<tr>');
        print_r('<td style="text-align:center">');
        print_r($row["student_id"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["student_name"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["year"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["book_id"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["book_name"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["author"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["publisher"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["cost"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["booking_date"]);
        print_r('</td>');
        print_r('<td style="text-align:center">');
        print_r($row["renewal_date"]);
        print_r('</td>');
        print_r('</tr>');
    }
    print_r('</table>');
    
    $student_id = "";
    $student_name = "" ;
    $year = "";
    $book_id = "";
    $book_name = "";
    $author = "";
    $publisher = "" ;
    $cost = "";
    $booking_date = "" ;
    $renewal_date = "" ;

}


$db_execute = FALSE;
if(hasAvalue($student_id) && hasAvalue($student_name) && hasAvalue($year) && hasAvalue($book_id)
 && hasAvalue($book_name) && hasAvalue($author) && hasAvalue($publisher)
  && hasAvalue($cost) && hasAvalue($booking_date) && hasAvalue($renewal_date))
{
    
    try
    {
        
        $stmt = $pdo->prepare('INSERT INTO student VALUES(:student_id,:student_name,:year,:book_id,
        :book_name,:author,:publisher,:cost,:booking_date,:renewal_date)');
    
        $success = $stmt->execute
        (array
            (
            ':student_id'=>$student_id,
            ':student_name'=>$student_name,
            ':year'=>$year,
            ':book_id'=>$book_id,
            ':book_name'=>$book_name,
            ':author'=>$author,
            ':publisher'=>$publisher,
            ':cost'=>$cost,
            ':booking_date'=>$booking_date,
            ':renewal_date'=>$renewal_date
            )
        );

        echo '<p class = "success">';
        if($success)
        {
            echo "Data Entry Successful";
        }
        echo "</p>";

    }
    catch(Exception $e)
    {   
        echo '<p class = "error">';
        if($e->getCode() == 23000)
        {
            echo "Failed: Data with Id <strong>$student_id</strong> already exists<br>";
        }
        elseif($e->getCode() == 22003)
        {
            echo "Failed: Year value requires year you are studing in<br>";
        }
        else
        {
            echo $e->getMessage();
        }
        // echo $e->getMessage();
        echo "</p>";



    }

    $db_execute = TRUE;

}

if(isset($_POST["submit"]) && $db_execute == FALSE)
{
    print_r('<p style="background-color:lightcoral;">');
    print_r("You have not entered all the values.");
    print_r("</p>");
    
}


?>
