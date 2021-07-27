function firstNameValidation(){
    var firstname =document.forms["mForm"]["firstname"].value;
   if(firstname===""){
       document.getElementById("fastNameErr").innerHTML="Field empty";
       return false;
   }
    
}
function lastNameValidation(){
    var lastname =document.forms["mForm"]["lastname"].value;
   if(lastname===""){
       document.getElementById("lastNameErr").innerHTML="Field empty";
       return false;
   }
    
}
function genderValidation(){
    if(document.getElementById("maleId").checked|| document.getElementById("femaleId").checked|| document.getElementById("othersId").checked){
        alert("Gender Selected"); 
    }
    else{  
        alert("Please Select Gender");
    }
}
function emailValidation(){
    let data = document.getElementById('emailId').value;
    if (data === "") {  
        window.alert('Email is empty!'); 
    }
}
function relegionValidation(){
    if(document.getElementById("Islam").checked|| document.getElementById("Hindu").checked|| document.getElementById("Buddha").checked|| document.getElementById("Other").checked){
        alert("Gender Selected"); 
    }
    else{  
        alert("Please Select Gender");
    }
}
function presentadressValidation(){
    var present_adress =document.forms["mForm"]["present_adress"].value;
   if(present_adress===""){
       document.getElementById("presentAdressErr").innerHTML="Field empty";
       return false;
   }
    
}
function parmanent_adressValidation(){
    var parmanent_adress =document.forms["mForm"]["parmanent_adress"].value;
   if(parmanent_adress===""){
       document.getElementById("parmanentAdressErr").innerHTML="Field empty";
       return false;
   }
    
}
function phoneValidation() {
    const inpObj = document.getElementById("phone");
    if (!inpObj.checkValidity()) {
      document.getElementById("demo").innerHTML = inpObj.validationMessage;
    }
  }
function nameValidation() {
    var data = document.getElementById('username').value;
    if (data === "") { 
        window.alert('Name is empty!');
    }
    else {
        let name_word = data.split(" ");
        if (name_word.length < 2) {
            window.alert('Name has less than two words!');
        }
        else { 
            let pattern = ['<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                            '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9'];
            
            let i;
            for (i = 0; i < pattern.length; i++) {
                if (data.includes(pattern[i])) { 
                    window.alert("Invalid Name!");
                    break;
                }
                else if (data[0] == pattern[i]) { 
                    window.alert("Invalid Name!");
                    break;
                }
            }
        }
    }
}


