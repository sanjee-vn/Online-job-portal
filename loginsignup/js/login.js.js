<script>
        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username && password) {
                alert(Logged in as ${username});
            } else {
                alert('Please enter both username and password.');
            }
        }

        function register() {
            alert('Redirecting to registration page.');
            // Add your registration logic or redirection here
        }
</script>

