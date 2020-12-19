// function validationcontactus(){

//     // <form class="contact-bg" id="contact-form" name="contact" method="post" >
//     // <input type="text" name="name" class="form-control" placeholder="Your Name">
//     // <input type="email" name="email" class="form-control" placeholder="Your E-mail">
//     // <input type="text" name="phone" class="form-control" placeholder="Phone Number">
//     // <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
//     // <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
//     var name = document.getElementById("name").value;
//     var email = document.getElementById("email").value;
//     var phone = document.getElementById("phone").value;
//     var message = document.getElementById("message").value;
//     var error_message = document.getElementById("error_message");
    
//     error_message.style.padding = "10px";
    
//     var text;
//     if(name.length < 5){
//       text = "Please Enter valid Name";
//       error_message.innerHTML = text;
//       return false;
//     }
//     if(email.indexOf("@") == -1 || email.length < 6){
//       text = "Please Enter valid Email";
//       error_message.innerHTML = text;
//       return false;
//     }
   
//     if(isNaN(phone) || phone.length != 10){
//       text = "Please Enter valid Phone Number";
//       error_message.innerHTML = text;
//       return false;
//     }
//     if(message.length <= 140){
//       text = "Please Enter More Than 140 Characters";
//       error_message.innerHTML = text;
//       return false;
//     }
//     alert("Form Submitted Successfully!");
//     return true;
//   }



  ///amol code


  function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}


function seterror(id, error){
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;

}

function validateForm(){
    var returnval = true;
    clearErrors();

    //perform validation and if validation fails, set the value of returnval to false
    var username = document.forms['myForm']["uname"].value;
    if (username.length<5){
        seterror("username", "*Length of name is too short");
        returnval = false;
    }

    if (username.length == 0){
        seterror("username", "*Length of name cannot be zero!");
        returnval = false;
    }

    var email = document.forms['myForm']["email"].value;
    if (email.length>15){
        seterror("email", "*Email length is too long");
        returnval = false;
    }

    var number = document.forms['myForm']["number"].value;
    if (number.length != 10){
        seterror("number", "*Phone number should be of 10 digits!");
        returnval = false;
    }

    var password = document.forms['myForm']["pass"].value;
    if (password.length < 6){

        // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
        seterror("password", "*Password should be atleast 6 characters long!");
        returnval = false;
    }

    var cpassword = document.forms['myForm']["cpass"].value;
    if (cpassword != password){
        seterror("cpassword", "*Password and Confirm password should match!");
        returnval = false;
    }

    return returnval;
}