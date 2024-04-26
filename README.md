# Activity 4: Building Image Upload Functionality in Laravel ProductController

Author: Jethro R Cadang <br/>
Instructor: Mr. Elmer C. Alvarado

# Objective

 To implement image upload functionality using both the local driver and public storage in Laravel using the `ProductController`.


# Activity Instructions

1. Using the Laravel framework, create a new Laravel project or use an existing one.

2. Create a new controller named `ProductController` using artisan.

3. In the `ProductController`, create the following:
    
    
    Add a new method uploadImageLocal to handle uploading an image using the local disk driver
    <br/>
    Response Message:Image successfully stored in local disk driver
    <br/>
    Add another method uploadImagePublic to handle uploading an image using the public disk driver.
    <br/>
    Response Message:Image successfully stored in public disk driver.

4. Define a POST route to handle the `uploadImageLocal` and `uploadImagePublic` methods within the `ProductController`. This route should be configured to accept file uploads for both methods.

5. Test the endpoints for uploading images locally and publicly to verify if the files are successfully stored in their designated storage drivers.






