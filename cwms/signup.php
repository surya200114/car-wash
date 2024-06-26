<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
<style>
    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    }
    body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgb(130, 106, 251);
   
    }
    .container {
    position: relative;
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    
    }
    .container header {
    font-size: 1.5rem;
    color: #333;
    font-weight: 500;
    text-align: center;
    }
    .container .form {
    margin-top: 30px;
    }
    .form .input-box {
    width: 100%;
    margin-top: 20px;
    }
    .input-box label {
    color: #333;
    }
    .form :where(.input-box input, .select-box) {
    position: relative;
    height: 50px;
    width: 100%;
    outline: none;
    font-size: 1rem;
    color: #707070;
    margin-top: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 0 15px;
    }
    .input-box input:focus {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }
    .form .column {
    display: flex;
    column-gap: 15px;
    }
    .form .gender-box {
    margin-top: 20px;
    }
    .gender-box h3 {
    color: #333;
    font-size: 1rem;
    font-weight: 400;
    margin-bottom: 8px;
    }
    .form :where(.gender-option, .gender) {
    display: flex;
    align-items: center;
    column-gap: 50px;
    flex-wrap: wrap;
    }
    .form .gender {
    column-gap: 5px;
    }
    .gender input {
    accent-color: rgb(130, 106, 251);
    }
    .form :where(.gender input, .gender label) {
    cursor: pointer;
    }
    .gender label {
    color: #707070;
    }
    .address :where(input, .select-box) {
    margin-top: 15px;
    }
    .select-box select {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    color: #707070;
    font-size: 1rem;
    }
    .form button {
    height: 55px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    margin-top: 30px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: rgb(130, 106, 251);
    }
    .form button:hover {
    background: rgb(88, 56, 250);
    }
    /*Responsive*/
    @media screen and (max-width: 500px) {
    .form .column {
        flex-wrap: wrap;
    }
    .form :where(.gender-option, .gender) {
        row-gap: 15px;
    }
    }
</style>
  </head>
  <body>
    
    <section class="container">
        <header>
            Registration Form
        </header>
      <form action="signupcheck.php" class="form" method="post">
        <div class="input-box">
            <label>Full Name</label>
            <label style="display:none;color:red;" id="exist">username already exist! </label>
            <input type="text" name="name" id="usernameInput" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address"  name="email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phno" placeholder="Enter phone number" required />
          </div>

          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="dob" placeholder="Enter birth date" required />
          </div>
        </div>

        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" name="gender" value="male" checked />
                    <label for="check-male">male</label>
                </div>        
                <div class="gender">
                  <input type="radio" id="check-female" name="gender" value="female" />
                  <label for="check-female">Female</label>
                </div>        
                <div class="gender">
                  <input type="radio" id="check-other" name="gender" value="other"/>
                  <label for="check-other">prefer not to say</label>
                </div>
            </div>
        </div>

        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="address" placeholder="Enter street address" required />
        </div>

        <div class="input-box">
            <label>Create password</label>
            <input type="password" name="password" placeholder="Enter phone number" required />
        </div>
        
        <div class="input-box">
            <label>Confirm password</label>
            <input type="password" placeholder="Enter phone number" required />
        </div>

        <button type="submit">submit</button>

      </form>
      Already have account ? <a href="signin.php">login here</a>
    </section>
  </body>

<script>
  // Function to fetch data using fetch API
  function fetchData(username) {
      // URL of your PHP endpoint with username as query parameter
      var url = 'http://localhost/car-wash/cwms/apis/api.php?name=' + encodeURIComponent(username);
      var name =document.getElementById('exist');

      // Fetch data from the server
      fetch(url)
      .then(function(response) {
          // Check if response is successful
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          // Parse JSON response
          return response.json();
      })
      .then(function(data) {
          if (data.exists) {
              name.style.display = "block";
          } else {
              name.style.display = "none";
          }
      })
      .catch(function(error) {
          // Handle errors
          console.error('There was a problem with the fetch operation:', error);
      });
  }

  // Get input field by id
  var usernameInput = document.getElementById('usernameInput');
  // Attach event listener for the blur event
  usernameInput.addEventListener('blur', function(event) {
      // Get the value of the input field
      var username = event.target.value;
      console.log(username);
      // Call fetchData function with the username value
      fetchData(username);
  });

</script>

</html>
