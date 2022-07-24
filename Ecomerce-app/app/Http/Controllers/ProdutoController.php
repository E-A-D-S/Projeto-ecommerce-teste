<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Support\Facades\Redis;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $data = [];


        //buscar todos os produtos
        //select *from produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

        public function categoria($idcategoria = 0){
            $data = [];

            //SELECT * FROM categorias
            $listaCategorias = Categoria::all();

            //SELECT * FROM produtos limit 5
            $queryProduto = Produto::limit(5);

            if($idcategoria != 0){
                //where categoria_id = $idcategoria
                $queryProduto->where("categoria_id", $idcategoria);
            }

            $listaProdutos = $queryProduto->get();

            $data["lista"] = $listaProdutos;
            $data["listaCategoria"] = $listaCategorias;
            $data["idcategoria"] = $idcategoria;
            return view("categoria", $data);
        }


        public function adicionarCarrinho($idProduto = 0, Request $request){
            //Buscar o produto pelo Id
            $prod = Produto::find($idProduto);

            if($prod){
                //Encontrou um produto

                //buscar da sessão carrinho atual
                $carrinho = session ('cart', []);

                array_push($carrinho, $prod);
                session(['cart' => $carrinho]);
            }
            return redirect()->route('home');
        }

        public function verCarrinho(Request $request) {
            $carrinho = session('cart', []);
            $data = ['cart' => $carrinho];
            
            return view('carrinho', $data);
        }

}