<?php


// Kyle Wilson, Developer
// Full Sail
// ASL




error_reporting(0);



// establishing a pdo connection to database

$user = 'kylewilson';
$password = 'kw121889';
$mysql = 'mysql:host=localhost;dbname=yellow;port=80';
$dbh = new PDO($mysql, $user, $password);



// first get the client by id with this variable to use later

$solarid = $_GET['id'];


// select all from database where the id equals the id that we are targeting (using the $solarid variable above)


$stmt = $dbh->prepare("SELECT * FROM blog WHERE id = :id");
$stmt->bindParam(':id', $solarid);
$stmt->execute();
$result = $stmt->fetchAll();


// this is where the magic happens, there is a isset to make sure the fields are entered correctly and then
// using post and update to target the invenstore table and then setting the new post information to change the
// respected field on the database table, using $solarid to make sure we only target THAT ONE CLIENT, NOT ALL OF THEM

if (isset($_POST['submit'])){

    $title = $_POST['title'];
    $postdate = $_POST['postdate'];
    $postimage = $_POST['postimage'];
    $category = $_POST['category'];
    $fullbody = $_POST['fullbody'];



    $stmt = $dbh->prepare("UPDATE blog SET title='" . $title . "', postdate='" . $postdate . "', postimage='" . $postimage . "', category='" . $category . "', fullbody='" . $fullbody . "' WHERE id = '$solarid'");
    $stmt->execute();


    // send us back to the main app window

    header('Location: home.php');
    die();

}

?>


<!-- this is just the form with the php to echo out the results from what is currently saved in the database -->

<!DOCTYPE html>
<html>
<head>
    <title>Inventory Update</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/update.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700' rel='stylesheet' type='text/css'>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

<div id="wrapper">


    <h1>Cherishing Minds</h1>


    <h3>Blog Update</h3>




    <form action="" id="add" method="POST">

        <div class="form-group up">
            <h2>Title: </h2><input class="form-control" type="text" name="title" value=<?php echo '"'.$result[0]['title'].'"';?>/><br>
        </div>

        <div class="form-group up">
            <h2>Date: </h2><input class="form-control" type="date" name="postdate" value=<?php echo '"'.$result[0]['postdate'].'"';?>/><br>
        </div>

        <div class="form-group up">
            <h2>Image: </h2><input class="form-control" type="text" name="postimage" value=<?php echo '"'.$result[0]['postimage'].'"';?>/><br>
        </div>

        <div class="form-group">
            <label class="control-label"><br><select class="form-control" name="category">

                    <option><?php echo $result[0]['category'];?></option>
                    <option value="Anxiety">Anxiety</option>
                    <option value="ADHD">ADHD</option>
                    <option value="Bipolar">Bipolar</option>
                    <option value="Depression">Depression</option>
                    <option value="Eating">Eating</option>
                    <option value="OCD">OCD</option>
                    <option value="Partum">Partum</option>
                    <option value="PTSD">PTSD</option>
                    <option value="Schizo">Schizo</option>
                    <option value="Sub">Sub</option>
                    <option value="Sad">Sad</option>
                    <option value="Social">Social</option>

                </select></label><br>
        </div>

        <h2>Body: </h2><textarea class="form-control" rows="10" name="fullbody" cols="150" ><?php echo $result[0]['fullbody'];?></textarea><br><br>




        <input type="submit" name="submit" value="Update"/>

        <br><br>
    </form>
</div>
</body>

</html>









