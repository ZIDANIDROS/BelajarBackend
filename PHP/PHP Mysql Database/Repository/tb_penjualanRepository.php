<?php 

namespace Repository{
    use Model\tb_penjualan;

    interface tb_penjualanRepository{
        function insert(tb_penjualan $name) : tb_penjualan;
        function findById(int $id): ?tb_penjualan;
        function findAll() : array;
    }

    class tb_penjualanRepositoryImpl implements tb_penjualanRepository{
        public function __construct(private \PDO $connection){
            
        }

        function insert(tb_penjualan $name): tb_penjualan{
            $sql = "INSERT INTO tb_penjualan(alamat,Name) VALUES(?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->excecute([$name->getAddress(), $name->getName()]);

            $id = $this->connection->lastInsertId();
            $name->setId($id);

            return $name;
        }

        public function findById(int $id): ?tb_penjualan{
            $sql = "SELECT * FROM tb_penjualan where id = ?";
            $statment = $this->connection->prepare($sql);
            $statment->execute([$id]);

            if ($row = $statment->fetch()) {
                return new tb_penjualan(
                    id:$row["ID"],
                    name:$row["Name"],
                    alamat:$row["alamat"]
                );
            } else {
                return null;
            }
        }
        
        public function findAll(): array{
            $sql = "SELECT * FROM tb_penjualan";
            $statment =$this->connection->query($sql);

            $array = [];
            while ($row = $statment->fetch()) {
                $array[] = new tb_penjualan(
                    id:$row["ID"],
                    name:$row["Name"],
                    alamat:$row["alamat"]
                );
            }
        }
    }
}