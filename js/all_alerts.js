// All alerts functions of this website are here

// For guest user homepage
function events() {
    window.alert("Please Register as a Member to Join The Events.");
}

//For Forgot password in  Login page
function Contact_With_Committee() {
    window.alert('If you forget your password, please contact with the committee members.');
}

//for confirm password 
function password_check() {
    if (document.registration.password.value != document.registration.confirm_password.value) {
        alert("Passwords do not matched");
        document.registration.confirm_password.focus();
        return false;
    }
}