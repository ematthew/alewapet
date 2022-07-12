<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subscription;


class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // echo date('Y-m-d', strtotime("+30 days"));

        $date_now = date("Y-d-m");
        $sub = [
            [
                'fumugation_id'=> 300,
                'user_id'=> 1,
                'amount'=> 40000,
                'date_of_fumigation'=> '2022-08-01',
                'vendors_use'=> 'MONET CLEANING SERVICES LTD',
                'reg_no'=> rand(1,9),
                'cert_no'=> rand(0,5).Str::random(2),
                'reference'=> Str::random(10),
                'issue_date'=> $date_now,
                'expires_date'=> 'issue_date'. strtotime("+90 days"),

            ]
        ];
        foreach ($sub as $key => $value) {
            $already_exist = Subscription::where('issue_date', $value['issue_date'])->first(); 
            if ($already_exist == null) {
                $sub                          = new Subscription();
                $sub->fumugation_id           = $value['fumugation_id'];
                $sub->user_id                 = $value['user_id'];
                $sub->amount                  = $value['amount'];
                $sub->date_of_fumigation      = $value['date_of_fumigation'];
                $sub->vendors_use             = $value['vendors_use'];
                $sub->reg_no                  = $value['reg_no'];
                $sub->create_function         = $value['cert_no'];
                $sub->reference               = $value['reference'];
                $sub->issue_date              = $value['issue_date'];
                $sub->expires_date            = $value['expires_date'];
                $sub->save();
            }
        }
    }
}
