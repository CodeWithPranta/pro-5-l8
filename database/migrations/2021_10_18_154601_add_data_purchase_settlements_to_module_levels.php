<?php

use Illuminate\Database\Migrations\Migration;

class AddDataPurchaseSettlementsToModuleLevels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('module_levels')->insert([
            ['id' => 79, 'value' => 'advanced_purchase_settlements', 'description' => 'Liquidaciones de compra', 'module_id' => 3],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::table('module_levels')->where('value', 'advanced_purchase_settlements')->delete();

    }

}
