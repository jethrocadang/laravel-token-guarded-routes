<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function generateDummyData()
    {
        // Dummy data array for demonstration
        $dummyData = [];
        for ($i = 1; $i <= 10; $i++) {
            $dummyData[] = [
                'id' => $i,
                'name' => 'Product ' . $i,
                'description' => 'Description of Product ' . $i,
                'price' => rand(10, 100)
            ];
        }

        // Return the dummy data
        return $dummyData;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->generateDummyData();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        return response()->json([$validatedData, "Product: {$validatedData['name']} Created Successfully"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dummyData = $this->generateDummyData();

        // Check if the provided ID exists in the dummy data
        $product = null;
        foreach ($dummyData as $item) {
            if ($item['id'] == $id) {
                $product = $item;
                break;
            }
        }

        // If the product with the given ID is not found, return a 404 error
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Return the product data
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Dummy data array for demonstration
        $dummyData = $this->generateDummyData();

        // Find the index of the product in the dummy data array
        $index = null;
        foreach ($dummyData as $key => $item) {
            if ($item['id'] == $id) {
                $index = $key;
                break;
            }
        }

        // If the product with the given ID is not found, return a 404 error
        if ($index === null) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Update the product in the dummy data array
        $dummyData[$index]['name'] = $validatedData['name'];
        $dummyData[$index]['description'] = $validatedData['description'];
        $dummyData[$index]['price'] = $validatedData['price'];

        // Return a success message along with the updated product data
        return response()->json(['message' => 'Product updated successfully', 'data' => $dummyData[$index]], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Dummy data array for demonstration
        $dummyData = $this->generateDummyData();

        // Find the index of the product in the dummy data array
        $index = null;
        foreach ($dummyData as $key => $item) {
            if ($item['id'] == $id) {
                $index = $key;
                break;
            }
        }

        // If the product with the given ID is not found, return a 404 error
        if ($index === null) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Remove the product from the dummy data array
        unset($dummyData[$index]);

        // Return a success message
        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}
