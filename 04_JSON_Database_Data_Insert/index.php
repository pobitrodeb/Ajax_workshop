<?php
    $con   = mysqli_connect('localhost', 'root', '', 'jsondata');
    $fileNmae  = 'data.json';
    $data  = file_get_contents($fileNmae);
    $arry = json_decode($data, true);
    echo "<pre>";
    print_r($arry);
    echo "</pre>";
    foreach ($arry as $value) {
      $query =  "INSERT INTO `users`(`name`, `gender`, `phone`, `is_active`) VALUES ('" . $value['name'] . "','" . $value['gender'] . "','" . $value['phone'] . "','" . $value['is_active'] . "')";
      mysqli_query($con, $query);
    }
echo "JSON data insert successfully";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ajax_workshop | www.pobitrodeb.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <h2 class="text-center bg-primary text-white py-4">
    Section Title : JSON data save database
  </h2>

  <section class="py-5">
    <div class="container">

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>