<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.inc.html.php'; ?>

<body>
<?php include '../includes/header2.inc.html.php'; ?>

    <div id="contact">
 <!--       <main> -->
            <h2>Contact Form</h2>
            <p>Fill out the form below to Contact. Required fields are
                marked with an asterisk (*).
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </p>
            <form method="post" action=" ">
                <label for="myName">*Name:&nbsp</label>
                <input type="text" id="myName" name="myName" required="required">
                <br>
                <label for="myEmail">*E-mail:&nbsp</label>
                <input type="email" id="myEmail" name="myEmail" required="required">
                <br>
                <label for="myQuestion">*Question or Comment: &nbsp</label>
                <textarea name="myQuestion" id="myQuestion" rows="2" cols="24" required="required"></textarea>
                <br><br>
                <input type="submit" value="Contact Me!">
            </form>
<!--        </main> -->
    </div>

</body>
</html>
