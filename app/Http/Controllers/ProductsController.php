<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags_all = DB::table('tags')
        ->orderBy('id', 'asc')
        ->get();
        return view('products.form', compact('tags_all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["name_prod" => "required", "tags" => "required","qtd"=>"required","price"=>"required"]);
        $product = Product::where('name_prod', '=', $request->name_prod)->first();

        if (!isset($product))
            Product::create(["name_prod" => $request->name_prod,"qtd" => $request->qtd,"price" => $request->price]);

        $product = Product::where('name_prod', '=', $request->name_prod)->first();

        $product->tags()->attach($request->tags);
        // ProductTag::create(['product_id' => $product->id, 'tag_id' => $value]);

        return redirect()->route('products.index')->with('message', 'Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $visits = $product->visits + 1;
        $product->update(["visits" => $visits]);
        return view('products.details',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $tags_prod = $product->tags;
        $tags_all = DB::table('tags')
            ->orderBy('id', 'asc')
            ->get();
        return view('products.form', compact('product', 'tags_prod', 'tags_all'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate(["name_prod" => "required", "tags" => "required","qtd"=>"required","price"=>"required"]);

        $product = Product::find($id);
        $product->update(["name_prod" => $request->name_prod,"qtd" => $request->qtd,"price" => $request->price]);

        $product->tags()->sync($request->tags);
        return redirect()->route('products.index')->with('message', 'Produto alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Produto excluido com sucesso');
    }

    public function productsItens(){
        $products =  Product::paginate(5);
        return view('products.itens',compact('products'));
    }
}
// retorna as tags vinculadas aquele produto
// SELECT tags.name , tags.id FROM `products` JOIN product_tags n ON n.product_id = ? JOIN tags ON n.tag_id = tags.id ORDER BY tags.id