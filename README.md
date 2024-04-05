# Activity 3: Creating a Basic CRUD Controller for API using apiResource

Author: Jethro R Cadang <br/>
Instructor: Mr. Elmer C. Alvarado

# Objective

 To demonstrate your understanding of controllers in Laravel by creating a basic CRUD (Create, Read, Update, Delete) controller for an API using `apiResource` for route definition.

# Activity Instructions

Instructions:
1. Using the Laravel framework, createa new Laravel project or use an existing one.
2. Create a new controller named `ProductController` using artisan.
3. Inside the `ProductController`,implement the following CRUD functionalities:
<br>

 &nbsp;○ Create a method to return a JSON response indicating the display of all products.

 &nbsp;&nbsp;i. Response Message: Display all products.

 &nbsp;○ Create a method to return a JSON response indicating the successful storage of a newly created product. 

 &nbsp;&nbsp;i. Response Message: Product created successfully.

 &nbsp;○ Create a method to return a JSON response indicating the display of a specific product.

 &nbsp;&nbsp;i. Response Message: Display product with ID: `<id>`

 &nbsp;○ Create a method to return a JSON response indicating the successful update of a specific product.

 &nbsp;i. Response Message: Product with ID: `<id>` updated successfully.

 &nbsp;&nbsp;○ Create a method to return a JSON response indicating the successful deletion of a specific product.

 &nbsp;i. Response Message: Product with ID: `<id>` deleted successfully.

4. DefineappropriateroutestoaccesstheCRUDfunctionalitiesofthe `ProductController` using `apiResource`.
5. TesttheCRUDoperationsbysendingrequeststothedefinedroutesusing tools like Postman or any API testing tool. 