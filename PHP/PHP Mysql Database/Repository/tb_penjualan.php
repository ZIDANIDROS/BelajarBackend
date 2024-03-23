<?php 

namespace Repository{
    use Model\tb_penjualan;

    interface tb_penjualanRepository{
        function insert(Name $name) : Name;
        function findById(int $id): ?Name;
        function findAll() : array;
    }

    class Ntb_penjualanRepositoryImpl implements tb_penjualanRepository{
        public function __construct(private \PDO $connection){
            
        }
    }
}