function routepage(page){
    if(page!==""){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('container').innerHTML=this.responseText;
        }
    }
    if(page=='home'){
        console.log('routing to home');
        xmlhttp.open("GET","../controller/test.php", true);
        xmlhttp.send();
    }
    if(page=='friend'){
        console.log('routing to friend');
        xmlhttp.open("GET","../controller/postmessage.php", true);
        xmlhttp.send();
    }
    if(page=='setting'){
        console.log('routing to setting');
        xmlhttp.open("GET","../controller/postmessage.php", true);
        xmlhttp.send();
    }
    }
}