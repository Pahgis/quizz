let ready = document.querySelector(".ready")
let party = document.querySelector("input[name='party2']")
let tim = document.querySelector(".timer")
let id = this.document.querySelector("input[type='hidden']").value
let id_user = document.querySelector("input[name='id_user']")
console.log(id_user)
console.log(party)
function liste(e) {
    fetch('./process/client/room_ajax.php')
        .then((res) => {
            return res.json();
        })
        .then((users) => {


            const div = document.querySelector(".liste")
            div.innerHTML = ""
            users.forEach(user => {
                if (user) {
                    div.innerHTML += `
                <li>${user["pseudo"]} </li>
                `
                }
            });
        })
}

liste();




let test = document.querySelector(".testt")
let start = document.querySelector(".start")


if (start) {
    start.addEventListener("click", function (e) {

        let trigger = {
            "etat": true,
            "party": party.value
        }
        fetch("./process/client/clear.php", {
            method: "POST",
            body: JSON.stringify(trigger)
        })

        clear()

    })
}

function clear() {
    fetch('./process/client/checkready.php')
        .then((res) => {
            return res.json();

        })
        .then((data) => {
            

            if (data["ready"] == 1) {

                ready.style.display ="none"

            }

        })


}

async function question() {
    fetch('./process/client/question.php')
        .then((res) => {
            return res.json()
        })
        .then((datas) => {
            let quest = document.querySelector(".quest")
   
             console.log(datas)
               launch(datas)
            
             
             
        })
}

function delay(milliseconds){
    return new Promise(resolve => {
        setTimeout(resolve, milliseconds);
    });
}
window.addEventListener("click",function(e){
    let checks = this.document.querySelectorAll("input[type='checkbox'")
   
        checks.forEach(check => {
            if(check["id"] != e.target.id){
                check.checked = false
            }
        });
    
  
})

async function launch(x){
    let quest = document.querySelector(".quest")
    
    
        
                let score=0;
            for (let index = 0; index < x.length; index++) {
                quest.innerHTML = `${x[index]["question"]}
                <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div>
                            <input class="form-check-input answers" type="checkbox" value="${x[index]['A']}" id="A">
                            <label class="form-check-label" for="A">${x[index]['A']}</label>
                        </div>
                        <div>
                            <input class="form-check-input answers" type="checkbox" value="${x[index]['B']}" id="A">
                            <label class="form-check-label" for="A">${x[index]['B']}</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="checkbox" value="${x[index]['C']}" id="A">
                            <label class="form-check-label" for="C">${x[index]['C']}</label>
                        </div>
                        <div>
                            <input class="form-check-label" type="checkbox" value="${x[index]['D']}" id="B">
                            <label class="form-check-label" for="D">${x[index]['D']}</label>
                        </div>
                    </div>
                    <input class="" type="hidden" value="${x[index]['answer']}" id="answer">
                    
                </div>
            </form>
                `

              for (let index = 0; index < 16; index++) {
                    
                    tim.innerHTML = `${15 - index}`
                    await  delay(50)
                    
                }
                let test = this.document.querySelectorAll("input[type='checkbox'")
                let id = this.document.querySelector("input[type='hidden']").value
                test.forEach(tests => {
                    if(tests.checked == true && tests.id == x[index]["answer"]){
                        score += x[index]["score"]
                        console.log(score)
                    }
                });
               
            } 
            console.log(score, party, id_user)
            resultat(score,party.value,id_user.value)
           
        
}

setInterval(() => {
    liste()
    clear()
}, 3000);

const interval = setInterval(() => {
    
    if(ready.style.display =="none"){
        question()
        clearInterval(interval, 1000)
    }
}, 1000);


function resultat(score, party, id){
    let obj = {
        "score" : score,
        "party_id": party,
        "id": id
    }
    fetch('./process/client/resultat.php', {
        method:"POST",
        body: JSON.stringify(obj)
    })
}