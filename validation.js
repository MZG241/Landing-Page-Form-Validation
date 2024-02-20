function validation()
{

var fname = document.myform.fname.value;

  var mail = document.myform.mail.value;

  var password = document.myform.password.value;


if( fname == "" || fname == null)
{
    alert("Fill the name .");
    return false ;

}


if( mail == "" || mail == null)
{
    alert("Fill the email .");
    return false ;
    
}


if( password == "" || password == null){

    alert("Fill the password");
    return false;
}


if( password.length < 6)
{
    alert("Your password must have 6 characters");
    return false ;
    
}

}
