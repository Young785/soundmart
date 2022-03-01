var togglePassword = document.getElementById("toggle-password");

if (togglePassword) {
    togglePassword.addEventListener('click', function() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });
}

function register() {
    var x = document.getElementById('agree-term');
    if (x.checked == false) {
        alert("Please agree to the Terms and Condition. Thanks!");
        return false;
    }
    return false;
}