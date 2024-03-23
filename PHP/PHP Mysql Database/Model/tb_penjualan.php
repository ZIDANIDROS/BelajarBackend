<?php 
namespace Model {
    class tb_penjualan {
        public function __construct(private ?int $id = null, private ?string $name = null, private ?string $address = null) {

        }

        public function getId(): ?int {
            return $this->id;
        }

        public function setId(?int $id): void {
            $this->id = $id;
        }

        public function getName(): ?string {
            return $this->name;
        }

        public function setName(?string $name): void {
            $this->name = $name;
        }

        public function getAddress(): ?string {
            return $this->address;
        }

        public function setAddress(?string $address): void {
            $this->address = $address;
        }
    }
}
