
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!--Contact Us starts here-->
    <form action="contactus.php" method="post"></form>
    <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore odit exercitationem soluta dolor nisi quo consequuntur nostrum iste, 
                similique officiis quas sapiente repellendus! Minus repellendus rem soluta neque consequatur minima.
            </p>
            <form>        
                <div class="row">
                    <div class="col-lg-6 ">
                        <label for="firstname" class="form-lebel">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter Your First Name">
                    </div>
                    <div class="col-lg-6">
                        <label for="lastname" class="form-lebel">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter Your Last Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <label for="PhoneNumber" class="form-lebel">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="col-lg-6 ">
                        <label for="Email" class="form-lebel">Email</label>
                        <input type="email" name="email"class="form-control" placeholder="Enter Email Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Your message</label>
                        <textarea cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <button type="submit" name="submitButton" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <button type="submit" name="enroll" class="btn btn-primary" >Submit application</button>
    </div>
        <!--End of Contact Us-->

        <hr>
        <footer>
            &COPY;Zalego Academy 2022
        </footer>
    </div>
    
        
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js.map"></script>
     <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>-->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
