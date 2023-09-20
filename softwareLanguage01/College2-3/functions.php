<?php
function showRandomArrayElement($array){
    $index = rand(0, count($array));
    echo"Random selected element: ".$array[$index];
}
function varDetail($variable){

    echo"Variable heeft een waarde van: ".$variable.".<br> 
    De variable heeft een lengte van: ".strlen($variable)." karakters."."<br>
         De variable is van het type: ".gettype($variable)."<br>";
}
function CheckTimeOfDay(){
    //if the time in hours is between 0600 and 1200
    if(date("H") > 06 && date("H") < 12){
        //change background color to light orange
        return "<style> 
                    body{background-color: lightsalmon}
                </style>";
    }
    //if the time in  hours is between 1200 and 1700
    if(date("H") > 12 && date("H") < 17){
        //change background color to light blue
        return"<style> 
                    body{background-color: lightblue}
               </style>";
    }
    //if the time in hours is between 1700 and 2400
    if(date("H") > 17 && date("H") < 24){
        //change background color to dark grey
        return"<style> 
                    body{background-color: darkgray}
               </style>";
    }
}