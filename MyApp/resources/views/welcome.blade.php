<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Employees Application</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #D7DFF8;
            margin: 0;
        }

        /* Header styles */
        header {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 40px 0;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
        }

        /* Sections styles */
        section {
            padding: 40px;
        }

        section h2 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #2980b9;
        }

        /* Services section styles */
        .services li {
            margin-bottom: 10px;
            color: #555;
        }

        /* Contact section styles */
        .contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact input[type="text"],
        .contact input[type="email"],
        .contact textarea {
            padding: 10px;
            margin-bottom: 10px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact textarea {
            height: 100px;
        }

        .contact input[type="submit"] {
            padding: 10px 20px;
            background-color: #2980b9;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 150px;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
        }

        .contact input[type="submit"]:hover {
            background-color: #3498db;
        }

        /* Footer styles */
        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        /* Login button styles */
        .login-button {
            padding: 10px 20px;
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: background 0.2s ease-in-out, transform 0.2s ease-in-out;
        }

        .login-button:hover {
            background: linear-gradient(135deg, #2980b9, #3498db);
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to Our Creative Agency</h1>
        
    </header>

    <div style="display: flex; justify-content: flex-end;">
        @guest
        <!-- Add the login button here for guests -->
        <a href='{{url('/login')}}' class="btn btn-outline-info y-login-button login-button">
            LOGIN</a>
        @endguest
        @auth
        <!-- Add the home link button here for authenticated users -->
        <a href='{{url('admin/home')}}' class="btn btn-outline-info my-login-button login-button">
            HOME</a>
        @endauth
    </div>

    <section>
        <h2>About Us</h2>
        <p>We are a creative agency that deals with everything about employees.</p>
    </section>

    <section class="services">
        <h2>Our Services</h2>
        <ul>
            <li>Adding Employees</li>
            <li>Giving Vacation Requests</li>
            <li>Giving Work Certifications</li>
            <li>Updating Employee's Information</li>
            <li>Deleting Employee</li>
        </ul>
    </section>

    <section class="contact">
        <h2>Contact Us</h2>
        <form>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Our Creative Agency. All rights reserved.</p>
    </footer>
</body>

</html>
