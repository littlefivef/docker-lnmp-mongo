<?php
    $link=mysqli_connect("mysql","root","123456");
    if(!$link){
        echo "mysql_connect fail";
    }else{
        echo "mysql_connect success";
    }
