<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=yukariiz_aceinthehole',
                       'yukariiz_aceinthehole_user', 'cas2221123yuka');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e) {
        $error = 'Unable to connect to the database server.';
        include '../includes/error.html.php';
        exit();
    }

if (isset($_POST['name'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $comment = $_POST['comment'];
    
    try {
      $sql = 'INSERT INTO contact SET
          name = :name,
          email = :email,
          role = :role,
          comment = :comment';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $name);
      $s->bindValue(':email', $email);
      $s->bindValue(':role', $role);
      $s->bindValue(':comment', $comment);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted form: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    
    include 'success.html.php';

}else{
    include 'contact.html.php'; 
}

?>