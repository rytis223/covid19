<?php

    include "logic.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">

    <!-- Bootstarp CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- Bootstarp Js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Google foni -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&display=swap" rel="stylesheet">

    <!-- my Stylesheet-->
    <link rel="stylesheet" href="style.css">


    <title>Covid-19 Tracker</title>
</head>

<body>
    <div class="container container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the Covid-19 cases around the world.</h5>
    </div>

    <divl class="container-fluid">
        <table class="table">
            <thead calss="thead-dark">
                <tr>
                <th scope="col">Coutry</th>
                <th scope="col">Confirmed</th>
                <th scope="col">Recovered</th>
                <th scope="col">Deaths</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach($data as $key=> $value){ 
                $increase = $value[$days_count]['confirmed']- [$days_count_prev]['confirmed']
                 ?>
                 <tr>
                 <th><?php echo $key;?></th>
                 <td>
                 <?php echo $value[$days_count]['confirmed']?>
                 <?php if($increase !=0){?>
                 <?php echo $increase;?>
                 <small class="text-danger"><i class="fas fa-arrow-up"></i><?php echo $increase; ?></small>
                 <?php ?>

                 </td>
                 <td>
                 <?php echo $value[$days_count]['recovered']?>
                 </td>

                 <td>
                 <?php echo $value[$days_count]['deaths']?>
                 </td>
                 </tr>



            <?php }?>

            </tbody>
        </table>
    </divl>
</body>

</html>