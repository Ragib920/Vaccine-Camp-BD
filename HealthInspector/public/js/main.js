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

  var url = "/upazilla/HAinsert";
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

  var url = "/upazilla/updateHA";
  var data ={name:name,phone_number:phone_number,division:division,district:district,upazilla:upazilla,union:union,word:word,employee_id:employee_id};

  axios.post(url,data)
    .then(function (response) {
      alert(response.data);
    })
    .catch(function (error) {
      alert("You have successfully Updated your Details.");
    });
}




