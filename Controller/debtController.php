<?php

namespace Controller;
use Models\Debt;

class debtController
{
    private $debt;
    public function __construct(Debt $debt){
        $this->debt =new Debt();
    }
public function debt(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $full_name = $_POST['full_name'];
            $phone_number = $_POST['phone_number'];
            $amount = $_POST['amount'];
            $item = $_POST['item'];
            $issue_date = $_POST['issue_date'];
            $due_date = $_POST['due_date'];
            $payment_status = $_POST['payment_status'];

            if($full_name && $phone_number && $amount && $item && $issue_date && $due_date && $payment_status){
                $this->debt->storeDebt($full_name,$phone_number,$amount,$item);
                header('Location: /dashboard/debt');

            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
            Barcha maydonlarni to‘ldiring!
          </div>
          <div class='add-another' style='text-align: center; margin-top: 20px;'>
              <button type='button' onclick=\"document.getElementById('productForm').reset(); document.getElementById('name').focus();\" style='padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;'>
                  Yana Mahsulot Qo'shish
              </button>
          </div>";
            }


        }

    }
    public function debtUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $amount = $_POST['amount'];
            $item = $_POST['item'];
            $issue_date = $_POST['issue_date'];
            $due_date = $_POST['due_date'];
            $payment_status = $_POST['payment_status'];


            if ($id && $full_name && $amount && $item && $issue_date && $due_date && $payment_status) {
                $this->debt->updateDebt($id, $full_name, $amount, $item, $issue_date, $due_date, $payment_status);
                header('Location: /dashboard/debt');
                throw new \RuntimeException('Failed to update debt');

            }
            return true;
        }
    }

    public function debtDelete(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $this->debt->deleteDebt($id);
            header('Location: /dashboard/debt');
            throw new \RuntimeException('Failed to delete debt');
        }
    return true;
    }


}