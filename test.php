
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Enter String for Plagiarism</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Url</th>
        <th>Available String In Website</th>
        <th>Match String in Website</th>
      </tr>
    </thead>
    <tbody>

<?php
// gives the parent url
// echo dirname('http://localhost/api/test.php');

// gives full url of the running page
// echo  __DIR__;

// that how you can merge different pages 
// include_once(__DIR__.'/index.php');



// $array = array("tahir","khan","afridi");
// echo json_encode($array);

// $variable = null;
// echo is_null($variable) ? "the variable is null " : "the variable is not null";


// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://jsonplaceholder.typicode.com/todos",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_POSTFIELDS => "",
//   CURLOPT_HTTPHEADER => array(
//      $new_token,
//      "Content-Type: application/json",
//      "cache-control: no-cache"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// $data = json_decode($response, true);
// if(!empty($data)){
//   foreach ($data as $key => $value) {
//    // echo $value['title']."<//br/>";
//    if($value['title'] == "illo expedita consequatur quia in"){
//     echo "Present";
//    }
//   } 
// }else{
//   echo "not valid";
// }

// do something with the data

// print_r($data);



$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com/plagiarism",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"text\": \"Elon Reeve Musk FRS is a business magnate and investor. He is the founder, CEO, and chief engineer of SpaceX; angel investor, CEO and product architect of Tesla, Inc.; founder of the Boring Company; co-founder of Neuralink and OpenAI; president of the Musk Foundation; and owner and CEO of Twitter, Inc.\",\r\n    \"language\": \"en\",\r\n    \"includeCitations\": false,\r\n    \"scrapeSources\": false\r\n}",
  CURLOPT_HTTPHEADER => [
    "X-RapidAPI-Host: plagiarism-checker-and-auto-citation-generator-multi-lingual.p.rapidapi.com",
    "X-RapidAPI-Key: 7bf4d3a507msh49d112a07579678p1ae535jsn1784f04e7b35",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
// echo $response['percentPlagiarism'];
$returnvalue = json_decode($response, true);
echo "<pre>"; print_r($returnvalue); "</pre>";
 foreach($returnvalue as $product) {
  if (is_array($product)){
        foreach($product as $val){ 
          ?>
      <tr>
       <td><?php echo $val['url']; ?></td>
       <td><?php echo $val['title']; ?></td>
       <td><?php

       foreach($val['matches'] as $matches){
        echo $matches['matchText'];
       }

        ?></td>

        </tr>
  <?php } ?>
    <h1>   <?//php echo $val['percentPlagiarism']; ?></h1>
  <?php } } ?>

     </tbody>
  </table>
  <?php if (is_array($returnvalue)) { ?>
    <h1>Plagiarisam Percentage  :  <?php echo $returnvalue['percentPlagiarism'];?> </h1>
<?php } ?>
</div>

</body>
</html>