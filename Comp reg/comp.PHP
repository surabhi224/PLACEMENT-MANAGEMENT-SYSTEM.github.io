<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comp.css">






    <title>Document</title>
</head>

<body>
	

    <h1><u>COMPANY REGISTRATION FORM</u></h1>
    <table align="center" cellpadding="10" class="bordered">

        <tr>
            <form class="form-horizontal" action="connect.php" method="post" onsubmit="return validate()">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Company Name
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname" placeholder="Company Name " name="compname" required> 
                </div>
        </tr>
        <tr>
            <div class="col-sm-10">
                <label for="Link">
                    <td>Website link
                </label>
                <td>
                    <input type="text" class="form-control" id="lastname" placeholder="Link" name="link" required>
            </div>
        </tr>
        <!-- <tr>
            <div class="col-sm-10">
                <br>
                <td>Date Of Examination
                <td>
                    <select class="form-control">
                        <option>Date</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>

                    </select>



                    <select class="form-control">
                        <option value="1">Month</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="Aug">Aug</option>
                        <option value="Sept">Sept</option>
                        <option value="Jan">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
            </div>
            <select class="form-control">
                <option>Year</option>

                <option>2021</option>
                <option>2022</option>


            </select>
        </tr> -->
        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>HR name
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname" placeholder="HR Name " name="HRname" required>
                </div>
        </tr>




        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>HR Email ID
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter you e-mail" name="HRemail" required>
                </div>
        </tr>
        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>HR Contact Number
                    </label>
                    <td>
                        <input type="text" class="form-control" id="firstname" placeholder="10-Digit number" name="contactno" required>
                </div>
        </tr>

        <div class="col-sm-10">
            <label for="First Name">
                <td>Company Address
            </label>
            <td>
                <textarea class="form-control" rows="3" input type="text" class="form-control" id="firstname" name="compadd"
                    placeholder="Enter Your Address Here" required></textarea>
        </div>
        </tr>

        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Pincode<label>
                        <td>
                            <input type="text" class="form-control" id="firstname" name="pincode" required>(6 digit number)
                </div>
        </tr>


        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>State<label>
                        <td>
                            <input type="text" class="form-control" id="firstname" placeholder="MAX CHRACTERS A-Z" name="state" required>(max
                            30 character a-z and A-Z)
                </div>
        </tr>
        <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Country<label>
                        <td>
                            <input type="text" class="form-control" id="firstname" placeholder="India" name="country" required>
                </div>
        </tr>
        <tr>
            <label for="Niche">
                <td>Niche
            </label>
            <td>

                <label for="male">Private</label>
                <input type="radio" name="niche" id="male" value="pr">
                <label for="female">Public</label>
                <input type="radio" name="niche" id="female" value="pu"><br></td>
        </tr>

        <tr>
            <label for="Niche">
                <td>Coming for
            </label>
            <td>

                <label for="male">Internship</label>
                <input type="radio" name="coming" id="male" value="i">
                <label for="female">Full-Time</label>
                <input type="radio" name="coming" id="female" value="f"><br></td>
        </tr>
        <tr>
            <form class="form-horizontal">

                <label for="Gender">
                    <td>Courses which  can apply
                </label>
                <td>

                    <label for="male">B.Tech</label>
                    <input type="radio" name="course" id="male" value="bt">
                   
                    <label for="female">BCA</label>
                    <input type="radio" name="course" id="female" value="bc">
                    <label for="female">MCA</label>
                    <input type="radio" name="course" id="female" value="m"></td>
        </tr>
        <tr>
            <td>
                <p> Branches which can apply :</p>
            </td>
            <td>
                <div>
                    <input type="checkbox" id="scales" name="branch" value="IT" checked>
                    <label for="scales">IT</label>
                </div>

                <div>
                    <input type="checkbox" id="horns" name="branch" value="CS" >
                    <label for="horns">CS</label>
                </div>
                <div>
                    <input type="checkbox" id="horns" name="branch" value="EC">
                    <label for="horns">EC</label>
                </div>
                <div>
                    <input type="checkbox" id="horns" name="branch" value="EE">
                    <label for="horns">EE</label>
                </div>
                <div>
                    <input type="checkbox" id="horns" name="branch" value="EI">
                    <label for="horns">EI</label>
                </div>
            </td>
        </tr> <tr>
            <form class="form-horizontal">
                <div class="col-sm-10">
                    <label for="First Name">
                        <td>Stipend<label>
                        <td>
                            <input type="text" class="form-control" id="firstname" name="stipend" required>
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

    <script>
    function validate(){
        var name = document.getElementById('compname').value;
        var nameregx = /^[A-Za-z ]+$/;
        if(nameregx.test(name) == false)
        {
            alert('Invalid Company Name!');
            return false;
        }
}
</script>

</body>

</html>