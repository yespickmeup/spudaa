<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alumni Association | Successfully Registered</title>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>"/>
        <link rel="stylesheet" href="<?php echo e(URL::to('src/bootstrap/css/bootstrap.min.css')); ?>"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;

                font-family: 'Raleway', sans-serif;


                margin: 0;
                font-size: 10px;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 40px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Successfully Registered!<br>
                    <p style="font-size: 20px;">
                        kindly proceed to the admin office for account approval!
                        <!-- Check your email for the activation link &<br> kindly proceed to the admin office for account approval! -->
                        
                    </p>
                   <a href="<?php echo e(route('signin')); ?>" class="btn btn-success btn-lg">OK</a>
                </div>
            </div>
        </div>
    </body>
</html>