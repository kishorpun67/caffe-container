$(document).ready(function(){
    // alert('test')
    const firebaseConfig = {
        apiKey: "AIzaSyDXMMx-grT15tbmoZQn1c12GVFnvjOvniQ",
        authDomain: "otpauth-4dae0.firebaseapp.com",
        projectId: "otpauth-4dae0",
        storageBucket: "otpauth-4dae0.appspot.com",
        messagingSenderId: "266646126072",
        appId: "1:266646126072:web:16799bd10b941dead2ea0d",
        measurementId: "G-QCZHMCPR20"
      };

      firebase.initializeApp(firebaseConfig);
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptach', {
        'size': 'invisible',
        'callback': (response) => {
          // reCAPTCHA solved, allow signInWithPhoneNumber.D
        }
    });
    function onSignInSubmit()
    {
        $("#get_code").on('click', function(){
            const phoneNumber = $("#phone").val();
            const appVerifier = window.recaptchaVerifier;
            firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
            .then((confirmationResult) => {
            confirmationResult = confirmationResult;
            console.log(confirmationResult);
            }).catch((error) => {
                console.log(error.message);
            });
        });

        $("#verify_code").on('click', function(){
            const code = $("#code").val();
            $(this).text('Processing');
            confirmationResult.confirm(code).then((result) => {
            const user = result.user;
            console.log(user);
            }).catch((error) => {
                console.log(error.message)
            });
        });

    }
    onSignInSubmit();

})
