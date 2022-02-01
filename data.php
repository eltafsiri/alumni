  


  <?php

//sesuaikan dengan link spreadsheet yang didapatkan sebelumnya
$feed = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRU8s9Js9LM_uf9H-TvpWrXaIXhdYh9yVwpn17yrRHTav8rTtBfhY3WR_F0TUKx7RZzZN3K0PuCCvnh/pub?output=csv';
 
// variabel ini akan digunakan untuk melooping data
$keys = array();
$newArray = array();
 
//fungsi untuk mengkonversi csv ke array asosiatif
function csvToArray($file, $delimiter) { 
  if (($handle = fopen($file, 'r')) !== FALSE) { 
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j]; 
      } 
      $i++; 
    } 
    fclose($handle); 
  } 
  return $arr; 
} 
 
// menjalankan fungsi dan memasukan data ke variabel $data 
$data = csvToArray($feed, ',');
 
$count = count($data) - 1;
 
//row pertama digunakan untuk nama/header
$labels = array_shift($data);  

//membuat nama-nama key dari header
foreach ($labels as $label) {
  $keys[] = $label;
}

//menggabungkan key dan value
for ($j = 0; $j < $count; $j++) {
  $d = array_combine($keys, $data[$j]);
  $newArray[$j] = $d;
}
 
?>