function validateForm() {
    var ep=document.getElementById("errorp");

    let x = document.forms["myForm"]["fname"].value;
    if (x.length<4) {
      ep.innerHTML="Name must greater than 3";
      return false;
    }

    let pass = document.forms["myForm"]["pass"].value;
    if (pass.length<7) {
      ep.innerHTML="Password must be greater than 6";
      return false;
    }

    let age = document.forms["myForm"]["age"].value;
    if (age=="") {
      ep.innerHTML="Age is required";
      return false;
    }

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let email = document.forms["myForm"]["email"].value;
    if (email.match(mailformat)) {
      return true;
    }
    else
    {
        ep.innerHTML="Provide your email";
        return false;
    }


}