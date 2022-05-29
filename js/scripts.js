function validateForm() {
    if ($('#frmContact').children('#txtFoo').val().length != 0) {
        return false;
    }
    var reason = "";
    reason += validateEmpty($('#txtName'));
    reason += validateEmail($('#txtEmail'));
    reason += validateEmpty($('#txtPhone')); 
    reason += validateEmpty($('#txtComments'));  
    if (reason != "") {
      $('#spanErrs').html("Some fields need correction:<br />" + reason);
      return false;
    } else {
        $('#frmContact').submit();
        return true;
    }
  }
  function validateEmpty(fld) {
      var error = "";
      if (fld.is('textarea')) {
          if (fld.val() == 0) {
              fld.css('background-color','Yellow'); 
              error = "The highlighted field should be filled in.<br />";
          } else {
              fld.css('background-color','White'); 
          }
          return error;
      }
      else
      {			
          if (fld.val() === '') {
              fld.css('background-color','Yellow'); 
              error = "The highlighted field should be filled in.<br />";
          } else {
              fld.css('background-color','White'); 
          }
          return error; 
      } 
  }
  function trim(s)
  {
    return s.replace(/^\s+|\s+$/, '');
  }
  function validateEmail(fld) {
      var error="";
      var tfld = trim($(fld).val());                        // value of field with whitespace trimmed off
      var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
      var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
      if ($(fld).val() === "") {
          $(fld).css('background-color','Yellow');
          error = "You didn't enter an email address.<br />";
      } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
          $(fld).css('background-color','Yellow');
          error = "Please enter a valid email address.<br />";
      } else if ($(fld).val().match(illegalChars)) {
          $(fld).css('background-color','Yellow');
          error = "The email address contains illegal characters.<br />";
      } else {
          $(fld).css('background-color','White');
      }
      return error;
  }	
  function upToDate() {
      d = new Date();
      y = d.getFullYear();
      return y;
  }

