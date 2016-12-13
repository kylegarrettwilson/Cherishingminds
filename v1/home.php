<?php



// Kyle Wilson, Developer
// Full Sail
// ASL



// this is using PDO to make a connection to the mysql database


$user = 'kylewilson';
$password = 'kw121889';
$mysql = 'mysql:host=localhost;dbname=yellow;port=80';
$dbh = new PDO($mysql, $user, $password);

// This is doing two parts, first it is using isset to check if the form has been submitted correctly
// Secondly it inserts user input into the invenstore database


if (isset($_POST['submit'])){

    $title = $_POST['title'];
    $postdate = $_POST['postdate'];
    $postimage = $_POST['postimage'];
    $postvideo = $_POST['postvideo'];
    $category = $_POST['category'];
    $fullbody = $_POST['fullbody'];


    $dbh = new PDO($mysql, $user, $password);
    $stmt = $dbh->prepare("INSERT INTO blog (title, postdate, postimage, postvideo, category, fullbody) VALUES (:title, :postdate, :postimage, :postvideo, :category, :fullbody)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':postdate', $postdate);
    $stmt->bindParam(':postimage', $postimage);
    $stmt->bindParam(':postvideo', $postvideo);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':fullbody', $fullbody);
    $stmt->execute();
}


// Laravel ---> Node.js

// Schema::table('invenstore', function ($table) {
//    $table->string('description')->nullable();
// });


// Schema::table('invenstore', function ($table) {
//     $table->integer('votes');
// });


?>







<!-- beginning of the html page -->

<!DOCTYPE html>
<html>
<head>
    <title>Cherishing Minds Blog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/home.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>


</head>
<body>


<!-- using a wrapping div to contain the form -->

<div id="app">

    <h1>Cherishing Minds</h1>

    <h3>Blog Entry</h3>

    <a href="index.php" style="width: 100px;" class="btn btn-lg center-block btn-default">Home</a>






    <!-- form section -->

    <section>
        <form action="home.php"  method="post">


            <div class="form-group">
                <label class="control-label" ><br><input type="text" class="form-control"  name="title" value="" placeholder="Title" required ></label><br>
            </div>


            <div class="form-group">
                <label class="control-label"><br><input type="date" class="form-control"   name="postdate" value="" required ></label><br>
            </div>


            <div class="form-group">
                <label class="control-label"><br><input type="text" class="form-control"  name="postimage" value="" placeholder="Image URL" ></label><br>
            </div>

            <div class="form-group">
                <label class="control-label"><br><input type="text" class="form-control"  name="postvideo" value="" placeholder="Video URL" ></label><br>
            </div>

            <div class="form-group">
                <label class="control-label"><br><select class="form-control" name="category">

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


            <div class="form-group">
                <label class="control-label"><b></b><textarea class="form-control" rows="10" name="fullbody" cols="150" placeholder="Message" ></textarea></label><br>
            </div>



            <input type="submit" name="submit" value="Submit">

        </form>
    </section>










    <!-- this is the beginning of the table section. What is awesome about this part is the fact that
        there is php code within the table element in order to inject the form data into the table from
         the database -->


    <section id="info">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Post Date</th>
                    <th>Post Image</th>
                    <th>Post Video</th>
                    <th>Category</th>
                </tr>


                <!-- first we are saying grab ALL from the fruits database and order by the
                    primary key which is the id and present it is ascending order -->

                <!-- Then we are using fetchall to run the data through a foreach loop in order to
                    collect and display all of the data within the table. As you can see, the $rw
                    variable is printing each item to the table through an echo. -->

                <?php


                $stmt = $dbh->prepare('SELECT * FROM blog ORDER BY category ASC');

                $stmt->execute();

                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($results as $rw){

                    echo '<tr><td>' . $rw['id'] . '</td><td>' . $rw['title'] . '</td><td>' .
                        $rw['postdate'] . '</td><td>' . $rw['postimage'] . '</td><td>' . $rw['postvideo'] . '</td><td>' . $rw['category'] . '</td><td><a href="delete.php?id=' . $rw['id'] . '">Delete</a></td>' . '</td><td><a href="update.php?id=' . $rw['id'] . '">Update</a></td>';
                }




                ?>


            </table>
        </div>
    </section>






</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
<script src="assets/script.js"></script>


</body>
</html>
