var emailV, passwordV, nameV;
function readFom(){
    emailV=document.getElementById("Email").value;
    passwordV=document.getElementById("Password").value;
    nameV=document.getElementById("name").value;
    console.log(emailV,passwordV,nameV);
}
document.getElementById("submit").onclick=function(){
    readFom();

    firebase
        .database()
        .ref("wechat"+ emailV)
        .set({
            Email:emailV,
            password:passwordV,
            Name:nameV,

        });

}