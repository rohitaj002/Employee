<!-- employee-registration.blade.php -->

<form id="employeeForm">
    @csrf <!-- Laravel CSRF token -->

    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="designation" placeholder="Designation" required>
    <button type="submit">Register</button>
</form>

<script>
    const form = document.getElementById('employeeForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Prepare the form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch('/api/register', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error(error);
        });
    });
</script>
