<?php
    include("connect.php");

    $stringData = $_POST['dataString'];
    ini_set('display_errors', 1);
    
    $checkToken = "SELECT * FROM Oefeningen WHERE Token =  (' $stringData')";    
    $checkResult = mysqli_query($conn, $checkToken);

    if ($checkResult->num_rows > 0) {

        while($row = $checkResult->fetch_assoc()) {
            $token = $row["Token"];
            $oefening1 = $row['Oefening1'];    
            $oefening2 = $row['Oefening2'];    
            $oefening3 = $row['Oefening3'];    
            $oefening4 = $row['Oefening4'];
            $rep1 = $row['Herhaling1'];
            $rep2 = $row['Herhaling2'];
            $rep3 = $row['Herhaling3'];
            $rep4 = $row['Herhaling4'];
            $set1 = $row['Set1'];
            $set2 = $row['Set2'];    
            $set3 = $row['Set3'];    
            $set4 = $row['Set4'];
            
            echo "<div class='". $token . "'><p>Token: " . $token . "</p>";
                if(!empty($oefening1) && !empty($rep1) && !empty($set1)){
                    echo "<ion-card class='card card-md'><img src='assets/img/" . $oefening1 . ".jpg'/>";
                        echo "<ion-card-content class='card-content card-content-md'>
                                <ion-card-title class='card-title card-title-md'>" . $oefening1 ."</ion-card-title>".
                                "<p> Herhalingen:" . $rep1 . "<br> Sets:". $set1 . "</p>".
                        "</ion-card-content></ion-card>"; 
                }

                if(!empty($oefening2) && !empty($rep2) && !empty($set2)){
                    echo "<ion-card class='card card-md'><img src='assets/img/" . $oefening2 . ".jpg'/>";
                        echo "<ion-card-content class='card-content card-content-md'>
                                <ion-card-title class='card-title card-title-md'>" . $oefening2 ."</ion-card-title>".
                                "<p> Herhalingen:" . $rep2 . "<br> Sets:". $set2 . "</p>".
                        "</ion-card-content></ion-card>";  
                }

                if(!empty($oefening3) && !empty($rep3) && !empty($set3)){
                    echo "<ion-card class='card card-md'><img src='assets/img/" . $oefening3 . ".jpg'/>";
                        echo "<ion-card-content class='card-content card-content-md'>
                                <ion-card-title class='card-title card-title-md'>" . $oefening3 ."</ion-card-title>".
                                "<p> Herhalingen:" . $rep3 . "<br> Sets:". $set3 . "</p>".
                        "</ion-card-content></ion-card>";  
                }

                if(!empty($oefening4) && !empty($rep4) && !empty($set4)){
                    echo "<ion-card class='card card-md'><img src='assets/img/" . $oefening4 . ".jpg'/>";
                        echo "<ion-card-content class='card-content card-content-md'>
                                <ion-card-title class='card-title card-title-md'>" . $oefening4 ."</ion-card-title>".
                                "<p> Herhalingen:" . $rep4 . "<br> Sets:". $set4 . "</p>".
                        "</ion-card-content></ion-card>";  
                }
                
            echo"</div>";
        }
    } else {
        echo "0 results";
    }

    // $sqlGetSchema = "SELECT * FROM `Oefeningen`";
    // $result = $conn->query($sqlGetSchema);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         $token = $row["Token"];
    //         $oefening1 = $row['Oefening1'];    
    //         $oefening2 = $row['Oefening2'];    
    //         $oefening3 = $row['Oefening3'];    
    //         $oefening4 = $row['Oefening4'];
    //         $rep1 = $row['Herhaling1'];
    //         $rep2 = $row['Herhaling2'];
    //         $rep3 = $row['Herhaling3'];
    //         $rep4 = $row['Herhaling4'];
    //         $set1 = $row['Set1'];
    //         $set2 = $row['Set2'];    
    //         $set3 = $row['Set3'];    
    //         $set4 = $row['Set4'];
            
    //         echo "<div class='testClass ". $token . "'><p>Token: " . $token . "</p>";
    //             if(!empty($oefening1) && !empty($rep1) && !empty($set1)){
    //                 echo "<img src='img/" . $oefening1 . ".jpg'/>";
    //                 echo "<p>Oefeningen lage rug: " . $oefening1 ." Herhalingen:" . $rep1 . " Sets:". $set1 . "</p>"; 
    //             }

    //             if(!empty($oefening2) && !empty($rep2) && !empty($set2)){
    //                 echo "<img src='img/" . $oefening2 . ".jpg'/>";
    //                 echo "<p>Oefeningen nek: " . $oefening2 ." Herhalingen:" . $rep2 . " Sets:". $set2 . "</p>"; 
    //             }

    //             if(!empty($oefening3) && !empty($rep3) && !empty($set3)){
    //                 echo "<img src='img/" . $oefening3 . ".jpg'/>";
    //                 echo "<p>Oefeningen schouder: " . $oefening3 ." Herhalingen:" . $rep3 . " Sets:". $set3 . "</p>"; 
    //             }

    //             if(!empty($oefening4) && !empty($rep4) && !empty($set4)){
    //                 echo "<img src='img/" . $oefening4 . ".jpg'/>";
    //                 echo "<p>Oefeningen arm: " . $oefening4 ." Herhalingen:" . $rep4 . " Sets:". $set4 . "</p>"; 
    //             }
    //         echo"</div>";
    //     }
    // } else {
    //     echo("Error description: " . mysqli_error($conn));
    // }
    
    $conn->close();
?>