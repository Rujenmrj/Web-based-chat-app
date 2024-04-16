 const messegebox=document.getElementById('message');
 const messages=document.getElementById("messages");
 
 
 function postmess(){
    let message=messegebox.value;
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
     messegebox.value='';
     messegebox.focus();
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