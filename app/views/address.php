<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Project | Register</title>
    <link href="<?= ASSET_PATH ."css/app.css"?>" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container h100">
        <div class="row mt-5">
            <div class="mx-auto  my-auto col-md-5 col-sm-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center">MVC Project</h2>
                        <hr>
                        <h4 class="mt-3 mb-4"><strong>Welcome <?=$name?></strong></h4>  
                        <h5 class="mt-3 mb-4">Update Your address</h5>  
                        <div>
                            <form action="<?=SR."users/storeAddress"?>" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input class="form-control" name="street">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">City</label>
                                            <input class="form-control" name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">State</label>
                                            <input class="form-control" name="state">
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-primary btn-block" type="submit" value="Update Address">
                                        </div>
                                        
                                        <p>Have an account? <a href="<?=SR."login"?>">Login</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>