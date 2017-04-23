# wp-csi
37_RohitNair_WP

INTRODUCTION:

This project is used to register for Computer Society of India(CSI).
It includes 2 webpages, 1 javascript file and php file.
There are two forms, one is used to enter the details and another to display the entered details.
A data base is created on a localhost server. The name of the database is csi.sql. The database contains 1 table "csiform".

INSTRUCTIONS:

Import the csi.sql file on your database server.
Save all contents of the repository to the server directory where the webpages are located.
for eg. if you are using 'xampp' server then save all the files in htdocs folder of the 'xampp' directory.
Add all the images in the webpages which are in the repository.

DESCRIPTION:

1.There are 3 webpages used in this project. They are 'form.php' , 'register.php' , 'accept.php'.
2.form.php is the initial page of the index page in this project.
3.User is supposed to enter the details of the Form.
4.the contents of form.php are validated through myFunction.js which is a javascript file.
5.After validation the contents are stored in csi.sql database which is on the localhost server.
6.Validation and sending the data inthe database is done by clickin on the submit button on form.php.
7.On submit the page is redirected to accept.php.
8.In accept.php the values from the database is retrieved from the database csi.sql.
9.In  accept.php there is an accept button which the administator will click if the user has paid the money.
10.In accept.php the data is represented in a tabular format with all the details that the user entered while filling form.php.
