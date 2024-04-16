<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="stylecontactus.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="logo">
                <a href="home.html" class="logo">
                    <h5>alumn<span>IT</span><span id="newspan">y</span></h5>
                </a>
            </div>
            <ul class="menu">
                <li><a href="aboutus.html">DEPARTMENT</a></li>
                <li><a href="alumni.html">ALUMNI</a></li>
                <li><a href="students.html">STUDENTS</a></li>
                <li><a href="events.html">EVENTS</a></li>
                <li><a href="contactus.html">CONTACT&nbsp;US</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
            </ul>
            <div class="bar">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>Connect with us</h1>
        <p style="font-size: 15px;">We would love to respond to your queries and get in touch with us</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>SEND YOUR REQUEST</h3>
                <form method="post" action="submit_feedback.php">
                    <div class="input-row">
                        <div class="input-group">
                            <label >Name: </label>
                            <input type="text" placeholder="John Abraham" id="contact-name" onkeyup="validateName()" name="name">
                            <span id="name-error"></span>
                        </div>
                        <div class="input-group">
                            <label >Phone:</label> 
                            <input type="text" placeholder="+919785412223" id="contact-phone"onkeyup="validatePhone()" name="phone">
                            <span id="phone-error"> </span>

                        </div>

                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label >Email:</label>
                            <input type="email" placeholder="john@gmail.com" id="contact-email" onkeyup="validateEmail()" name="email">
                            <span id="email-error"></span>
                        </div>
                        <div class="input-group">
                            <label> Subject:</label> 
                            <input type="text" placeholder="Talks (optional)" name="subject">
                            <span id="subject-error"></span>
                        </div>

                    
                    </div>


                    <div class="input-group">
                    <label>Message</label>
                    <textarea rows="5"placeholder="Suggestions" id="contact-message" onkeyup="validateMessage()" name="feedback"></textarea>
                    <span id="message-error" style="position: absolute;
                    margin-left:-150px;margin-top: 70px;font-size: 10px;color: red;"></span>
                    </div>
                
                    <div class="g-recaptcha" data-sitekey="6LfF8agpAAAAAMf16xgMrD5GTEmyoQmAavasFFAr"></div>


                  
                    <input class="but" type="submit" value="Submit" onclick="return validateForm()">SEND</button>
                    <span id="submit-error" style="color: red;"></span>
                </form>
               
            </div>
            <div class="contact-right">
                <h3>REACH US</h3>
                <table>
                    <tr>
                        <td> Email  </td>
                        <td>alumnity@gmail.com</td>
                    </tr>
                    <tr>
                        <td> Phone</td>
                        <td>+918523697410</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>Amal Jyothi College of Engineering<br>Koovappally<br>Kanjirappaly<br>Kottayam</td>
                    </tr>
                   
                </table>
            </div>

        </div>
    </div>
    
<div class="container">
    <h1>Map</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.7730735638906!2d76.81910517375854!3d9.528434630973878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b063627aebba8bf%3A0xb41021ca12190418!2sKoovapally%2C%20Kanjirapally%20-%20Erumely%20Rd%2C%20Koovappally%2C%20Kerala%20686518!5e0!3m2!1sen!2sin!4v1711564972615!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>




    <section class="footer" id="footer">
        
        <p style="color: black;font-weight: bold;">Connecting Paths, Empowering Futures: AlumnITy</p>
        <div class="icon">
            <i class="fab fa-facebook-f"></i> <!-- Change icon class to 'fab' for Facebook -->
            <i class="fab fa-twitter"></i> <!-- Change icon class to 'fab' for Twitter -->
            <i class="fab fa-instagram"></i> <!-- Change icon class to 'fab' for Instagram -->
            <i class="fab fa-linkedin"></i> <!-- Change icon class to 'fab' for LinkedIn -->
        </div>
        <p>&copy<span id="currentYear">2023</span>Fantastic4</p>                                   
    </section>
    <script>
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('.menu a');
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].parentNode.classList.add('active');
            }
        }
let prevScrollPos = window.pageYOffset;
const navbar = document.getElementById('navbar');

