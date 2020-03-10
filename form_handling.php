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
    $registration_entries = [$_POST["firstname"],$_POST["middlename"],$_POST["lastname"], $_POST["password"], $_POST["age"], $_POST["email"], $_POST["phone"], $_POST["country"], $_POST["arrival-date"]];
    $registration_text = "";
    foreach ($registration_entries as $value){
        $registration_text .= $value . "\n";
    }
    // Write the contents back to the file
    file_put_contents($file, $registration_text);
    global $display_array;
    $display_array = explode("\n", $registration_text);
    $registered_user = [
        "First name" => $display_array[0],
        "Middle name" => $display_array[1],
        "Last name" => $display_array[2],
        "Password" => $display_array[3],
        "Age" => $display_array[4],
        "Email" => $display_array[5],
        "Phone" => $display_array[6],
        "Country" => $display_array[7],
        "Arrival date" => $display_array[8]
    ];

    ?>

    <div id="container">
        <h1>Thank You</h1>
        <p>Here is the information you have submitted:</p>
        <ol>
            <?php
              foreach ($registered_user as $key => $value){
                  echo "<li> " . $key . "-" . $value . " </li>";
              }
            ?>
        </ol>
    </div>
</body>
</html>