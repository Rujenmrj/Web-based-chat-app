 const messageBox=document.getElementById('message');
 const messages=document.getElementById("messages");
 const viewSentRequest=document.getElementById("request_sent");
 const viewReceivedRequest=document.getElementById("request_received");
 
 
 function postmess(){
    let message=messageBox.value;
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
     messageBox.value='';
     messageBox.focus();
}

function postmessonenter(e){
    if(e.code=='Enter'){
        postmess();
    }
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
    }, 1000);
}

function loadfriendrequest(){
    var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
            console.log("text ready");
             document.getElementById("friendsection2").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "../widgets/requestbox.php", true);
    xmlhttp.send();
}
viewSentRequest.onclick=function (){
    loadfriendrequest();
    console.log("loading friend request sent")
}


