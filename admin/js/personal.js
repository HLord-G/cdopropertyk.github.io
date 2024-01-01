// let password = $("#password").val();
// let confirmPassword = $("#passwordcon").val();





//  check passwords 
let password_conferm = false
let encryptedPassword = ""

function checkPasswordMatch() {
    password = $("#password").val();
    confirmPassword = $("#passwordcon").val();
    ifcheckers(password,confirmPassword)
  }

function passworderrors(errormsg){
    $("#passwordwarning").show()
    $("#passwordwarning").html(`<small><small style="color:red;" >${errormsg}</small></small>`)
    $("#password").attr("style","border:1px solid red;")
    password_conferm = false
}

function ifcheckers(x,y) {
    if (x === y) {
        if (password.length >= 8 && password.length <= 12) {
            $("#passwordwarning").hide()
            $("#passwordwarning").html(``)
            $("#password").attr("style","")
            password_conferm = true
            
            // var shaObj = new jsSHA("SHA-256", "TEXT");
            // shaObj.update(password);
            // encryptedPassword = shaObj.getHash("HEX");

            // Example usage with your provided input ID

          }else{
            passworderrors("Password must be between 8 and 12 characters.")
          }

      }else{
        passworderrors("Password Not Mutch")
      }
}







// check links
function checkFacebookLink() {
    var link = $("#facebooklink").val().trim();
    // Regular expression to match Facebook links
    var facebookRegex = /^(https?:\/\/)?(www\.)?facebook\.com\/.*/i;

    if (facebookRegex.test(link)) {
        $("#facebooklink").attr("style","")
        $("#socialwarning_f").html(``)
    } else {
       if ($("#facebooklink").val().trim() == "" || $("#facebooklink").val().trim() == null) {
        $("#facebooklink").attr("style","")
        $("#socialwarning_f").html(``)
        }else{
        $("#socialwarning_f").html(`<small style="color:red;" >Facebook Link Error</small>`)
        $("#facebooklink").attr("style","border:1px solid red;")
       }
    }
  }


  // check links
function checktwitterLink() {
    var link = $("#twitterlink").val().trim();
    // Regular expression to match Facebook links
    var facebookRegex = /^(https?:\/\/)?(www\.)?instagram\.com\/.*/i;

    if (facebookRegex.test(link)) {
        $("#twitterlink").attr("style","")
        $("#socialwarning_t").html(``)
    } else {
       if ($("#twitterlink").val().trim() == "" || $("#twitterlink").val().trim() == null) {
        $("#twitterlink").attr("style","")
        $("#socialwarning_t").html(``)
        }else{
        $("#socialwarning_t").html(`<small style="color:red;" >Instagram Link Error</small>`)
        $("#twitterlink").attr("style","border:1px solid red;")
       }
    }
  }






// para sa images
  function basesixfour(inputId, callback) {
    // Get the input element
    let inputElement = document.getElementById(inputId);
  
    // Make sure an input element with the given ID exists
    if (inputElement) {
      // Get the selected file from the input element
      let file = inputElement.files[0];
  
      if (file) {
        // Create a FileReader object
        let reader = new FileReader();
  
        // Define a callback function to handle the file reading
        reader.onloadend = function () {
          // Set the base64 representation of the image to the baseoutput variable
          let baseoutput = reader.result;
          // Call the provided callback function with the base64 result
          callback(baseoutput);
        };
  
        // Read the file as a data URL, which will convert it to base64
        reader.readAsDataURL(file);
      }
    }
  }








$("#createdata").click(function(){
    password = $("#password").val();
    confirmPassword = $("#passwordcon").val();
    ifcheckers(password,confirmPassword)


    personaldata.sitesec.sitename = $("#sitename").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.sitesec.username = $("#username").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.sitesec.password = $("#password").val()


    personaldata.personal_info.fistname = $("#firstname").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.personal_info.lastname = $("#lastname").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.personal_info.email    = $("#email").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.personal_info.phone = $("#phone").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.personal_info.location = $("#location").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.personal_info.moreinfo  = $("#contectinfo").html()

    personaldata.website_info.about_title  = $("#aboutheader").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.website_info.about  = $("#aboutinfo").html()
    personaldata.website_info.sinse  = $("#sences").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()
    personaldata.website_info.tag    = $("#taggs").val().split('"').join('&#34;').split("'").join('&#39;').split('`').join('&#96;').split('$').join('&#36;').split('{').join('&#123;').split('}').join('&#125;').split('<').join('&#60;').split('>').join('&#62;').trim()


    basesixfour('profileimage', function (baseoutput) { personaldata.website_info.profile_img = baseoutput;});
    basesixfour('imagecover', function (baseoutput) { personaldata.website_info.profile_cover = baseoutput;});


    if (password_conferm == true) {
        // alert("fdserf")
        // alert(encryptedPassword)

        $("#datacollector").val(`
let personaldata = {

    sitesec:{
        sitename:\`${personaldata.sitesec.sitename}\`,
        username:\`${personaldata.sitesec.username}\`,
        password:\`${personaldata.sitesec.password}\`,
    },
    
    personal_info:{
        fistname:\`${personaldata.personal_info.fistname}\`,
        lastname:\`${personaldata.personal_info.lastname}\`,
        email:\`${personaldata.personal_info.email}\`,
        phone:\`${personaldata.personal_info.phone}\`,
        location:\`${personaldata.personal_info.location}\`,
        moreinfo:\`${personaldata.personal_info.moreinfo}\`
    },
    
    medialink:{
        fb:"http://localhost:3000/admin/profile.php",
        ig:"http://localhost:3000/admin/profile.php",
        x:"http://localhost:3000/admin/profile.php"
    },
    
    website_info:{
        about_title:\`${personaldata.website_info.about_title}\`,
        about:\`${personaldata.website_info.about}\`,
        profile_img:\`${personaldata.website_info.profile_img}\`,
        profile_cover:\`${personaldata.website_info.profile_cover}\`,
        sinse:\`${personaldata.website_info.sinse}\`,
        tag:\`${personaldata.website_info.tag}\`
    }
    
    }
        `)
        $.post("database/personal.php",
        {
          datasave: `${$("#datacollector").val()}`,
          submit_person:"sent"
        },

        function(data, status){
            $("#datacollector").val(null)
        });
    }

    

})




















// start season
function startloaddata(){
    $("#sitename").val(personaldata.sitesec.sitename)
    $("#username").val(personaldata.sitesec.username)
    $("#password").val(personaldata.sitesec.password)
    $("#passwordcon").val(personaldata.sitesec.password)


    $("#firstname").val(personaldata.personal_info.fistname)
    $("#lastname").val(personaldata.personal_info.lastname)
    $("#email").val(personaldata.personal_info.email)
    $("#phone").val(personaldata.personal_info.phone)
    $("#location").val(personaldata.personal_info.location)


    $("#aboutheader").val(personaldata.website_info.about_title)
    $("#aboutinfo").html(personaldata.website_info.about)
    $("#contectinfo").html(personaldata.personal_info.moreinfo)
    $("#sences").val(personaldata.website_info.sinse)
    $("#taggs").val(personaldata.website_info.tag)
    
}startloaddata()













