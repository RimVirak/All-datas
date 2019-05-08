<main class="container">
<div class="card bg-dark shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form method="post" action="#">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="gender" name="gender" class="form-control" placeholder="gender" required>
                        </div>
                
                            <button class="btn btn-primary" type="submit" name="btn-add">Add </button>
                            <button class="btn btn-danger float-right" type="reset" name="">Cancel </button>
                            <a href="view.php" class="btn btn-info">Back</a>
                        </div>
                    </form>
                </div>
            </div> 
</main>