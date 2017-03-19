<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        h3
        {
           
        }
        span
        {
            color:#04acc8;
        }
    </style>
</head>
<body>
   
    <h3> Raison : <span><?php echo e($raison); ?></span> </h3>
     <h3> Nom : <span><?php echo e($nom); ?></h3>
      <h3> Email : <span><?php echo e($email); ?></span> </h3>
        <h3>  Message :<span> <?php echo e($msg); ?> </span> </h3>
</body>
</html>