<?php
namespace Repository {

    use Model\Comments;

    interface CommentRepository
    {
        function insert(Comments $comments): Comments;
        function findById(int $id): ?Comments;
        function findAll(): array;
    }

    class CommentRepositoryImp implements CommentRepository
    {
        public function __construct(private \PDO $connection)
        {

        }

        public function insert(Comments $comments): Comments
        {
            $sql = "insert into comments(email, comment) values (?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$comments->getEmail(), $comments->getComment()]);

            $id = $this->connection->lastInsertId();
            $comments->setId($id);

            return $comments;
        }

        public function findById(int $id): ?Comments
        {
            $sql = "select * from comments where id = ? ";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);

            if ($row = $statement->fetch()) {
                return new Comments(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            } else {
                return null;
            }
        }

        public function findAll(): array {
            $sql = "select * from comments";
            $statement = $this->connection->query($sql);
            
            $array = [];

            while($row = $statement->fetch()) {
                $array[] = new Comments(
                    id: $row["id"],
                    email: $row["email"],
                    comment: $row["comment"]
                );
            }
            return $array;
        }
    }
}