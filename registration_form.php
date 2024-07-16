<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .page {
            max-width: 800px; /* Adjust maximum width to fit content */
            border: 1pt solid black; /* 1 point border on all sides */
            padding: 20px; /* Increased padding for better spacing */
            margin: 0 auto; /* Center the div horizontally */
        }

        h2, h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }
        
        .box {
            width: 150px;
            height: 100px;
            border: 1px solid black;
            text-align: center;
            font-size: 10px;
            padding: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            float: right;
            position: relative;
        }
        .file-upload-label {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 5px 10px;
        background-color: lightgreen;
        color: black;
        cursor: pointer;
        border: none;
        font-size: 10px;
        transition: background-color 0.3s ease;
    }

        .file-upload-label:hover {
            background-color: rgb(14, 147, 236);
        }

        input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
            width: 100%;
            height: 100%;
        }

        .picture-box {
            text-align: right;
        }

        th {
            background-color: lightgreen;
            text-align: center;
            color: black;
            border-bottom: none;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        input[type="text"] {
            width: calc(100% - 16px); /* Adjusted width to account for padding and border */
            padding: 5px;
        }

        .center {
            text-align: center;
            margin-top: 20px; /* Add margin to separate from the table */
        }

        .center button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: lightgreen;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }

        .center button:hover {
            background-color: rgb(14, 147, 236); /* Change background color on hover */
        }
    </style>
</head>
<body>
    <div class="page">
        <h2>Technical Education and Skills Development Authority</h2>
        <p>Pangasiwaan sa Edukasyong Teknikal at Pagpapaunlad ng Kasanayan</p>
        
        <h3>Registration Form</h3>
        <form action="process_registration.php" method="post">
            <table>
                <tr>
                    <th colspan="2">LEARNERS PROFILE FORM</th>
                </tr>
                <tr>
                    <td></td>
                    <td class="picture-box">
                    <div class="box" id="imageBox">
                    <label for="imageUpload" class="file-upload-label">Choose File</label>
                    <input type="file" id="imageUpload" name="imageUpload" accept=".jpg, .jpeg, .png">
                </div>

                    </td>
                </tr>
            
                <tr>
                    <td>1. T2MIS Auto Generated</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1.1. Unique Learner Identifier (ULI) Number:</td>
                    <td><input type="text" name="uli_number"></td>
                </tr>
                <tr>
                <td>1.2. Entry Date:</td>
                    <td><input type="text" name="entry_date" size="10" placeholder="mm-dd-yy"></td>
                </tr>
                <tr>
                    <td>2. Learner/Manpower Profile</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2.1. Name:</td>
                    <td>
                        <input type="text" name="last_name" size="15" placeholder="Last Name, Extension Name (Jr., Sr.)">
                        <input type="text" name="first_name" size="15" placeholder="First Name">
                        <input type="text" name="middle_name" size="15" placeholder="Middle Name">
                    </td>
                </tr>
                <tr>
                    <td>2.2. Complete Permanent Mailing Address:</td>
                    <td>
                        <input type="text" name="address_number_street" size="20" placeholder="Number, Street"><br>
                        <input type="text" name="address_barangay" size="20" placeholder="Barangay"><br>
                        <input type="text" name="address_district" size="20" placeholder="District"><br>
                        <input type="text" name="address_city_municipality" size="20" placeholder="City/Municipality"><br>
                        <input type="text" name="address_province" size="20" placeholder="Province"><br>
                        <input type="text" name="address_region" size="20" placeholder="Region"><br>
                        <input type="text" name="email_facebook" size="20" placeholder="Email Address/Facebook Account"><br>
                        <input type="text" name="contact_no" size="20" placeholder="Contact No"><br>
                        <input type="text" name="nationality" size="20" placeholder="Nationality">
                    </td>
                </tr>
                <tr>
                    <td>3. Personal Information</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3.1. Sex</td>
                    <td>3.2. Civil Status</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="sex" value="male"> Male</td>
                    <td><input type="checkbox" name="civil_status" value="single"> Single</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="sex" value="female"> Female</td>
                    <td><input type="checkbox" name="civil_status" value="married"> Married</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="civil_status" value="widow"> Widow/er</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="civil_status" value="separated"> Separated</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="civil_status" value="solo_parent"> Solo Parent</td>
                </tr>
                <tr>
                    <td>3.3. Employment Status (before the training)</td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="employment_status" value="employed"> Employed</td>
                    <td><input type="checkbox" name="employment_status" value="unemployed"> Unemployed</td>
                </tr>
                <tr>
                    <td>3.4. Birthdate</td>
                    <td>
                        <input type="text" name="birth_month" size="10" placeholder="Month of Birth">
                        <input type="text" name="birth_day" size="10" placeholder="Day of Birth">
                        <input type="text" name="birth_year" size="10" placeholder="Year of Birth">
                        <input type="text" name="age" size="10" placeholder="Age">
                    </td>
                </tr>
                <tr>
                    <td>3.5. Birthplace</td>
                    <td>
                        <input type="text" name="birthplace_city_municipality" size="20" placeholder="City/Municipality">
                        <input type="text" name="birthplace_province" size="20" placeholder="Province">
                        <input type="text" name="birthplace_region" size="20" placeholder="Region">
                    </td>
                </tr>
                <tr>
                    <td>3.6. Educational Attainment Before the Training (Trainee)</td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="no_grade_completed"> No Grade Completed</td>
                    <td><input type="checkbox" name="educational_attainment" value="pre_school"> Pre-School (Nursery/Kinder/Prep)</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="elementary_undergraduate"> Elementary Undergraduate</td>
                    <td><input type="checkbox" name="educational_attainment" value="post_secondary_undergraduate"> Post Secondary Undergraduate</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="elementary_graduate"> Elementary Graduate</td>
                    <td><input type="checkbox" name="educational_attainment" value="post_secondary_graduate"> Post Secondary Graduate</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="high_school_undergraduate"> High School Undergraduate</td>
                    <td><input type="checkbox" name="educational_attainment" value="high_school_graduate"> High School Graduate</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="college_undergraduate"> College Undergraduate</td>
                    <td><input type="checkbox" name="educational_attainment" value="college_graduate_or_higher"> College Graduate or Higher</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="educational_attainment" value="junior_high_graduate"> Junior High Graduate</td>
                    <td><input type="checkbox" name="educational_attainment" value="senior_high_graduate"> Senior High Graduate</td>
                </tr>
                <tr>
                    <td>3.7. Parent/Guardian</td>
                    <td><input type="text" name="parent_guardian_name" size="20" placeholder="Name"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" name="parent_guardian_address" size="50" placeholder="Complete Permanent Mailing Address"></td>
                </tr>
            </table>
            <div class="center">
                <button type="submit">Submit</a></button>
            </div>
        </form>
    </div>
</body>
</html>
