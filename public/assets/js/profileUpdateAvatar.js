const avatarImage = document.querySelector('#avatar-image');
    const btnChangeAvatar = document.querySelector('#btnChangeAvatar');
    const formUpdateAvatar = document.querySelector('#form-update-avatar');

    avatarImage.addEventListener('change', event => {

        const reader = new FileReader();
        reader.onload = function(event) {
            const previewImage = document.querySelector('#preview-image');
            previewImage.width = 150;
            previewImage.height = 100;
            previewImage.style = 'border:solid 1px #333; margin-bottom:5px';
            previewImage.src = event.target.result;
        }

        reader.readAsDataURL(avatarImage.files[0]);

        btnChangeAvatar.disabled = false

        btnChangeAvatar.addEventListener('click', async event => {

            try {

                event.preventDefault();
                const formData = new FormData(formUpdateAvatar);
                formData.append('file', avatarImage.files[0]);
                console.log(formData);


                const response = await fetch('/api/avatar', {
                    method: "post",
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': formData.get('csrf_test_name')
                    },
                    body: formData
                });

                const resposta = await response.json();

                if (!response.ok) {
                    throw resposta;
                }

                if (resposta.successAvatar) {
                    console.log(resposta.successAvatar);
                    Swal.fire({
                        title: "Sucesso!",
                        html: resposta.successAvatar,
                        icon: 'success',
                        showDenyButton: false,
                        showCancelButton: false,
                        confirmButtonText: "Entendi",
                        allowEscapeKey: false,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
                }

                console.log(resposta)

            } catch (error) {
                console.log(error)

                if (error.message) {
                    Swal.fire('Atenção', error.message, 'error');
                }

                if (error.error) {
                    Swal.fire('Atenção', error.message, 'error');

                }

            }

        });

    });