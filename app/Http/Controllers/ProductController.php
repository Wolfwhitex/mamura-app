<?php

namespace App\Http\Controllers;

use view;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
            'Harga' => 'required|numeric|min:0',
            'Stock' => 'required|integer|min:0',
            'FotoProduk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if an image is uploaded
        if ($request->hasFile('FotoProduk')) {
            // Get the uploaded image file
            $image = $request->file('FotoProduk');

            // Generate a unique file name
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public directory
            $image->move(public_path('images/products'), $imageName);

            // Set the image path in the product
            $imagePath = 'images/products/' . $imageName;
        } else {
            // Set a default image path if no image is uploaded
            $imagePath = 'images/products/default.jpg';
        }

        // Menyimpan data produk ke database
        $product = Products::create([
            'Nama' => $request->input('Nama'),
            'Deskripsi' => $request->input('Deskripsi'),
            'Harga' => $request->input('Harga'),
            'Stock' => $request->input('Stock'),
            'FotoProduk' => $imagePath,
        ]);

        // Mengarahkan pengguna setelah penyimpanan sukses
        return redirect()->intended('/seller_page')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function index()
    {
        // Mengambil semua produk dari database
        $products = Products::all();
    
        // Mengirim data produk ke view
        return view('seller.seller_page', ['products' => $products]);
    }

    public function edit($ProductID)
{
    // Mencari produk berdasarkan ID
    $product = Products::findOrFail($ProductID);

    // Mengirim data produk ke view untuk ditampilkan di form edit
    return view('seller.seller_edit', ['product' => $product]);
}


    public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'Nama' => 'required|string|max:255',
        'Deskripsi' => 'nullable|string',
        'Harga' => 'required|numeric|min:0',
        'Stock' => 'required|integer|min:0',
        'FotoProduk' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Mencari produk berdasarkan ID
    $product = Products::findOrFail($id);

    // Check if an image is uploaded
    if ($request->hasFile('FotoProduk')) {
        // Get the uploaded image file
        $image = $request->file('FotoProduk');

        // Generate a unique file name
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the public directory
        $image->move(public_path('images/products'), $imageName);

        // Set the image path in the product
        $product->FotoProduk = 'images/products/' . $imageName;
    }

    // Update data produk di database
    $product->update([
        'Nama' => $request->input('Nama'),
        'Deskripsi' => $request->input('Deskripsi'),
        'Harga' => $request->input('Harga'),
        'Stock' => $request->input('Stock'),
        'FotoProduk' => $product->FotoProduk, // Path gambar akan tetap sama jika tidak diperbarui
    ]);

    // Mengarahkan pengguna setelah penyimpanan sukses
    return redirect()->intended('/seller_page')->with('success', 'Produk berhasil diperbarui!');
}


}
