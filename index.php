<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./user_data.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="dob">Date Of Birth</label>
    <input type="date" name="dob" id="dob">
    <br>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" id="" value="Male">Male
    <input type="radio" name="gender" id="" value="Female">
    <br>
    <label for="country">Country</label>
     <select name="country">
        <option value="Nigeria">Nigeria</option>
        <option value="Ghana">Ghana</option>
     </select>
     <br>
     <button type="submit">Submit</button>
    </form>
</body>
</html>