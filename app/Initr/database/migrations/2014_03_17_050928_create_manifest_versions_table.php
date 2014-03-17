<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManifestVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manifest_versions', function($table) {
			$table->increments('id');
			$table->integer('manifest_id');
			$table->string('version_name');
			$table->text('json_file');
			$table->string('base_url');
			$table->string('commit_hash');
			$table->text('compiled_scripts')->nullable();
			$table->text('compiled_response')->nullable();
			// $table->string('committed_at');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('manifest_versions');
	}

}
