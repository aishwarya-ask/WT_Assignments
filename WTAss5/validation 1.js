function validation()
    {
        var user_name = document.getElementById('user_name').value;
	     var user_mobile = document.getElementById('user_mobile').value;
        var user_address = document.getElementById('user_address').value;
        var user_email = document.getElementById('user_email').value;
        var user_pswd = document.getElementById('user_pswd').value;

    var usercheck = /^[A-Za-z ]{3,30}$/;
	  var mobilecheck=/^(\+91)?[6|7|8|9]{1}[0-9]{9}$/;
	  var addresscheck =  /^[A-Za-z0-9 ]{1,}[-.,A-Za-z0-9  ]{3,80}$/;
	  var emailcheck =/^[A-Za-z0-9]{3,20}@[A-za-z]{3,}[.]{1}[A-za-z.]{2,8}$/;
	  var passwordcheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&])[A-Za-z0-9@$!%*?&]{8,15}$/;
	 
     
	   if(usercheck.test(user_name)){
          document.getElementById('usererror').innerHTML =" ";
      }else{
        
        document.getElementById('usererror').innerHTML =" **invalid username";
      
     return false;
      }
	  
	   if(mobilecheck.test(user_mobile)){
          document.getElementById('mobileerror').innerHTML =" ";
      }else{
        document.getElementById('mobileerror').innerHTML =" **Mobile No is invalid";
      return false;
      }   
	  
	  
	  if(addresscheck.test(user_address)){
          document.getElementById('addresserror').innerHTML =" ";
      }else{
        
        document.getElementById('addresserror').innerHTML =" ***invalid address";
      
     return false;
      }
	  
	  if(emailcheck.test(user_email)){
          document.getElementById('emailerror').innerHTML =" ";
      }else{
        document.getElementById('emailerror').innerHTML =" **Email-ID is invalid";
      return false;
      }      
      
	  if(passwordcheck.test(user_pswd)){
          document.getElementById('passworderror').innerHTML =" ";
      }else{
        document.getElementById('passworderror').innerHTML =" ***Password should contain Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
      return false;
      }  
 
  alert("updated succesfully");

    }