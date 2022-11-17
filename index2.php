<?php

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://accfarm.com/api/v1/buy',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => array('offer_id' => '141','quantity' => '18','url' => 'https://accfarm.com/checkout?q=1&p=10'),
//   CURLOPT_HTTPHEADER => array("Content-Type: application/json; charset=utf-8",
// "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjU3NDYxLCJpc3MiOiJodHRwczovL2FjY2Zhcm0uY29tL2FwaS92MS91c2VyL2xvZ2luIiwiaWF0IjoxNjUzNDA2NzU0LCJleHAiOjE2NjA2MDY3NTQsIm5iZiI6MTY1MzQwNjc1NCwianRpIjoicHY0QTcwcUZlUnFSdU5kNyJ9.NNLjF9gtk7xqDkt4LT6RaryPGMjyXy71eWts1HKrXTk"
//   ),
// ));
hr@ropsam.compact(varname)
majida
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://app.plaraphy.com/api/sentiment",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "text=What is text on a website?
Image result for text in website
Website texts are texts that are created especially for use on the Internet. Text is the most important part of most websites – even ahead of other formats such as image and video. Various features distinguish website texts from other types of texts. These include a specific HTML design and search engine optimization",
                    CURLOPT_HTTPHEADER => array(
                        "accept: application/json",
                        "authorization: Bearer 5094|yr7fx5CC6fH4wmwpIFc2daDQemeEsoAidy5M04Vp",
                        "cache-control: no-cache",
                        "content-type: application/x-www-form-urlencoded"
                    ),
                    ));

$response = curl_exec($curl);

curl_close($curl);
echo $response;