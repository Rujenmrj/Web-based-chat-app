    <?php
    session_start();
    $_SESSION['uid']="newid";
    include_once "../widgets/MessageField.php";
    $messageField=new MessageField(
        $placeHolder="Enter Message",
        $class="icon messagebox"
    );
    // if(isset($_POST["submit"])){
    //     $getmessage=$_POST['message'];
    //     $uid=$_SESSION['uid'];
    //     session_destroy();
    //     include_once("../model/postmessage.php");
    //     $pm =new postMessage();
    //     $pm->postmessage($getmessage,"uid");
    // }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="loadMessage()">
    <div class="container">
    <div class="nav-bar gridcenter">
        <ul>
            <li><a href="#home"><img src="../images/home.png" alt="home"></a></li>
            <li><a href="#addfriends"><img src="../images/friends.png" alt="add friends"></a></li>
            <li><a href="#reels"><img src="../images/reel.png" alt="reel"></a></li>
            <li><a href="#settings"><img src="../images/settings.png" alt="settings"></a></li>
        </ul>
    </div>

    <div class="people">
        <div style="background:white;">Messages <a href="#"><img src="../images/menu.png" alt="" width="30px"></a></div>
        <?php
        include_once("../widgets/people.php");
        ?>
    </div>

    <div class="chat">
        <div id="messages"></div>
        <!-- <form action="" method="post" class="messagebo"> -->
        <?php
        $messageField->create();
        ?>
            <input type="submit" onclick="postmess()">
        <!-- </form> -->

    </div>
    <div id="error"></div>
<script>
    // html enabled email
    let messegebox=document.getElementById('message')
    const messages=document.getElementById("messages");
    // let arr=Array("asdfasdfasdf","asdfasdf","1234","123314")
    // arr.forEach((msg) =>{ 
    //     messages.appendChild(createmessegebubble(msg));})
    
    
    
    function postmess(){
        // console.log("sent");
        insertintodb();
        messegebox.value='';
        messegebox.focus();
    }
    
    
    
    function createmessegebubble(msg){
        const node = document.createElement("div");
        const textnode = document.createTextNode(msg);
        node.classList.add('message');
        node.appendChild(textnode);
        return node;
    }
    
    
    function loadMessage() {
        if(messages.innerHTML===""){
            messages.append(loadinganimation());
        }
        var xmlhttp = new XMLHttpRequest();
        setInterval(() => {xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(messages.innerHTML!==this.response){
                    document.getElementById("messages").innerHTML = this.responseText;
                }
            }
        }
        xmlhttp.open("POST", "../controller/loadMessage.php", true);
        xmlhttp.send();
    }, 5000);
  }


  function insertintodb(){
      message=messegebox.value;
        if(message!==""){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("error").innerHTML = this.responseText;
                // console.log("reached insertdb")
            }
        }
        xmlhttp.open("POST","../controller/postmessage.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("msg="+message);
    }
  }
</script>
<script src="animation.js"></script>
</body>
</html>