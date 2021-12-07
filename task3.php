<?php
    $error =[];
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        $address = $_POST['userAddress'];
        $url = $_POST['userLinkedin'];

        if (strlen($password<6)){
            $error['password'] ="password should be more than 6 char" ;
        }
        if (strlen(trim ($address))  != 10){
            $error['address']= "address should be 10 char" ;
        }
        if (count($error) > 0){
            foreach ($error as $key => $value){
                echo $value ;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form action = "<?php echo $_SERVER['PHP_SELF'] ;?> " method ="post">

  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="InputName" 
        name = "userName" aria-describedby="" placeholder="Enter Name" required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email"   class="form-control" id="InputEmail" 
        name = "userEmail" aria-describedby="emailHelp" placeholder="Enter email"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password"   class="form-control" id="InputPassword"
        name = "userPassword" placeholder="Password" required>
  </div>
 
  <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text"   class="form-control" id="InputAddress" 
        name = "userAddress" placeholder="Address" required>
  </div>
  <div class="form-group">
    <label for="exampleInputLinkedin">linkedin url</label>
    <input type="url"   class="form-control" id="InputLinkedin" 
            name = "userLinkedin" placeholder="linkedin url"required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>












