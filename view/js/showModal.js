const $registerModal = document.getElementById("registerModal");
const $btnRegister = document.getElementById("btnRegister");
const $btnCancel = document.getElementById("btnCancel");

document.addEventListener("click", (e) =>{

    if(e.target === $btnRegister){
        $registerModal.classList.add("show-modal");
    }

    if(e.target === $btnCancel){
        $registerModal.classList.remove("show-modal");
    }
})