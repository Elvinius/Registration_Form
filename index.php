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
    <form method="POST" action="form_handling.php">
        <p>Use the following form to register</p>
        <input type="text" name="firstname" placeholder="First name" required>
        <input type="text" name="middlename" placeholder="Middle name">
        <input type="text" name="lastname" placeholder="Last name" required>
        <label class="radio-container">Mr
            <input type="radio" checked="checked" name="salutation">
            <span class="checkmark"></span>
        </label>
        <label class="radio-container">Mrs
            <input type="radio" name="salutation">
            <span class="checkmark"></span>
        </label>
        <label class="radio-container">Ms
            <input type="radio" name="salutation">
            <span class="checkmark"></span>
        </label>
        <input type="password" name="password" placeholder="Password" required>
        <label for="age">Select your age</label>
        <select class="select-css" name="age" required>
            <?php
            for ($i = 18; $i < 100; $i++) {
                echo("<option>" . $i . "</option>");
            }
            ?>
        </select>
        <input type="email" name="email" id="email" placeholder="Enter a valid email address" autocomplete="on" required>
        <input type="tel"  placeholder="Add your phone number" x-autocompletetype="tel" pattern="(^\+[0-9]{2,3}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)">
        <label for="country">Select your country</label>
        <select id="country" name="country" class="select-css">
            <?php
            $countries = ["Azerbaijan", "Germany", "Netherlands", "Estonia", "Sweden", "Romania", "Slovakia", "France", "Slovenia", "India"];
            foreach ($countries as $value) {
                echo("<option>" . $value . "</option>");
            }
            ?>
        </select>
        <label for="arrival-date">Select your arrival date</label>
        <input type="date" id="arrival-date" name="arrival-date" min="2020-01-01" max="2029-01-01" required>
        <input type="Submit" class="btn" value="Submit">
    </form>
</div>

</body>
</html>