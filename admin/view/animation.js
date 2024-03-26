function loadinganimation(){
    const animatednode = document.createElement("div");
    animatednode.classList.add('animatedcircle');
    return animatednode;
}
const panels = document.querySelectorAll('.profile');
            
panels.forEach((panel) => {
    panel.addEventListener('click', () => {
        removeActiveClasses();
        panel.classList.add('test');
        dosomething();
    })
})

function removeActiveClasses(){
    panels.forEach(panel => {
        panel.classList.remove('test');
    })
}
function dosomething(){
    test=document.getElementsByClassName('test')[0].id
    loadinchat(test);
    // document.write("hello")
}
function loadinchat(){
    inchat=document.get
      if(inchat!==""){
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              // document.getElementById("error").innerHTML = this.responseText;
              // console.log("reached insertdb")
          }
      }
      xmlhttp.open("POST","../controller/loadintochat.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.send("msg="+message);
  }
}