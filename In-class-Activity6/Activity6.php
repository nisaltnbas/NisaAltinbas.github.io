<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <form action="Activity6-preview.php" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Enter your name"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Enter your username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country">
                        <option value="" selected disabled>(Select a country)</option>
                        <option value="Türkiye">Türkiye</option>
                        <option value="Almanya">Almanya</option>
                        <option value="Amerika">Amerika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ZIP Code:</td>
                <td><input type="text" name="zip"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>
                    <input type="radio" name="sex" value="male"> Male
                    <input type="radio" name="sex" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>Language:</td>
                <td>
                    <input type="checkbox" name="lang[]" value="English"> English
                    <input type="checkbox" name="lang[]" value="French"> French
                    <input type="checkbox" name="lang[]" value="German"> German
                </td>
            </tr>
            <tr>
                <td>About:</td>
                <td><textarea name="about" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <td >
                    <button class="submit-button" type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
