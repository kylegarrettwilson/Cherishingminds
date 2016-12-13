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
    $fullbody = $_POST['fullbody'];


    $dbh = new PDO($mysql, $user, $password);
    $stmt = $dbh->prepare("INSERT INTO blog (title, postdate, postimage, postvideo, fullbody) VALUES (:title, :postdate, :postimage, :postvideo, :fullbody)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':postdate', $postdate);
    $stmt->bindParam(':postimage', $postimage);
    $stmt->bindParam(':postvideo', $postvideo);
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








<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cherishing Minds</title>



    <!-- bootstrap -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->

    <link rel="stylesheet" href="../../assets/animate/set.css" />


    <link rel="stylesheet" href="../../assets/style.css">



    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


</head>







<body>


<?php include_once("../../analyticstracking.php") ?>

<div class="navbar navbar-default navbar-fixed-top" id="top-nav">
    <div class="container">




        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>




        <!-- Nav Starts -->
        <div class="navbar-collapse  collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../../index.php">Home</a></li>
                <li class="active scroll"><a href="#home">OCD</a></li>
                <li class="scroll"><a href="#menu">About</a></li>
                <li class="scroll"><a href="#blog">Lets Connect</a></li>
                <li class="scroll"><a href="#seek-help">Seek Help</a></li>
            </ul>
        </div>
        <!-- #Nav Ends -->

    </div>
</div>


<!-- #Header Starts -->










<div id="home">

    <div class="banner">

        <!-- image must be 1900 by 900 px -->
        <img src="../images/background.jpg" alt="banner" class="img-responsive">
        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">

                    <a  href="../../index.php">
                        <img class="tada" style="width: 20%;" src="../images/logo.jpg"></a>
                    <h1 id="header">OCD</h1>

                </div>
            </div>
        </div>
    </div>

</div>














<div id="menu"  class="container spacer about">
    <h2 class="text-center"></h2>
    <div class="row">

        <div class="col-sm-6">
            <h4>What is it?</h4>
            <p>
                Obsessive Compulsive Disorder, or OCD, is an anxiety disorder that is characterized by individuals who are
                riddled with persistent and recurrent impulses. People who suffer from this disease often believe in an
                abstract connection between horrific ideas and ritualistic behavior. Individuals with OCD may have the
                constant need to check on people or items with the fear that something bad will happen if they stop the
                behavior. Compulsions are often irrational and display themselves as a persistent need to do an act in
                order to release associated anxiety. OCD can be difficult to diagnose because obsession does not always
                manifest itself in the form of a compulsion. Therefore, it is possible for a sufferer to have OCD and
                not exhibit any physical behavior associated with an obsession.
            </p>


        </div>





        <div class="col-sm-6">

            <h4>OCD Weekly Meeting Schedule</h4>


            <div class="panel-group" id="accordion" role="tablist">



                <div class="panel panel-default">

                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Monday</a>
                        </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                3:30 – 5:00pm PST:  “How to deal with anxiety in the workplace”
                                Join our Skype group discussion! Please login fifteen minutes prior to start time.

                            </p>
                        </div>
                    </div>
                </div>




                <div class="panel panel-default">

                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Tuesday</a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                5:00 – 6:00 PST: “Coping with loss”
                                Join our Skype group discussion! Please login fifteen minutes prior to start time.

                            </p>
                        </div>
                    </div>
                </div>






                <div class="panel panel-default">

                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Wednesday</a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                5:10 – 7:00 PST: “Eating healthy” ft. special guest Mike Jones
                                Join our Skype group discussion! Please login fifteen minutes prior to start time.

                            </p>
                        </div>
                    </div>

                </div>






                <div class="panel panel-default">

                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Thursday</a>
                        </h4>
                    </div>

                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                4:30 – 5:20 PST: “Dealing with physical pain”
                                Join our Skype group discussion! Please login fifteen minutes prior to start time.

                            </p>
                        </div>
                    </div>
                </div>






                <div class="panel panel-default">


                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Friday</a>
                        </h4>
                    </div>


                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
                                3:20 – 5:00 PST: “Allowing yourself to feel something”
                                Join our Skype group discussion! Please login fifteen minutes prior to start time.

                            </p>
                        </div>
                    </div>
                </div>


            </div>




        </div>
    </div>


</div>














<div id="mental-health">



    <div class="container spacer about">
        <h2 class="text-center">Details About OCD</h2>
        <div class="row">

            <div class="col-sm-6">
                <h4>We Are Not Professional</h4>
                <p>
                    The information provided on this site is intended for your general knowledge only. It is not to be
                    substituted for professional medical advice or treatment. You should not use this information to
                    diagnose or treat a health problem, disease, or concern without consulting with a qualified healthcare
                    provider. Please consult your healthcare provider with any questions or concerns you may have regarding
                    your condition. If you think you have a medical emergency, call your doctor, go to the emergency
                    department, or call 911 immediately.
                </p>


                <p>
                    Cherishing Minds does not recommend or endorse any specific tests, products, or health care providers.
                    This site may contain health related materials regarding intimacy and intimate relationships. If you
                    find this offensive, you may not find this site appropriate to meet your needs. This site and its
                    content are provided on an “as is” basis, with some screening to promote your safety and to meet the
                    needs of our community.
                </p>


            </div>





            <div class="col-sm-6">

                <h4>Common Signs</h4>


                <p>
                    These are generalized symptoms that may be expressed in an individual afflicted with OCD.
                    This is in no way a list of all symptoms and every person displays symptoms differently. Consult with a doctor for a proper diagnosis.
                </p>


                <ul>
                    <li>
                        Compulsive rituals or behaviors
                    </li>
                    <li>
                        Agitation
                    </li>
                    <li>
                        Impulsivity
                    </li>
                    <li>
                        Meaningless repetition of own words
                    </li>
                    <li>
                        Repetitive movements
                    </li>
                    <li>
                        Ritualistic behavior
                    </li>
                    <li>
                        Social isolation
                    </li>
                </ul>

            </div>


        </div>


    </div>


</div>















<div id="blog"  class="text-center">



    <h1>Lets Connect!</h1>


    <div class="boom">

        <?php


        $stmt = $dbh->prepare('SELECT * FROM blog WHERE category="OCD" ORDER BY id ASC');

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($results as $rw){

            echo '<div class="blogmiddle"><h3>' . $rw['title'] . '</h3><br><h4>' . $rw['postdate'] . '</h4><br>' . '<img class="img-responsive blogimg" src="' . $rw['postimage'] . '">' . '<br><div class="">' . $rw['postvideo'] . '</div><br><p>' . $rw['fullbody'] . '</p><br>' . '<br>' . '<br></div>';
        }


        ?>

    </div>

</div>








<div id="comment">




    <div id="chat-wrap">

        <h2 class="text-center">Lets Chat!</h2>

        <h3>Community Chat Standards</h3>
        <p>
            We are here to build a community that revolves around positivity and acceptance. The only way we can do this
            is if all agree to be supportive community members and adhere to the community rules. No attacks against
            someone’s race, religion, politics, sex, sexual orientation, etc. No acts of harassment, including but not
            limited to violent or sexual nature. We are not all code interpreters; please refrain from using abbreviations
            and short hand text in order for everyone to understand what you are saying. There will be no solicitation of
            any kind. Do not use multiple usernames. Do not use inappropriate language. Do not provoke or “troll” anyone.
            Engaging in the Cherishing Minds community in the manner will result in your IP address being blocked and you
            will never be able to chat on Cherishing Minds again. This behavior is not conducive to building a positive,
            supportive community. Ultimately, be respectful.
        </p>


        <div id="chat-content">
            <textarea id="chatwindow" rows="19" cols="95" readonly></textarea><br>

            <input id="chatnick" type="text" size="9" maxlength="10" placeholder="username">&nbsp;
            <input id="chatmsg" type="text" size="80" maxlength="80"  onkeyup="keyup(event.keyCode);" placeholder="message">
            <input type="button" value="add" onclick="submit_msg();" style="cursor:pointer;border:1px solid gray;"><br><br>
        </div>

    </div>






</div>





<div id="seek-help">
    <?php include('../../contact2.php');?>
</div>


<script src="../../fluidvids-master/dist/fluidvids.js"></script>
<script>
    fluidvids.init({
        selector: ['iframe'],
        players: ['www.youtube.com', 'player.vimeo.com']
    });
</script>



<script src="java.js" type="text/javascript"></script>






<!-- jquery -->
<script src="../../assets/jquery.js"></script>


<!-- boostrap -->
<script src="../../assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>


<!-- custom script -->
<script src="../../assets/script.js"></script>

</body>

</html>