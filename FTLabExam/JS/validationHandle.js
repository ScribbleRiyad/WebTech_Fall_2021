function formHandleEmployee(){
    var ename=document.getElementById("ename").value;
    var edep=document.getElementById("edep").value;
    var edate=document.getElementById("edate").value;
    var esalary=document.getElementById("esalary").value;
    var eid=document.getElementById("eid").value;
    var para=document.getElementById("para");
    var pat=/^[1-9][0-9]*$/;
    resultNumTest=pat.test(esalary);

    if(ename == "" || edep == "" || edate == "" || esalary == ""){
        para.innerHTML="Please Fill Up";
        return false;
    }else{
        if(ename > 8){
            if(resultNumTest == true){
                return true;

            }else{
                para.innerHTML="Salary Must be Neumeric";
                return false;
            }
        }else{
            para.innerHTML="Employee Name Must be greater than 8";
            return false;
        }
    }
}
