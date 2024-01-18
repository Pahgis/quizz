
function getUsers() {
    fetch('./process/client/maj_listeparty.php')
        .then((response) => {
            console.log(response);
            return response.json()
        })
        .then((partys) => {
            console.log(partys)
            let id_user = document.querySelector("input[name='id_user']").value
            const partydiv = document.querySelector(".party")
             partydiv.innerHTML = ""
            partys.forEach(party => {
               
                partydiv.innerHTML += `
                <input type="hidden" name="party" value="${party['id']}">
                <button type="submit">Party  ${party['id']}</button>
               
           
        `
            });
        })
}
getUsers()



