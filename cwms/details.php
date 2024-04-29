<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
<style>
    .container {
  width: 60%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.input-box {
  margin-bottom: 20px;
}

.input-box label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.input-box input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.column {
  display: flex;
  justify-content: space-between;
}

.column .input-box {
  width: 50%;
}

.address {
  width: 100%;
}

button {
  padding: 10px ;
  margin-left:50px;
  margin-top:20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

a {
  text-decoration: none;
  color: #007bff;
}

a:hover {
  text-decoration: underline;
}
.cen{
text-align: center;
}
</style>

  </head>
  <body>
    
    <section class="container">
        <header>
            Change details
        </header>
      <form action="" method="post">
       

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address"  name="email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phno" placeholder="Enter phone number" required />
          </div>
          <br>
          
        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="address" placeholder="Enter street address" required />
        </div>
        
        <div>
             <button type="submit">submit</button>
        </div>
        

      </form>
      <br>
      
    </section>
    <div class="cen">
    <h6>Already have account ? <a href="signin.php">login here</a></h6>
    </div>
    
  </body>
  </html>