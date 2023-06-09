//registro

const registro = document.querySelector('#registro')
registro.addEventListener('submit', (e) => {
    e.preventDefault()
   
    alert("si");
    
    const name = document.querySelector('#name').value
    const email = document.querySelector('#email').value
    const password = document.querySelector('#password').value    
    const Users = JSON.parse(localStorage.getItem('users')) || []
    const validarCorreo = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
    if (validarCorreo.test(email.value) ) {
      alert("no");
      window.location.href='../login.html';
  }
    Users.push({name: name, email: email, password: password})
    localStorage.setItem('users', JSON.stringify(Users))

    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro exitoso',
        showConfirmButton: false,
        timer: 1500
      })
    setTimeout(function(){
       // window.location.href = 'login.html';
    },2000)  
    
});


//login
const login= document.getElementById('login');
registro.addEventListener('submit', (e) => {
  e.preventDefault()



});
