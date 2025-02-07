<?php

namespace Controller;
use Models\Debt;

class debtController
{
    private $debt;
    public function __construct(){
        $this->debt =new Debt();
    }
    public function debt()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $full_name = trim($_POST['full_name']);
            $phone_number = trim($_POST['phone_number']);
            $amount = intval($_POST['amount']);
            $item = trim($_POST['item']);
            $issue_date = trim($_POST['issue_date']);
            $due_date = trim($_POST['due_date']);
            $payment_status = trim($_POST['payment_status']);

            if (!empty($full_name) && !empty($phone_number) && !empty($amount) && !empty($item) && !empty($issue_date) && !empty($due_date) && !empty($payment_status)) {
                try {
                    $this->debt->storeDebt($full_name, $amount, $item, $phone_number, $issue_date, $due_date, $payment_status);
                    header('Location: /dashboard/debt');
                    exit;
                } catch (Exception $e) {
                    echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                        Ma'lumotlar saqlanmadi: {$e->getMessage()}
                    </div>";
                }
            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                  Barcha maydonlarni to‘ldiring!
                  </div>
                  <div class='add-another' style='text-align: center; margin-top: 20px;'>
                      <button type='button' onclick=\"document.getElementById('productForm').reset(); document.getElementById('name').focus();\" 
                      style='padding: 10px 20px; font-size: 16px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;'>
                          Yana Mahsulot Qo'shish
                      </button>
                  </div>";
            }
        }
    }

    public function debtUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);
            $full_name = trim($_POST['full_name']);
            $amount = intval($_POST['amount']);
            $item = trim($_POST['item']);
            $issue_date = trim($_POST['issue_date']);
            $due_date = trim($_POST['due_date']);
            $payment_status = trim($_POST['payment_status']);

            if (!empty($id) && !empty($full_name) && $amount > 0 && !empty($item) && !empty($issue_date) && !empty($due_date) && !empty($payment_status)) {
                try {
                    $this->debt->updateDebt($id, $full_name, $amount, $item, $issue_date, $due_date, $payment_status);
                    header('Location: /dashboard/debt');
                    exit;
                } catch (\Exception $e) {
                    echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                    Yangilashda xatolik: {$e->getMessage()}
                </div>";
                }
            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                Barcha maydonlarni to‘ldiring!
            </div>";
            }
        }
    }

    public function debtDelete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = trim($_POST['id']);

            if (!empty($id)) {
                try {
                    $this->debt->deleteDebt($id);
                    header('Location: /dashboard/debt');
                    exit;
                } catch (\Exception $e) {
                    echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                    O‘chirishda xatolik: {$e->getMessage()}
                </div>";
                }
            } else {
                echo "<div style='padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 10px; margin-top: 20px; text-align: center; font-size: 18px; font-weight: bold;'>
                Qayta ishlov berish uchun ID bo‘sh bo‘lishi mumkin emas!
            </div>";
            }
        }
    }



}