<?php 
class About{
function displaymessage($food){
    echo "<script>alert('Welcome')</script>";
   foreach($food as $row){
       echo "Food name is " .$row. "</br>";
   }
}

function displaymessage1(){
    echo "<body style='background-color:cyan'>";
}
}