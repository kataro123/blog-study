const formUpdatePassword = document.querySelector('#form-update-password');
    const btnUpdatePassword = document.querySelector('#btn-update-password');
    formUpdatePassword.addEventListener('submit', async (event) => {
        event.preventDefault();
        btnUpdatePassword.textContent = 'Aguarde, atualizando.';

        const formData = new FormData(formUpdatePassword);

        try {

            const response = await fetch('/api/password', {
                method: "put",
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('csrf_test_name')
                },
                body: JSON.stringify({
                    id: formData.get('id'),
                    password: formData.get('password'),
                    newPassword: formData.get('newPassword'),
                    confirmNewPassword: formData.get('confirmNewPassword')
                })
            });

            const resposta = await response.json();

            if (!response.ok) {
                throw resposta;
            }

            if (resposta.success) {
                Swal.fire('Atualizado', resposta.success, 'success');
            } else {
                Swal.fire('Atenção', 'Ocorreu um erro ao fazer o update, tente novamente em alguns minutos', 'error');
            }

            btnUpdatePassword.textContent = 'Update';



        } catch (error) {
            console.log(error);

            if (error.validate) {
                for (const key in error.validate) {
                    const spanMessage = document.querySelector(`#error-${key}`);
                    spanMessage.setAttribute('class', 'text text-danger fs-5');
                    spanMessage.textContent = error.validate[key];
                }
            }

            if (error.error) {
                Swal.fire('Atenção', error.error, 'error');
            }

        }

    });