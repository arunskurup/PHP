<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registriation form</title>
</head>
<h2> Blood Donation</h2>
<body bgcolor="#242bf8">
    <div>
        <h3>Registriation form</h3>
    </div>
    <form action="connect.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" name = "name" id="name" require ><br>

        <label for="email">Email</label><br>
        <input type="email" name ="email" require> <br> 
        <label for="phone">Phone Number</label><br>
        <input type="text" name ="phone" id="phone" require > <br> 

        <label for="Blood Group">Blood Group</label><br>
        <input type="text" name="blood" id="blood"><br>

        <input type="submit" name="submit" id="submit" value="Submit">
    </form>

    
</body>
</html>