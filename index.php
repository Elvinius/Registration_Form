<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
    <meta charset="utf-8">
    <meta lang="EN">
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div id="container">
    <form method="GET" action="form_handling.html">
        <p>Use the following form to register</p>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <label for="age">Select your age</label>
        <select class="select-css" name="age">
            <?php

            for ($i = 18; $i < 100; $i++) {
                echo("<option>" . $i . "</option>");
            }
            ?>
            <option name="age" value="19">19</option>
            <option name="age" value="20">20</option>

        </select>
        <label for="country">Select your country</label>
        <select id="country" name="country" class="select-css">
            <option name="country" value="France">France</option>
            <option name="country" value="Belgium">Belgium</option>
            <option name="country" value="Switzerland">Switzerland</option>
            <option name="country" value="Estonia">Estonia</option>
        </select>
        <input type="Submit" class="btn" value="Submit">
    </form>
</div>

</body>
</html>