<form method="post">
  <label for="username">Username:</label><br>
  <input type="text" name="username"><br>
  <label for="email">Email:</label><br>
  <input type="text" name="email"><br>
  <label for="byear">Năm sinh:</label><br>
  <input type="text" name="byear"><br>
  <label for="gender">Giới tính:</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Nam</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Nữ</label><br>
  <input type="submit" value="Submit">
</form>
<?php
  include "user.php";
  include "file.php";
  if (isset($_POST['username'])){
    $user = new User();
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    $user->byear = $_POST['byear'];
    $user->gender = $_POST['gender'];
    $base64 = base64_encode(serialize($user));
    echo $base64;
  }
?>
</br>
<form method="post">
  <label for="base64">Base64:</label><br>
  <input type="text" name="base64"><br>
  <input type="submit" value="Submit">
</form>

<?php
  if (isset($_POST['base64'])){
    $str = base64_decode($_POST['base64']);   
    $user = unserialize($str, ['allowed_classes' => false]);
    echo $user->username.'<br>';
    echo $user->email.'<br>';
    echo $user->byear.'<br>';
    if ($user->gender == 'male'){
      echo 'nam<br>';
    }
    else if ($user->gender == 'female'){
      echo 'nữ<br>';
    }
  }
?>