<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'lastname'=> $_POST["lastname"],
	      'email'=>$_POST["email"],
	      'age'=>$_POST["age"],
	      'pwd'=>$_POST["pwd"],
	      'languague'=> $_POST["languague"],
	      'myfile'=> $_POST["myfile"],
	      'designation'=> $_POST["designation"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->lastName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/
?>
