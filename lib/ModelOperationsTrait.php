<?php
namespace lib;

trait ModelOperationsTrait
{
    use DatabaseTrait;

    public function create($table, $data): bool
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), '?'));
        $values = array_values($data);
        $types = str_repeat('s', count($values));

        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bind_param($types, ...$values);

        return $stmt->execute();
    }

    public function find($table, $id): bool|array|null
    {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($table, $data, $id): bool
    {
        $set = implode(", ", array_map(function ($key) {
            return "$key = ?";
        }, array_keys($data)));

        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $types .= 'i';  // for the `id` (INT type)
        $values[] = $id;

        $sql = "UPDATE $table SET $set WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bind_param($types, ...$values);

        return $stmt->execute();
    }

    public function findAll($table): array
    {
        $sql = "SELECT * FROM $table";
        $result = $this->connect()->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>
