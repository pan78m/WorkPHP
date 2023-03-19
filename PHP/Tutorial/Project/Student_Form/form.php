<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission form with PDF Printable....</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8" style="border:2px solid black; padding: 5px; text-align:center; margin-top:5px;">
                <h1>Admission Form 2023</h1>
            </div>
            <div class="col-sm-2">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="padding:10px;">
                <form action="form_action.php" method="POST" enctype="multipart/form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel"> Full Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Father's Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="fathersname" class="form-control" required>
                                </div>
                            </div>




                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Mother's Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="mothersname" class="form-control" required>
                                </div>
                            </div>




                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Address</label>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="address" class="form-coltrol" required></textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Mobile Number</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="mobile" maxlength="10" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">DOB</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Category</label>
                                </div>
                                <div class="col-sm-8">

                                    <select name="category" class="form-control" required>
                                        <option value="">Select Category</option>
                                        <option value="Math">Math</option>
                                        <option value="Algorithm">Algorithm</option>
                                        <option value="Physics">Physics</option>
                                        <option value="English">English</option>
                                        <option value="CSE">CSE</option>

                                    </select>

                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    <label class="form-lebel">Gender</label>
                                </div>
                                <div class="col-sm-8">

                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                        <option value="Unknown">Unknown</option>
                                        <option value="Not Specified">Not Specified</option>

                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6">
                            <!- -!>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" style="float:right;"></div>
                                        <label class="label">Photo</label>
                                        <div style="border: 1px solid black; height: 150px;width: 150px; background:#F5FAFF;">
                                            <img id="output" width="150" height="150" / style="display:none" alt="Picture not found">
                                        </div>
                                        <input type="file" name="image" id="image" class="form-control" onchange="loadFile(event)" required accept="image/*" / style="width:150px;" required>
                                        <script type="text/javascript">
                                            var loadFile=function(event){
                                               var reader=new FileReader();
                                               reader.onload=function(){
                                                    var output=document.getElementById('output');
                                                    img.src=reader.result;
                                                };
                                              $('#output').show();
                                              reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>

                        </div>
                    </div>

                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>


</body>

</html>