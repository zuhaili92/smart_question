<?php


use App\Folder;
use Illuminate\Database\Seeder;

class FolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$folders = array(
    		array('folder_name' => 'LAB'),
    		array('folder_name' => 'TUTORIAL'),
    		array('folder_name' => 'QUIZ'),
    		array('folder_name' => 'EXAM'),
    		array('folder_name' => 'TEST')
    		);

    	foreach ($folders as $folder) {
    		Folder::create($folder);
    	}
    }
}
