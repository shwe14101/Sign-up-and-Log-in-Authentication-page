# Sign-up-and-Log-in-Authentication-page
Backend: PHP, Database: SQL. When there is a new sign up, uniqueness of the username and mail id is checked from the existing data base. The password entered by the user during sign up is encrypted using md5 and is decrypted back during log in, in order to match with the password entered by the user. On successful log in, the corresponding message pops up in the java script alert box. A link is sent for E-mail verification, clicking on which the 'isauth' column in database changes from 0 to 1. Thus denoting the account is verified. This authentication component can be used with any complex project which requires log in and sign up.