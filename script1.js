function validateForm() {
  const nameRegex = /^[a-zA-Z][a-zA-Z\s-]{1,}$/;
  const matricRegex = /^[a-zA-Z0-9]{7,8}$/;
  const addressRegex = /^[a-zA-Z0-9\s\.\,]{5,}$/;
  const phoneRegex = /^[0-9\-]{7,15}$/;
  const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  const name = document.getElementById("name").value;
  const matric = document.getElementById("matricNum").value;
  const curraddress = document.getElementById("currAddress").value;
  const homeaddress = document.getElementById("homeAddress").value;
  const phone = document.getElementById("phone").value;
  const homephone = document.getElementById("homePhone").value;
  const email = document.getElementById("email").value;

  if (!nameRegex.test(name)) {
  alert("Invalid name");
  return false;
  }

  if (!matricRegex.test(matric)) {
  alert("Invalid matric number");
  return false;
  }

  if (!addressRegex.test(curraddress)) {
  alert("Invalid address");
  return false;
  }

  if (!addressRegex.test(homeaddress)) {
  alert("Invalid address");
  return false;
  }

  if (!phoneRegex.test(phone)) {
  alert("Invalid phone number");
  return false;
  }

  if (!phoneRegex.test(homephone)) {
  alert("Invalid phone number");
  return false;
  }

  if (!emailRegex.test(email)) {
  alert("Invalid email");
  return false;
  }

  return true;
}
