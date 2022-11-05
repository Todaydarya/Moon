function ValidateEmail(){
    var email = document.getElementById("userEmail").value;
    console.log(email);
    var array = email.split('@');
    for (i = 0; i < remSize.length; i++) {
        if(array[1] != "mail.ru"){
            if(array[1] != "gmail.com"){
                if(array[1] != "yandex.ru"){
                    alert("Не правильно введена почта");
                    // console.log("Email НЕ валидный");
                }else{
                    window.location.href = 'http://mooooooooooon/main_page.html';
                    // console.log("Email валидный");
                    remIndex = i;
                    break;
                }
            }else{
                window.location.href = 'http://mooooooooooon/main_page.html';
                // console.log("Email валидный");
            }
        } else {
            window.location.href = 'http://mooooooooooon/main_page.html';
            // console.log("Email валидный"); 
        }     
   }
}
