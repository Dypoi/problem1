 if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:adminpage.php');

      }elseif($row['user_type'] == 'customer'){

         $_SESSION['customer_name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['address'] = $row['address'];
         $_SESSION['phone'] = $row['phone'];
         header('location:customer.php');

      }else{
         $error[] = 'incorrect email or password!';
      }
   }else{
      $error[] = 'incorrect email or password!';
   }
