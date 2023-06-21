<?php
    $arr=[10,20,30,40,50];  

    //in php both the functions sizeof() and count() return the same value
    $arrSize=sizeof($arr);
    $arrCount=count($arr);

    echo "Size: ".$arrSize."<br>Count: ".$arrCount;

    $count=array_count_values($arr);                                        //this function counts the occurences of the elements in an array & returns that array

    $ans=in_array(10,$arr);                                                         //this method returns 1 if the element is present in the array or returns 0 if not present

    $pos=array_search(30,$arr);                                                 //this method returns the position of the elemnt inside the array

    $arr1=[10,20,30,40,50];
    $arr2=[60,70];


    $newArr=array_replace($arr1,$arr2);                                     //replaces elements of 1st array with the elements of 2nd array
    echo "<pre>";
    print_r($newArr);
    echo "</pre>";
    //op:   60,70,30,40,50

    $arr3=array("a"=>array("red"),"b"=>array("green","pink"));
    $arr4=array("a"=>array("yellow"),"b"=>array("black"));


    $newArr2=array_replace_recursive($arr3,$arr4);                     //replaces elements of 1st array with the elements of 2nd array recursively
    echo "<pre>";
    print_r($newArr2);
    echo "</pre>";


    $arr5=[10,20,30,40,50];
    array_pop($arr5);                                                                       //pops/deletes the last element from the array 
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";

    array_push($arr5,50);                                                                   //pushes/adds the element to the last position/index in the array 
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";


    array_shift($arr5);                                                                         //pops/removes the very first element from the array
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";

    array_unshift($arr5,10);                                                                  //pushes/adds element to the very first position in the array
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";


    $arr6=[10,20,30,40,50];
    $arr7=[60];
    $arr8=array_merge($arr6,$arr7);                                                    //this method merges 2+ arrays and returns an new array
    //array_combine() also does the same but in this method the elements of the 1st array are considered as the keys and the elements of the 2nd array are the values of that keys, so the size of both arrays must be of same size

    $arr9=[10,20,30,40,50];
    $arr10=array_slice($arr9,2,3);                                                          //used to cut the array from a particular index and return a new array
    echo "<pre>";
    print_r($arr10);
    echo "</pre>";

    $arr11=[10,20,30,40,50];
    $arr12=[60,70];
    array_splice($arr11,2,0,$arr12);                                                          //used to cut the array from a particular index or used toreplace elements from 1 array to another array
    echo "<pre>";
    print_r($arr11);
    echo "</pre>";


    //array key functions

    $arr13=[1=>10,2=>20,3=>30];
    $arr14=array_keys($arr13);                                                                 // this method returns an array which contains the keys of the previous array
    echo "<pre>";
    print_r($arr14);
    echo "</pre>";

    $arr15=array_key_first($arr13);                                                            // this method returns the first key of the array
    echo $arr15;

    $arr15=array_key_last($arr13);                                                            // this method returns the last key of the array
    echo $arr15;

    $arr15=array_key_exists(2,$arr13);                                                        // this method returns 1 if the key exists in the array 
    echo $arr15."<br>";
    //key_exists() does the same work

    //array intersect functions

      $arr16=[1=>10,2=>20,3=>30];
      $arr17=[1=>10,4=>40];

      $arr18=array_intersect($arr16,$arr17);                                                    //return an array containing the elements/values that are same in both arrays
       print_r($arr18);

       $arr18=array_intersect_key($arr16,$arr17);                                             //return an array containing the keys that are same in both arrays
       print_r($arr18);

       
      $arr18=array_intersect_assoc($arr16,$arr17);                                             //return an array containing the elements/values as well as key that are same in both arrays
      print_r($arr18);

      //diff functions
      $arr19=array_diff($arr16,$arr17);                                                                //return an array containing the elements/values that are different in both arrays
      print_r($arr19);

      $arr18=array_diff_key($arr16,$arr17);                                                         //return an array containing the keys that are diff in both arrays
      print_r($arr18);

      $arr18=array_diff_assoc($arr16,$arr17);                                             
      print_r($arr18);


      //values method
      
      $arr19=array_values($arr16);                                                                      //this method returns only the values from an array
      print_r($arr19);  
      //array_unique() this method returns unique values from an array

      //array_flip() is used to make keys as values & values as keys
      //array_change_key_case() is used to change the case of keys CASE_UPPER or by default lower 
      //array_sum() used to add the elements of the array same array_product() to find the product
      //array_rand() is used for selecting any random element from an array
      //array_shuffle()  is used to shuffle the position of elements in an array
      //

?>
