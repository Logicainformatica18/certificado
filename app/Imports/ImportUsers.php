<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class ImportUsers implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       $user=  new User([
            'dni'    => $row['dni'],
                'names'     => $row['nombres'],
            'firstname'    => $row['paterno'],
            'lastname'    => $row['materno'],
            'email'    => $row['email'],
            'password'    => Hash::make($row['password']),
            'sex'    => substr($row['sexo'],0,1),
            'cellphone'    => $row['celular'],
        ]);
        return $user->assignRole($row['rol']);
    }
}
