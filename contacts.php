<?php

while(true){
    echo "========Contact Manager======\n";
    echo "1.Add Contact\n";
    echo "2.View Contact \n";
    echo "3.Exit\n";
    echo "Select An Option\n";
    
    $takeInput=fgets(STDIN);
    if($takeInput==1){
        //ad contact
    }elseif($takeInput==2){
        //view contact
    }elseif($takeInput==3){
       //exit 
       echo"Thank Tou";
        break;
    }
    else{
        //invalid input
    }
  
    break;
}
 
  

 ?>