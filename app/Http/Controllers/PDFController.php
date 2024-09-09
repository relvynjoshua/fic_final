<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = $request->all();

        // Save data to the database
        $activity = Activity::create($data);

        // Log data for debugging
        Log::info('Saved Activity:', $data);

        // Retrieve the image data from the database
        $imageData = $activity->upload_images; // Assuming this column holds the image binary data

        // Define the path for the image
        $imagePath = 'images/activity_image_' . $activity->id . '.jpg'; // Adjust extension if needed

        // Save the image to a publicly accessible directory
        Storage::disk('public')->put($imagePath, $imageData);

        // Append the image path to the data array
        $data['image_path'] = asset('storage/' . $imagePath);

        // Generate PDF
        $pdf = PDF::loadView('pdf-template', $data);

        // Return PDF download
        return $pdf->download('Activity_Management_Form.pdf');
    }
}