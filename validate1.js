function validate() {
    if (document.StudentRegistration.studentname.value == "") {
        alert("Please provide your Name!");
        document.StudentRegistration.studentname.focus();
        return false;
    }
    if (document.StudentRegistration.Branch.value == "-1") {
        alert("Please provide your Branch!");
        document.StudentRegistration.Branch.focus();
        return false;
    }
    if ((StudentRegistration.Year[0].checked == false) && (StudentRegistration.Year[1].checked == false) && (StudentRegistration.Year[2].checked == false) && (StudentRegistration.Year[3].checked == false)) {
        alert("Please choose your Year");
        return false;
    }
    if (document.StudentRegistration.Phonenumber.value == "" || isNaN(document.StudentRegistration.Phonenumber.value) || document.StudentRegistration.Phonenumber.value.length != 10) {
        alert("Please provide a Phone No in the format 123.......");
        document.StudentRegistration.Phonenumber.focus();
        return false;
    }
    var email = document.StudentRegistration.emailid.value;
    atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");
    if (email == "" || atpos < 1 || (dotpos - atpos < 2)) {
        alert("Please enter correct email ID of the format abcd@domain.com")
        document.StudentRegistration.emailid.focus();
        return false;
    }

    var TotalCount = 0;
    var teamPreference = document.getElementsByName("teamPreference[]");
    TotalCount += countChecked(teamPreference);
    function countChecked(list) {
		var count = 0;
		for (var i = 0; i < list.length; i++) {
			var el = list[i];
			if (el.checked) {
				count++;
			}
		}
		return count;
	}
	if( TotalCount > 3 || TotalCount == 0 ) {
		alert("Please check only 3 TeamPreference");
        return false;
	}
    if (document.StudentRegistration.Whatdoestaaranganameantoyou.value == "") {
        alert("Please provide answer!");
        document.StudentRegistration.Whatdoestaaranganameantoyou.focus();
        return false;
    }
    return true;
}