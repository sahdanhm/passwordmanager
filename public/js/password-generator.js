function generatePassword() {
  let pass = '';

  let long = document.getElementById('length').value;

  let char = 'abcdefghijklmnopqrstuvwxyz';
  char += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  char += '!@#$%^&*`~*()-_=+[]{};:?/';
  char += '0123456789';
if (long <= 200){
  for (i = 0; i < long; i++) {
    let indx = Math.round(Math.random() * char.length - 1);
    pass += char.charAt(indx);
  }
  document.getElementById('pass-output').innerHTML = pass;
}else{
  alert('Password too long\nMaximum : 200 digit')
}
console.log(pass);
}

function copy() {
  let pass = document.getElementById('pass-output').textContent;
  if (pass.includes('span')) {
    alert('Password has NOT generated yet');
  } else {
    let inputPass = document.createElement('input');
    inputPass.setAttribute('id','inputCopy')
    inputPass.value = pass;
    document.body.appendChild(inputPass);
    inputPass.select();
    document.execCommand('copy');
    document.getElementById('inputCopy').remove();
    alert(`Password Copied to Clipboard\nPassword : ${pass}`);
  }
}
