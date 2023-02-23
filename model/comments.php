<?php
namespace Model {
    class Comments
    {
        public function __construct(
            private ?int $id = null,
            private ?string $email = null,
            private ?string $comment = null
        )
        {
            
        }
        public function getId(): int {
            return $this->id;
        }
        public function getEmail(): string {
            return $this->email;
        }
        public function getComment(): string {
            return $this->comment;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function setEmail($email): void {
            $this->email = $email;
        }

        public function setcomment($comment): void {
            $this->comment = $comment;
        }
    }
}