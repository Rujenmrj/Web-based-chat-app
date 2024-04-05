<?php
function createmessage($username,$code,$codefor){
    $message="<html>
    <head>
        <title>Review Request Reminder</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                background:#cccccc;
            }
            table{
                border-spacing: 0;
            }
            td{
                padding: 0;
            }
            img{
                border:0;
            }
            .wrapper{
                width: 100%;
                table-layout: fixed;
                background-color: #cccccc;
                padding-bottom: 60px;
            }
            .main{
                background-color: #ffffff;
                margin: 0 auto;
                width: 100%;
                max-width: 600px;
                border-spacing:0;
                font-family: sans-serif;
                color: #171a1b;
            }
            .two-columns{
                text-align: center;
                font-size: 0;
            }
            .two-columns .column{
                width: 100%;
                max-width: 300px;
                display: inline-block;
                vertical-align: top;
                text-align: center;
            }
            .onecolumn{
                width: 100%;
                display: inline-block;
                vertical-align: top;
                text-align: center;
            }
            .hiddenforpost{
                display:none;
            }
            
        </style>
    </head>
    <body>
        <center class='wrapper'>
            <table class='main' width='100%'>
                <tr>
                    <td height='8' style='background-color: #171a1b;'></td>
                </tr>
                <tr>
                    <td style='padding: 14px 0 4px;'>
                    <table width='100%'>
                    <tr>
                        <td class='two-columns'>
                            <table class='column'>
                                <tr>
                                    <!-- <td>hello my friend</td> -->
                                </tr>
                            </table>
                            <table class='column'>
                                <tr>
                                    <td style='padding: 0 62px 10px;'><a href='localhost/webapp/index.php' target='_blank'><img
                                style='aspect-ratio: 2/1;
                                object-fit: contain;' width='180' title='Logo' src='https://i.ibb.co/KyXGMy0/logo.png' alt='logo' border='0'></a></td>
                            </tr>
                            </table>
                        </td>
                    </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                    <td height='200' style='background-color: #dbdbdb;'>
                        <table style='font-size: 30px; text-align: center; width: 100%;'>
                            <tr>
                                <td style='padding: 50px;'>Welcome $username,</td>
                            </tr>
                            <tr>
                                <td>use the verification code below to $codefor</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height='100' style='background-color: #dbdbdb;'>
                        <table style='padding:50px 36%; text-wrap: nowrap;'>
                            <tr height='20%'>
                                <td style='padding: 15px; border-radius: 15px; border: 2px rgb(128, 128, 128) solid; align-content: center; font-size: 30; font-weight: bold; text-wrap: nowrap;'>$code</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height='200' style='background-color: #dbdbdb;'>
                        <table style='font-size: 30px; text-align: center; width: 100%;'>
                            <tr>
                                <td>or</td>
                            </tr>
                            <tr>
                                <td style='padding-top: 50px;'>click the button below</td>
                            </tr>
                            <tr>
                                <td style='padding: 50px 0px 20px 0px;'><form action='localhost/webapp/admin/view/verifyuser.php' method='post' target='_blank'>
                                    <input type='text' hidden value='$code' name='code' class='hiddenforpost'>
                                    <input type='submit' value='Login' style='padding: 15px; border-radius: 15px; border: 2px rgb(128, 128, 128) solid; align-content: center; font-size: 30; font-weight: bold; text-wrap: nowrap; background-color: #dbdbdb;'>
                                </form></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height='100' style='background-color: #000000;'>
                        <table style='padding: 10px 0px 10px 65%;'>
                            <tr>
                                <td><a href='localhost/webapp/index.php' target='_blank'><img
                            style='aspect-ratio: 1/1;
                            object-fit: contain;' width='150' title='Logo' src='https://i.ibb.co/jz2BWyT/logov3.png' alt='logo'></a></td>
                        </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </center>
        
    </body>
    </html>";
    return $message;
}
    // createmessage("Rujen","098 123","login");
?>