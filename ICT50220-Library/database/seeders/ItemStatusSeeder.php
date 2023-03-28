<?php

namespace Database\Seeders;

use App\Models\ItemStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedStatuses = [
            ['id'=>'1', 'status'=>'Being repaired', 'code'=>'REP', 'description'=>'Not available for loan as item being repaired',],
            ['id'=>'2', 'status'=>'Catalogue maintenance required', 'code'=>'CMR', 'description'=>'',],
            ['id'=>'3', 'status'=>'Check Item', 'code'=>'CI', 'description'=>'',],
            ['id'=>'4', 'status'=>'Claims Never Borrowed', 'code'=>'CNB', 'description'=>'',],
            ['id'=>'5', 'status'=>'Claims returned', 'code'=>'CR', 'description'=>'',],
            ['id'=>'6', 'status'=>'Damage Enquiry', 'code'=>'DE', 'description'=>'',],
            ['id'=>'7', 'status'=>'Damaged', 'code'=>'DAM', 'description'=>'',],
            ['id'=>'8', 'status'=>'Discarded', 'code'=>'DIS', 'description'=>'',],
            ['id'=>'9', 'status'=>'In-process', 'code'=>'INP', 'description'=>'',],
            ['id'=>'10', 'status'=>'In-transit', 'code'=>'INT', 'description'=>'',],
            ['id'=>'11', 'status'=>'Long overdue', 'code'=>'LOV', 'description'=>'',],
            ['id'=>'12', 'status'=>'Lost copy', 'code'=>'LOS', 'description'=>'',],
            ['id'=>'13', 'status'=>'Missing', 'code'=>'MSS', 'description'=>'',],
            ['id'=>'14', 'status'=>'Missing at Stocktake', 'code'=>'MAS', 'description'=>'',],
            ['id'=>'15', 'status'=>'Not for Loan', 'code'=>'NFL', 'description'=>'',],
            ['id'=>'16', 'status'=>'On Loan', 'code'=>'LOA', 'description'=>'Currently on load to a patron/member',],
            ['id'=>'17', 'status'=>'On Order', 'code'=>'ORD', 'description'=>'',],
            ['id'=>'18', 'status'=>'Reported lost', 'code'=>'RLS', 'description'=>'',],
            ['id'=>'19', 'status'=>'Write Off', 'code'=>'WO', 'description'=>'',],
            ['id'=>'20', 'status'=>'Available', 'code'=>'AVB', 'description'=>'Item is available for loan',],
        ];

        foreach ($seedStatuses as $itemStatus){
            ItemStatus::create($itemStatus);
        }
    }
}
