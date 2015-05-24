function scrollComment() {
    		window.scrollTo(100,800);
    	}
    	function scrollPlan() {
            window.scrollTo(100,1600);
        }
        function scrollOffres() {
            window.scrollTo(100,2400);
        }
        function scrollContact() {
            window.scrollTo(100,2600);
        }




window.onload = function(){

            document.getElementById('my-form').onsubmit = function() {
                var errorBlock = document.getElementById('error-message');
                var successBlock = document.getElementById('success-message');

                errorBlock.innerHTML = '';
                successBlock.innerHTML = '';

                var formOK = true;
                var userNickname = document.getElementById('my-nickname').value;
                var userPassword = document.getElementById('my-password').value;
                var userPasswordCheck = document.getElementById('my-password-check').value;

                if(userNickname.length < 4){
                    errorBlock.innerHTML += '<br>Pseudo trop court';
                    formOK = false;
                }
                if(userPassword.length < 6){
                    errorBlock.innerHTML += '<br>Mot de passe trop court';
                    formOK = false;
                }
                if(userPasswordCheck !== userPassword){
                    errorBlock.innerHTML += '<br>Veuillez saisir une vérification identique à votre mot de passe';
                    formOK = false;
                }
                if(formOK === true){
                    successBlock.innerHTML = 'Hey. Bienvenue '+ userNickname+' !';
                }

                return false;
            }

        };

    