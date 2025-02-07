<?php

namespace Models;

class Debt extends DB
{
    public function storeDebt(string $full_name, int $amount, string $item, string $phone_number)
    {
        $query="INSERT INTO debts (full_name, amount, item, issue_date, due_date,phone_number, payment_status) 
                    VALUES (:full_name, :amount, :item, NOW(), :due_date, :phone_number, :payment_status)";
       $stmt=$this->conn->prepare($query);
       $stmt->execute([
           'full_name' => $full_name,
           'amount' => $amount,
           'item' => $item,
           'due_date' => date('Y-m-d'),
           'phone_number' => $phone_number,
           'payment_status' => 'paid' || 'unpaid'

       ]);
        if ($stmt->rowCount() === 0) {
            throw new \RuntimeException('Failed to save debt');
        }

        return true;


    }
    public function updateDebt(int $id, string $full_name, int $amount, string $item, string $phone_number)
    {
        $query = "UPDATE products 
                SET full_name = :full_name, 
                    amount = :amount,
                    item = :item,
                    issue_date = :issue_date,
                    due_date = :due_date,
                    payment_status = :payment_status
                WHERE id = :id";

        $stmt=$this->conn->prepare($query);
        $stmt->execute([
            'full_name' => $full_name,
            'amount' => $amount,
            'item' => $item,
            'issue_date' => date('Y-m-d'),
            'due_date' => date('Y-m-d'),
            'payment_status' => 'paid' || 'unpaid'
        ]);
        if ($stmt->rowCount() === 0) {
            throw new \RuntimeException('Failed to update debt');

        }
        return true;

    }

    public function deleteDebt(int $id){
        $query = "DELETE FROM debts WHERE id = :id";
        $stmt=$this->conn->prepare($query);
        $stmt->execute([
            'id' => $id

        ]);
        if ($stmt->rowCount() === 0) {
            throw new \RuntimeException('Failed to delete debt');

        }
        return true;
    }

}