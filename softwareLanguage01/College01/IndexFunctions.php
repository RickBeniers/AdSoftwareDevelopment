<!-- This document is an collection of the task as given during the
college of software language 1 for the Associate degree software development.
the tasks as made in this document are saved by way of VCS github.
this document is meant to be shared with the teachers of the study.

This document is made by Rick Beniers, s1155108. 06-09-2023. -->
    <?php
    //declare and initialise variables
    $lid_1 = [];
    $lid_2 = [];
    $lid_3 = [];
    $groep = [];
    // Single line comment

    /*
     * Multi line comment
     */
    //

    /**
     * Display the data from ten variables.
     */
    function DisplayInfo(){

        //declare and initialise variables
        $voorNaam = "Rick";
        $achterNaam = "Beniers";
        $age = 26;
        $length = 182;
        $relatie = false;
        $dOb = "11-05-1997";
        $email = "Beniersrick@gmail.com";
        $mobiel = "0620297864";
        $werkzaam = "Secretaris bij BoKS";
        $familie = [
            "Gertjan",
            "Martijn",
            "Arenda"
        ];
        $arrayLength = count($familie);

        //if bool relatie equals yes or no change the data type to string
        // and assign specific strings
        if($relatie == true) {
            $relatie = "Ja";
        }else{
            $relatie = "Nee";
        }

        //print variables in browser
        echo "Naam: ".$voorNaam." <br>".$achterNaam."<br>Leeftijd: ".$age."<br>jaar, geboren op: ".$dOb
            ."<br>heeft een relatie: ".$relatie."<br> lengte: ".$length;
        echo "<br><br>"." -- Personelijke gegevens -- "."<br>"."Email: ".$email."<br> mobiel nummer: "
            .$mobiel."<br> werkt als: ".$werkzaam;

        //loop through the array and print each element in the browser
        for ($i=0; $i < $arrayLength; $i++){
            echo "<br>".$familie[$i];
        }
    }

    /**
     * Change the background color based on the time of day.
     */
    function CheckTimeOfDay(){
        //if the time in hours is between 0600 and 1200
        if(date("H") > 06 && date("H") < 12){
            //change background color to light orange
            ?> <style> .contentDiv{background-color: lightsalmon}</style> <?php
        }
        //if the time in  hours is between 1200 and 1700
        if(date("H") > 12 && date("H") < 17){
            //change background color to light blue
            ?> <style> .contentDiv{background-color: lightblue}</style> <?php
        }
        //if the time in hours is between 1700 and 2400
        if(date("H") > 17 && date("H") < 24){
            //change background color to dark grey
            ?> <style> .contentDiv{background-color: darkgray}</style> <?php
        }
    }

    /**
     * Echo the content of the multidimensional array
     */
    function PrintArray()
    {
        //voeg data toe aan persoon 1
        global $lid_1;
        AddDataToArray("Naam:", "Rick Beniers", $lid_1);
        AddDataToArray("Leeftijd:", 26, $lid_1);
        AddDataToArray("Geboren op:", "11-05-1997", $lid_1);
        AddDataToArray("Heeft relatie:", false, $lid_1);
        AddDataToArray("Lengte:", 182, $lid_1);
        AddDataToArray("Email:", "Beniersrick@gmail.com", $lid_1);
        AddDataToArray("Mobiel:","0620297864", $lid_1);
        AddDataToArray("Werkt als:", "Secretaris bij BoKS", $lid_1);

        //voeg data toe aan persoon 2
        global $lid_2;
        AddDataToArray("Naam:", "Paul", $lid_2);
        AddDataToArray("Leeftijd:", 20, $lid_2);
        AddDataToArray("Gbeoren op:", "99-99-9999", $lid_2);
        AddDataToArray("Heeft relatie:", false, $lid_2);
        AddDataToArray("Lengte:",180, $lid_2);
        AddDataToArray("Email:", "?@?", $lid_2);
        AddDataToArray("Mobiel:", "9999999999", $lid_2);
        AddDataToArray("Werkt als:", "Onbekend", $lid_2);

        //voeg data toe aan persoon 3
        global $lid_3;
        AddDataToArray("Naam:", "Sander", $lid_3);
        AddDataToArray("Leeftijd:",22, $lid_3);
        AddDataToArray("Gbeoren op:", "99-99-9999", $lid_3);
        AddDataToArray("Heeft relatie:", false, $lid_3);
        AddDataToArray("Lengte:", 179, $lid_3);
        AddDataToArray("Email:", "?@?", $lid_3);
        AddDataToArray("Mobiel:", "9999999999", $lid_3);
        AddDataToArray("Werkt als:", "Onbekend", $lid_3);

        //voeg array van persoon toe aan groep
        global $groep;
        AddDataToArray("Rick", $lid_1, $groep);
        AddDataToArray("Paul", $lid_2, $groep);
        AddDataToArray("Sander", $lid_3, $groep);

        //print array
        for($row=0; $row < count($groep);$row++){
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for($col=0; $col < count($groep[$col]); $col++){
                echo "<li>".$groep[$row][$col]."</li>";
            }
            echo "</ul>";
        }
    }

    /**
     * Populate variable array lid with data
     */
    function AddDataToArray($index,$value, $array)
    {
        //add the parameter value to  the array
        $array = [$index => $value];
    }
    ?>