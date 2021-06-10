<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.inc.html.php'; ?>

<body>
<?php include '../includes/header2.inc.html.php'; ?>

    <div id="contact">
     <!--   <main> -->
            <h2>Success!</h2>
            <p>Thanks for contacting me.<p>

            <p>My records show that you submitted the following to me: <p>
        <table>
            <tr>
                <td> Name: </td>
                <td><?php echo htmlspecialchars($myName , ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo htmlspecialchars($myEmail , ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <tr>
                <td>Question:</td>
                <td><?php echo htmlspecialchars($myQuestion , ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
        </table>

            <p>I will get back to you.<p>
    <!--    </main> -->
    </div>

    <?php include 'mailer.php'; ?>

</body>
</html>
