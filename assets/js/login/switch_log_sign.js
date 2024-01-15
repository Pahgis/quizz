const linkSign = document.querySelector('.switchon')
const linklog = document.querySelector('.switchoff')
const formSign = document.querySelector(".signIn")
const formLog = document.querySelector(".logIn")
let switch_log_sign = true;

linkSign.addEventListener("click", function(){
    
        formSign.style.display = "block"
        formLog.style.display = "none"
 
    
})

linklog.addEventListener("click", function(){
    
    formSign.style.display = "none"
    formLog.style.display = "block"


})


