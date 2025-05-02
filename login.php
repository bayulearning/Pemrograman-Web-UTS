<!DOCTYPE html>
<html>
<head><title>Login Form</title></head>
<body>
  <h2>Login</h2>
  <form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
  </form>

  <?php
  if (isset($_POST['login'])) {
    $conn = new mysqli("localhost", "root", "", "coba_web");

    $username = $_POST['username'];
    $password = $_POST['password'];

  //   $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  //   $result = $conn->query($sql);
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      echo "<p>Login berhasil sebagai <strong>$username</strong></p>";
    } else {
      echo "<p>Login gagal</p>";
    }
  }
  ?>
</body>
</html>
