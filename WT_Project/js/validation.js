//Register
function validateForm(){
    const usernmame=document.getElementById('username').value.trim();
    const email=document.getElementById('email').value.trim();
    const password=document.getElementById('password').value.trim();
    const confirmpassword=document.getElementById('confirmpassword').value.trim();
    const role=document.getElementById('role').value.trim();
    const error=document.getElementById('error');

        let errorMessage = '';

    if (username === '') 
        {
        errorMessage = 'Full Name is required.';
    } 
    else if (email === '') 
        {
        errorMessage = 'Email Address is required.';
    } 
    else if (!validateEmail(email))
         {
        errorMessage = 'Please enter a valid email address.';
    } 
    else if (password === '') 
        {
        errorMessage = 'Password is required.';
    } 
    else if (password.length < 6) 
        {
        errorMessage = 'Password must be at least 6 characters.';
    } 
    else if (confirmPassword === '') 
        {
        errorMessage = 'Please confirm your password.';
    } 
    else if (password !== confirmPassword)
         {
        errorMessage = 'Passwords do not match.';
    } 
    else if (role === '') 
        {
        errorMessage = 'Please select a role.';
    }

    if (errorMessage !== '') 
        {
        errorBox.innerText = errorMessage;
        errorBox.style.display = 'block';
        return false; 
    } 
    else
     {
        errorBox.style.display = 'none';
        return true; 
    }
}
function validateEmail(email){
    const regex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}



