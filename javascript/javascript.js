

// start form //


    $(document).ready(function(){
 // when class tab is clicked then this jquery function will  be fired

      $("#signinform").validate({ // validate function for jquery validation
    rules:{
      email:{
       required:true,
       username:true  // here we are performing user name validation
      },
      password:{
       required:true,
       minlength:5
      }
    }
  });
  $("#signupform").validate({
    rules:{

        bday:{
        required:true,
       bday:true
      },
      newemail:{
        required:true,
       email:true
      },
        name:{
            required:true,
            name:true
        },
      password1:{
       required:true,
       minlength:5
      },
      password2:{
        required:true,

        equalTo:"#password1"
                },
        insurancename:{
            required:true,
            insurancename:true
        },

    }
  });

      $(".tab").click(function(){
    // In tab class we had made a variable which will take a clicked tab id
  var x = $(this).attr('id'); // attr is a attribute selector, here we are selecting the id attribute.
  if(x=='signup'){
    $('#signin').removeClass('select');

    $('#signup').addClass('select');
    $('#signupbox').slideDown();

    $('#signinbox').slideUp();
  }
  else{
    $('#signup').removeClass('select');
    $('#signin').addClass('select');
    $('#signinbox').slideDown();
    $('#signupbox').slideUp();
  }
  });

});
