<?php
    
    echo date("d-m-y")."<br>";         
    //day-> d: (01 to 31) j: (1 to 31) S: (st,nd,rd,th)
    //month -> m:(01, 02) F:  january to december M: jan to dec
    //year-> Y:(2023)  y: (23)
    //week-> D: (mon)  I: (monday)  z: (day outoff 365)

    date_default_timezone_set("Asia/Kolkata");                                      //to display time according to India
    echo date("h:i:s a")."<br>";

    //hour-> h: (01 to 12) H: (00 to 23) g: (1 to 12) G: (0 to 23)
    //minutes-> i: (00 to 59)
    //seconds-> s: (00 to 59)
    //am/pm-> a: (am or pm)
    //e-> to get the country name of the timezone

    //mktime() gmmktime() are used to go back to a specified date/day

    $date=date_create("2015/05/15");                                                        //to create a date in future or past
    date_add($date,date_interval_create_from_date_string("30 days"));     //to add a number of days to a given date          
    echo date_format($date,"d-m-Y")."<br>";

    //date_sub() to substract days from a date

    date_modify($date,"10 days");   //for substraction we write  "-10 days"

    $date=getdate();                                                                                    //to get the current date
    echo $date['mday']." ".$date['weekday']." ".$date['month']." ". $date['year']."<br>";


    //magic functions

    echo date("d-m-y",strtotime("now"))."<br>";                                         //strtotime gives whatever time you type in ex : next monday, +3 days, etc

    
?>