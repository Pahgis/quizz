let test = document.querySelector(".test")
let ok = false;
window.addEventListener("click", function(e){
   e.preventDefault()
    question()
   
   
})


function question(){
    fetch('./process/client/question.php')
    .then((response) => {
       
        return response.json()
    })
    .then((datas) => {
       console.log(datas)
       const div = document.querySelector(".question")
       div.innerHTML = ""
      
       div.innerHTML += `
            <p>${datas['question']}</p>
       `
    })
}




