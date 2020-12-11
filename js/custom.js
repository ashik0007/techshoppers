$(function () {
    
    // hide error message
    $("#username_error_msg").hide();
    $("#password_error_msg").hide();
    $("#passwordagain_error_msg").hide();
    $("#email_error_msg").hide();
	
	$("#firstname_error_msg").hide();
	$("#lastname_error_msg").hide();
	$("#contact_error_msg").hide();
	$("#streetaddress_error_msg").hide();
	$("#city_error_msg").hide();
	$("#postcode_error_msg").hide();
	$("#company_error_msg").hide();
	$("#country_error_msg").hide();
	$("#accounttype_error_msg").hide();
    // initialize error
    var username_error = false;
    var password_error = false;
    var passwordagain_error = false;
    var email_error = false;
	
	var firstname_error_msg = false;
	var lastname_error_msg = false;
	var contact_error_msg = false;
	var streetaddress_error_msg = false;
	var city_error_msg = false;
	var postcode_error_msg = false;
	var company_error_msg = false;
	var country_error_msg = false;
	var accounttype_error_msg = false;
    // Focusout Function
    
    $("#username").focusout(function () {
        check_username()
    });
    
    
    $("#password").focusout(function () {
        check_password()
    });
    
    
    $("#passwordagain").focusout (function() {
        check_value_password()
    });
    
    
    $("#email").focusout(function () {
        check_email()
    });

    $("#firstname").focusout(function () {
        check_firstname()
    });
    $("#lastname").focusout(function () {
        check_lastname()
    });
    $("#contact").focusout(function () {
        check_contact()
    });
    $("#streetaddress").focusout(function () {
        check_streetaddress()
    });
    $("#city").focusout(function () {
        check_city()
    });
    $("#postcode").focusout(function () {
        check_postcode()
    });
    $("#company").focusout(function () {
        check_company()
    });    $("#country").focusout(function () {
        check_country()
    });
    $("#accounttype").focusout(function () {
        check_accounttype()
    });    
    
    
    // Check Username
    
    function check_username(){
        if ( $('#username').val() != "" ) {
            var username_length = $("#username").val().length;
           if(username_length < 3 || username_length > 20){
               $("#username_error_msg").html("Should be between 3-20 chracters");
               $("#username_error_msg").show();
               username_error = true;
           } else {
                 $("#username_error_msg").hide();
                 username_error = false;
            }
        }else{
          $("#username_error_msg").html("Username can not be empty!");
          $("#username_error_msg").show();
        }
    }
    
    // Check Password
    
    function check_password(){
      if ( $('#password').val() != "" ) {
          var password_length = $("#password").val().length;
          if(password_length < 8){
            $("#password_error_msg").html("Should be minimum 8 chracters");
            $("#password_error_msg").show();
            password_error = true;
          } else {
            $("#password_error_msg").hide();
            password_error = false;
          }
      }else{
        $("#password_error_msg").html("Password can not be empty!");
        $("#password_error_msg").show();
      }
    }
    
    
    // Check Password Again
    
    function check_value_password() {
       if ( $('#passwordagain').val() != "" ) {
          var password = $("#password").val();
         var passwordagain = $("#passwordagain").val();
         if (password != passwordagain){
             $("#passwordagain_error_msg").html("Password did not match");
             $("#passwordagain_error_msg").show();
             passwordagain_error = true;

         } else {
               $("#passwordagain_error_msg").hide(); 
               passwordagain_error = false;
          }
       }else{
            $("#passwordagain_error_msg").html("Again Password can not be empty!");
            $("#passwordagain_error_msg").show();
       }
   }
    
    
    // Check Email
    
    function check_email(){
       if( $('#email').val() != "" ){
          var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
         if(pattern.test($("#email").val())){
             $("#email_error_msg").hide();
         } else {
             $("#email_error_msg").html("Invalid Email Address");
             $("#email_error_msg").show();
             email_error = true;
          }
       }else{
          $("#email_error_msg").html("Email can not be empty!");
          $("#email_error_msg").show();
          email_error = false;
       }
    }
 
    // Check firstname
    
    function check_firstname(){
        if ( $('#firstname').val() != "" ) {
            var firstname_length = $("#firstname").val().length;
           if(firstname_length < 3 || firstname_length > 20){
               $("#firstname_error_msg").html("Should be between 3-20 chracters");
               $("#firstname_error_msg").show();
               firstname_error = true;
           } else {
                 $("#firstname_error_msg").hide();
                 firstname_error = false;
            }
        }else{
          $("#firstname_error_msg").html("first name can not be empty!");
          $("#firstname_error_msg").show();
        }
    }
    // Check lastname
    
    function check_lastname(){
        if ( $('#lastname').val() != "" ) {
            var lastname_length = $("#lastname").val().length;
           if(lastname_length < 3 || lastname_length > 20){
               $("#lastname_error_msg").html("Should be between 3-20 chracters");
               $("#lastname_error_msg").show();
               lastname_error = true;
           } else {
                 $("#lastname_error_msg").hide();
                 lastname_error = false;
            }
        }else{
          $("#lastname_error_msg").html("last name can not be empty!");
          $("#lastname_error_msg").show();
        }
    }	
    // Check contact

    function check_contact(){
        if ( $('#contact').val() != "" ) {
            var contact_length = $("#contact").val().length;
        }else{
          $("#contact_error_msg").html("contact can not be empty!");
          $("#contact_error_msg").show();
        }
    }
    // Check streetaddress
    
    function check_streetaddress(){
        if ( $('#streetaddress').val() != "" ) {
            var streetaddress_length = $("#streetaddress").val().length;
           if(streetaddress_length < 1 || streetaddress_length > 2000){
               $("#streetaddress_error_msg").html("Should be between 1-2000 chracters");
               $("#streetaddress_error_msg").show();
               streetaddress_error = true;
           } else {
                 $("#streetaddress_error_msg").hide();
                 streetaddress_error = false;
            }
        }else{
          $("#streetaddress_error_msg").html("streetaddress can not be empty!");
          $("#streetaddress_error_msg").show();
        }
    }
    // Check city
    
    function check_city(){
        if ( $('#city').val() != "" ) {
            var city_length = $("#city").val().length;
        }else{
          $("#city_error_msg").html("city can not be empty!");
          $("#city_error_msg").show();
        }
    }
    // Check postcode
    
    function check_postcode(){
        if ( $('#postcode').val() != "" ) {
            var postcode_length = $("#postcode").val().length;
        }else{
          $("#postcode_error_msg").html("postcode can not be empty!");
          $("#postcode_error_msg").show();
        }
    }
    // Check company
    
    function check_company(){
        if ( $('#company').val() != "" ) {
            var company_length = $("#company").val().length;
           if(company_length < 1 || company_length > 2000){
               $("#company_error_msg").html("Should be between 1-2000 chracters");
               $("#company_error_msg").show();
               company_error = true;
           } else {
                 $("#company_error_msg").hide();
                 company_error = false;
            }
        }else{
          $("#company_error_msg").html("company can not be empty!");
          $("#company_error_msg").show();
        }
    }
    // Check country
    
    function check_country(){
        if ( $('#country').val() != "" ) {
            var country_length = $("#country").val().length;
           if(country_length < 1 || country_length > 200){
               $("#country_error_msg").html("Should be between 1-200 chracters");
               $("#country_error_msg").show();
               country_error = true;
           } else {
                 $("#country_error_msg").hide();
                 country_error = false;
            }
        }else{
          $("#country_error_msg").html("country can not be empty!");
          $("#country_error_msg").show();
        }
    }
    // Check accounttype
    
    function check_accounttype(){
        if ( $('#accounttype').val() != "" ) {
            var accounttype_length = $("#accounttype").val().length;
        }else{
          $("#accounttype_error_msg").html("accounttype can not be empty!");
          $("#accounttype_error_msg").show();
        }
    }
	
	
	$(document).ready(function(){
    $("#username_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#email_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#password_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#passwordagain_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#firstname_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#lastname_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#contact_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#streetaddress_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#city_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#postcode_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#company_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#country_error_msg").click(function(){
        $(this).hide();
    });
	});
	$(document).ready(function(){
    $("#accounttype_error_msg").click(function(){
        $(this).hide();
    });
	});
	
	$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	});
	
    
    $("#myform").submit(function() {
       if( $('#username').val() != "" && $('#password').val() != "" && $('#passwordagain').val() != "" && $('#email').val() != "" ){
            if ( username_error == false && password_error == false && passwordagain_error == false && email_error == false) {
                return true;
            }else{
              alert("Invalid data submitted!");
              return false;
            }
       } else {
          alert("You can't fill up all these field!");
          return false;
       }
    });
    
    
});