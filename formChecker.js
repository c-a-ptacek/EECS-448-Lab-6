function validateForm() {
  alert("Made it here!");
  let form = document.getElementById("store_form");
  let psw = validatePassword();
  let usr = validateUsername();
  let shipping = validateShipping();
  let items = validateItems();
  if (!psw) alert("Password Invalid");
  else if (!usr) alert("Username Invalid! Must be an email address!");
  else if (!shipping) alert("Must select a shipping option!");
  else if (!items) alert("Item quantities must be positive integers & at least one item must be purchased!");
  if (psw && usr && shipping && items) form.submit();
}

function validatePassword() {
  let psw = document.getElementById("pssword").value;
  if (psw == '') {
    return false;
  }
    return true;
}

function validateUsername() {
  let usr = document.getElementById("usrname").value;
  for (let i = 0; i < usr.length; i++) {
    if (usr[i] == '@') {
      let k = usr.length-4;
      if (usr.includes(".com", i) || usr.includes(".net", i) || usr.includes(".edu", i) || usr.includes(".org", i) || usr.includes(".gov", i)) {
        return true;
      }
    }
  }
  return false;
}

function validateShipping() {
  let shipping = document.getElementsByName("shipping");
  for (let values of shipping) {
    if (values.checked) return true;
  }
  return false;
}

function validateItems() {
  let blb = document.getElementById("blb").value;
  let psi = document.getElementById("psi").value;
  let jar = document.getElementById("jar").value;

  blb = Number(blb);
  psi = Number(psi);
  jar = Number(jar);

  if (blb == 0 && psi == 0 && jar == 0) return false;

  if (Number.isInteger(blb) && Number.isInteger(psi) && Number.isInteger(jar)) {
    if (blb >= 0 && psi >= 0 && jar >= 0) {
      return true;
    }
  }
  return false;
}
