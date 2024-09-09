<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function generateTest(Request $request)
    {
        $data = $request->all();
        Log::info($data); // Log data for debugging

        // Define the current year and date ranges based on the selected period
        $period = $data['period'];
        $year = now()->year;
        $startDate = null;
        $endDate = null;

        switch ($period) {
            case '1st Quarter':
                $startDate = "$year-01-01";
                $endDate = "$year-03-31";
                break;
            case '2nd Quarter':
                $startDate = "$year-04-01";
                $endDate = "$year-06-30";
                break;
            case '3rd Quarter':
                $startDate = "$year-07-01";
                $endDate = "$year-09-30";
                break;
            case '4th Quarter':
                $startDate = "$year-10-01";
                $endDate = "$year-12-31";
                break;
            case 'Bi-Annual':
                $startDate = "$year-01-01";
                $endDate = "$year-06-30";
                break;
            case 'Annual':
                $startDate = "$year-01-01";
                $endDate = "$year-12-31";
                break;
            default:
                break;
        }

        // Fetch activities based on the date range
        $activities = ($startDate && $endDate) ? Activity::whereBetween('activity_date', [$startDate, $endDate])->get() : collect();

        // Create a new PhpWord instance
        $phpWord = new PhpWord();

        // Add a new section to the document
        $section = $phpWord->addSection();

        // Add title
        $section->addText(
            'NORTHERN MINDANAO FOOD INNOVATION CENTER',
            ['bold' => true, 'size' => 14],
            ['align' => 'center']
        );

        $section->addText(
            'Accomplishment Report',
            ['bold' => true, 'size' => 12],
            ['align' => 'center']
        );

        $section->addTextBreak(1);

        // Table styling
        $tableStyle = [
            'borderSize' => 6,
            'borderColor' => '999999',
            'cellMargin' => 50,
            'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER
        ];
        $firstRowStyle = ['bgColor' => 'F2F2F2'];
        $cellStyle = ['valign' => 'center'];
        $fontStyle = ['bold' => true];
        $phpWord->addTableStyle('Accomplishment Table', $tableStyle, $firstRowStyle);
        $table = $section->addTable('Accomplishment Table');

        // Add header row
        $table->addRow();
        $table->addCell(4000, $cellStyle)->addText('Accomplished in the Quarter', $fontStyle);
        $table->addCell(4000, $cellStyle)->addText('Date Accomplished', $fontStyle);
        $table->addCell(4000, $cellStyle)->addText('Details or Photos', $fontStyle);

        // Add data rows
        foreach ($activities as $activity) {
            // Add a new row for each activity
            $table->addRow();

            // Add cells for the first row of data
            $cell = $table->addCell(4000);
            $cell->addText($activity->activity_name);
            $cell->addText($activity->images_title);
            $cell->addText($activity->images_desc);

            $table->addCell(4000)->addText($activity->activity_date); // Ensure correct date formatting
            $table->addCell(4000)->addText($activity->upload_images); // Assume this is a URL or image description
        }

        // Add the 'Others' field if provided
        if ($data['acc_others']) {
            $section->addTextBreak(1);
            $section->addText('Others:', ['bold' => true]);
            $section->addText($data['acc_others']);
        }

        // Set the filename for the Word document
        $fileName = 'Accomplishment_Form_' . time() . '.docx';

        // Save the Word document to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'PHPWord');
        $phpWord->save($tempFile, 'Word2007');

        // Return the Word document as a download
        return response()->download($tempFile, $fileName)->deleteFileAfterSend(true);
    }
}
