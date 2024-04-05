# Activity 3: Creating a Basic CRUD Controller for API using apiResource

Author: Jethro R Cadang <br/>
Instructor: Mr. Elmer C. Alvarado

# Objective

 To demonstrate your understanding of controllers in Laravel by creating a basic CRUD (Create, Read, Update, Delete) controller for an API using `apiResource` for route definition.

# Activity Instructions

Instructions:
1. UsingtheLaravelframework,createanewLaravelprojectoruseanexisting one.
2. Createanewcontrollernamed`ProductController`usingartisan.
3. Insidethe`ProductController`,implementthefollowingCRUD
functionalities:
○ Create a method to return a JSON response indicating the display of all
products.
i. Response Message: Display all products.
○ Create a method to return a JSON response indicating the successful storage of a newly created product.
i. Response Message: Product created successfully.
○ Create a method to return a JSON response indicating the display of a
specific product.
i. Response Message: Display product with ID: `<id>`
○ Create a method to return a JSON response indicating the successful update of a specific product.
i. Response Message: Product with ID: `<id>` updated successfully. ○ Create a method to return a JSON response indicating the successful
deletion of a specific product.
i. Response Message: Product with ID: `<id>` deleted successfully.
4. DefineappropriateroutestoaccesstheCRUDfunctionalitiesofthe `ProductController` using `apiResource`.
5. TesttheCRUDoperationsbysendingrequeststothedefinedroutesusing tools like Postman or any API testing tool.