


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">


    <title>Document</title>
</head>

<body>
	

    <h1><u>PLACED STUDENT'S RECORD</u></h1>
    <table align="center" cellpadding="10" class="bordered">

        <tr>
            <form class="form-horizontal" action="config.php" method="post">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Student Name
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname"  name="name">
                </div>
        </tr>
        <tr>
            <div class="col-sm-10">
                <label for="enroll">
                    <td>Enrollment
                </label>
                <td>
                    <input type="text" class="form-control" id="lastname"  name="enroll">
            </div>
        </tr>
       
        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Branch
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname"  name="branch">
                </div>
        </tr>




        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Batch
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname"  name="batch">
                </div>
        </tr>
        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Salary
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname" name="salary">
                </div>
        </tr>

        <div class="col-sm-10">
            <label for="First Name">
                <td>Designation
            </label>
            <td>
            <input type="text" class="form-control" id="firstname" name="designation">
                   
        </div>
        </tr>

        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Company Name<label>
                        <td>
                            <input type="text" class="form-control" id="firstname" name="comp_name">
                </div>
        </tr>


        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>State<label>
                        <td>
                            <input type="text" class="form-control" id="firstname"  name="comp_state">
                </div>
        </tr>
        
     
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>
                    </label>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                </div>
        </tr>
    

    </table>

</body>

</html>