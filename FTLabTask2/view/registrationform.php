<!DOCTYPE HTML>
<html>
<head>
    <script defer src="script.js"> </script>
</head>
<body>

    <?php  
        $validatefname="";
        $validatelname="";
        $validateage="";
        $validateradio="";
        $validatecheckbox="";
        $validateemail="";
        $validatepwd="";
        $validatefile=""; 
        $L1=$L2=$L3="";  
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $fname=$_REQUEST["fname"];
            $lname=$_REQUEST["lname"];
            $age=$_REQUEST["age"];
            $email=$_REQUEST["email"];
            $pwd=$_REQUEST["pwd"];
            $image=$_REQUEST["file"];
            

            if(empty($fname))
            {
                $validatefname = "Enter your First Name Please!";
            }
            else
            {
                $fname=$_REQUEST["fname"];
                $validatefname = "Your First Name is: ". $fname;
            }

            if(empty($lname))
            {
                $validatelname = "Enter your Last Name Please!";
            }
            else
            {
                $lname=$_REQUEST["lname"];
                $validatelname = "Your Last Name is: ".$lname;
            }

            if(empty($age))
            {
                $validateage= "You must enter your Age!";
            }           
            else
            {
                $age=$_REQUEST["age"];
                $validateage = "Your age is : ".$age;
            }

            if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
            {
                $validateemail="You must enter your email!";
            }
            else
            {
                $validateemail= "Your email is: ".$email;
            }

            if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $pwd)) 
            {
                $validatepwd = "Password atleast contain 1 special character";
            } 
            if(strlen($pwd) < 8) 
            {
                $validatepwd = "Password must contain atleast 8 characters";
            }
            else 
            {
                $validatepwd= "Your password is: ".$pwd."";
            }

            if(!isset($_REQUEST["lan1"])&&!isset($_REQUEST["lan2"])&&!isset($_REQUEST["lan3"]))
            {
                $validatecheckbox = "please select at least one of the three Languages";
        
            }
            else
            {
                $validatecheckbox = "Your Prefered Languages are: ";

                if(isset($_REQUEST["lan1"]))
                {
                    $L1=" ". $_REQUEST["lan1"];
                }
                if(isset($_REQUEST["lan2"]))
                { 
                    $L2=" ". $_REQUEST["lan2"];
                }
                if(isset($_REQUEST["lan3"]))
                {
                    $L3=" ".$_REQUEST["lan3"];
                }
            }

            if(isset($_REQUEST["r1"]))
            {
                $validateradio= "You are: ". $_REQUEST["r1"];
            }
            else
            {
                $validateradio= "please select one of the Designations";
            }
            $formdata=array(

                'firstname'=>$fname,
    
                'lastname'=>$lname,
    
                'age'=>$age,
    
                'designation'=>$_REQUEST["r1"],
    
                'language'=>$L1,
    
                'email'=>$email,
    
                'password'=>$pwd,
    
                'image'=>$image
    
            );
    
            if($L2!="")
    
            {
    
                $formdata['language']=$formdata['language'].",".$L2;
    
            }
    
            if($L3!="")
    
            {
    
                $formdata['language']=$formdata['language'].",".$L3;
    
            }
    
            
    
            {
    
                echo "Data successfully saved<br>";
    
            }
    
                 
        }
             
        ?>
        
        
        

        <h1>
            Registration From
        </h1>
        <hr>
        <form id="form" action="" method="POST">
            <table>
                <tr>
                    <td><label for="fname">First Name:</label></td>                       
                    <td><input type="text" id="fname" name="fname" required></td>
                                                      
                </tr>
                <tr>
                    <td><label for="lname">Last Name:</label></td>                       
                    <td><input type="text" id="lname" name="lname" required></td>                                     
                </tr>
                <tr>
                    <td><label for="age">Age:</label></td>                       
                    <td><input type="text" id="age" name="age" required></td>                                    
                </tr>
                <tr>
                    <td><label for="designation">Designation:</label></td>                       
                    <td>
                        <input type="radio" id="jp" name="r1" value="Junior Programmer" required>
                        <label for="jp">Junior Programmer</label>
                        <input type="radio" id="sp" name="r1" value="Senior Programmer" required>
                        <label for="sp">Senior Programmer</label>
                        <input type="radio" id="pl" name="r1" value="Project Lead" required>
                        <label for="pl">Project Lead</label>
                    </td>
                                                                                                          
                </tr>
                <tr>
                    <td><label for="prflan">Prefered Language:</label></td>
                    <td>
                        <input type="checkbox" id="lan1" name="lan1" value="JAVA">
                        <label for="lan1">JAVA</label>
                        <input type="checkbox" id="lan2" name="lan2" value="PHP">
                        <label for="lan2">PHP</label>
                        <input type="checkbox" id="lan3" name="lan3" value="C++">
                        <label for="lan3">C++</label>
                    </td>
                    
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>                       
                    <td><input type="email" id="email" name="email"required></td>                                  
                </tr>
                <tr>
                    <td><label for="pwd">Password:</label></td>                       
                    <td><input type="password" id="pwd" name="pwd"required></td>                                  
                </tr>  
                <tr>
                    <td><label for="file">Please choose a file</label></td>
                    <td><input type="file" id="file" name="file"></td> <?php echo $validatefile; ?>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit">
                    <input type="reset"></td>
                </tr>
            </table>           
        </form>


        <h2>Your Output:</h2>
        <?php 
        echo $validatefname;
        echo "<br>";
        echo $validatelname;
        echo "<br>";
        echo $validateage;
        echo "<br>";
        echo $validateradio;
        echo "<br>";
        echo $validatecheckbox;
        echo $L1;
        echo $L2;
        echo $L3;
        echo "<br>";
        echo $validateemail;
        echo "<br>";
        echo $validatepwd;
        ?>         
    </body>
</html>
