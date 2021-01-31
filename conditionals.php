<?php
echo date('D');
if(date('D')=="Mon"){
    echo "We are on Monday";
}
echo '</br>'
if(date('M')=="Oct"){
    echo "We are in October";
}
echo '</br>'
if(date('i')<10){
    echo "the curren time is less tahan 10";
}else{
    if(date('i')>15){
        echo "the current time is more than 15";
    }else{
        echo "doe not meet any conditions";
    }
}
echo '</br>'
switch (date('D')){
    case "Mon":
        echo "today is monday";
        break;
    case "Tue":
        echo "today is tuesday";
}