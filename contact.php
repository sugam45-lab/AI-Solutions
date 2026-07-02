<?php

include("includes/db.php");

$message = "";

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $category = $_POST['category'];
    $budget = $_POST['budget'];
    $requirements = $_POST['requirements'];

    $sql = "INSERT INTO customer_inquiry
    (full_name,email,phone,company_name,enquiry_category,budget,project_requirements)

    VALUES

    ('$fullname','$email','$phone','$company','$category','$budget','$requirements')";

    if(mysqli_query($conn,$sql)){

        $message = "Your enquiry has been submitted successfully.";

    }

    else{

        $message = "Something went wrong.";

    }

}

include("includes/header.php");

?>

<section class="py-5 bg-primary text-white text-center">

<div class="container">

<h1>Contact Us</h1>

<p class="lead">

We'd love to hear about your AI project.

</p>

</div>

</section>

<div class="container py-5">

<div class="row">

<div class="col-lg-8">

<?php

if($message!=""){

?>

<div class="alert alert-success">

<?php echo $message; ?>

</div>

<?php

}

?>

<form method="POST">

<div class="mb-3">

<label class="form-label">

Full Name

</label>

<input
type="text"
name="fullname"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Email Address

</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Phone Number

</label>

<input
type="text"
name="phone"
class="form-control"
required>

</div>

<div class="mb-3">

<label class="form-label">

Company Name

</label>

<input
type="text"
name="company"
class="form-control">

</div>

<div class="mb-3">

<label class="form-label">

Enquiry Category

</label>

<select
name="category"
class="form-select">

<option>AI Consulting</option>

<option>Machine Learning</option>

<option>Data Analytics</option>

<option>AI Chatbot</option>

<option>Business Automation</option>

<option>Cloud AI Solutions</option>

</select>

</div>

<div class="mb-3">

<label class="form-label">

Estimated Budget

</label>

<select
name="budget"
class="form-select">

<option>Below $5,000</option>

<option>$5,000 - $10,000</option>

<option>$10,000 - $20,000</option>

<option>Above $20,000</option>

</select>

</div>

<div class="mb-3">

<label class="form-label">

Project Requirements

</label>

<textarea

name="requirements"

rows="5"

class="form-control"

required>

</textarea>

</div>

<button

type="submit"

name="submit"

class="btn btn-primary btn-lg">

Submit Enquiry

</button>

</form>

</div>

<div class="col-lg-4">

<div class="card shadow">

<div class="card-body">

<h3>

Contact Information

</h3>

<hr>

<p>

📍 Kathmandu, Nepal

</p>

<p>

📞 +977 9800000000

</p>

<p>

✉ info@aisolutions.com

</p>

<p>

🕒 Monday - Friday

9:00 AM - 5:00 PM

</p>

</div>

</div>

</div>

</div>

</div>

<?php include("includes/footer.php"); ?>