// for health assistant table
function SendData()
{

  var name= document.getElementById('name').value;
  var employee_id= document.getElementById('employee_id').value;
  var phone_number= document.getElementById('phone_number').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var division = document.getElementById('division').value;
  var district = document.getElementById('district').value;
  var upazilla = document.getElementById('upazilla').value;
  var union = document.getElementById('union').value;
  var word = document.getElementById('word').value;
  var role = document.getElementById('role').value;

  var url = "/word/HAinsert";
  var data ={name:name,employee_id:employee_id,phone_number:phone_number,email:email,password:password,division:division,district:district,upazilla:upazilla,union:union,word:word,role:role};

  axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("Sorry you can not register with duplicate 'Email ID and Employee ID' Please insert your 'Email ID' and 'Employee ID' carefully.");
    });

}  


function UpdateData()
{

  var name= document.getElementById('name').value;
  var phone_number= document.getElementById('phone_number').value;
  var division = document.getElementById('division').value;
  var district = document.getElementById('district').value;
  var upazilla = document.getElementById('upazilla').value;
  var union = document.getElementById('union').value;
  var word = document.getElementById('word').value;
  var employee_id = document.getElementById('employee_id').value;

  var url = "/word/updateHA";
  var data ={name:name,phone_number:phone_number,division:division,district:district,upazilla:upazilla,union:union,word:word,employee_id:employee_id};

  axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("You have successfully Updated your Details.");
    });
}








  
  // for child information table
function ChildSendData()
{

    var child_name= document.getElementById('child_name').value;
    var birth_registration_number= document.getElementById('birth_registration_number').value;
    var gender= document.getElementById('gender').value;
    var father_name = document.getElementById('father_name').value;
    var mother_name = document.getElementById('mother_name').value;
    var parents_phone_number = document.getElementById('parents_phone_number').value;
    

    // alert(child_name+birth_registration_number+gender+father_name+mother_name+parents_phone_number);

    var url = "/word/ChildInsert";
    var data ={child_name:child_name,birth_registration_number:birth_registration_number,gender:gender,father_name:father_name,mother_name:mother_name,parents_phone_number:parents_phone_number};
    
    axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("Sorry you can not register with duplicate 'Health Registration Number' Please insert 'Health Registration Number' carefully.");
    });
    
}

function UpdateChildData()
{

    var child_name= document.getElementById('child_name').value;
    var birth_registration_number= document.getElementById('birth_registration_number').value;
    var gender= document.getElementById('gender').value;
    var father_name = document.getElementById('father_name').value;
    var mother_name = document.getElementById('mother_name').value;
    var parents_phone_number = document.getElementById('parents_phone_number').value;
    

    // alert(child_name+birth_registration_number+gender+father_name+mother_name+parents_phone_number);

    var url = "/word/ChildUpdate";
    var data ={child_name:child_name,birth_registration_number:birth_registration_number,gender:gender,father_name:father_name,mother_name:mother_name,parents_phone_number:parents_phone_number};
    
    axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("Update Faild.");
    });
    
}

// ====for search birth registration number=====


