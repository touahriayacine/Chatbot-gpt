function startFromTheEnd() {
    let chats = document.getElementById("chats");
    chats.scrollTo(0, chats.scrollHeight);
}
startFromTheEnd();


function configCancelButton() {
    let cancel_btn = document.getElementById("cancel");
    let form_container = document.getElementById("form-container");
    cancel_btn.addEventListener("click", () => {
        form_container.style = "display:none";
    });
}

configCancelButton();


function showFilter() {
    let form_container = document.getElementById("form-container");
    form_container.style = "display:flex";
}
