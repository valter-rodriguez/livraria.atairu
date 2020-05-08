<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas views
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/cadastro', 'HomeController@cadastro');
Route::get('/contato', 'HomeController@contato');
Route::get('/faq', 'HomeController@faq');
Route::get('/login', 'HomeController@login');
Route::get('/sobre', 'HomeController@sobre');
Route::post('/busca', 'HomeController@busca');

//Home: Views Editoras
Route::get('/alta', 'HomeController@alta');
Route::get('/rocco', 'HomeController@rocco');
Route::get('/ciadasletras', 'HomeController@ciadasletras');

//CRUD Usuários
Route::any('/conta', 'UserController@index')->name('conta.index');
Route::get('/conta/alterarConta', 'UserController@alterarConta')->name('conta.alteraConta');
Route::post('/conta/alterarConta', 'UserController@update')->name('conta.update');
Route::get('/conta/deletarConta', 'UserController@delete')->name('conta.delete');
Route::any('/auth/register', 'HomeController@index');

//CRUD Endereço
Route::any('/finalizaCadastro', 'EnderecoController@index')->name('cliente.index');
Route::post('/finalizaCadastro', 'EnderecoController@create')->name('cliente.create');

//CRUD Carrinho
Route::post('/carrinho/add/{id_produto}', 'CarrinhoController@insert'); //*CREATE: Adicionar item ao carrinho na tela do produto($id) (C)
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho'); //*READ: Pega todos os produtos do carrinho (R)
Route::patch('/carrinho/update/{id_cliente}/{id_produto}', 'CarrinhoController@update'); //* UPDATE: Quantidade do produto (U)
Route::delete('/carrinho/delete/{id_cliente}/{id_produto}', 'CarrinhoController@remove')->name('carrinho_delete'); //* DELETE: Produto no carrinho (D)


//CRUD Pedidos
Route::post('/pedidos/new', 'PedidoController@insert'); //*CREATE - Criar novo pedido
Route::get('/pedidos', 'PedidoController@index')->name('pedidos'); //*READ: Ver lista de pedidos do user
Route::get('/pedido/{id_pedido}', 'PedidoController@show'); //*READ: Ver pedido específico do user
Route::get('/pedido/update/{id_pedido}', 'PedidoController@update'); //*UPDATE: Página de atualização do pedido do user
Route::patch('/pedido/update/{id_pedido}/{id_produto}', 'PedidoController@put'); //*UDPATE: Atualizar pedido do user
Route::delete('/pedido/delete/{id_pedido}', 'PedidoController@delete'); //*DELETE: Deletar pedido do user


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Views do produto
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::any('/auth/register', 'HomeController@index');

//CRUD Produtos
Route::get('/admin/produto/', 'ProdutoController@admin')->name('admin');
Route::get('/admin/produto/create', 'ProdutoController@create');
Route::post('/admin/produto/insert', 'ProdutoController@insert');
Route::get('/admin/produto/{id}', 'ProdutoController@update');
Route::post('/admin/produto/{id}', 'ProdutoController@put');
Route::get('/admin/produto/excluir/{id}', 'ProdutoController@delete');
Route::post('/admin/produto/excluir/{id}', 'ProdutoController@remove');
Route::get('/produtos/categoria/{id}', 'ProdutoController@filtroCategoria');
