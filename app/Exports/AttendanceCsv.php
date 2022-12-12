<?php

namespace App\Exports;

use App\Models\TimesheetsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttendanceCsv implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $condition = [];

    public function __construct(Request $request)
    {
        $this->condition = [
            'status' => 1,
            'sort' => 1,
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'office' => $request->input('office')
        ];
    }

    public function collection()
    {
        $attendance = new TimesheetsModel();

        $result = $attendance->selectAttendances($this->condition)
            ->select(
                'employees.last_name',
                'employees.first_name',
                'employees.id',
                'office_name',
                'timesheets.timekeeper_id',
                'timekeeping_at',
            );
        return $result->get();
    }

    public function headings(): array
    {
        return [
            'Last Name',
            'First Name',
            'ID',
            'Office',
            'Timekeeper',
            'DateTime',
        ];
    }
}
