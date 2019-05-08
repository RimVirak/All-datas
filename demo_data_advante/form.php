<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card mb-4 mt-4 bg-secondary text-light">
            <div class="card-header"><b>Insert Student</b></div>
            <div class="card-body">
                <form method="post" action="getData.php" class="form">
                    <div class="form-group">
                        <label for="name">Student Name:</label>
                        <input type="text" placeholder="Enter student name" name="name" id="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="radio" name="gender" value="Male" id="male"> <label for="male">Male</label>
                        <input type="radio" name="gender" value="Female" id="female"> <label for="female">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Enter student email" name="email" id="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="province">Student Name:</label>
                        <input type="text" placeholder="Enter student province" name="province" id="province" required class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="btn-add" class="btn btn-primary float-right">Insert Student</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-2"></div>
</div>