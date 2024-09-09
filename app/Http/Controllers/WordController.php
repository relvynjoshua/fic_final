<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Shared\Html;
use Illuminate\Support\Facades\Log;
use App\Models\Activity;

class WordController extends Controller
{
    public function generateWord(Request $request)
    {
        $data = $request->all();

        // Log data for debugging
        Log::info($data);

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

        // // Add accomplishment type
        // $section->addText('Strategic Performance Management System:', ['bold' => true]);
        // $section->addText($data['accomplishment_type'] ?? '');

        // $section->addTextBreak(1);

        // Create a table
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

        // Add row and cells
        $table->addRow();
        $table->addCell(4000, $cellStyle)->addText('Accomplished in the Quarter', $fontStyle);
        $table->addCell(4000, $cellStyle)->addText('Date Accomplished', $fontStyle);
        $table->addCell(4000, $cellStyle)->addText('Details or Photos', $fontStyle);

        // Add data row
        $table->addRow();
        $table->addCell(4000)->addText($data['period'] ?? '');
        $table->addCell(4000)->addText($data['acc_others'] ?? '');
        $table->addCell(4000)->addText($data['period'] ?? '');

        // Set the filename for the Word document
        $fileName = 'Accomplishment_Form.docx';

        // Save the Word document to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'PHPWord');
        $phpWord->save($tempFile, 'Word2007');

        // Return the Word document as a download
        return response()->download($tempFile, $fileName)->deleteFileAfterSend(true);
    }

}