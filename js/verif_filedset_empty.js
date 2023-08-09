
function verification(){

    if(document.forms["authen"].elements["username"].value==""){
        alert("user name fieldset is empty. Please fill it!");
        return false;
    }else{
        if(document.forms["authen"].elements["psw"].value==""){
            alert("password fieldset is empty. Please fill it!");
            return false;
        }else{
            return true;
        }}

}