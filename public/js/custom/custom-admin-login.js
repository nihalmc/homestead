
// admin-login

document.addEventListener('DOMContentLoaded', function () {
    const adminLoginForm = document.getElementById('adminLoginForm');

    adminLoginForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const form = event.target;
        if(form.id == 'adminLoginForm')
        {
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
                }
            })

            .then((response) => response.json())
            .then((data) => {
                if(data.status == true)
                {
                    localStorage.setItem('username', data.currentusername);
                    alert(data.message)
                    window.location.href = '/dashboard';
                }
                else
                {
                    alert(data.message);
                }
            })
            .catch((error) => {
                alert("An error occured. Please try again later.");
                console.log("Error: ", error)
            })
        }
    })
})
