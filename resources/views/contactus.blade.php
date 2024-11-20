<x-public-layout>
    <style>
        /* Centering the login form */
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 8%;            
            padding: 2rem;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            background-color: #ffffff;
        }

        .required:after {
            content: "*";
            color: red;
        }
    </style>
	
	<div class="container">
    <div class="login-container bg-white">

    <div class="d-flex items-center justify-content-center mb-3" id="top-contactus">
        <h2> 
            {{ __('Contact Us') }}
        </h2>
    </div>
		
	<form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br>

        <input type="submit" value="Submit">
    </form>	
	
	</div>
	</div>

    <script>
        window.onload = function() {
        document.getElementById('top-contactus').scrollIntoView({ behavior: 'smooth' });
        };
    </script>
</x-public-layout>