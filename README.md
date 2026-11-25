# milestone-5 
# Name: Luke McDevitt
# Date: 2026-11-25
# Time: 115520
Advanced Features and Testing 

Tasks:

§Implement search functionality.

Set up unit tests for the application services. 

# inside tests folder
I set up an *Inventory Test*, called InventoryTest.php, which uses the Laptop model inside of the main App file to make sure that the laptop inventory index loads correctly. 
If it does, the response I set up is a $this->get('/laptops'); response so to take the user to the ('/laptops'); file, and pulls out a (200) HTTP response.



# Inside the tests folder inside the Unit folder:
I set up a *LaptopTest*, which includes the inventory.
I set up a *RentalTest*, which includes the start date, and the end date of the rentals.

# Inside the tests folder inside the Feature folder:
I set up a *Search.php* file so that way customers can easily search the website.
I also set up a Dashboard test file so that way i could test the usability of the dashboard.
#inside the feature folder there is an Auth folder that includes:

1. VerificationNotificationTest.php
2. TwoFactorChallengeTest.php
3. RegistrationTest.php
4. PasswordResetTest.php
5. PasswordConfirmationTest.php
6. EmailVerificationTest.php
7. AuthenticationTest.php
each one of these are for the Authentication and Authorization portion of the App.


