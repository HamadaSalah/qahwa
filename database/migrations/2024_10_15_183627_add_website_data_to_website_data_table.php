<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWebsiteDataToWebsiteDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('website_data', function (Blueprint $table) {
            $table->text('shop_now')->nullable();
            $table->text('private_dining')->nullable();
            $table->text('private_img')->nullable();
            $table->text('about_page_1')->nullable();
            $table->text('about_page_1_img')->nullable();
            $table->text('about_page_2')->nullable();
            $table->text('about_page_2_img')->nullable();
            $table->text('mission')->nullable();
            $table->text('purpose')->nullable();
            $table->text('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('website_data', function (Blueprint $table) {
            $table->dropColumn('shop_now');
            $table->dropColumn('private_dining');
            $table->dropColumn('private_img');
            $table->dropColumn('about_page_1');
            $table->dropColumn('about_page_1_img');
            $table->dropColumn('about_page_2');
            $table->dropColumn('about_page_2_img');
            $table->dropColumn('mission');
            $table->dropColumn('purpose');
            $table->dropColumn('location');
        });
    }
}
