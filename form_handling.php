<!DOCTYPE html>
<html>
<head>
	<title>Login details</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php
    $file = 'registration.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $registration_entries = [$_POST["firstname"],$_POST["middlename"],$_POST["lastname"], $_POST["email"]  ];
    $registration_text = "";
    foreach ($registration_entries as $value){
        $registration_text .= $value . "\n";
    }
    // Write the contents back to the file
    file_put_contents($file, $registration_text);
    global $display_array;
    $display_array = explode("\n", $registration_text);

    ?>

    <div id="container">
        <h1>Thank You</h1>
        <p>Here is the information you have submitted:</p>
        <ol>
            <li><em>Name:</em> <?php echo $display_array[0]?></li>
            <li><em>Email:</em> <?php echo $display_array[1]?></li>
            <li><em>Subject:</em> <?php echo $_POST["country"]?></li>
            <li><em>Message:</em> <?php echo $_POST["age"]?></li>
            <li><em>Message:</em> <?php echo $_POST["salutation"]?></li>
        </ol>
    </div>
</body>
</html>