const eye = document.querySelector('.fa-eye');
        
        const password = document.querySelector('input[name="password"]');
        

        // position of the eye icon in the input field
        password.insertAdjacentElement('afterend', eye);
        eye.style.position = 'absolute';
        eye.style.right = '10px';
        eye.style.top = '50%';
        eye.style.transform = 'translateY(-50%)';
        eye.style.cursor = 'pointer';
        
        eye.addEventListener('mouseover', () => {
                    eye.title = 'Show Password';
                });


        eye.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                eye.classList.remove('fa-eye');
                eye.classList.add('fa-eye-slash');

            } else {
                password.type = 'password';
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');

            }
        });