<!DOCTYPE html>
<html>
<head>
<style>
        /* CSS styles as per your provided code */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
            margin-top: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .table-container {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        .signature {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .signature-field {
            width: 30%;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .thumbmark {
            width: 150px;
            height: 100px;
            border: 1px solid black;
            font-size: 10px;
            margin-bottom: 20px;
            padding: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thumbmark img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .box {
            width: 150px;
            height: 100px;
            border: 1px solid black; /* Added border styling */
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

        /* Button styles */
        .center {
            text-align: center;
            margin-top: 20px;
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
<div class="container">
  <h1>4. Learner/Trainee/Student (Clients) Classification:</h1>
  <form action="process_regis2.php" method="POST">
  <div class="table-container">
    <table>
      <tr>
        <th>Learner/Trainee/Student</th>
        <th>Client Type</th>
        <th>Client Type</th>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Students"> Students</td>
        <td><input type="checkbox" name="classification[]" value="Informal Workers"> Informal Workers</td>
        <td><input type="checkbox" name="classification[]" value="Indigenous People & Cultural Communities"> Indigenous People & Cultural Communities</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Out-of-School-Youth"> Out-of-School-Youth</td>
        <td><input type="checkbox" name="classification[]" value="Industry Workers"> Industry Workers</td>
        <td><input type="checkbox" name="classification[]" value="Disadvantaged Women"> Disadvantaged Women</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Solo Parent"> Solo Parent</td>
        <td><input type="checkbox" name="classification[]" value="Cooperatives"> Cooperatives</td>
        <td><input type="checkbox" name="classification[]" value="Victim of Natural Disasters and Calamities"> Victim of Natural Disasters and Calamities</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Solo Parent's Children"> Solo Parent's Children</td>
        <td><input type="checkbox" name="classification[]" value="Family Enterprises"> Family Enterprises</td>
        <td><input type="checkbox" name="classification[]" value="Victim or Survivor of Human Trafficking"> Victim or Survivor of Human Trafficking</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Senior Citizens"> Senior Citizens</td>
        <td><input type="checkbox" name="classification[]" value="Micro Entrepreneurs"> Micro Entrepreneurs</td>
        <td><input type="checkbox" name="classification[]" value="Drug Dependent Surrenderers"> Drug Dependent Surrenderers</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Displaced HEIs Teaching Personnel"> Displaced HEIs Teaching Personnel</td>
        <td><input type="checkbox" name="classification[]" value="Family Members of Microentrepreneur"> Family Members of Microentrepreneur</td>
        <td><input type="checkbox" name="classification[]" value="Rebel Returnees or Decommissioned Combatants"> Rebel Returnees or Decommissioned Combatants</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Displaced Workers"> Displaced Workers</td>
        <td><input type="checkbox" name="classification[]" value="Farmers and Fisherman"> Farmers and Fisherman</td>
        <td><input type="checkbox" name="classification[]" value="Inmates and Detainees"> Inmates and Detainees</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="TVET Trainers"> TVET Trainers</td>
        <td><input type="checkbox" name="classification[]" value="Family Members of Farmers and Fisherman"> Family Members of Farmers and Fisherman</td>
        <td><input type="checkbox" name="classification[]" value="Wounded-in-Action AFP & PNP Personnel"> Wounded-in-Action AFP & PNP Personnel</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Currently Employed Workers"> Currently Employed Workers</td>
        <td><input type="checkbox" name="classification[]" value="Community Tmg. & Employment Coordinator"> Community Tmg. & Employment Coordinator</td>
        <td><input type="checkbox" name="classification[]" value="Family Members of AFP and PNP Killed-and-Wounded in-Action"> Family Members of AFP and PNP Killed-and-Wounded in-Action</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Employees with Contractual/Job-Order Status"> Employees with Contractual/Job-Order Status</td>
        <td><input type="checkbox" name="classification[]" value="Retuming/Repatriated Overseas Filipino Workers"> Retuming/Repatriated Overseas Filipino Workers</td>
        <td><input type="checkbox" name="classification[]" value="Family Members of Inmates and Detainees"> Family Members of Inmates and Detainees</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="TESDA Alumni"> TESDA Alumni</td>
        <td><input type="checkbox" name="classification[]" value="Overseas Filipino Workers (OFW) Dependents"> Overseas Filipino Workers (OFW) Dependents</td>
        <td><input type="checkbox" name="classification[]" value="Uniformed Personnel"> Uniformed Personnel</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="classification[]" value="Urban and Rural Poor"> Urban and Rural Poor</td>
        <td><input type="checkbox" name="classification[]" value="Persons with Disabilities"> Persons with Disabilities</td>
        <td></td>
      </tr>
    </table>
  </div>
  <h1>5. Type of Disability (for Persons with Disability Only): To be filled up by the TESDA personnel</h1>
  <div class="table-container">
    <table>
      <tr>
        <th>Type of Disability</th>
        <th>Type of Disability</th>
        <th>Type of Disability</th>
      </tr>
      <tr>
        <td><input type="checkbox" name="disability[]" value="Mental/Intellectual"> Mental/Intellectual</td>
        <td><input type="checkbox" name="disability[]" value="Visual Disability"> Visual Disability</td>
        <td><input type="checkbox" name="disability[]" value="Orthopedic (Musculoskeletal) Disability"> Orthopedic (Musculoskeletal) Disability</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="disability[]" value="Hearing Disability"> Hearing Disability</td>
        <td><input type="checkbox" name="disability[]" value="Speech Impairment"> Speech Impairment</td>
       <td><input type="checkbox" name="disability[]" value="Multiple Disabilities"> Multiple Disabilities, specify</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="disability[]" value="Psychosocial Disability"> Psychosocial Disability</td>
        <td><input type="checkbox" name="disability[]" value="Disability Due to Chronic Illness"> Disability Due to Chronic Illness</td>
        <td><input type="checkbox" name="disability[]" value="Leaming Disability"> Leaming Disability</td>
      </tr>
    </table>
  </div>
  <h1>6. Causes of Disability (for Persons with Disability Only): To be filled up by the TESDA personnel</h1>
  <div class="table-container">
    <table>
      <tr>
        <th>Cause of Disability</th>
        <th>Cause of Disability</th>
        <th>Cause of Disability</th>
      </tr>
      <tr>
        <td><input type="checkbox" name="cause_of_disability[]" value="Congenital/Inborn"> Congenital/Inborn</td>
        <td><input type="checkbox" name="cause_of_disability[]" value="Illness"> Illness</td>
        <td><input type="checkbox" name="cause_of_disability[]" value="Injury"> Injury</td>
      </tr>
    </table>
  </div>
  <h1>7. Taken NCAE/YP4SC Before?</h1>
  <div class="table-container">
    <table>
      <tr>
        <td><input type="checkbox" name="taken_ncae" value="Yes"> Yes</td>
        <td><input type="checkbox" name="taken_ncae" value="No"> No</td>
      </tr>
    </table>
  </div>
  <label for="where">Where:</label>
  <input type="text" id="where" name="where">
  <label for="when">When:</label>
  <input type="text" id="when" name="when">
  <h1>8. Name of Course/Qualification</h1>
  <input type="text" id="qualification" name="qualification">
  <h1>9. If Scholar, What Type of Scholarship Package (TWSP, PESFA, STEP, others)?</h1>
  <input type="text" id="scholarship" name="scholarship">
  <h1>10. Privacy Disclaimer</h1>
  <p>I hereby allow TESDA to use/post my contact details, name, email, cellphone/landline nos. and other information I provided which maybe used for processing of my scholarship application, for employment opportunities and other purposes.</p>
  <div class="table-container">
    <table>
      <tr>
        <td><input type="checkbox" name="privacy_disclaimer" value="Agree"> Agree</td>
        <td><input type="checkbox" name="privacy_disclaimer" value="Disagree"> Disagree</td>
      </tr>
    </table>
  </div>
  <h1>11. Applicant's Signature</h1>
  <p style="text-align: center;">This is to certify that the information stated above is true and correct.</p>
  <div class="signature">
    <div class="signature-field">
      <label for="applicant_signature">APPLICANT'S SIGNATURE OVER PRINTED NAME</label>
      <input type="text" id="applicant_signature" name="applicant_signature">
    </div>
    <div class="signature-field">
      <label for="date_accomplished">DATE ACCOMPLISHED</label>
      <input type="text" id="date_accomplished" name="date_accomplished">
    </div>
  </div>
  <div class="signature">
    <div class="signature-field">
      <label for="registrar_signature">REGISTRAR/SCHOOL ADMINISTRATOR</label>
      <input type="text" id="registrar_signature" name="registrar_signature">
    </div>
    <div class="signature-field">
      <label for="date_received">DATE RECEIVED</label>
      <input type="text" id="date_received" name="date_received">
    </div>
  </div>
  <td class="picture-box">
                    <div class="box" id="imageBox">
                    <label for="imageUpload" class="file-upload-label">Choose File</label>
                    <input type="file" id="imageUpload" name="imageUpload" accept=".jpg, .jpeg, .png">
                </div>
  <div class="thumbmark">
    <p>Right Thumbmark</p>
  </div>

  <!-- Submit button section -->
  <div class="center">
    <button type="Submit">Submit</button>
    </a>
  </div>
  </form>
</div> 
</body>
</html>
