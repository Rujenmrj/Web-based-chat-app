<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <style>
        body{
            height: 500px;
            width:800px
        }
        .profile{
            width:100%;
            height: 50px;
            background:blue;
            display: flex;
        }
        .profile:hover{
        	background:red;
        }
        .profile p{
        	position:relative;
            bottom:7px;
            left:10px;
        }
        .profile_img{
            position: relative;
            height: 50px ;
            width: 50px;
            background: red;
            border-radius: 50%;
        }
        .profile span{
        position: relative;
        }
        .test{
            background: black;
        }
    </style>
</head>
<body>

<?php
$a=['rujen'=>['delivered','thihs is latest message1'],'ram'=>['delivered','thihs is latest message2'],'sita'=>['seen','thihs is latest message3']];
foreach($a as $username=>$status)
{
echo "<div class=\"profile\">
        <div class=\"profile_img\">
        <img>
        </div>
        <p><strong>$username</strong></p>
        <span>$status[0]</span>
        <p>$status[1]</p>
    </div>";
}
?>
   <script>
        const panels = document.querySelectorAll('.profile');
            
panels.forEach((panel) => {
    panel.addEventListener('click', () => {
        removeActiveClasses();
        panel.classList.add('test');
        const lol=setTimeout(dosomething(), 5000);
    })
})

function removeActiveClasses(){
    panels.forEach(panel => {
        panel.classList.remove('test');
    })
}
function dosomething(){
	clicked=document.getElementsByClassName("test");
    clicked.value
    document.write("hello")
}

   
    </script>
</body>
</html>
