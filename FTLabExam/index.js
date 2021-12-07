function formValidation() {
  var name = document.registration.name;
  var department = document.registration.department;
  var salary = document.registration.salary;
  
 
  
 
      if (name(name)) {
        if (department(department)) {
              if (salary(salary)) {
              }
        }
      }
 
  return false;
}

function name(name) {
  var letters = /^[A-Za-z]+$/;
  if (name.value.match(letters)) {
    return true;
  } else {
    alert("Name must be more then 8 characters");
    name.focus();
    return false;
  }
}

function department(department) {
  var letters = /^[A-Za-z]+$/;
  if (department.value.match(letters)) {
    return true;
  } else {
    alert("Department name must not be empty");
    department.focus();
    return false;
  }
}

function salary(salary) {
  var letters = /^[A-Za-z]+$/;
  if (salary.value.match(letters)) {
    return true;
  } else {
    alert("Salary must be numeric");
    salary.focus();
    return false;
  }
}
