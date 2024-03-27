const progress = document.getElementById('progress');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const circles = document.querySelectorAll('.circle');

let currentActive = 1;

next.addEventListener('click', () => {
    currentActive++;
    if (currentActive > circles.length) {
        currentActive = circles.length;
    }
    update();
})

prev.addEventListener('click', () => {
    currentActive--;
    if (currentActive < 1) {
        currentActive = 1;
    }
    update();
    
})

function update() {
    circles.forEach((circle, idx) => {
        if (idx < currentActive) {
            circle.classList.add('active');
        } else {
            circle.classList.remove('active')
        };
    });

    const actives = document.querySelectorAll('.active');

    progress.style.width = (actives.length - 1) / (circles.length - 1) * 100 + '%';

    if (currentActive === 1) {
        prev.disabled = true;
    } 
    else if (currentActive === circles.length) {
        next.disabled = true;
    }else {
        prev.disabled = false;
        next.disabled = false;
    }
}
function loadincha(){

//     inchat=document.get
//       if(inchat!==""){
//       var xmlhttp = new XMLHttpRequest();
//       xmlhttp.onreadystatechange = function() {
//           if (this.readyState == 4 && this.status == 200) {
//               // document.getElementById("error").innerHTML = this.responseText;
//               // console.log("reached insertdb")
//           }
//       }
//       xmlhttp.open("POST","../controller/loadintochat.php", true);
//       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//       xmlhttp.send("msg="+message);
//   }
}