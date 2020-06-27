<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Client data</title>
    <meta name="author" content="Mikołaj Piotrowicz">
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<div class="table-wrap">
    <table id="toggled-element">
        <tbody>
        <tr>
            <td>Name</td>
            <td>
                <?php
                   echo $_POST['name'];
                 ?>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php
                     echo $_POST['gender'];
                   ?>
            </td>
        </tr>
        <tr>
            <td>Birth date</td>
            <td>
                <?php
                  echo $_POST['birthDate'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>
                <?php
                   echo $_POST['email'];
                 ?>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <?php
                  echo $_POST['password'];
                 ?>
            </td>
        </tr>
        <tr>
            <td>Color</td>
            <td>
                <?php
                  echo $_POST['color'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Number</td>
            <td>
                <?php
                  echo $_POST['number'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Season</td>
            <td>
                <?php
                  echo $_POST['favoriteSeason'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Happy level</td>
            <td>
                <?php
                  echo $_POST['happyLevel'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Contact Day</td>
            <td>
                <?php
                  echo $_POST['contactDay'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Information</td>
            <td>
                <?php
                  echo $_POST['info'];
                ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
