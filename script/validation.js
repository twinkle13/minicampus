$(document).ready(function(){
    $.validator.addMethod('filesize', function(value, element, param) {
        // param = size (in bytes) 
        // element = element to validate (<input>)
        // value = value of the element (file name)
        return this.optional(element) || (element.files[0].size <= param) 
    });

    $.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please"); 


    $( "#create_group" ).validate( {
      rules: {
          group_name: {
            required: true,
            minlength: 3,
            maxlength: 20,
            lettersonly: true
          },
          group_id: {
            required: true,
            minlength: 8,
            maxlength: 20
          },
          file: {
            required: true,
            extension: "png|jpe?g|jpg|gif|pdf|doc|docx",
            filesize: 2097152
          }
        },
        messages: {
          group_name: {
            required: "Please enter group name.",
            minlength: "Group name can not be less than 3 characters.",
            maxlength: "Group name can not be greater than 20 characters.",
            lettersonly: "Group name should be alpha characters only."
          },
          group_id: {
            required: "Please enter group id.",
            minlength: "Group Id can not be less than 8 characters.",
            maxlength: "Group Id can not be greater than 20 characters."
          },
          file: {
            required: "Please select file.",
            extension: "extension not allowed, please choose a JPEG or PNG file.",
            filesize: "File size must be excately 2 MB."
          }
        },
        success:function(event) {

        }
    });

   // $( "form#create_group" ).submit(function(event){
   //      // console.log("I Called");
   //      event.preventDefault();
   //      var $form = $(this);
   //      if(! $form.valid()) return false;
   //      $.ajax({
   //          type: "POST",
   //          url: "creategroup.php",
   //          data: $('form#create_group').serialize(),
   //          success: function(msg) {
              
   //            $('#myModal').modal('hide');
   //            window.location.href = 'group.php';

   //          },
   //          error: function() {
   //            alert("failure");
   //          }
   //      });
   //  });

    $( "#join_group" ).validate( {
      rules: {
          group_name: {
            required: true,
            minlength: 3,
            maxlength: 20,
            lettersonly: true
          },
          group_id: {
            required: true,
            minlength: 8,
            maxlength: 20
          }
        },
        messages: {
          group_name: {
            required: "Please enter group name.",
            minlength: "Group name can not be less than 3 characters.",
            maxlength: "Group name can not be greater than 20 characters.",
            lettersonly: "Group name should be alpha characters only."
          },
          group_id: {
            required: "Please enter group id.",
            minlength: "Group Id can not be less than 8 characters.",
            maxlength: "Group Id can not be greater than 20 characters."
          }
        },
        success:function(event) {

        }
    });

    // $( "form#join_group" ).submit(function(event){
    //     event.preventDefault();
    //     var $form = $(this);
    //     if(! $form.valid()) return false;
    //     $.ajax({
    //         type: "POST",
    //         url: "joingroup.php",
    //         data: $('form#join_group').serialize(),
    //         success: function(msg) {
    //           if(msg == 'group.php') {
    //              $('#myModal1').modal('hide');
    //             window.location.href = 'group.php';
    //           }
    //            else{
    //             window.location.href = 'welcome.php';
    //           }
              
    //         },
    //         error: function() {
    //           alert("failure");
    //         }
    //     });
    // });
});