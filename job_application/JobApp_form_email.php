<html>
<head><H1>Poynette Ironworks Inc.</H1></header>


<?php
 
    //Gather Form data
    $dateOfApp = $_POST['dateOfApp_Month'] . '/' . $_POST['dateOfApp_Day'] . '/' . $_POST['dateOfApp_Year']; // required
    $AppPosition = $_POST['AppPosition']; // required
    $fNameApp = $_POST['fNameApp']; // required
    $mInitialApp = $_POST['mInitialApp']; // required
    $street1App = $_POST['street1App']; // required
    $street2App = $_POST['street2App']; // not required
    $cityApp = $_POST['cityApp']; // required
    $STApp = $_POST['STApp']; // required
    $zipApp = $_POST['zipApp']; // required
    $phone1App = $_POST['phone1App']; // required
    $phone2App = $_POST['phone2App']; // not required
    $emailApp = $_POST['emailApp']; // required
    $startDate = $_POST['startDate_Month'] . '/' . $_POST['startDate_Day'] . '/' . $_POST['startDate_Year']; // not required
    $desiredSalary = $_POST['desiredSalary']; // not required
    $workPermit = $_POST['workPermit']; // required
    $workPermitNo = $_POST['workPermitNo']; // not required
    $workHere = $_POST['workHere']; // required
    $workHereYes = $_POST['workHereYes']; // not required
    $workLegally = $_POST['workLegally']; // required
    $convictedCrime = $_POST['convictedCrime']; // required
    $convictedCrimeYes = $_POST['convictedCrimeYes']; // not required
    $empStartDate1 = $_POST['empStartDate1_Month'] . '/' . $_POST['empStartDate1_Year']; // not required
    $empEndDate1 = $_POST['empEndDate1_Month'] . '/' . $_POST['empEndDate1_Year']; // not required
    $empName1 = $_POST['empName1']; // not required
    $empStreet1 = $_POST['empStreet1']; // not required
    $empCity1 = $_POST['empCity1']; // not required
    $empST1 = $_POST['empST1']; // not required
    $empZip1 = $_POST['empZip1']; // not required
    $empSup1 = $_POST['empSup1']; // not required
    $empRef1 = $_POST['empRef1']; // not required
    $empJobTitle1 = $_POST['empJobTitle1']; // not required
    $endSalary1 = $_POST['endSalary1']; // not required
    $empDuties1 = $_POST['empDuties1']; // not required
    $empLeaving1 = $_POST['empLeaving1']; // not required
    $empStartDate2 = $_POST['empStartDate2_Month'] . '/' . $_POST['empStartDate2_Year']; // not required
    $empEndDate2 = $_POST['empEndDate2_Month'] . '/' . $_POST['empEndDate2_Year']; // not required
    $empName2 = $_POST['empName2']; // not required
    $empStreet2 = $_POST['empStreet2']; // not required
    $empCity2 = $_POST['empCity2']; // not required
    $empST2 = $_POST['empST2']; // not required
    $empZip2 = $_POST['empZip2']; // not required
    $empSup2 = $_POST['empSup2']; // not required
    $empRef2 = $_POST['empRef2']; // not required
    $empJobTitle2 = $_POST['empJobTitle2']; // not required
    $endSalary2 = $_POST['endSalary2']; // not required
    $empDuties2 = $_POST['empDuties2']; // not required
    $empLeaving2 = $_POST['empLeaving2']; // not required
    $empStartDate3 = $_POST['empStartDate3_Month'] . '/' . $_POST['empStartDate3_Year']; // not required
    $empEndDate3 = $_POST['empEndDate3_Month'] . '/' . $_POST['empEndDate3_Year']; // not required
    $empName3 = $_POST['empName3']; // not required
    $empStreet3 = $_POST['empStreet3']; // not required
    $empCity3 = $_POST['empCity3']; // not required
    $empST3 = $_POST['empST3']; // not required
    $empZip3 = $_POST['empZip3']; // not required
    $empSup3 = $_POST['empSup3']; // not required
    $empRef3 = $_POST['empRef3']; // not required
    $empJobTitle3 = $_POST['empJobTitle3']; // not required
    $endSalary3 = $_POST['endSalary3']; // not required
    $empDuties3 = $_POST['empDuties3']; // not required
    $empLeaving3 = $_POST['empLeaving3']; // not required
    $empStartDate4 = $_POST['empStartDate4_Month'] . '/' . $_POST['empStartDate4_Year']; // not required
    $empEndDate4 = $_POST['empEndDate4_Month'] . '/' . $_POST['empEndDate4_Year']; // not required
    $empName4 = $_POST['empName4']; // not required
    $empStreet4 = $_POST['empStreet4']; // not required
    $empCity4 = $_POST['empCity4']; // not required
    $empST4 = $_POST['empST4']; // not required
    $empZip4 = $_POST['empZip4']; // not required
    $empSup4 = $_POST['empSup4']; // not required
    $empRef4 = $_POST['empRef4']; // not required
    $empJobTitle4 = $_POST['empJobTitle4']; // not required
    $endSalary4 = $_POST['endSalary4']; // not required
    $empDuties4 = $_POST['empDuties4']; // not required
    $empLeaving4 = $_POST['empLeaving4']; // not required
    $skillsQual = $_POST['skillsQual']; // not required
    $school1 = $_POST['school1']; // not required
    $schoolComp1 = $_POST['schoolComp1']; // not required
    $levelComp1 = $_POST['levelComp1']; // not required
    $courseStudy1 = $_POST['courseStudy1']; // not required
    $school2 = $_POST['school2']; // not required
    $schoolComp2 = $_POST['schoolComp2']; // not required
    $levelComp2 = $_POST['levelComp2']; // not required
    $courseStudy2 = $_POST['courseStudy2']; // not required
    $school3 = $_POST['school3']; // not required
    $schoolComp3 = $_POST['schoolComp3']; // not required
    $levelComp3 = $_POST['levelComp3']; // not required
    $courseStudy3 = $_POST['courseStudy3']; // not required
    $school4 = $_POST['school4']; // not required
    $schoolComp4 = $_POST['schoolComp4']; // not required
    $levelComp4 = $_POST['levelComp4']; // not required
    $courseStudy4 = $_POST['courseStudy4']; // not required
    $refName1 = $_POST['refName1']; // required
    $refTitle1 = $_POST['refTitle1']; // required
    $refRelate1 = $_POST['refRelate1']; // required
    $refPhone1 = $_POST['refPhone1']; // required
    $refYears1 = $_POST['refYears1']; // required
    $refName2 = $_POST['refName2']; // required
    $refTitle2 = $_POST['refTitle2']; // required
    $refRelate2 = $_POST['refRelate2']; // required
    $refPhone2 = $_POST['refPhone2']; // required
    $refYears2 = $_POST['refYears2']; // required
    $refName3 = $_POST['refName3']; // required
    $refTitle3 = $_POST['refTitle3']; // required
    $refRelate3 = $_POST['refRelate3']; // required
    $refPhone3 = $_POST['refPhone3']; // required
    $refYears3 = $_POST['refYears3']; // required    
    
    //Put form data into email message
    $to = 'becky@poynetteironworks.com';
    $subject = 'Job Aplication';
    $msg = "Date of Application: $dateOfApp\n\n" .
    "Applied for Position: $AppPosition\n\n" .
    "First Name: $fNameApp\n" . 
    "Middle Initial: $mInitialApp\n" .
    "Last Name: $lNameApp\n" .
    "Street 1: $street1App\n" .
    "Street 2: $street2App\n" .
    "City: $lcityApp\n" .
    "ST: $STApp\n" .
    "Zip: $zipApp\n" .
    "Phone 1: $phone1App\n" .
    "Phone 2: $phone2App\n" .
    "Email: $emailApp\n\n" .
    "Available Start Date: $startDate\n" .
    "Desired Salary: $desiredSalary\n\n" .
    "If under 18, furnish work permit? $workPermit\n" .
    "If No, explain why: $workPermitNo\n\n" .
    "Have you worked her before? $workHere\n" .
    "If yes, dates & positions: $workHereYes\n\n" .
    "Can legally work in county? $workLegally\n\n" .
    "Have you been convicted of a crime? $convictedCrime\n" .
    "If yes, dates & details: $convictedCrimeYes\n\n" .
    "Employeer #1 Start Date: $empStartDate1\n" .
    "Employeer #1 End Date: $empEndDate1\n" .
    "Employeer #1 Name: $empName1\n" .
    "Employeer #1 Street: $empStreet1\n" .
    "Employeer #1 City: $empCity1\n" .
    "Employeer #1 ST: $empST1\n" .
    "Employeer #1 Zip: $empZip1\n" .
    "Employeer #1 Phone: $empPhone1\n" .
    "Employeer #1 Supervisor: $empSup1\n" .
    "Employeer #1 Call for Reference: $empRef1\n" .
    "Employeer #1 Job Title: $empJobTitle1\n" .
    "Employeer #1 Ending Salary: $endSalary1\n" .
    "Employeer #1 Job Duties: $empDuties1\n" .
    "Employeer #1 Reason for Leaving: $empLeaving1\n\n" .
    "Employeer #2 Start Date: $empStartDate2\n" .
    "Employeer #2 End Date: $empEndDate2\n" .
    "Employeer #2 Name: $empName2\n".
    "Employeer #2 Street: $empStreet2\n" .
    "Employeer #2 City: $empCity2\n" .
    "Employeer #2 ST: $empST2\n" .
    "Employeer #2 Zip: $empZip2\n" .
    "Employeer #2 Phone: $empPhone2\n" .
    "Employeer #2 Supervisor: $empSup2\n" .
    "Employeer #2 Call for Reference: $empRef2\n".
    "Employeer #2 Job Title: $empJobTitle2\n" .
    "Employeer #2 Ending Salary: $endSalary2\n" .
    "Employeer #2 Job Duties: $empDuties2\n" .
    "Employeer #2 Reason for Leaving: $empLeaving2\n\n" .
    "Employeer #3 Start Date: $empStartDate3\n" .
    "Employeer #3 End Date: $empEndDate3\n" .
    "Employeer #3 Name: $empName3\n" .
    "Employeer #3 Street: $empStreet3\n" .
    "Employeer #3 City: $empCity3\n" .
    "Employeer #3 ST: $empST3\n" .
    "Employeer #3 Zip: $empZip3\n" .
    "Employeer #3 Phone: $empPhone3\n" .
    "Employeer #3 Supervisor: $empSup3\n" .
    "Employeer #3 Call for Reference: \n" .
    "Employeer #3 Job Title: $empJobTitle3\n" .
    "Employeer #3 Ending Salary: $endSalary3\n" .
    "Employeer #3 Job Duties: $empDuties3\n" .
    "Employeer #3 Reason for Leaving: $empLeaving3\n\n" .
    "Employeer #4 Start Date: $empStartDate4\n" .
    "Employeer #4 End Date: $empEndDate\n" .
    "Employeer #4 Name: $empName4\n" .
    "Employeer #4 Street: $empStreet4\n" .
    "Employeer #4 City: $empCity4\n" .
    "Employeer #4 ST: $empST4\n" .
    "Employeer #4 Zip: $empZip4\n" .
    "Employeer #4 Phone: $empPhone4\n" .
    "Employeer #4 Supervisor: $empSup4\n" .
    "Employeer #4 Call for Reference: $empRef4)\n" .
    "Employeer #4 Job Title: $empJobTitle4\n" .
    "Employeer #4 Ending Salary: $endSalary4\n" .
    "Employeer #4 Job Duties: $empDuties4\n" .
    "Employeer #4 Reason for Leaving: $empLeaving4\n\n" .
    "Skills & Qualifications: $skillsQual\n\n" .
    "School Name, City ST #1: $school1\n" .
    "Year Completed #1: $schoolComp1\n" .
    "Level Completed #1: $levelComp1\n" .
    "Course of Study #1: $courseStudy1\n\n" .
    "School Name, City ST #2: $school2\n" .
    "Year Completed #2: $schoolComp2\n" .
    "Level Completed #2: $levelComp2\n" .
    "Course of Study #2: $courseStudy2\n\n" .
    "School Name, City ST #3: $school3\n" .
    "Year Completed #3: $schoolComp3\n" .
    "Level Completed #3: $levelComp3\n" .
    "Course of Study #3: $courseStudy3\n\n" .
    "School Name, City ST #4: $school4\n" .
    "Year Completed #4: $schoolComp4\n" .
    "Level Completed #4: $levelComp4\n" .
    "Course of Study #4: $courseStudy4\n\n" .
    "Name of Reference #1: $refName1\n" .
    "Title Reference #1: $refTitle1\n" .
    "Relationship of Reference #1: $refRelate1\n" .
    "Phone of Reference #1: $refPhone1\n" .
    "Years Know of Reference #1: $refYears1\n\n" .
    "Name of Reference #2: $refName2\n" .
    "Title Reference #2: $refTitle2\n" .
    "Relationship of Reference #2: $refRelate2\n" .
    "Phone of Reference #2: $refPhone2\n" .
    "Years Know of Reference #2: $refYears2\n\n" .
    "Name of Reference #3: $refName3\n" .
    "Title Reference #3: $refTitle3\n" .
    "Relationship of Reference #3: $refRelate3\n" .
    "Phone of Reference #3: $refPhone3\n" .
    "Years Know of Reference #3: $refYears3";
 	
    //Send form data in email
    mail($to, $subject, $msg, 'From:' . $emailApp);
    
    //Confirmation of Appelication
    echo 'Thank you for submitting your Application.<br />';
    echo 'We will be in contact with you.';
    
?>
</html>