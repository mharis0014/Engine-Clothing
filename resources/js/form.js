function signup() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var phone_no = document.getElementById("tel").value;
  var bottom = document.getElementById("bottom_txt");
  var pass_text = document.getElementById("small");
  var error_msg = document.getElementById("err_msg");
  error_msg.style.padding = "10px";

  var text;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!email.match(mailformat)) {
    text = "Please Enter valid Email";
    error_msg.innerHTML = text;
    return false;
  }
  var alphanumeric = /^[0-9a-zA-Z]+$/;
  if (name.length < 5 || !name.match(alphanumeric) || !isNaN(name[0])) {
    text = "Please Enter valid Name";
    error_msg.innerHTML = text;
    return false;
  }
  var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  if (!password.match(pass)) {
    text = "Please Enter a Strong Password";
    pass_text.classList.add("small2");
    pass_text.innerHTML =
      "Please use a combination of Capital letters(A-Z), small letters(a-z) and numbers(0-9)";
    bottom.innerHTML = "";
    error_msg.innerHTML = text;
    return false;
  }
  var phoneno = /([0-9]{11})/;
  if (!phone_no.match(phoneno)) {
    text = "Please Enter valid Phone no.";
    error_msg.innerHTML = text;
    return false;
  }
  return true;
}

function login() {
  var name = document.getElementById("name").value;
  var password = document.getElementById("password").value;
  var bottom = document.getElementById("bottom_txt");
  var pass_text = document.getElementById("small");
  var error_msg = document.getElementById("err_msg");
  error_msg.style.padding = "10px";

  var text;
  var alphanumeric = /^[0-9a-zA-Z]+$/;
  if (name.length < 5 || !name.match(alphanumeric) || !isNaN(name[0])) {
    text = "Please Enter valid Name";
    error_msg.innerHTML = text;
    return false;
  }
  var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  if (!password.match(pass)) {
    text = "Please Enter a Strong Password";
    pass_text.classList.add("small2");
    pass_text.innerHTML =
      "Please use a combination of Capital letters(A-Z), small letters(a-z) and numbers(0-9)";
    bottom.innerHTML = "";
    error_msg.innerHTML = text;
    return false;
  }
  return true;
}
