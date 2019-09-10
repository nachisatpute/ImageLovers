function fetchUser(str){
   var req=new XMLHttpRequest();
   req.open("get","http:usertest.php?user="+str,true);
   req.send();
   req.onreadystatechange=function(){
     if(req.readyState==4 && req.status==200){
     	document.getElementById("user").innerHTML=req.responseText;
     }
   };
}

function validPassword(pass2){
      var pass1=document.getElementById("password1").value;
      if(pass1!=pass2){
      	alert("Please Enter Same Password");
      }

}