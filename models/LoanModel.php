<?php
namespace models;

use lib\ModelOperationsTrait;

class LoanModel
{
    use ModelOperationsTrait;

    protected $table = 'loans';

    public function createLoan($user_id, $product_id, $status, $due_to): bool
    {
        $data = [
            'user_id' => $user_id,
            'product_id' => $product_id,
            'status' => $status,
            'due_to' => $due_to
        ];

        return $this->create($this->table, $data);
    }

    public function updateLoanStatus($id, $status)
    {
        return $this->update($this->table, ['status' => $status], $id);
    }
}

?>
