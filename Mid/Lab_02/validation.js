function SubmitForm() {
 
    let name = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let pass = document.getElementById("pass").value;
    let cpass = document.getElementById("cpass").value;
 
    
    if (name === "" || email === "" || phone === "" || pass === "" || cpass === "") {
        alert("All fields are required!");
        return;
    }
 
    
    if (!email.includes("@")) {
        alert("Email must contain '@'");
        return;
    }
 
    
    if (!/^[0-9]+$/.test(phone)) {
        alert("Phone number must contain digits only!");
        return;
    }
 
    
    if (pass !== cpass) {
        alert("Passwords do not match!");
        return;
    }
 
    
    document.getElementById("result").innerHTML =
        "<h3>Registration Successful!</h3>" +
        "<p><b>Name:</b> " + name + "</p>" +
        "<p><b>Email:</b> " + email + "</p>" +
        "<p><b>Phone:</b> " + phone + "</p>";
}
 
 

function addActivity() {
 
    let activity = document.getElementById("submit").value.trim();
 
    if (activity === "") {
        alert("cannot be empty!");
        return;
    }
 
    let div = document.createElement("div");
    div.style.margin = "5px 0";
    div.style.padding = "5px";
    div.style.border = "1px solid black";
 
    div.innerHTML = activity +
        " <button onclick='this.parentElement.remove()'>Remove</button>";
 
    document.getElementById("activityList").appendChild(div);
 
    document.getElementById("activityInput").value = ""; 
}