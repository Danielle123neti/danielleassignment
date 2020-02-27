<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        div{
            border: 2px ;
        }
        .me{
            border: 4px solid gray; 
            background-color: #006699;
            opacity: .80;
           
        }
        .container{
            background-image: url(space.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            opacity: ;
            color: #000000;

        }
        .btn {
            border: none;
            color:#b3e6ff;
            padding: 14px 28px;
            font-size: 20px;
            cursor: pointer;
            }
        .ma{
            color="#0077b3";
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-2"></div>
            <div class="col-md-6 mb-2 me">
            <div class="card-header text-warning bg-secondary text-white bg-sample text-center">
                <h4 class="text-info bg-secondary">REGISTRATION FORM</h4>
            </div>
            <p>Please fill up the form</p>
            <form action="output.php" method="post">
                <label for="firstname"><b>First Name</b></label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                <label for="middlename"><b>Middle Name</b></label>
                <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                <label for="lastname"><b>Last Name</b></label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                <label for="address"><b>Address</b></label>
                <input type="text" name="address" class="form-control" placeholder="Complete Address" required>
                <label for="POB"><b>Place of Birth</b></label>
                <input type="text" name="POB" class="form-control" placeholder="Brgy., City" required>
                <label for="DOB"><b>Date Of Birth</b></label>
                <input type="date" name="DOB" class="form-control" placeholder="mm-dd-yyyy" required>
                <label for="Gender"><b>Gender</b></label>
                <div class="form-inline">
                    <input type="radio" name="Gender" class="form-control" placeholder="Female" value="Female" required>Female
                    <input type="radio" name="Gender" class="form-control" placeholder="Male" value="Male" required>Male
                </div>
                <label for="ContactNumber"><b>Contact Number</b></label>
                <input type="text" name="ContactNumber" class="form-control" placeholder="e.g +63*******" required>
                <label for="Civilstatus"><b>Civil Status</b></label>
                <input type="text" name="Civilstatus" class="form-control" placeholder="Civil Status" required>
                <label for="Email"><b>Email</b></label>
                <input type="email" name="Email" class="form-control" placeholder="e.g abc@gmail.com" required>
                <label for="Guardian"><b>Guardian</b></label>
                <input type="text" name="Guardian" class="form-control" placeholder="Guardian" required>
                <label for="SchoolYear"><b>SchoolYear</b></label>
                <input type="text" name="SchoolYear" class="form-control" placeholder="e.g 2019-2020" required>
                <div class="row">
                <div class="col-md-6 mb-2">
                <label for="yearlevel"><b>Year Level</b></label>
                    <div class="col-md-12 mb-2">
                            <select name="yearlevel" id="yearlevel">
                                <option value="firstyear" selected>First Year</option>
                                <option value="secondyear" >Second Year</option>
                                <option value="thirdyear" >Third Year</option>
                                <option value="fourthyear" >Fourth Year</option>
                            </select>
                            </div>
                            </div> 
                            <div class="col-md-6 mb-2">
                            <label for="Course"><b>Course</b></label>
                            <div class="col-md-12 mb-2">
                            <select name="Course" id="Course">
                                <option value="Information Technology" selected>IT</option>
                                <option value="Data Science" >DS</option>
                                <option value="Computer Engineering" >CoE</option>
                                <option value="Technology Communication Management" >TCM</option>
                            </select>
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark">SUBMIT
                    </button>
                    <div class="col-md-2 mb-2"></div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>