<title>DBMS Project</title>
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

<h1>LIBRARY MANAGEMENT SYSTEM</h1>

<form method = "POST">
    <p><label for="student_id">Student ID: </label>
    <input type="text" name="student_id" size="40" id="student_id" value="<?=htmlentities($student_id)?>">
    </p>
    <p><label for="student_name">Student Name: </label>
    <input type="text" name="student_name" size="40" id="student_name" value="<?=htmlentities($student_name)?>">
    </p>
    <p><label for="year">Year: </label>
    <input type="text" name="year" size="40" id="year" value="<?=htmlentities($year)?>">
    </p>
    <p><label for="book_id">BookID: </label>
    <input type="text" name="book_id" size="40" id="book_id" value="<?=htmlentities($book_id)?>">
    </p>
    <p><label for="book_name">Book Name: </label>
    <input type="text" name="book_name" size="40" id="book_name" value="<?=htmlentities($book_name)?>">
    </p>
    <p><label for="author">Author: </label>
    <input type="text" name="author" size="40" id="author" value="<?=htmlentities($author)?>">
    </p>
    <p><label for="publisher">Publisher: </label>
    <input type="text" name="publisher" size="40" id="publisher" value="<?=htmlentities($publisher)?>">
    </p>
    <p><label for="cost">Cost: </label>
    <input type="text" name="cost" size="40" id="cost" value="<?=htmlentities($cost)?>">
    </p>
    <p><label for="booking_date">Booking Date: </label>
    <input type="date" name="booking_date" size="40" id="booking_date" value="<?=htmlentities($booking_date)?>">
    </p>
    <p><label for="renewal_date">Renewal Date: </label>
    <input type="date" name="renewal_date" size="40" id="renewal_date" value="<?=htmlentities($renewal_date)?>">
    </p>
    <input type="submit" name = "submit">
    <br>
    <button name="display">Display</button>
</form>


<?php




if(isset($_POST["display"]))
{
    print_r($_POST);
}

$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=dbmsproject', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$db_execute = FALSE;
if(hasAvalue($student_id) && hasAvalue($student_name) && hasAvalue($year) && hasAvalue($book_id)
 && hasAvalue($book_name) && hasAvalue($author) && hasAvalue($publisher)
  && hasAvalue($cost) && hasAvalue($booking_date) && hasAvalue($renewal_date))
{
    $stmt = $pdo->prepare('INSERT INTO student VALUES(:student_id,:student_name,:year,:book_id,
    :book_name,:author,:publisher,:cost,:booking_date,:renewal_date)');

    $stmt->execute
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

    $db_execute = TRUE;

}

if(isset($_POST["submit"]) && $db_execute == FALSE)
{
    print_r("You have not entered all the values.");
}


?>
