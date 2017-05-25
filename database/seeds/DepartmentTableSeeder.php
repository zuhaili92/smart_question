<?php


use App\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$departments = array(
    		array('department_name' => 'JABATAN TEKNOLOGI MAKLUMAT'),
    		array('department_name' => 'JABATAN KEJURUTERAAN ELEKTRONIK')
    		);

    	foreach ($departments as $department) {
    		Department::create($department);
    	}
    	
    }
}
