<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Item;
use LOJA\Model\Pedido;
use LOJA\Model\Carrinho;

class DAOPedido{

    public function cadastrar(Pedido $pedido, Carrinho $carrinho){
        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try{

            $con = $pdo->prepare(
                "INSERT INTO pedido
                    VALUES (default, :data_pedido, :frete, :dias, :fk_cliente)"
                    
            );
            $con->bindValue(":data_pedido", $pedido->getData());
            $con->bindValue(":frete", $pedido->getFrete());
            $con->bindValue(":dias", $pedido->getDias());
            $con->bindValue(":fk_cliente",$_SESSION['clienteid']);
            $con->execute();
            $lastId= $pdo->lastInsertId();
            $_SESSION['idpedido'] = $lastId;
            
            $con2 = $pdo->prepare(
                "INSERT INTO item
                    VALUES(:quantidade,:fk_pedido,:fk_produto)"
            );
            
            foreach($carrinho->getItems() as $item){
                
                $con2->bindValue(":fk_produto", $item->getProduto()->getId());
                $con2->bindValue(":fk_pedido", $lastId);
                $con2->bindValue(":quantidade", $item->getQuantidade());
                $con2->execute();
            }
            $pdo->commit();
            $_SESSION['carrinho'] = null;
            return "Pedido efetuado com sucesso";
        }catch(Exception $e){
            $pdo->rollback();
            return "Erro ao efetuar o pedido";
        }
    }

    public function listarPedidoCliente($idCliente){
        $sql="SELECT 
        pedido.pk_pedido,
        pedido.data_pedido,
        sum(produto.preco*item.quantidade) AS total
        
          FROM pedido INNER JOIN cliente
          ON pedido.fk_cliente = cliente.pk_cliente
          INNER JOIN item
          ON item.fk_pedido = pedido.pk_pedido
          INNER JOIN produto
          ON produto.pk_produto = item.pk_produto
          WHERE cliente.pk_cliente = :id
        GROUP BY pedido.pk_pedido";

    
          $con= Conexao::getInstance()->prepare($sql);
          $con->bindValue(":id",$idCliente);
          $con->execute();
          $lista = array();

          while($produto = $con->fetch(\PDO::FETCH_ASSOC)){
              $lista[] = $produto;
          }
          return $lista;

    }
    public function buscaPorId($id){

        $sql = "SELECT 
        pedido.data_pedido,
        pedido.frete,
        pedido.dias,
        sum(produto.preco*item.quantidade) AS total
        
          FROM pedido INNER JOIN cliente
          ON pedido.fk_cliente = cliente.pk_cliente
          INNER JOIN item
          ON item.fk_pedido = pedido.pk_pedido
          INNER JOIN produto
          ON produto.pk_produto = item.pk_produto
          WHERE pedido.pk_pedido = :id";

            $con = Conexao::getInstance()->prepare($sql);
            $con->bindValue(":id", $id);
            $con->execute();
            $obj = $con->fetch(\PDO::FETCH_ASSOC);

            $pedido = new Pedido();

            $pedido->setDias($obj['dias']);
            $pedido->setFrete($obj['frete']);
            //$pedido->setTotal($obj['total']);

            return $pedido;

    }
    public function buscarPedidoCliente($idPedido)
    {
        $sql = "SELECT 
        pedido.data_pedido,
        pedido.frete,
        pedido.dias,
        sum(produto.preco*item.quantidade) as total
        
          from pedido inner join cliente
          on pedido.fk_cliente = cliente.pk_cliente
          inner join item
          on item.fk_pedido = pedido.pk_pedido
          inner join produto
          on produto.pk_produto = item.pk_produto
          where pedido.pk_pedido = :id";

        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $idPedido);
        $con->execute();
        $obj = $con->fetch(\PDO::FETCH_ASSOC);

        $pedido = new Pedido();
        
        $pedido->setDias($obj['dias']);
        $pedido->setFrete($obj['frete']);
        $pedido->setTotal($obj['total']);
        
        return $pedido;
    }
    public function detalhaPedido($idPedido){
        $sql = "SELECT
        pedido.pk_pedido,
        pedido.data_pedido,
        pedido.dias,
        pedido.frete,
        SUM(produto.preco*item.quantidade) as total
        FROM pedido INNER JOIN cliente ON pedido.fk_cliente = cliente.pk_cliente

        INNER JOIN item 
        ON item.fk_pedido = pedido.pk_pedido

        INNER JOIN produto
        ON produto.pk_produto = item.pk_produto

        WHERE pedido.pk_pedido = :id";

        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id",$idPedido);
        $con->execute();
        $pedido = $con->fetch(\PDO::FETCH_ASSOC);

        

        return $pedido;
    }

    public function listaItens($idPedido){
        $sql = "SELECT * FROM `item`
        INNER JOIN produto
        ON produto.pk_produto = item.pk_produto
        WHERE fk_pedido = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id",$idPedido);
        $con->execute();
        $lista = array();

        while($pedido = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $pedido;
        }
        
        return $lista;

    }
}

    
?>