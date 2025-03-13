<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Preview</title>
</head>
<body>
    <div>
        <h2>Preview</h2>
        <?php
        function getValue($key, $label) {
            return isset($_POST[$key]) && !empty($_POST[$key]) ? htmlspecialchars($_POST[$key]) : "$label: Not Provided";
        }

        $name = getValue('name', 'Name');
        $username = getValue('username', 'Username');
        $password = getValue('pass', 'Password'); 
        $address = getValue('address', 'Address');
        $country = getValue('country', 'Country');
        $zip = getValue('zip', 'Zip');
        $email = getValue('email', 'Email');
        $sex = getValue('sex', 'Sex');
        $about = getValue('about', 'About');
        $languages = isset($_POST['lang']) && !empty($_POST['lang']) ? " " . implode("</br>", $_POST['lang']) : "Languages: Not Provided";
        ?>

        <p><?php echo $name; ?></p>
        <p><?php echo $username; ?></p>
        <p><?php echo $password; ?></p>
        <p><?php echo $address; ?></p>
        <p><?php echo $country; ?></p>
        <p><?php echo $zip; ?></p>
        <p><?php echo $email; ?></p>
        <p><?php echo $sex; ?></p>
        <p><?php echo $languages; ?></p>
        <p><?php echo $about; ?></p>
    </div>
</body>
</html>
