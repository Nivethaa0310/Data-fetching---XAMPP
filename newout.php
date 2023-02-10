<!DOCTYPE html>

<html>

<head>

    <title>Insert Page page</title>

</head>

<body>

    <center>

        <?php

        $conn = mysqli_connect("localhost", "root",  "", "staff");

       

     

        if($conn === false)

                                {

            die("ERROR: Could not connect. "

                . mysqli_connect_error());

        }

       

                                /*$discipline = $_POST['discipline'];

        $student_name =  $_POST['Student_name'];*/
                                $faculty_name= $_POST['faculty_name'];

                                $subcategory = $_POST['subcategory'];

                                $category = $_POST['category'];

                                $rg1 = $_POST['rg1'];

                                $rg2 = $_POST['rg2'];

                                $rg3 = $_POST['rg3'];

                                $rg4 = $_POST['rg4'];

                                $rg5 = $_POST['rg5'];
                               
                               

                               

                                $query = "SELECT `icno`  FROM `student_master` WHERE `Name`='$subcategory'" ;

                                $run= mysqli_query($conn,$query) or die(mysqli_error($conn));

                                $data = mysqli_fetch_array($run);

                               

                                $icno = $data['icno'];

                                                               

                                /*$sql = "INSERT INTO `college`(`student_name`, `discipline`, `rating1`) VALUES ('$student_name','$discipline','$rg1','$rg2','$rg3','$rg4','$rg5')";*/

                                $sql = "INSERT INTO school VALUES('$icno','$faculty_name','$subcategory','$category','$rg1','$rg2','$rg3','$rg4','$rg5')";

 

                                if ($conn->query($sql) === TRUE)

        {

                echo "

                <script language='javascript'>

                window.alert('Data Added successfully' );

                </script>

                ";

                echo "<script language='javascript'>";

              echo "window.location ='new.php';";

            echo "</script>";

        }

 

        ?>

                                </body>

                                </html>