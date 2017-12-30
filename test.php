<?php
123
foreach($data as $key=>$value){
    echo $value->username."<br>";
    //var_dump($value);
}
echo "<hr>";
echo $page->display(array(0,1,2,3,4));
?>
<link href='https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.css' rel="stylesheet">
<style>
ul{
    list-style:none;
}
ul li{
    float:left;
    width:25px;
    height:25px;
    line-height:25px;
    text-align:center;
    border:1px solid #ddd;
}
ul li.next{
    width:125px;
}
.present{
    background:orange;
    color:white;
}

</style>

<script>
document.write(new Date());
</script>









