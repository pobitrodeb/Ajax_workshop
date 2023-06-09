<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ajax_workshop | www.pobitrodeb.com</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <h2 class="text-center bg-primary text-white py-4">
      Section Title : JSON With PHP Revission 
    </h2>

    <section class="py-5">
        <div class="container">
            <?php
            $getJSONData = json_decode(file_get_contents('programingLanguate.json')); 
            // $objData     = json_decode($getJSONData); 

            // print_r($objData[0]);
       
            foreach($getJSONData as $value){
               echo '<li>'.$value->name.' '.$value->type. '</li>'; 
               
            }
            $getDataJson = file_get_contents('programingLanguate.json');
          
            ?>
        </div>
    </section>
   
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </body>
</html>
