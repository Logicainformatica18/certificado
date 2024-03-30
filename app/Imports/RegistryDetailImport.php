<?php

namespace App\Imports;

use App\Models\RegistryDetail;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegistryDetailImport implements ToModel,WithHeadingRow
{
    protected  $registry_id;
    function __construct($registry_id) {
             $this->registry_id = $registry_id;        
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

    $existingStudent = User::where('email', $row['email'])->first();

        if (!$existingStudent) {
            return null;
        }
  $student_m   =    $existingStudent->roles_[0]["pivot"]->model_id;

  $registryDetailExisting = RegistryDetail::where('student_m',$student_m)->where('registry_id',$this->registry_id)->first();

    if($registryDetailExisting) {
    return null;
    }
  
       $registryDetail = new RegistryDetail([
            'registry_id'       => $this->registry_id,
            'student_t'     => 'App\Models\User',
            'student_m'     => $student_m,
            'student_r'     => '5'
        ]);

return $registryDetail;
        
       
   }
}
