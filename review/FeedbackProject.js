
function validateFrom()
{
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var Comments = document.getElementById('Comments').value;
  var attachment = document.getElementById('attachment').value;
  

  if(name == "" || email == "" || Comments == "" || attachment == "" )
  {
     alert("All the field must be filled out");
  }
  else
  {
    confirm("Thank you for your feedback,Your details have been submitted successfully.");
  }
}