window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        navbar.style.top = "0";
    } else {
        navbar.style.top = "-50px"; // Adjust the value based on your navbar height
    }
    prevScrollPos = currentScrollPos;
}





        const sidenav = () => {
            const menu = document.querySelector('.bar');
            const nav = document.querySelector('.menu');

            menu.addEventListener('click', () => {
                menu.classList.toggle('bar-active');
                nav.classList.toggle('nav-active');
            });
        }
        sidenav();
        
        document.addEventListener("DOMContentLoaded", function() {
    var inputs = document.querySelectorAll('input[type="text"], input[type="email"], textarea');
    
    inputs.forEach(function(input) {
        // Store the original placeholder value
        input.dataset.placeholder = input.placeholder;

        input.addEventListener("focus", function() {
            this.placeholder = '';
        });
        
        input.addEventListener("blur", function() {
            if (!this.value) {
                // Restore the original placeholder value
                this.placeholder = this.dataset.placeholder;
            }
        });
    });
});


var nameError=document.getElementById('name-error');
var phoneError=document.getElementById('phone-error');
var emailError=document.getElementById('email-error');
var subjectError=document.getElementById('subject-error');
var submitError=document.getElementById('submit-error');



function validateName(){
    var name = document.getElementById('contact-name').value;

    if(name.length==0){
        nameError.innerHTML = 'Required';
        return false;
    }
   

    
    if(!name.match(/^[A-Za-z]+\s{1}[A-Za-z]+$/)){
        nameError.innerHTML = 'Write full name';
        return false;
    }
    nameError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;

}

function validatePhone(){
    var phone = document.getElementById('contact-phone').value;

    if(phone.length==0){
        phoneError.innerHTML='Required';
        return false;
    }
    if(phone.match(/[^\d]/)){
        phoneError.innerHTML = 'Invalid ';
        return false;
    }
    if(phone.length!==10){
        phoneError.innerHTML='Should be 10 digits';
        return false;
}
if(!phone.match(/^[0-9]{10}$/)) {
    phoneError.innerHTML='Invalid';
    return false;
}

phoneError.innerHTML='<i class="fa-solid fa-circle-check"></i>';
 return true;
}

function validateEmail(){
    var email =  document.getElementById('contact-email').value;


    if(email.length == 0){
        emailError.innerHTML='Required';
    return false;
    }
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'Invalid email'
        return false;
    }
    emailError.innerHTML ='<i class="fa-solid fa-circle-check"></i>';
    return true;
}

function validateMessage(){
    var message =  document.getElementById('contact-message').value;
    var messageError = document.getElementById('message-error'); // Corrected variable name
    
    var required = 30;
    var left = required - message.length;

    if(left > 0){
        messageError.innerHTML = left + ' more characters required'; // Corrected spelling of "characters"
        return false;
    }

    messageError.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}
function validateForm(){
    if(!validateName()||!validatePhone()||!validateEmail()||!validateMessage()){
        subjectError.style.display='block';
        submitError.innerHTML='Please fix error to submit';
        setTimeout(function(){submitError.style.display = 'none';},3000);
        return false;
    }
}




const yearSpan = document.querySelector('#currentYear');
const currentYear = new Date();
yearSpan.innerText = currentYear.getFullYear();
        </script>
</body>
<style>
    *{
    margin:0;
    padding:0;
}
button {
    background: #2600ff;
    color: #fff;
    border-radius: 30px;
    box-shadow: 0px 5px 15px 0px rgba(28, 0, 181, 0.3);
    border-radius: 0px;
    width: 90px;
    height: 40px;
    border-width: 0px;
    border-radius: 22px;
    cursor: pointer; /* Add cursor pointer to indicate it's clickable */
}

button:hover {
    background: #1c00b5; /* Change color on hover if desired */
}


body{
    background: #55ffe5;
    font-size: 14px;
    font-family: 'poppins',sans-serif;
    
}
nav {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: flex;
    justify-content: space-around;
    align-items: center;
    min-height: 10vh;
    background: rgb(50, 54, 54);
}
table{
    margin-top: 100px;
}
#navbar {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 999; /* Ensures it's above other content */
    transition: top 0.3s; /* Smooth transition effect */
    /* Additional styling for your navbar */
}

.logo {
    color: #fff;
    text-transform: capitalize;
    font-size: 24px;
    cursor: pointer;
    font-weight: 1000;
    letter-spacing: 1px;
    text-decoration: none;
}

