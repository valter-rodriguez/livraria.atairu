<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Pedido;
use App\Produto_pedido;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando pedido diferentes para o mesmo cliente
        $novoPedido1 = new Pedido();
        $novoPedido1->id_cliente = DB::table('users')->where('name', 'Admin')->value('id');
        $novoPedido1->status = 'pagamento';
        $novoPedido1->save();

        $novoPedido2 = new Pedido();
        $novoPedido2->id_cliente = DB::table('users')->where('name', 'Admin')->value('id');
        $novoPedido2->status = 'enviado';
        $novoPedido2->save();

        $novoPedido3 = new Pedido();
        $novoPedido3->id_cliente = DB::table('users')->where('name', 'Admin')->value('id');
        $novoPedido3->status = 'concluido';
        $novoPedido3->save();

        $novoPedido4 = new Pedido();
        $novoPedido4->id_cliente = DB::table('users')->where('name', 'Admin')->value('id');
        $novoPedido4->status = 'cancelado';
        $novoPedido4->save();

        //Adicionando produtos nesses pedidos
        $novoPedidoProduto1 = new Produto_pedido();
        $novoPedidoProduto1->id_pedido = '1';
        $novoPedidoProduto1->id_produto = DB::table('produto')->where('isbn', '9788520927823')->value('id_produto');
        $novoPedidoProduto1->nome = DB::table('produto')->where('isbn', '9788520927823')->value('nome');
        $novoPedidoProduto1->autor = DB::table('produto')->where('isbn', '9788520927823')->value('autor');
        $novoPedidoProduto1->quantidade = '1';
        $novoPedidoProduto1->preco = DB::table('produto')->where('isbn', '9788520927823')->value('preco');
        $novoPedidoProduto1->imagem = DB::table('produto')->where('isbn', '9788520927823')->value('imagem');
        $novoPedidoProduto1->save();

        $novoPedidoProduto1b = new Produto_pedido();
        $novoPedidoProduto1b->id_pedido = '1';
        $novoPedidoProduto1b->id_produto = DB::table('produto')->where('isbn', '9788594318237')->value('id_produto');
        $novoPedidoProduto1b->nome = DB::table('produto')->where('isbn', '9788594318237')->value('nome');
        $novoPedidoProduto1b->autor = DB::table('produto')->where('isbn', '9788594318237')->value('autor');
        $novoPedidoProduto1b->quantidade = '1';
        $novoPedidoProduto1b->preco = DB::table('produto')->where('isbn', '9788594318237')->value('preco');
        $novoPedidoProduto1b->imagem = DB::table('produto')->where('isbn', '9788594318237')->value('imagem');
        $novoPedidoProduto1b->save();

        $novoPedidoProduto2 = new Produto_pedido();
        $novoPedidoProduto2->id_pedido = '2';
        $novoPedidoProduto2->id_produto = DB::table('produto')->where('isbn', '9788547000646')->value('id_produto');
        $novoPedidoProduto2->nome = DB::table('produto')->where('isbn', '9788547000646')->value('nome');
        $novoPedidoProduto2->autor = DB::table('produto')->where('isbn', '9788547000646')->value('autor');
        $novoPedidoProduto2->quantidade = '1';
        $novoPedidoProduto2->preco = DB::table('produto')->where('isbn', '9788547000646')->value('preco');
        $novoPedidoProduto2->imagem = DB::table('produto')->where('isbn', '9788547000646')->value('imagem');
        $novoPedidoProduto2->save();

        $novoPedidoProduto3 = new Produto_pedido();
        $novoPedidoProduto3->id_pedido = '3';
        $novoPedidoProduto3->id_produto = DB::table('produto')->where('isbn', '9788576082675')->value('id_produto');
        $novoPedidoProduto3->nome = DB::table('produto')->where('isbn', '9788576082675')->value('nome');
        $novoPedidoProduto3->autor = DB::table('produto')->where('isbn', '9788576082675')->value('autor');
        $novoPedidoProduto3->quantidade = '1';
        $novoPedidoProduto3->preco = DB::table('produto')->where('isbn', '9788576082675')->value('preco');
        $novoPedidoProduto3->imagem = DB::table('produto')->where('isbn', '9788576082675')->value('imagem');
        $novoPedidoProduto3->save();

        $novoPedidoProduto4 = new Produto_pedido();
        $novoPedidoProduto4->id_pedido = '4';
        $novoPedidoProduto4->id_produto = DB::table('produto')->where('isbn', '9788525056009')->value('id_produto');
        $novoPedidoProduto4->nome = DB::table('produto')->where('isbn', '9788525056009')->value('nome');
        $novoPedidoProduto4->autor = DB::table('produto')->where('isbn', '9788525056009')->value('autor');
        $novoPedidoProduto4->quantidade = '4';
        $novoPedidoProduto4->preco = DB::table('produto')->where('isbn', '9788525056009')->value('preco');
        $novoPedidoProduto4->imagem = DB::table('produto')->where('isbn', '9788525056009')->value('imagem');
        $novoPedidoProduto4->save();
    }
}
