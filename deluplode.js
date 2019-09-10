function deleteuplode(imgname){
   var req=new XMLHttpRequest();
   req.open("get","http:deluplode.php?imgname="+imgname,true);
   req.send();
   req.onreadystatechange=function(){
     if(req.readyState==4 && req.status==200){
     	document.getElementById("delete").innerHTML=req.responseText;
     	  header('location:http://localhost/Demo/Login/myuplodes.php');
     }
   };
}