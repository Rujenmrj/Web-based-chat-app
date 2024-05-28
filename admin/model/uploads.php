<?php
session_start();
?>
<?php
//check the form is submitted or not
$te = $pe = $fe = $de ="";
if(isset($_POST["submit"])){
    echo "hello";

        if(($_FILES["profilepic"]["type"])=="image/jpeg" || ($_FILES["profilepic"]["type"])=="image/jpg" || ($_FILES["profilepic"]["type"])=="image/png")
        {
            $np=$_FILES["profilepic"]["name"];
            $tmpnamep=$_FILES["profilepic"]["tmp_name"];
            $updlocationp="uploads/img/".$np;

            
        }
        else
        {
            echo "*Picture needs to be in jpg or jpeg or png";
        }
        
    }
    if (empty($_FILES["thumb"]["name"])) {
        $fe = "*File is required";
    }
    else{
        if (($_FILES["thumb"]["type"])!= 'application/pdf')
        {
            $fe = "*File needs to be pdf";
        }
        else{
            $name=$_FILES["thumb"]["name"];
            $tmpname=$_FILES["thumb"]["tmp_name"];
            $updlocation="uploads/file/".$name;
        }


    }
    if (empty($_POST['description'])) {
        $de = "*Description is required";
    }
    else{
        $dp=$_POST['description'];
    }

    if($te == "" && $pe == "" && $fe == "" && $de == "")
    {
        $sql="INSERT into book(title,file,Photo,description)VALUES('$tit','$name','$np','$dp')";
        include("co.php");
        $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($qry){
            //uploading the file to uploads folder 
            move_uploaded_file($tmpname, $updlocation);
            move_uploaded_file($tmpnamep, $updlocationp);
            echo '<div class="alert alert-success" role="alert">File uploaded successfully!</div>';
        }
    }
?>

