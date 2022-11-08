const names = document.getElementById("name");
const mobile_num = document.getElementById("contact");
const gender = document.getElementById("gender");
const email = document.getElementById("email");
const department = document.getElementById("department");
function formValidation() {

    //name validation
    if(names.value === ""){
        document.getElementById("rNameErr").innerHTML="* Please enter your name!"
        return false;
    }

    if(!names.value.match(/^[a-z\sA-z]+$/)){
        document.getElementById("rNameErr").innerHTML="* Invalid name";
        names;
        return false;
    }

    if (names.value.length < 2 || names.value.length > 30) {
        document.getElementById("rNameErr").innerHTML="* Invalid name";
        names;
        return false;
    }

     //phonenumber validation 
     if(contact.value === ""){
        document.getElementById("rContactErr").innerHTML="* Please Enter Your phone number!";
        return false;
    } 

    if(!contact.value.match(/\d$/)){
        document.getElementById("rContactErr").innerHTML="* Invalid phone number";
        return false;
    }

    if(contact.value.length < 10){
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 digits";
        return false;
    }

    if(contact.value.length > 10){
        document.getElementById("rContactErr").innerHTML="* Phone number must be 10 digits";
        return false;
    }

    if(!contact.value.match(/^((98)|(97))[0-9]{8}$/)) {
        document.getElementById("rContactErr").innerHTML="* Invalid Phone Number Must Start with 98 or 97!";
        phoneNumber.focus();
        return false;
    }
        // //Gender validation
    if(gender.value === ""){
        document.getElementById("rGenderErr").innerHTML="* Please select your gender!";
        return false;
    }
    //email validation
    if(email.value === ""){
        document.getElementById("rEmailErr").innerHTML = "* Please enter your email !";
        return false;
    }

    if(email.value.length < 9 || email.value.length > 40){
        document.getElementById("rEmailErr").innerHTML="* Give proper email address";
        email.focus();
        return false;
    }

    if(!email.value.match(/^[A-za-z0-9._]{3,}@[A-Za-z]{3,6}[.]{1}[A-Za-z.]{2,6}$/)){
        document.getElementById("rEmailErr").innerHTML="* It's not a proper email";
        email.focus();
        return false;
    }
        // //Department validation
        if(department.value === ""){
            document.getElementById("rDepartmentErr").innerHTML="* Please select your department!";
            return false;
        }
    return true;
}