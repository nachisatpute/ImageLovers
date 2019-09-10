function like(str){
	var req=new XMLHttpRequest();
	req.open("get","http:likephp.php?likes="+str,true);
	req.send();
	req.onreadystatechange=function(){
		 if(req.readyState==4 && req.status==200){
     	document.getElementById(str).innerHTML=req.responseText;
     }
   };
   

}


//id="<?php $row=mysqli_fetch_array($show); echo $row['imgId'];?>"