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
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $event1 = $_POST['event1'];
    $event2 = $_POST['event2'];
    $e_name = $_POST['emergency_name'];
    $e_contact = $_POST['emergency_contact'];
    $accommodations = $_POST['accommodations'];

    try {
      $sql = 'INSERT INTO registration SET
          name = :name,
          email = :email,
          gender = :gender,
          age = :age,
          role = :role,
          event1 = :event1,
          event2 = :event2,
          emergency_name = :emergency_name,
          emergency_contact = :emergency_contact,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $name);
      $s->bindValue(':email', $email);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':event1', $event1);
      $s->bindValue(':event2', $event2);
      $s->bindValue(':emergency_name', $e_name);
      $s->bindValue(':emergency_contact', $e_contact);
      $s->bindValue(':accommodations', $accommodations);
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
    include 'registration.html.php'; 
}

?>