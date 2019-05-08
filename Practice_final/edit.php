<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Pre final exam</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Battambang" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="grey lighten-2">
    <div class="section container" id="add-info">
       <div class="row">
           <div class="col col12 m12 l5">
           <?php
                   include_once "connection.php";

                   $id = $_GET['id'];
                   $query = "SELECT * FROM tbl_user WHERE user_id = ".$id;
                   $datas = mysqli_query( $dbconnect, $query);

                   foreach($datas as $data):
                   
                   ?>
               <form action="#" method="POST">
                   <div class="input-field">
                       <i class="material-icons prefix">person</i>
                       <input type="text" name="name" id="text-name"  maxlength="25" required value="<?php echo $data['username'];?>">
                       <label for="text-name">Username</label>
                   </div>
                   <!-- ?php if($data['user_gender']=="Female"){?> -->
                  <?php if($data['user_gender']=="Female"){?>
                   <p>
                       <label>
                        <input class="with-gap" name="gender" type="radio" value="Male" />
                        <span>Male</span>
                      </label>
                    </p>
                   <p>
                    <label>
                        <input class="with-gap" name="gender" type="radio"  value="Female" checked />
                        <span>Female</span>
                      </label>
                    </p>
                    <?php }else{?>

                    <p>
                       <label>
                        <input class="with-gap" name="gender" type="radio" value="Male" checked />
                        <span>Male</span>
                      </label>
                    </p>
                   <p>
                    <label>
                        <input class="with-gap" name="gender" type="radio"  value="Female" />
                        <span>Female</span>
                      </label>
                    </p>
                   <?php }?>
                    <div class="input-field">
                            <i class="material-icons prefix">message</i>
                        <textarea name="message" id="sms" class="materialize-textarea" required value=""><?php echo $data['user_message'];?></textarea>
                        <label for="sms">Message</label>
                        
                    </div>
                    <a  class="btn left" href="index.php">
                        <span>Back</span>
                        <i class="material-icons left">arrow_back</i>
                    </a>
                    <button class="btn right" type="submit" name="btn-edit">
                        <span>edit User</span>
                        <i class="material-icons right"> edit </i>
                    </button>
               </form>
                 <?php endforeach; ?>
           </div>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
<?php

       include_once "connection.php";

       if(isset($_POST['btn-edit'])){

        $username = $_POST['name'];
        $user_gender = $_POST['gender'];
        $user_message = $_POST['message'];

        $query = " UPDATE tbl_user SET username='$username', user_gender='$user_gender', user_message='$user_message' WHERE user_id =" .$id;
        $result = mysqli_query( $dbconnect, $query);

        if($result){
            header("location:index.php");
        }else{
            header("location:adduser.php");
        }


       }
?>