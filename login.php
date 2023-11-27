 <?php
   // Check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Retrieve user input
       $username = $_POST["username"];
       $password = $_POST["password"];

       // Replace this with your actual authentication logic
       $storedUsername = "demo";
       $storedHashedPassword = password_hash("password", PASSWORD_DEFAULT);

       if ($username === $storedUsername && password_verify($password, $storedHashedPassword)) {
           echo "Login successful!";
       } else {
           echo "Invalid username or password. Please try again.";
       }
   }
   ?>