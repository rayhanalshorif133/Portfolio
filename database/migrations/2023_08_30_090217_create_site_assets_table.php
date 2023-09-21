<?php

use App\Models\SiteAsset;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_assets', function (Blueprint $table) {
            $table->id();
            $table->string('admin_favicon')->nullable();
            $table->string('site_favicon')->nullable();
            $table->string('admin_title')->nullable();
            $table->string('site_title')->nullable();
            $table->string('admin_logo')->nullable();
            $table->timestamps();
        });

        // insert default data
        $siteAsset = new SiteAsset();
        $siteAsset->admin_favicon = './assets/icons/favicon_32.png';
        $siteAsset->site_favicon = './assets/icons/favicon_32.png';
        $siteAsset->admin_title = 'Admin Title';
        $siteAsset->site_title = 'Site Title';
        $siteAsset->admin_logo = 'logo.png';
        $siteAsset->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_assets');
    }
};
