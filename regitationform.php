<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Regitation Form</title>
</head>
<body>
<div class="container">
    <h1 class="text-primary">Regitation</h1>
    <form class="form-group responsive" action="regitation.php" method="post">
        <label for="FirstName">First Name</label>
        <input  class="form-control mt-2 " id="FirstName" type="text" name="fname" placeholder="First Name" required>
        <label for="LastName">Last Name</label>
        <input  class="form-control mt-2 " id="LastName" type="text" name="lname" placeholder="Last Name" required>
        <label for="email">Email</label>
        <input  class="form-control mt-2 " id="email" type="email" name="email" placeholder="Email@" required>
        <label for="gender">Gender</label><br>
        <input  class=" mt-2 " id="gender" type="radio" name="gender" value="female" required> Female
        <input  class=" mt-2 " id="gender" type="radio" name="gender" value="male" required> Male<br>
        <label for="date">Date of Birth</label>
        <input id="date" class="form-control mt-2 "  type="date" name="dateof" placeholder="Password" required>
        <label for="password">Password</label>
        <input  class="form-control mt-2 " id="password" type="password" name="password" placeholder="Password" required>
        <label for="Confirmpassword">Confirm Password</label>
        <input  class="form-control mt-2 " id="Confirmpassword" type="password" name="copassword" placeholder="Confirm password" required>
        <input class=" form-control btn btn-success mt-2" type="submit" name="btn" value="Regitation">
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
