const formUpdateProfile = document.querySelector('#form-update-profile');
    const btnUpdate = document.querySelector('#btnUpdate');
    formUpdateProfile.addEventListener('submit', async event => {
        event.preventDefault();
        btnUpdate.textContent = 'Aguarde...';
        const formData = new FormData(formUpdateProfile);

        try {


            const response = await fetch('api/profile', {
                method: 'put',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': formData.get('csrf_test_name')
                },
                body: JSON.stringify({
                    id: formData.get('id'),
                    firstName: formData.get('firstName'),
                    lastName: formData.get('lastName'),
                    email: formData.get('email')
                })
            });

            if (!response.ok) {
                throw await response.json();
            }

            const responseJson = await response.json();

            if (responseJson.message) {
                // const spanMessage = document.querySelector('#message');
                // spanMessage.setAttribute('class', 'text text-success fs-5');
                // spanMessage.textContent = responseJson.message;

                Swal.fire('Sucesso!', responseJson.message, 'success')
            } else {

                Swal.fire('Error', 'Ocorreu um erro ao atualizar seu perfil, tente novamente em alguns instantes', 'success')
            }

            btnUpdate.textContent = 'Update';
            console.log(responseJson);


        } catch (error) {
            console.log('error', error)
            if (error.validate) {
                for (const key in error.validate) {
                    const spanMessage = document.querySelector(`#error-${key}`);
                    spanMessage.setAttribute('class', 'text text-danger fs-5');
                    spanMessage.innerHTML = error.validate[key];
                    console.log(key)
                }
            }

            if (error.message) {

                const alertResult = await Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: error.message,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Refresh"
                });

                if (alertResult.isConfirmed) {
                    // window.location = '<?= url_to('profile') ?>'
                    window.location = '/profile'
                }
            }

            if (error.error) {
                const spanMessage = document.querySelector('#error');
                spanMessage.setAttribute('class', 'text text-danger fs-5');
                spanMessage.textContent = error.error
                Swal.fire(
                    'Ateção',
                    error.error,
                    'error');
            }

            btnUpdate.textContent = 'Update';
        }

    });