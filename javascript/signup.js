const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");


form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
}
continueBtn.onclick = () => {
    // Lets start AJAX
    let xhr = new XMLHttpRequest(); // creating new XML object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    // we have to send the form data thrpugh ajax to php
    let formData = new formData(form); // creating the new formData object
    xhr.send(formData);  // sending the form data to php
}