function loadinganimation(){
    const animatednode = document.createElement("div");
    animatednode.classList.add('animatedcircle');
    return animatednode;
}
const panels = document.querySelectorAll('.profile');
const panel = document.querySelectorAll('.profile');

panels.forEach((panel) => {
    panel.addEventListener('click', () => {
        removeActiveClasses();
        panel.classList.add('activeinchat');
        inchatuser=document.getElementsByClassName('activeinchat')[0].id;
    loadinchat(inchatuser);
    })
})

function removeActiveClasses(){
    panels.forEach(panel => {
        panel.classList.remove('activeinchat');
        panel.classList.remove('inchat');
    })
}
function loadinchat(inchatuser){
    if(inchatuser===""){
    document.getElementById('message').disabled=true;
    document.getElementById('send').disabled=true;
    }
    else if(inchatuser!==""){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //   document.getElementById("error").innerHTML = this.responseText;
            //   console.log("reached loadintochat")
          }
      }
      xmlhttp.open("POST","../controller/loadintochat.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("usertoload="+inchatuser);
    }
    
}
function displayoption(){
    option=document.getElementById('showoptions');
    option
}