.logo span {
    color: deepskyblue;
}

#newspan {
    color: #fff;
}

.menu {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: flex;
    justify-content: space-around;
    
}

.menu li {
    list-style: none;
}

.menu a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    padding: 30px;
    transition: .9s;
    font-weight: 600;
}

.menu a:hover {
    color: deepskyblue;
    font-weight: 500;
    letter-spacing: 2px;
}
.menu li.active a {
    color: deepskyblue; /* Change color to indicate the active state */
    font-weight: bold; /* You can add any other styles to indicate the active state */
}
.bar {
    display: none;
    cursor: pointer;
}

.bar div {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 5px;
    transition: all .5s ease;
}

@media screen and (max-width: 1024px) {
    .menu {
        width: 60%;
    }
}

@media screen and (max-width: 768px) {
    body {
        overflow-x: hidden;
    }
    .menu {
        position: absolute;
        right: -100%;
        height: 90vh;
        top: 10vh;
        background-color: #444343;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: flex;
        flex-direction: column;
        align-items: center;
        width:100%;
        transform: translateX(100%);
        transition: transform 0.5s ease-in-out;
    }
    .bar {
        display: block;
    }
}

.nav-active {
    transform: translateX(-100%);
}

.bar-active .bar-1 {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.bar-active .bar-2 {
    opacity: 0;
}

.bar-active .bar-3 {
    transform: rotate(45deg) translate(-5px, -6px);
}

/* Logo Styles */
.logo {
    color: #fff;
    text-transform: capitalize;
    font-size: 24px;
    cursor: pointer;
    font-weight: 1000;
    letter-spacing: 1px;
    display: flex;
    align-items: center;
}

.logo h5 {
    margin: 0;
    font-size: 24px;
    transition: transform 0.8s ease, opacity 0.3s ease;
}

.logo:hover h5 {
    transform: scale(1.2);
}

.logo span {
    color: deepskyblue;
    animation: fadeIn 3s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
  
.container{
    width:80%;
    margin: 50px auto;

}
.contact-box{
    background: #fff;
    display: flex;
    border-radius: 30px;
}
.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}
.contact-right{
    flex-basis: 40%;
    padding: 40px ;
    background: #1c00b5;
    color: #fff;
    border-radius: 30px;
}
h1{
    margin-top: 100px;
}
.container p{
    margin-bottom: 40px;
}
.input-row{
    display:flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.input-row .input-group{
        flex-basis: 45%;

}
input{
    width:100%;
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
    padding-bottom: 5px;
}
h3{
    font-size: 37px;
}
textarea{
    width:100%;
    border:1px solid #ccc;
    outline: none;
    padding: 10px;
    box-sizing: border-box;
}
label{
    margin-bottom: 6px;
    display: block;
    color: #1a8b0b;
}
::placeholder {
    color: #bdbdbd; /* Change to the color you desire */
    font-family: 'poppins',sans-serif;
}

.contact-left h3{
    color: #1c00b5;
    font-weight :600;
    margin-bottom:50px;
}

.contact-right h3{
   font-weight:600;
margin-bottom:30px;
     
}
tr td:first-child{
    padding-right: 20px;

}
tr td{
    padding-top: 20px;
}
.container{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
iframe{
    width:80%;
    height: 500px;
    filter: invert(100%);

}
.footer {
    position:static;
    bottom: 0;
    width: 100%;
    text-align: center;
    padding: 20px 0;
    background-color: #55ffe5; /* Change background color as needed */
    font-weight: 600;
    font-size:  16px; /* Adjust font size as needed */
    z-index: 999; /* Ensure the footer stays on top of other content */
}

.footer .icon {
    margin-top: 10px; /* Adjust spacing between text and icons as needed */
}

.footer .icon i {
    margin: 0 5px; /* Adjust spacing between icons as needed */
}
.icon .fa{
    color: #000000;
    margin: 0 13px;
    cursor: pointer;
    padding: 20px 0 ;
}
.input-group span{
    position: absolute;
   margin-left:-45px;
    font-size: 10px;
    color: red;

}
.input-group span i{
    color: seagreen;
    font-size: 15px;
}
.g-recaptcha{
    margin: 10px 90px;
}

</style>
</html>
