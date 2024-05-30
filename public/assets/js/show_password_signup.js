const eye = document.querySelector('.fa-eye');
			const eye2 = document.getElementById('eye2');
			const password = document.querySelector('input[name="password"]');
			const password2 = document.querySelector('input[name="password2"]');

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

			password2.insertAdjacentElement('afterend', eye2);
			eye2.style.position = 'absolute';
			eye2.style.right = '10px';
			eye2.style.top = '50%';
			eye2.style.transform = 'translateY(-50%)';
			eye2.style.cursor = 'pointer';

			eye2.addEventListener('mouseover', () => {
							eye2.title = 'Show Password';
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

			eye2.addEventListener('click', () => {
				if (password2.type === 'password') {
					password2.type = 'text';
					eye2.classList.remove('fa-eye');
					eye2.classList.add('fa-eye-slash');
					
				} else {
					password2.type = 'password';
					eye2.classList.remove('fa-eye-slash');
					eye2.classList.add('fa-eye');
					
				}
			});