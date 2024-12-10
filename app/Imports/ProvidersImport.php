<?php

namespace App\Imports;

use App\Models\Provider;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProvidersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Provider([
            'business_name'      => $row['business_name'],
            'maternal_last_name' => $row['maternal_last_name'],
            'paternal_last_name' => $row['paternal_last_name'],
            'rut'                => $row['rut'],
            'address'            => $row['address'],
            'phone'              => $row['phone'],
            'email'              => $row['email'],
            'account_number'     => $row['account_number'],
            'bank_name'          => $row['bank_name'],
            'account_type'       => $row['account_type'],
            'status'             => strtolower($row['status']) === 'activo' ? 1 : 0, // Conversión
            'type'               => $row['type'],
        ]);
    }
}
