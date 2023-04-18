let myfunc_registration=()=>{
    let home=document.getElementById('logo_id');
    let element_register=document.getElementById('register');
    let element_login=document.getElementById('login');
    let about=document.getElementById('about');
    element_register.classList.add("show");
    element_login.classList.remove("show");
    home.classList.remove("show");
    about.classList.remove("show");
    document.getElementById('logo_id').style.display='none';
    document.getElementById('about').style.display='none';
    let students=document.getElementById('students');
    students.classList.remove("show");

}
let myfunc_login=()=>{
    let home=document.getElementById('logo_id');
    let element_login=document.getElementById('login');
    let element_register=document.getElementById('register');
    let about=document.getElementById('about');
    element_login.classList.add("show");
    home.classList.remove("show");
    about.classList.remove("show");
    element_register.classList.remove("show");
    document.getElementById('logo_id').style.display='none';
    document.getElementById('about').style.display='none';
    let students=document.getElementById('students');
    students.classList.remove("show");
}
let show_about=()=>{
    let home=document.getElementById('logo_id');
    let element_login=document.getElementById('login');
    let element_register=document.getElementById('register');
    let about=document.getElementById('about');
    about.classList.add("show");
    home.classList.remove("show");
    home.classList.add("hide");
    element_login.classList.remove("show");
    element_register.classList.remove("show");
    
    let students=document.getElementById('students');
    students.classList.remove("show");
    
}
let show_home=()=>{
    let home=document.getElementById('logo_id');
    let element_login=document.getElementById('login');
    let element_register=document.getElementById('register');
    let about=document.getElementById('about');
    
    let students=document.getElementById('students');
    students.classList.remove("show");
    home.classList.add("show");
    about.classList.remove("show");
    element_login.classList.remove("show");
    element_register.classList.remove("show");
    
}
let show_student_form=()=>{
    let home=document.getElementById('logo_id');
    let students=document.getElementById('students');
    students.classList.add("show");
    let element_login=document.getElementById('login');
    let element_register=document.getElementById('register');
    let about=document.getElementById('about');
    // home.classList.add("show");
    home.classList.remove("show");
    home.classList.add("hide");
    about.classList.remove("show");
    element_login.classList.remove("show");
    element_register.classList.remove("show");
    
}