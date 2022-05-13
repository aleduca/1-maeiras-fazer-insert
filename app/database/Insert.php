<?php
namespace app\database;

class Insert
{
    private string $table;

    public function setTable(string $table)
    {
        $this->table = $table;
    }

    public function create(array $data)
    {
        try {
            $connection = Connection::getConnection();

            $sql = "insert into {$this->table}(";
            $sql.= implode(',', array_keys($data)).') values(';
            $binds = join(',', array_map(fn ($field) => ':'.$field, array_keys($data)));

            $sql.=$binds.')';

            $prepare = $connection->prepare($sql);
            return $prepare->execute($data);
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
}
