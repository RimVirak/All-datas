
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container py-5">
    <div class="row">
        <div class="col-md-12 ">
            <h2 class="text-center mb-5">Register</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary shadow-lg">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <form  action="index.php?action=usersRegister" method="POST">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name='username' id="inputName" name='fullname'  placeholder="full name">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3">Nick</label>
                                    <input type="text" class="form-control" id="inputEmail3" name='name' placeholder="nick name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" name="pwd" placeholder="password" title="At least 6 characters with letters and numbers" required="">
                                </div>
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
